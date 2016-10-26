<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 4/15/16
 * Time: 10:25 PM
 */

namespace JagWeb;


class Sql extends  \DB\SQL
{
    /**
     *	Instantiate class
     *	@param $pdo \PDO
     *	@param $config array
     **/
    function __construct($pdo, $config) {
        $fw=\Base::instance();
        $this->uuid=$fw->hash($this->dsn="mysql:host={$config['host']};port=3306;dbname={$config['dbname']}");
        $this->dbname = $config['dbname'];
        $this->pdo=&$pdo;
        $this->engine=$this->pdo->getattribute(\PDO::ATTR_DRIVER_NAME);
    }
}