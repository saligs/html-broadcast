<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 4/15/16
 * Time: 9:25 PM
 */

namespace JagWeb;
use Phalcon\Db;


/**
 * Class Crud
 *
 *
 * contoh penggunannya :
 *
 * ```
\Beon\Sai\Crud::instance()->buildDefaultDb()->update('d_logs', [
    'type'=>'test2',
    'data'=>'test2',
    'date'=>date('Y-m-d'),
], [
    'id = ?', [1]
]);

\Beon\Sai\Crud::instance()->buildDefaultDb()->update('d_logs', [
    'type'=>'test2',
    'data'=>'test2',
    'date'=>date('Y-m-d'),
], 'id=2');

\Beon\Sai\Crud::instance()->db($di->get('db'))->update('d_logs', [
    'type'=>'test2',
    'data'=>'test3',
    'date'=>date('Y-m-d'),
], 'id=2');

\Beon\Sai\Crud::instance()->db($db)->delete('d_logs', 'id=2');

\Beon\Sai\Crud::instance()->db($db)->delete('d_logs', 'id=?', [1]);

\Beon\Sai\Crud::instance()->db($di->get('db'))->one('d_logs', ['id=?', [3]]);

\Beon\Sai\Crud::instance()->db($di->get('db'))->one('d_logs', 'id=3');

contoh class base

use Beon\Sai\Crud;
use Beon\Sai\Table;

class Base extends Table
{
    public function __construct()
    {
        $this->crud = Crud::instance();
        if($this->crud->db === null){
            $this->crud->buildDefaultDb();
        }
    }
}
 * ```
 *
 * @package Beon\Sai
 */
class Table extends One
{
    /**
     * @var Crud
     */
    public $crud;

    public $name;

    public $key = 'id';

    public function i($data)
    {
        return $this->insert($data);
    }

    public function id()
    {
        return $this->lastInsertId();
    }

    public function u($data, $whereCondition)
    {
        return $this->update($data, $whereCondition);
    }


    public function insert($data)
    {
        $this->crud->insert($this->name, $data);
        return $this;
    }

    public function insertIfNotExist($data, $key, $operator = 'like')
    {
        return $this->crud->insertIfNotExist($this->name, $data, $key, $operator);
    }

    public function lastInsertId()
    {
        return $this->crud->db->lastInsertId();
    }

    public function update($data, $whereCondition)
    {
        $this->crud->update($this->name, $data, $whereCondition);
        return $this;

    }

    public function delete($whereCondition = null, $placeholders = null)
    {
        $this->crud->delete($this->name, $whereCondition, $placeholders);
        return $this;
    }

    public function one($whereCondition, $select = '*')
    {
        return $this->crud->one($this->name, $whereCondition, $select);
    }

    public function get($id=null, $select = '*')
    {
        if($id === null){
            return $this->crud->one($this->name, $this->key . '=' . $this->id(), $select);
        }
        return $this->crud->one($this->name, $this->key . '=' . (int)$id, $select);
    }

    public function all($whereCondition=null, $select = '*')
    {
        return $this->crud->all($this->name, $whereCondition, $select);
    }

    public function field($whereCondition, $select = '*')
    {
        return $this->crud->field($this->name, $whereCondition, $select);
    }
}