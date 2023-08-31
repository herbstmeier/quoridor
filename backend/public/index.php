<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/{route:.+}', function (Request $request, Response $response, $args) {
    // Retrieve the requested URL from the request object
    $url = $request->getUri()->getPath();

    // You can also return a JSON response if needed
    $response->getBody()->write(json_encode(["url" => $url]));

    return $response->withHeader('Content-Type', 'application/json');
});

$app->run();
?>