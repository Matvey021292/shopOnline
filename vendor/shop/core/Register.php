<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 22.09.2018
 * Time: 18:14
 */

namespace shop;


class Register
{
    use TSingletone;

    public static $properties = [];

    public function setProperty($name,$values){
        self::$properties[$name] = $values;

    }
    public function getProperty($name){
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
    }
    public function getProperties(){
        return self::$properties;
    }

}