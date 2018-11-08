<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 22.09.2018
 * Time: 17:49
 */

namespace shop;


class App
{
  public static $app;
 public function __construct()
 {
    $query = trim($_SERVER['QUERY_STRING'],'/');
    session_start();
    self::$app = Register::instance();
    $this->getParams();
    new ErrorHandler();
    Router::dispatch($query);
 }

 protected function getParams(){
     $params = require_once CONFIG . '/params.php';
     if(!empty($params)){
         foreach ($params as $k => $v){
             self::$app->setProperty($k,$v);
         }
     }
 }
}