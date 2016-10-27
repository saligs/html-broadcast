<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 10/4/16
 * Time: 8:24 PM
 */

namespace WebEjs\Action;

use Phalcon\Mvc\View\Simple;

class DefaultRender
{
    /**
     * @var \Phalcon\Mvc\View\Simple
     */
    public $engine;

    public $session;

    public function init()
    {
        $this->engine = new Simple();
        return $this;
    }

    public function run($name)
    {
//        $this->session = $GLOBALS['di']->get('session');
//
//
//        if (!$this->session->has(Config::instance()->sessionAdminId)) {
//            // not login
//            $this->redirectToLogin();


//        }

        $pathConfig = VENDOR_DIR . '/webejs/config/page/' . $name . '.php';
        if (file_exists($pathConfig)) {
            $config = require($pathConfig);
        }else{
            $config = [
                'name' => $name,
                'layout' => 'default',
            ];
        }




        echo $this->init()->engine->render(VENDOR_DIR . '/webejs/view/layout/' . $config['layout'], ['config'=>$config]);
        exit;
    }

    public function redirectToLogin()
    {
        $url = '';
        header("Location: {$url}");
        exit();
    }
}