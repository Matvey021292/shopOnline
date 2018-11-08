<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 03.11.2018
 * Time: 22:00
 */

namespace app\models\admin;


use app\models\AppModel;

class FilterGroup extends AppModel{

    public $attributes = [
        'title' => '',
    ];

    public $rules = [
        'required' => [
            ['title'],
        ],
    ];

}