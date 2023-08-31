<?php

namespace App\Controller;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'Database.php';

class UserController
{
    private $container;

    // constructor receives container instance
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getAllUsers(Request $request, Response $response, $args)
    {
        // Controller logic for getting all users
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
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(400) // Bad Request status code
                ->write($responseBody);
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
                return $response
                    ->withHeader('Content-Type', 'application/json')
                    ->withStatus(404) // Not Found status code
                    ->write($responseBody);
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
                return $response
                    ->withHeader('Content-Type', 'application/json')
                    ->withStatus(200) // OK status code
                    ->write($responseBody);
            } else {
                // Password is incorrect, return an error response
                $responseBody = json_encode(['error' => 'Incorrect password']);
                return $response
                    ->withHeader('Content-Type', 'application/json')
                    ->withStatus(401) // Unauthorized status code
                    ->write($responseBody);
            }
        } catch (\PDOException $e) {
            // Handle database errors and return an error response
            $responseBody = json_encode(['error' => 'Login failed']);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(500) // Internal Server Error status code
                ->write($responseBody);
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
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(400) // Bad Request status code
                ->write($responseBody);
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
        } catch (\PDOException $e) {
            // Handle database errors and return an error response
            $responseBody = json_encode(['error' => 'Failed to register user']);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(500) // Internal Server Error status code
                ->write($responseBody);
        }

        // Registration successful, return a success response
        // Generate a JWT token
        $token = $this->generateToken(['userId' => $lastInsertedUserId, 'username' => $data['username']]);

        // Return the token to the client
        $responseBody = json_encode(['token' => $token]);
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200) // OK status code
            ->write($responseBody);
    }


    public function logoutUser(Request $request, Response $response, $args)
    {
        // Controller logic for logging out the user
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
}
