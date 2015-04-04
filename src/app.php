<?php
use Silex\Application;

$app = new Application();

// Set the debug mode in .htaccess
$app['debug'] = getenv('APPLICATION_ENV') === 'debug';

return $app;
