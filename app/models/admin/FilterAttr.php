<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 03.11.2018
 * Time: 21:59
 */

namespace app\models\admin;


use app\models\AppModel;

class FilterAttr extends AppModel{

    public $attributes = [
        'value' => '',
        'attr_group_id' => '',
    ];

    public $rules = [
        'required' => [
            ['value'],
            ['attr_group_id'],
        ],
        'integer' => [
            ['attr_group_id'],
        ]
    ];

}