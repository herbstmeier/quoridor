<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'Database.php';

class UserController
{
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
        // Controller logic for logging in a user
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
        } catch (\PDOException $e) {
            // Handle database errors and return an error response
            $responseBody = json_encode(['error' => 'Failed to register user']);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(500) // Internal Server Error status code
                ->write($responseBody);
        }

        // Registration successful, return a success response
        $responseBody = json_encode(['message' => 'Registration successful']);
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201) // Created status code
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
}