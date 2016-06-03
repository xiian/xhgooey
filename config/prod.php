<?php
/** @var \Silex\Application $app */

$app->register(new Silex\Provider\TwigServiceProvider(), ['twig.path' => __DIR__ . '/../templates',]);

$app->register(
    new Silex\Provider\AssetServiceProvider(),
    [
        'assets.version'        => '1',
        'assets.version_format' => '%s?v=%s',
        'assets.named_packages' => [
            'xhgooey' => ['base_path' => '/themes/xhgooey'],
        ],
    ]
);
return $app;
