<?php
/** @var \Silex\Application $app */

require(__DIR__ . '/prod.php');

// Debug mode
$app['debug'] = true;

$app->register(new Sorien\Provider\PimpleDumpProvider());

return $app;
