<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 22.09.2018
 * Time: 23:24
 */

namespace app\controllers;


use app\models\Cart;
use shop\App;
use shop\Cache;

class MainController extends AppController
{

    public function indexAction()
    {
        $new_product = \R::find('product', 'ORDER BY data DESC LIMIT 16');
        $brands = \R::find('brand', 'LIMIT 3');
        $hits = \R::find('Product', "hit = '1' AND status = '1' ORDER BY data DESC LIMIT 16  ");
        $cats = \R::find('category', " LIMIT 8");
        $this->setMeta(App::$app->getProperty('site_name'), 'home page magazine', 'hoem,magazine,page');
        $r_viewed = $this->getRecentlyViewed();
        if ($r_viewed) {
            $recentlyViewed = \R::find('product', 'id IN (' . \R::genSlots($r_viewed) . ') LIMIT 3', $r_viewed);
        }
        $cartContainer = (!empty($_SESSION['cart'])) ? $_SESSION['cart'] : null;
        if (!empty($cartContainer)) {
            $_SESSION['cart_container'] = array();
            foreach ($cartContainer as $k => $v) {
                array_push($_SESSION['cart_container'], $k);
            }
        } else {
            unset($_SESSION['cart_container']);
        }
        $this->set(compact('brands', 'hits', 'cats', 'new_product', 'recentlyViewed'));
    }
    public function getProductCategory($id = 50){
        $cat = \R::getAll("SELECT * FROM category WHERE id=?", [$id]);
        return $cat;
    }

    public function getRecentlyViewed()
    {
        if (!empty($_COOKIE['recentlyViewed'])) {
            $recentlyViewed = $_COOKIE['recentlyViewed'];
            $recentlyViewed = explode('.', $recentlyViewed);
            return $recentlyViewed;
        }
        return false;
    }

    public function addStarAction()
    {
        $count = !empty($_POST['count']) ? (int)$_POST['count'] : null;
        $id = !empty($_POST['id']) ? $_POST['id'] : null;
        if ($count) {
            $counter = \R::load('product', $id);
            $counter['rating'] += $count;
            $counter['rating_view'] += 1;
            $res = \R::store($counter);
            if ($res) {
                $getCounterStar = \R::getRow('SELECT rating,rating_view FROM product WHERE id =?', [$id]);
//                $getStarView = \R::getRow("SELECT rating_view FROM product WHERE id = ?",[$id]);
                echo $getCounterStar['rating'] / $getCounterStar['rating_view'];
                die;
            }
        }
    }

    public function fastShowAction()
    {
        $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;
        if ($id) {
            $products_desc = \R::getAll("SELECT * FROM product_desc  WHERE product_desc.product_id =?", [$id]);
            $dataString = json_encode($products_desc, false);
            echo $dataString;
            die;
        }
    }

    public function likeContainerAction()
    {
        if ($this->isAjax()) {
            $this->loadView('modal/like_container');
        }
        die;
    }

    public function compareContainerAction()
    {
        if ($this->isAjax()) {
            $this->loadView('modal/compare_container');
        }
        die;
    }

    public function addLikeAction()
    {
        if (!isset($_SESSION['cart.currency'])) {
            $_SESSION['cart.currency'] = App::$app->getProperty('currency');
        }
        $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;
        $mod = null;
        if ($id) {
            $product = \R::findOne('product', 'id = ?', [$id]);
            if (!$product) {
                return false;
            }
        }
        $ID = $product->id;
        $title = $product->title;
        $price = $product->price;
        if (isset($_SESSION['like'][$ID])) {
            $_SESSION['like'][$ID]['qty'] += 1;

        } else {
            $_SESSION['like'][$ID] = [
                'title' => $title,
                'alias' => $product->alias,
                'img' => $product->img,
                'category' => $product->category_id,
                'price' => $product->price,
            ];
        }
        $compareContainer = (!empty($_SESSION['like'])) ? $_SESSION['like'] : null;
        if (!empty($compareContainer)) {
            $_SESSION['like_container'] = array();
            foreach ($compareContainer as $k => $v) {
                array_push($_SESSION['like_container'], $k);
            }
        } else {
            unset($_SESSION['like_container']);
        }
        $_SESSION['like.qty'] = isset($_SESSION['like.qty']) ? $_SESSION['like.qty'] + 1 : 1;
        if ($this->isAjax()) {
            $this->loadView('modal/like_modal');
        }
        die;
    }

    public function removeLikeAction()
    {
        $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;
        $mod = null;
        if (isset($_SESSION['like'][$id])) {
            unset($_SESSION['like'][$id]);
        }
        $compareContainer = (!empty($_SESSION['like'])) ? $_SESSION['like'] : null;
        if (!empty($compareContainer)) {
            $_SESSION['like_container'] = array();
            foreach ($compareContainer as $k => $v) {
                array_push($_SESSION['like_container'], $k);
            }
        } else {
            unset($_SESSION['like_container']);
            unset($_SESSION['like']);
        }
        $_SESSION['like.qty'] = $_SESSION['like.qty'] - 1;
        if ($_SESSION['like.qty'] === 0) {
            unset($_SESSION['like.qty']);
        }
        if ($this->isAjax()) {
            $this->loadView('modal/like_modal');
        }
        die;
    }

    /**
     * @return bool
     */
    public function addCompareAction()
    {
        if (!isset($_SESSION['cart.currency'])) {
            $_SESSION['cart.currency'] = App::$app->getProperty('currency');
        }
        $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;
        $mod = null;
        if ($id) {
            $product = \R::findOne('product', 'id = ?', [$id]);
            if (!$product) {
                return false;
            }
        }
        $ID = $product->id;
        $title = $product->title;
        $price = $product->price;
        if (isset($_SESSION['compare'][$ID])) {
            $_SESSION['compare'][$ID]['qty'] += 1;

        } else {
            $_SESSION['compare'][$ID] = [
                'title' => $title,
                'alias' => $product->alias,
                'img' => $product->img,
                'category' => $product->category_id,
                'price' => $product->price,
            ];
        }
        $compareContainer = (!empty($_SESSION['compare'])) ? $_SESSION['compare'] : null;
        if (!empty($compareContainer)) {
            $_SESSION['compare_container'] = array();
            foreach ($compareContainer as $k => $v) {
                array_push($_SESSION['compare_container'], $k);
            }
        } else {
            unset($_SESSION['compare_container']);
        }
        $_SESSION['compare.qty'] = isset($_SESSION['compare.qty']) ? $_SESSION['compare.qty'] + 1 : 1;
        if ($this->isAjax()) {
            $this->loadView('modal/compare_modal');
        }
        die;
    }

}