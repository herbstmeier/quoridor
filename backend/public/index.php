<?php
include '../config/config.php';
use Slim\Factory\AppFactory;
require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

require '../src/router.php';

$app->run();
?>