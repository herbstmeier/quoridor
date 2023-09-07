<?php
include '../config/config.php';
use Slim\Factory\AppFactory;
use DI\Container;
require '../src/UserController.php';
require __DIR__ . '/../vendor/autoload.php';
require_once '../src/Database.php';

$container = new Container();
AppFactory::setContainer($container); // Set Slim's default container to use yours
$container->set('UserController', function() {
    return new \App\Controller\UserController(Database::getInstance());
});

$app = AppFactory::create();
require_once '../src/router.php';

$app->run();
?>