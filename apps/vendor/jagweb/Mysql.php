<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 4/15/16
 * Time: 10:19 PM
 */

namespace JagWeb;


class Mysql extends \Phalcon\Db\Adapter\Pdo\Mysql
{
    public function pdo()
    {
        return $this->_pdo;
    }

}