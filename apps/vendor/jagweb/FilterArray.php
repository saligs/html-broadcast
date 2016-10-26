<?php
namespace JagWeb;


use Phalcon\Db;

class FilterArray extends One
{

    private $value;

    private $column;

    private $bind;

    private $where;

    public $isValid = true;
    public $message = '';

    private function type()
    {
        return [
            '='=>'=',
            '<'=>'<',
            '>'=>'>',
            '=>'=>'=>',
            '=<'=>'=<',
            '!='=>'<>',
            'like'=>'like',
            'not_like'=>'not like',
            '%like%'=>'like',
            '%not_like%'=>'not like',
            '%like'=>'like',
            '%not_like'=>'not like',
            'like%'=>'like',
            'not_like%'=>'not like',
        ];
    }

    private function buildValue($type, $value)
    {
        if($type == '%like%' || $type == '%not_like%'){
            return '%' . $value . '%';
        }else if($type == '%like' || $type == '%not_like'){
            return '%' . $value;
        }else if($type == 'like%' || $type == 'not_like%'){
            return $value . '%';
        }
        return $value;
    }

    private function operator()
    {
        return [
            'and',
            'or',
        ];
    }



    private function buildWhere()
    {
        $type = $this->type();
        $operator = $this->operator();

        $this->where = '';
        $iter = 0;
        foreach ($this->value['field'] as $key => $item) {
            if(array_key_exists($item, $this->column)){

                // validate
                if(array_key_exists($key, $this->value['type'])){
                    $this->message = 'Type in key "' . $key . '" not exist';
                    $this->isValid = false;
                    return false;
                }
                if(array_key_exists($key, $this->value['value'])){
                    $this->message = 'Value in key "' . $key . '" not exist';
                    $this->isValid = false;
                    return false;
                }

                $tmpType = $this->value['type'][$key];
                $tmpValue = $this->value['value'][$key];
                if(array_key_exists($tmpType, $type)){
                    if($iter == 0){
                        $this->where .= $item . ' ' . $type[$tmpType] . ' ? ' ;
                    }else{
                        // validate
                        if(array_key_exists($key, $this->value['operator'])){
                            $this->message = 'Operator in key "' . $key . '" not exist';
                            $this->isValid = false;
                            return false;
                        }

                        $tmpOperator = $this->value['operator'][$key];
                        $this->where .= $tmpOperator . ' ' . $item . ' ' . $type[$tmpType] . ' ? ' ;
                    }
                    $this->bind[] = $this->buildValue($tmpType, $tmpValue);
                }else{
                    $this->message = 'Type "' . $tmpType . '" invalid';
                    $this->isValid = false;
                    return false;
                }


            }else{
                $this->message = 'Column "' . $item . '" invalid';
                $this->isValid = false;
                return false;
            }
            $iter++;
        }

    }

    public function build($value, $column, $bind = [])
    {
        // value dari post/get
        // bila type = null maka semua menggunakan %like%
        // bila operatorPattern null maka semua menggunakan and
        // contoh operatorPattern [0] AND [1]
        // contoh type [=, like, %like%]

//        $value = [];
//        $value['field'][0]='name';
//        $value['field'][1]='category';
//        $value['value'][0]='test';
//        $value['value'][1]='test';
//        $value['type'][0]='like';
//        $value['type'][1]='%like%';
//        $value['operator'][1]='and';
//
//        $column = [
//            'name' => 'a.name',
//            'category' => 'b.name',
//        ];

        $this->value = $value;
        $this->column = $column;
        $this->bind =& $bind;


        return [$this->isValid, $this->where, $this->bind, $this->message];



    }




}