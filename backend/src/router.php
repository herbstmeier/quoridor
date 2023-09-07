<?php
use Slim\Routing\RouteCollectorProxy;
use UserController; // Import the UserController class

$app->group('/api', function (RouteCollectorProxy $group) use ($container) {
    // User routes
    $group->get('/user', UserController::class . ':getAllUsers');
    $group->get('/user/{id}', UserController::class . ':getUserById');
    $group->put('/user/{id}', UserController::class . ':updateUser');
    $group->post('/user/login', UserController::class . ':loginUser');
    $group->post('/user/register', UserController::class . ':registerUser');
    $group->post('/user/logout', UserController::class . ':logoutUser');
});

?>