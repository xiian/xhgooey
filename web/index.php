<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

require(__DIR__ . '/../config/dev.php');

require(__DIR__ . '/../src/controllers.php');

$app->run();

