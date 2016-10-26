<?php
namespace JagWeb;


use Phalcon\Db;

class FilterString extends One
{

    private $type;

    private $filterString;

    private $operator;

    private $column;

    private $bind;

    private $where;

    private function validateType()
    {
        if($this->type == '%like%'){
            $this->filterString = '%' . $this->filterString . '%';
            $this->type = 'like';
        }else if($this->type == '%like'){
            $this->filterString = '%' . $this->filterString;
            $this->type = 'like';
        }else if($this->type == 'like%'){
            $this->filterString = $this->filterString . '%';
            $this->type = 'like';
        }
    }

    private function buildWhere()
    {
        foreach ($this->column as $key => $item) {
            $this->column[$key] = $item . ' ' . $this->type . ' ? ';
            $this->bind [] = $this->filterString;
        }

        $this->where = implode(' ' . $this->operator . ' ', $this->column);
    }

    public function build($filterString, $column, $type='%like%', $operator = 'or', $bind = [])
    {
//        $filterString = 'test search';
//        $column = [
//            'a.name',
//            'a.column2',
//        ];

        $this->filterString = $filterString;
        $this->type = $type;
        $this->operator = $operator;
        $this->column = $column;
        $this->bind = $bind;

        $this->validateType();
        $this->buildWhere();

        return [$this->where, $this->bind];


// filter bisa string value -> maka ini harus ada config.columnDefault = []
// filter bisa array -> config.translate [param -> column ], config.operatorDefault -> AND, config.typeDefault -> %like%
// bisa item
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




}