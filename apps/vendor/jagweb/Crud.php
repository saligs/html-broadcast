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
 * ```
 *
 * @package Beon\Sai
 */
class Crud extends One
{
    /**
     * @var Mysql
     */
    public $db;

    public function i($table, $data)
    {
        return $this->insert($table, $data);
    }

    public function id()
    {
        return $this->lastInsertId();
    }

    public function u($table, $data, $whereCondition)
    {
        return $this->update($table, $data, $whereCondition);
    }

    public function db($db)
    {
        $this->db =& $db;
        return $this;
    }

    public function buildDefaultDb()
    {
        $di =& $GLOBALS['di'];
        $this->db = $di->get('db');
        return $this;
    }

    public function insert($table, $data)
    {
        $this->db->insertAsDict($table, $data);
        return $this;
    }


    public function insertIfNotExist($table, $data, $key, $operator = 'like')
    {
        // $data[$key]
        $model = $this->one($table, [$key . ' ' . $operator . ' ?', [$data[$key]]]);
        if(empty($model)){
            $this->insert($table, $data);
            return $this->one($table, [$key . ' ' . $operator . ' ?', [$data[$key]]] );
        }else{
            return $model;
        }

    }

    public function lastInsertId()
    {
        return $this->db->lastInsertId();
    }

    public function update($table, $data, $whereCondition)
    {
        if(is_array($whereCondition)){
            $this->db->updateAsDict($table, $data, [
                'conditions' => $whereCondition[0],
                'bind' => $whereCondition[1],
            ]);
        }else{
            $this->db->updateAsDict($table, $data, $whereCondition);
        }
        return $this;

    }

    public function delete($table, $whereCondition = null, $placeholders = null)
    {
        $this->db->delete($table, $whereCondition, $placeholders);
        return $this;
    }

    public function one($table, $whereCondition, $select = '*')
    {
        if(is_array($whereCondition)){
            $sql = "SELECT $select FROM $table WHERE {$whereCondition[0]} LIMIT 1";
            return $this->db->fetchOne($sql, Db::FETCH_ASSOC, $whereCondition[1]);
        }else{
            $sql = "SELECT $select FROM $table WHERE $whereCondition LIMIT 1";
            return $this->db->fetchOne($sql);
        }
    }

    public function all($table, $whereCondition=null, $select = '*')
    {
        if($whereCondition === null){
            $sql = "SELECT $select FROM $table";
            return $this->db->fetchAll($sql);
        }else if(is_array($whereCondition)){
            $sql = "SELECT $select FROM $table WHERE {$whereCondition[0]}";
            return $this->db->fetchAll($sql, Db::FETCH_ASSOC, $whereCondition[1]);
        }else{
            $sql = "SELECT $select FROM $table WHERE $whereCondition";
            return $this->db->fetchAll($sql);
        }
    }

    public function field($table, $whereCondition, $select = '*')
    {
        if(is_array($whereCondition)){
            $sql = "SELECT $select FROM $table WHERE {$whereCondition[0]} LIMIT 1";
            return $this->db->fetchColumn($sql, $whereCondition[1]);
        }else{
            $sql = "SELECT $select FROM $table WHERE $whereCondition LIMIT 1";
            return $this->db->fetchColumn($sql);
        }
    }
}