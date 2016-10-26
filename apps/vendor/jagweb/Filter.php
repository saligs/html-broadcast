<?php
namespace JagWeb;


use Phalcon\Db;

class Filter
{
    public $defaultWhere = ''; // ex.  c.is_archive = 0
    public $operatorDefaultWhere = ''; // ex. AND
    public $where;
    public $filter;

    public function build($filter, $config=null)
    {
        $filter = [
            'field'=>[
                0=>'asdf',
                1=>'asdf',
            ],
            'operator'=>[
                0=>'like',
                1=>'=',
            ],
            'value'=>[
                0=>'asdf',
                1=>'1',
            ],
            'condition' => '[0] AND [1]',
            'segment' => [
                0=>'on',
                1=>null,

            ],

        ];
// filter bisa string value -> maka ini harus ada config.columnDefault = []
// filter bisa array -> config.translate [param -> column ], config.operatorDefault -> AND, config.typeDefault -> %like%
// bisa sitem
// bisa segment
// bisa condition
// bisa filter -> baru terdiri dari array yg di tujukan u form condition
// filter ada statusny valid ato tidak
/*
$postfields = [
    'action' => 'fetch-group-v2',
    'user_id' => 24464,
    'site_id' => 3,
    'filter' => [
        'segment'=>[
            'items'=>[
                0=>[
                    'condition'=>[
                        'field' => 'group_id',
                        'operator' => '=',
                        'value' => 2,
                    ]
                ]
            ],
            'operator'=>0
        ]
    ],
];
 */
    }

    public function buildFilter()
    {

        if ($this->where == null) {

            if (!empty($this->filter)) {
                foreach ($this->filter as $key => $item) {
                    if ($key == 'condition') {
                        $this->where = ' ' . $this->buildFilterCondition($item) . ' ';
                    } else {
                        $this->where = ' ' . $this->buildFilterSegment($item) . ' ';
                    }
                }

            } else {
                // tidak ada filter
                return $this->where = $this->defaultWhere;
            }

        }



        if(ctype_space($this->where)){
            return $this->where = $this->defaultWhere;
        }else{
            return $this->where . " " . $this->operatorDefaultWhere . " " . $this->defaultWhere;
        }



    }


    public function buildFilterSegment($filter)
    {
        $operator = ' ' . $filter['operator'] . ' ';
        foreach ($filter['items'] as $key => $item) {
            $counter = 1;
            $operator = str_ireplace(' ' . $key . ' ', '[[[' . $key . ']]]', $operator, $counter);
        }



        foreach ($filter['items'] as $key => $item) {
            if (array_key_exists('condition', $item)) {
                $where = ' ' . $this->buildFilterCondition($item['condition']) . ' ';
            } else {
                $where = ' (' . $this->buildFilterSegment($item['segment']) . ') ';
            }
            $counter2 = 1;
            $operator = str_ireplace('[[[' . $key . ']]]', $where, $operator, $counter2);
        }

        return $operator;
    }

