<?php

namespace App\Controller;

use Database;
use Firebase\JWT\JWT;
use PDO;
use PDOException;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'Database.php';

class UserController
{
    public function getAllUsers(Request $request, Response $response, $args)
    {
        // Controller logic for getting all users
        $response->getBody()->write('all users');
        return $response->withStatus(200);
    }

    public function getUserById(Request $request, Response $response, $args)
    {
        // Controller logic for getting a user by ID
    }

    public function updateUser(Request $request, Response $response, $args)
    {
        // Controller logic for updating user data
    }

    public function loginUser(Request $request, Response $response, $args)
    {
        // Get the request data (e.g., JSON or form data)
        $data = $request->getParsedBody();

        // Check if both username and password are provided
        if (empty($data['username']) || empty($data['password'])) {
            // Handle missing username or password
            $responseBody = json_encode(['error' => 'Username and password are required.']);
            $response->getBody()->write($responseBody);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(400); // Bad Request status code
        }

        // Retrieve user data from the database based on the provided username
        $username = $data['username'];

        // Get the secret key from the configuration file
        require 'config.php'; // Assuming 'config.php' is in the same directory

        $sql = 'SELECT * FROM users WHERE username = :username';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username);

        try {
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                // User not found, return an error response
                $responseBody = json_encode(['error' => 'User not found']);
                $response->getBody()->write($responseBody);
                return $response
                    ->withHeader('Content-Type', 'application/json')
                    ->withStatus(404); // Not Found status code
            }

            // Verify the password using the secret key from the configuration file
            $password = $data['password'];
            $hashedPassword = $user['password'];
            $salt = $user['salt'];

