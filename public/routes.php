<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/account/', function() use($app) {
    echo "abc";
});