<?php

define('IS_PRODUCTION', false);
//define('IS_DEBUG', false);
define('IS_DEBUG', true);

define('APP_DIR', dirname(dirname(__DIR__)));
define('VENDOR_DIR', APP_DIR. '/vendor');

if(IS_PRODUCTION){
    // versi production
    define('ASSETS_VERSION', 0);
    define('BASE_URL', 'http://cloudlabs.jagoanhosting.com/packet/');
}else{
    define('ASSETS_VERSION', 0);
    define('BASE_URL', 'http://localhost/broadcast-html/apps/');
}


$loader = new \Phalcon\Loader();

$loader->registerNamespaces(array(
    'JagWeb' => VENDOR_DIR . '/jagweb/',
    'WebEjs\Action' => VENDOR_DIR . '/webejs/action/',
));

$loader->register();

include VENDOR_DIR . '/autoload.php';


session_start();


\JagWeb\Bootstrap::instance()
    ->setting()
    ;
