<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 22.09.2018
 * Time: 23:24
 */

namespace app\controllers;


use shop\App;
use shop\Cache;

class MainController extends AppController
{

    public function indexAction()
    {
        $brands =  \R::find('brand','LIMIT 3');
        $hits = \R::find('Product',"hit = '1' AND status = '1' LIMIT 8");
        $cats = \R::find('category'," LIMIT 8");
        $this->setMeta(App::$app->getProperty('site_name'), 'home page magazine', 'hoem,magazine,page');
        $this->set(compact('brands','hits','cats'));
    }
}