<?php
use JagWeb\Bootstrap;

define('IS_PRODUCTION', false);
//define('IS_DEBUG', false);
define('IS_DEBUG', true);

define('APP_DIR', dirname(dirname(__DIR__)));
define('VENDOR_DIR', APP_DIR. '/vendor');
define('ASSETS_VERSION', 0);


//define('BASE_URL', 'http://cloudlabs.jagoanhosting.com/v3/');


$loader = new \Phalcon\Loader();

$loader->registerNamespaces(array(
    'JagWeb' => VENDOR_DIR . '/jagweb/',
    'ExampleApi\Helper' => VENDOR_DIR . '/example-api/helper/',
    'ExampleApi\Action' => VENDOR_DIR . '/example-api/action/',
));

$loader->register();

include VENDOR_DIR . '/autoload.php';


session_start();


Bootstrap::instance()
    ->setting()
    ;
