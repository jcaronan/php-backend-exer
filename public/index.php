<?php
require_once __DIR__.'/../vendor/autoload.php';
$app = new Silex\Application();
 
// Controller
$app->mount('/', new HelloApp\HelloControllerProvider());
 
$app->run();