<?php
// Controller as a service
$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app['api.controller'] = $app->share(function() use ($app) {
    return new Isitpoya\Api\ApiController();
});

// Routing
$app->get('/', function () use ($app){
  return 'isitpoya.com';
});

$app->get('/api/next', "api.controller:next");
