<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 08.10.2018
 * Time: 22:44
 */

namespace app\models;


use shop\App;

class Breadcrumbs
{
    public static function getBreadcrumbs($caterory_id, $name = '')
    {
        $cats = App::$app->getProperty('cats');
        $breadcrumbs_array = self::getParts($cats, $caterory_id);
        $breadcrumbs = "   <li><a href='". PATH ."'>ГЛАВНАЯ</a></li>";
        if($breadcrumbs_array){
            foreach ($breadcrumbs_array as $alias => $title){
                $breadcrumbs .= "<li><a href='".PATH."category/{$alias}'>{$title}</a></li>";
            }
        }
        if($name){
            $breadcrumbs .= "<li>$name</li>";
        }
        return $breadcrumbs;
    }

    public static function getParts($cats, $caterory_id)
    {
        if (!$caterory_id) return false;
        $breadcrumbs = [];
        foreach ($cats as $k => $v) {
            if (isset($cats[$caterory_id])) {
                $breadcrumbs[$cats[$caterory_id]['alias']] = $cats[$caterory_id]['title'];
                $caterory_id = $cats[$caterory_id]['parent_id'];
            }else break;

        }
        return array_reverse($breadcrumbs,true);
    }
}