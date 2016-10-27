<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 10/6/16
 * Time: 6:22 AM
 */

namespace ExampleApi\Action;


class Base
{
    public function required($name, $label = null)
    {
        if($label == null) $label = ucfirst($name);
        if(empty($_POST[$name])){
            $this->json(['status'=>0, 'message'=>$label . ' is empty', 'field'=>$name]);
        }
        return $this;
    }

    public function notValid($field, $label)
    {
        $this->json(['status'=>0, 'message'=>$label . ' is invalid', 'field'=>$field]);
    }

    public function error($field, $msg)
    {
        $this->json(['status'=>0, 'message'=>$msg, 'field'=>$field]);
    }

    public function success($data)
    {
        $this->json(['status'=>1, 'data'=>$data]);
    }

    public function json($array)
    {
        header('Content-Type: application/json');
        echo json_encode($array);
        exit;
    }
}