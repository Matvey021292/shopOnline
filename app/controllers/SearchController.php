<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 15.10.2018
 * Time: 18:51
 */

namespace app\controllers;


class SearchController extends AppController
{
    public function typeaheadAction()
    {
        if ($this->isAjax()) {
            $query = !empty(trim($_GET['query'])) ? trim($_GET['query']) : null;
            if ($query) {
                $products = \R::getAll("SELECT id,title,img FROM product WHERE title LIKE ? AND status='1' LIMIT 11", ["%{$query}%"]);
                echo json_encode($products);
            }
        }
        die;
    }

    public function indexAction()
    {
            $query = !empty(trim($_GET['s'])) ? trim($_GET['s']) : null;
        if ($query) {
            $products = \R::find('product', "title LIKE ? AND status='1'    ", ["%{$query}%"]);

        }
        $hits = \R::find('Product', "hit = '1' AND status = '1' ORDER BY data DESC LIMIT 16  ");
        $this->setMeta('Поиск по: ' . h($query));
        $this->set(compact('products','query','hits'));
    }
}