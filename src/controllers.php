<?php
// Controller as a service
$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app['api.controller'] = $app->share(function() use ($app) {
    return new Isitpoya\Api\ApiController();
});

$app['api.poyadays'] = $app->share(function() {
  $poyadaysJsonFile = __DIR__ . '/../data/poyadays.json';
  $json = file_get_contents($poyadaysJsonFile);
  return new Isitpoya\Api\PoyaDays($json);
});

// Routing
$app->get('/', function () use ($app){
  return 'isitpoya.com';
});

$app->get('/api/next', "api.controller:next");
