<?php
namespace JagWeb;
use PDO;

class Bootstrap extends One
{

    public function setting()
    {
        date_default_timezone_set("Asia/Jakarta");

        if(IS_DEBUG){
            ini_set('display_errors','on');
            error_reporting(E_ALL);

            $debug = new \Phalcon\Debug();
            $debug->listen();
        }else{
            ini_set('display_errors','off');
            error_reporting(0);
        }

        $GLOBALS['di'] = new \Phalcon\Di\FactoryDefault();

        return $this;

    }

    /**
     * array config :
     * - host
     * - dbname
     * - username
     * - password
     * @param $config
     * @param string $name
     * @return $this
     */
    public function db($config, $name='db')
    {
        $GLOBALS['di']->setShared($name, function() use($config){
//            $config['port']=3306;
//            $config['port']=3307;
            $config['options']=array(PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);
            return new \Phalcon\Db\Adapter\Pdo\Mysql($config);
        });
        return $this;
    }

    public function initSession()
    {
        $GLOBALS['di']->setShared('session', function() {
            $session = new \Phalcon\Session\Adapter\Files();
            $session->start();
            return $session;
        });
        return $this;
    }

}