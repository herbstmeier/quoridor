<?php
use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app->group('/api', function (RouteCollectorProxy $group) {
    // User routes
    $group->get('/user', UserController::class . ':getAllUsers');
    $group->get('/user/{id}', UserController::class . ':getUserById');
    $group->put('/user/{id}', UserController::class . ':updateUser');
    $group->post('/user/login', UserController::class . ':loginUser');
    $group->post('/user/register', UserController::class . ':registerUser');
    $group->post('/user/logout', UserController::class . ':logoutUser');
})->add(function (Request $request, Response $response, $next) use ($container) {
    // Middleware for resolving controller dependencies
    $request = $request->withAttribute('container', $container);
    return $next($request, $response);
});


?>