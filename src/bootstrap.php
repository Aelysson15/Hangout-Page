<?php

require_once __DIR__.'/../vendor/autoload.php';

use Silex\Provider\TwigServiceProvider;

$env = getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production';
$ini_config = parse_ini_file(__DIR__.'/config.ini', TRUE);
$config = $ini_config[$env];

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/templates',
    'twig.options' => array('cache' => __DIR__.'/../cache'),
));


return $app;