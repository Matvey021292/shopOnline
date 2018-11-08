<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 05.11.2018
 * Time: 20:58
 */

namespace app\models\admin;


use app\models\AppModel;

class Currency extends AppModel
{
    public $attributes = [
        'title' => '',
        'code' => '',
        'symbol_left' => '',
        'symbol_right' => '',
        'value' => '',
        'base' => ''
    ];

    public $rules = [
        'required' => [
            ['title'],
            ['value'],
            ['code']
        ],
        'numeric' => [
            ['value']
        ]
    ];
}