            // Check if the password is correct
            if (password_verify($password . $salt, $hashedPassword)) {
                // Password is correct, user is logged in

                // Generate a JWT token
                $token = $this->generateToken($user);

                // Return the token to the client
                $responseBody = json_encode(['token' => $token]);
                $response->getBody()->write($responseBody);
                return $response
                    ->withHeader('Content-Type', 'application/json')
                    ->withStatus(200); // OK status code
            } else {
                // Password is incorrect, return an error response
                $responseBody = json_encode(['error' => 'Incorrect password']);
                $response->getBody()->write($responseBody);
                return $response
                    ->withHeader('Content-Type', 'application/json')
                    ->withStatus(401); // Unauthorized status code
            }
        } catch (PDOException $e) {
            // Handle database errors and return an error response
            $responseBody = json_encode(['error' => 'Login failed']);
            $response->getBody()->write($responseBody);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(500); // Internal Server Error status code
        }
    }

    public function registerUser(Request $request, Response $response, $args)
    {
        // Get the request data (e.g., JSON or form data)
        $data = $request->getParsedBody();

        // Validate user input (e.g., username, password, etc.)
        $validationErrors = $this->validateRegistrationData($data);

        if (!empty($validationErrors)) {
            // Handle validation errors and return a response with error messages
            $responseBody = json_encode(['errors' => $validationErrors]);
            $response->getBody()->write($responseBody);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(400); // Bad Request status code
        }

        // Generate a random salt
        $salt = bin2hex(random_bytes(16)); // Adjust the length as needed

        // Hash the user's password with the generated salt
        $hashedPassword = password_hash($data['password'] . $salt, PASSWORD_DEFAULT);

        // Set the initial boardHue to 22
        $boardHue = 22;

        // Get the database connection from the Database class
        $pdo = Database::getInstance();

        // Insert user data into the database using the obtained PDO instance
        $sql = 'INSERT INTO users (username, themeId, boardHue, password, salt) VALUES (:username, :themeId, :boardHue, :password, :salt)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $data['username']);
        $stmt->bindParam(':themeId', $data['themeId']);
        $stmt->bindParam(':boardHue', $boardHue);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':salt', $salt);

        try {
            $stmt->execute();
            $lastInsertedUserId = $pdo->lastInsertId();
        } catch (PDOException $e) {
            // Handle database errors and return an error response
            $responseBody = json_encode(['error' => 'Failed to register user']);
            $response->getBody()->write($responseBody);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(500); // Internal Server Error status code
        }

        // Registration successful, return a success response
        // Generate a JWT token
        $token = $this->generateToken(['userId' => $lastInsertedUserId, 'username' => $data['username']]);

        // Return the token to the client
        $responseBody = json_encode(['token' => $token]);
        $response->getBody()->write($responseBody);
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200); // OK status code
    }


    public function logoutUser(Request $request, Response $response, $args)
    {
        // Verify the JWT token using the verifyToken function
        $token = $this->verifyToken($request, $response, $args);

        // If token verification fails, the verifyToken function will handle the response
        if ($token === false) {
            return $response; // Early return if verification fails
        }

        // Add the token to the blacklist
        $this->addToTokenBlacklist($token);

        // Respond with a success message
        $responseBody = json_encode(['message' => 'Logout successful']);
        $response->getBody()->write($responseBody);
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200); // OK status code
    }


    public function verifyToken(Request $request, Response $response, $args)
    {
        // Get the JWT token from the request (e.g., from headers or cookies)
        $token = $this->getTokenFromRequest($request);

        // Check if a token was provided
        if (!$token) {
            // Handle the case where no token is provided
            $responseBody = json_encode(['error' => 'No token provided']);
            $response->getBody()->write($responseBody);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(400); // Bad Request status code
        }

        // Check if the token is in the blacklist
        if ($this->isTokenBlacklisted($token)) {
            // Token is blacklisted, handle accordingly
            $responseBody = json_encode(['error' => 'Token is blacklisted']);
            $response->getBody()->write($responseBody);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(401); // Unauthorized status code
        }

        // Verify the token's signature and claims using your JWT library (e.g., firebase/php-jwt)
        try {
            $decodedToken = JWT::decode($token, SECRET_KEY, );
        } catch (\Exception $e) {
            // Handle token verification error
            $responseBody = json_encode(['error' => 'Invalid token']);
            $response->getBody()->write($responseBody);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(401); // Unauthorized status code
        }

        // Check the token's expiration time (exp claim)
        $expirationTime = $decodedToken->exp;
        if (time() >= $expirationTime) {
            // Token has expired, handle accordingly
            $responseBody = json_encode(['error' => 'Token has expired']);
            $response->getBody()->write($responseBody);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(401); // Unauthorized status code
        }

        // Token is valid; continue processing the request
        // You can access claims from $decodedToken (e.g., $decodedToken->userId)
        // ...

        return $response;
    }

    private function addToTokenBlacklist($token)
    {
        try {
            // Get a database connection instance using the Database class
            $db = Database::getInstance();

            // Prepare an SQL statement to insert the token and expiration time
            $stmt = $db->prepare("INSERT INTO token_blacklist (token, expiration) VALUES (:token, NOW())");

            // Bind the token value to the SQL statement
            $stmt->bindParam(':token', $token, PDO::PARAM_STR);

            // Execute the SQL statement to insert the token
            $stmt->execute();
        } catch (PDOException $e) {
            // Handle any database connection or query errors here
            // You can log the error or return an error response
            // For example:
            die("Database Error: " . $e->getMessage());
        }
    }

    private function isTokenBlacklisted($token)
    {
        try {
            // Get a database connection instance using the Database class
            $db = Database::getInstance();

            // Prepare an SQL statement to check if the token exists in the token_blacklist table
            $stmt = $db->prepare("SELECT COUNT(*) FROM token_blacklist WHERE token = :token");

            // Bind the token value to the SQL statement
            $stmt->bindParam(':token', $token, PDO::PARAM_STR);

            // Execute the SQL statement
            $stmt->execute();

            // Fetch the result (count of matching tokens)
            $count = $stmt->fetchColumn();

            // If count is greater than zero, the token is blacklisted
            return $count > 0;
        } catch (PDOException $e) {
            // Handle any database connection or query errors here
            // You can log the error or return an error response
            // For example:
            die("Database Error: " . $e->getMessage());
        }
    }


    private function validateRegistrationData($data)
    {
        $errors = [];

        // Validate username
        if (empty($data['username'])) {
            $errors['username'] = 'Username is required.';
        } elseif (strlen($data['username']) < 3 || strlen($data['username']) > 30) {
            $errors['username'] = 'Username must be between 3 and 30 characters.';
        }

        // Validate password
        if (empty($data['password'])) {
            $errors['password'] = 'Password is required.';
        } elseif (strlen($data['password']) < 4 || strlen($data['password']) > 50) {
            $errors['password'] = 'Password must be between 4 and 50 characters.';
        } elseif (!preg_match('/[a-z]/', $data['password'])) {
            $errors['password'] = 'Password must include at least one lowercase letter.';
        } elseif (!preg_match('/[A-Z]/', $data['password'])) {
            $errors['password'] = 'Password must include at least one uppercase letter.';
        } elseif (!preg_match('/[0-9]/', $data['password'])) {
            $errors['password'] = 'Password must include at least one number.';
        } elseif (!preg_match('/[^a-zA-Z0-9]/', $data['password'])) {
            $errors['password'] = 'Password must include at least one special character.';
        }

        return $errors;
    }

    // Function to generate a JWT token
    private function generateToken($user)
    {
        // Get the user data for token payload
        $payload = [
            'userId' => $user['userId'],
            'username' => $user['username'],
        ];

        // Get the secret key from the configuration file
        require '../config/config.php';

        // Encode the payload using the secret key
        $token = JWT::encode($payload, SECRET_KEY, 'HS256');

        return $token;
    }

    private function getTokenFromRequest(Request $request)
    {
        // Check if the token is provided in the request headers
        $token = $request->getHeaderLine('Authorization');

        // If the token is not in the headers, check if it's in the request cookies or other locations
        if (empty($token)) {
            // Check cookies, query parameters, or any other locations where the token might be sent
            // For example, you might look for a cookie named 'auth_token' or a query parameter named 'token'
            $token = $request->getCookieParam('auth_token'); // Example for cookies
            // $token = $request->getQueryParam('token'); // Example for query parameters
        }

        // Return the extracted token, which may be empty if not found
        return $token;
    }
}
