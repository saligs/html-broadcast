<?php
include 'vendor/webejs/_start.php';

use Phalcon\Mvc\Micro;

$app = new Micro();



$app->get('/{name}', function ($name) {
    if (empty($name)) {
        $name='dashboard';
    }
    $a = new \WebEjs\Action\DefaultRender();
    $a->run($name);
});



$app->handle();

