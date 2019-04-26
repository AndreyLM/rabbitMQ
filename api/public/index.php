<?php declare( strict_types = 1 );

use Api\Http\Action;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$config = require 'config/config.php';
// $container = new \Slim\Container($config);
$app = new \Slim\App($config);

$app->get('/',  Action\HomeAction::class);

$app->run();

