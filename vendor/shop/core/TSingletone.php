<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 22.09.2018
 * Time: 18:15
 */

namespace shop;


trait TSingletone
{
    private static $instance;

    public static function instance()
    {
        if (self::$instance == null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}