    public function buildFilterCondition($filter)
    {
        /*
        [field] => email
        [operator] => like
        [value] => asdf@bb.com
         * */

//        echo '<pre>';
//        print_r($filter);
//        echo '</pre>';
//        exit;



        if (array_key_exists('field', $filter) && array_key_exists('operator', $filter) && array_key_exists('value', $filter)) {
            if (array_key_exists($filter['field'], $this->typeWhere) && array_key_exists($filter['field'], $this->field)) {
                // 'email like ?'
                $field = $this->field[$filter['field']];
                $type = $this->typeWhere[$filter['field']];




                if (array_key_exists($filter['operator'], $this->type[$type])) {
                    // valid

                    $keyOperator =& $filter['operator'];
                    $operator = $this->type[$type][$filter['operator']];


                    $column = $field;
                    if ($type == 1) {

                        if ($keyOperator == 'in' || $keyOperator == 'not_in') {
                            if (preg_match('/^\d+(?:,\d+)*$/', $filter['value'])) {
                                $condition = "{$column} {$operator} ({$filter['value']})";
                                return $condition;
                            }
                        } else {
                            $this->bind[$this->indexParams] = $filter['value'];
                            $condition = "{$column} {$operator} ?";
                            $this->indexParams++;
                            return $condition;
                        }

                    } else if ($type == 2) {
                        // string
                        if ($keyOperator == '%like%') {
                            $this->bind[$this->indexParams] = '%' . $filter['value'] . '%';

                            $condition = "{$column} {$operator} ?";
                            $this->indexParams++;

                            return $condition;
                        } else if ($keyOperator == '%not_like%') {
                            $this->bind[$this->indexParams] = '%' . $filter['value'] . '%';
                            $condition = "{$column} {$operator} ?";
                            $this->indexParams++;
                            return $condition;
                        } else {
                            $this->bind[$this->indexParams] = $filter['value'];
                            $condition = "{$column} {$operator} ?";
                            $this->indexParams++;
                            return $condition;
                        }
                    } else if ($type == 3) {
                        // date
                        // Y-m-d H:i:s -> yyyy-mm-dd hh:ii:ss
                        // DATE_FORMAT(date, '%Y-%m-%d')
                        $this->bind[$this->indexParams] = $filter['value'];
                        $condition = "DATE_FORMAT({$column}, '%Y-%m-%d') {$operator} ?";
                        $this->indexParams++;
                        return $condition;
                    } else if ($type == 4) {
                        // datetime
                        // Y-m-d H:i:s -> yyyy-mm-dd hh:ii:ss
                        // DATE_FORMAT(date, '%Y-%m-%d')
                        $this->bind[$this->indexParams] = $filter['value'];
                        $condition = "{$column} {$operator} ?";
                        $this->indexParams++;
                        return $condition;
                    } else if ($type == 5) {
                        // time
                        // Y-m-d H:i -> yyyy-mm-dd hh:ii
                        // DATE_FORMAT(date, '%Y-%m-%d')
                        $this->bind[$this->indexParams] = $filter['value'];
                        $condition = "DATE_FORMAT({$column}, '%H:%i') {$operator} ?";
                        $this->indexParams++;
                        return $condition;
                    }

                } else {
                    // operator not exist
                }

            } else {
                // field not exist
            }
        } else {
            // filter invalid
        }

    }

    public $bind = [];
    public $indexParams = 0;

    public $field = [
//        example
        'contact_id' => 'contact_id',
        'email' => 'email',
    ];

    public $type = [
        1 => [
            '=' => '=',
            '=>' => '=>',
            '=<' => '=<',
            '<>' => '<>',
            '<' => '<',
            '>' => '>',
            'in' => 'IN',
            'not_in' => 'NOT IN',
        ],
        2 => [
            'like' => 'LIKE',
            'not_like' => 'NOT LIKE',
            '%like%' => 'LIKE',
            '%not_like%' => 'NOT LIKE',
        ],
        3 => [
            '=' => '=',
            '=>' => '=>',
            '=<' => '=<',
            '<>' => '<>',
            '<' => '<',
            '>' => '>',
        ],
        4 => [
            '=' => '=',
            '=>' => '=>',
            '=<' => '=<',
            '<>' => '<>',
            '<' => '<',
            '>' => '>',
        ],
        5 => [
            '=' => '=',
            '=>' => '=>',
            '=<' => '=<',
            '<>' => '<>',
            '<' => '<',
            '>' => '>',
        ],
    ];

    // 1 = int
    // 2 = string
    // 3 = date
    // 4 = datetime
    // 5 =  time
    public $typeWhere = [
        'contact_id' => 1,
        'email' => 2,
    ];


//    public $order = [
//        'contact_id asc' => 'contact_id asc',
//        'contact_id desc' => 'contact_id desc',
//        'email asc' => 'email asc',
//        'email desc' => 'email desc',
//    ];


}