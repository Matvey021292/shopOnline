<?php

function debug($arr,$die = false){
    echo '<pre>' . print_r($arr, true) . '</pre>';
    if ($die) die;
}

function redirect($http = false){
    if($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}

function replaceUrlImage($val,$bool = false){
    $arr_str = explode('/',str_replace('\\','/',$val));
    if($bool == 'md'){
        $arr_str[count($arr_str) - 1] =  str_replace('.','_min.',$arr_str[count($arr_str) - 1]);
    }else if($bool == 'sm'){
        $arr_str[count($arr_str) - 1] =  str_replace('.','_max_min.',$arr_str[count($arr_str) - 1]);
    }else if($bool == 'lg'){
        $arr_str[count($arr_str) - 1] =  str_replace('.','_single.',$arr_str[count($arr_str) - 1]);
    }else{
        $arr_str[count($arr_str) - 1] =  str_replace('.','.',$arr_str[count($arr_str) - 1]);
    }
    return implode($arr_str,'/');

}


function h($str){
    return  htmlspecialchars($str,ENT_QUOTES);
}