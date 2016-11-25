<?php

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/', function() use($app) {
    return "abc";
});

$app->get('/account/', function() use($app) {
    return "Account";
});