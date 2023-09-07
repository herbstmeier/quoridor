<?php
include '../config/config.php';
use Slim\Factory\AppFactory;
use DI\Container;
use App\Controller\UserController;
require __DIR__ . '/../vendor/autoload.php';

$container = new Container();
AppFactory::setContainer($container); // Set Slim's default container to use yours
$container->set('UserController', \DI\create(UserController::class));

$app = AppFactory::create();
require_once '../src/router.php';

$app->run();
?>