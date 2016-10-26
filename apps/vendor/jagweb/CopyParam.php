<?php
namespace JagWeb;


class CopyParam extends One
{
    public function copy($param, $translate, $default=null, $override=null)
    {
//        $translate = [
//            'name' => 'a.name',
//            'category' => 'b.name',
//        ];

        $copy = [];

        foreach ($translate as $key => $item) {
            if(array_key_exists($key, $param)){
                $copy[$item] = $param[$key];
            }
        }

        if($default!==null)$copy = array_merge($default, $copy);
        if($override!==null)$copy = array_merge($copy, $override);

        return $copy;
    }

    public function filter($param, $translate, $default=null, $override=null)
    {
//        $translate = [
//            'name',
//            'category',
//        ];
        $filter = [];

        foreach ($translate as $item) {
            if(array_key_exists($item, $param)){
                $filter[$item] = $param[$item];
            }
        }

        if($default!==null)$filter = array_merge($default, $filter);
        if($override!==null)$filter = array_merge($filter, $override);

        return $filter;
    }
}