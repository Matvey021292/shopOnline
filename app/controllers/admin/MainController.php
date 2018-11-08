<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 22.10.2018
 * Time: 22:15
 */

namespace app\controllers\admin;


use app\controllers\admin;

class MainController extends AppController
{

    public function indexAction()
    {
        $countNewOrders = \R::count('order', "status='0'");
        $countUsers = \R::count('user');
        $countProducts = \R::count('product');
        $countCategories = \R::count('category');

        $this->setMeta('Панель управления');
        $this->set(compact('countNewOrders','countCategories','countProducts','countUsers'));
    }
}