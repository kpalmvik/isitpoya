<?php
use Silex\Application;
use Isitpoya\Api;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Application();

// Set the debug mode in .htaccess
$app['debug'] = getenv('APPLICATION_ENV') === 'debug';

// Controller as a service
$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app['api.controller'] = $app->share(function() use ($app) {
    return new \Isitpoya\Api\ApiController();
});

// Routing
$app->get('/', function () use ($app){
  return 'isitpoya.com';
});

$app->get('/api/next', "api.controller:next");

$app->run();
