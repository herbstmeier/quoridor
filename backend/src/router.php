<?php

use Slim\Routing\RouteCollectorProxy;

// Include your controller classes
require_once 'UserController.php';

$app->group('/api', function (RouteCollectorProxy $group) {
    // User routes
    $group->get('/user', 'UserController:getAllUsers');
    $group->get('/user/{id}', 'UserController:getUserById');
    $group->put('/user/{id}', 'UserController:updateUser');
    $group->post('/user/login', 'UserController:loginUser');
    $group->post('/user/register', 'UserController:registerUser');
    $group->post('/user/logout', 'UserController:logoutUser');

    // Define more routes and map them to other controllers as needed
});
