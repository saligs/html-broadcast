<?php
include '../vendor/example-api/_start.php';

use Phalcon\Mvc\Micro;

$app = new Micro();

$app->post('/{name}', function ($name) {
    $class = '\ExampleApi\Action\\' . Phalcon\Text::camelize($name);
    $obj = new $class;
    $obj->run();
});

$app->get('/{name}', function ($name) {
    $class = '\ExampleApi\Action\\' . Phalcon\Text::camelize($name);
    $obj = new $class;
    $obj->run();
});

$app->handle();