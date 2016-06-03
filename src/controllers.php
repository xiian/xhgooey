<?php
/** @var \Silex\Application $app */

$app->get(
    '/',
    function () use ($app) {
        return $app['twig']->render('root.twig');
    }
)->bind('root');
