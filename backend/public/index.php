<?php
include '../config/config.php';
use Slim\Factory\AppFactory;
use DI\Container;
use App\Controller\UserController;
require __DIR__ . '/../vendor/autoload.php';

$container = new Container();
$container->set(UserController::class, function ($container) {
    return new UserController();
});

$app = AppFactory::create();
$app->setContainer($container);

require_once '../src/router.php';

$app->run();
?>