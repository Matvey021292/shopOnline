<?php

namespace app\controllers;

use app\models\Order;
use app\models\Cart;
use app\models\User;

class CartController extends AppController
{
    public function replaceAction(){
        $arr = [
            'current_price'=>'',
            'cart_sum' => '',
            'cart_qty' => '',
        ];

        $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;
        $qty = !empty($_POST['qty']) ? (int)$_POST['qty'] : null;
        if (!empty($_SESSION['cart'])){
            $_SESSION['cart.sum'] = 0;
            $_SESSION['cart.qty'] = 0;
            foreach ($_SESSION['cart'] as $k => $v){
               if ($k == $id){
                   $_SESSION['cart'][$k]['qty'] = $qty;

               }
               $_SESSION['cart.qty'] += $_SESSION['cart'][$k]['qty'];
               $_SESSION['cart.sum'] += $_SESSION['cart'][$k]['qty'] * $_SESSION['cart'][$k]['price'];
         }
          $arr['cart_sum'] = $_SESSION['cart.sum'];
          $arr['cart_qty'] = $_SESSION['cart.qty'];
            $arr['current_price'] = $_SESSION['cart'][$id]['qty']*$_SESSION['cart'][$id]['price'];
           echo json_encode($arr);
        }
        die;

    }
    public function addAction()
    {
        $id = !empty($_GET['id']) ? (int)$_GET['id'] : null;
        $qty = !empty($_GET['qty']) ? (int)$_GET['qty'] : null;
        $mod_id = !empty($_GET['mod']) ? (int)$_GET['mod'] : null;
        $mod = null;
        if ($id) {
            $product = \R::findOne('product', 'id = ?', [$id]);
            if (!$product) {
                return false;
            }
            if ($mod_id) {
                $mod = \R::findOne('modification', 'id = ? AND product_id = ?', [$mod_id, $id]);
            }
        }
        $cart = new Cart();
        $cart->addToCart($product, $qty, $mod);
        if ($this->isAjax()) {
            $this->loadView('cart_modal');
        }
        redirect();
    }

    public function showAction()
    {
        $this->loadView('cart_modal');
    }

    public function deleteAction()
    {
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        if (isset($_SESSION['cart'][$id])) {
            $cart = new Cart();
            $cart->deleteItem($id);
        }
        if ($this->isAjax()) {
            $this->loadView('cart_modal');
        }
        redirect();
    }

    public function clearAction()
    {
        unset($_SESSION['cart']);
        unset($_SESSION['cart.qty']);
        unset($_SESSION['cart.sum']);
        unset($_SESSION['cart.currency']);
        $this->loadView('cart_modal');
    }

    public function viewAction()
    {
        $this->setMeta('Корзина');
    }

    public function checkoutAction()
    {
        if (!empty($_POST)) {
            if (!User::checkAuth()) {
                $user = new User();
                $data = $_POST;
                $user->load($data);
                if (!$user->validate($data) || !$user->chechUnique()) {
                    $user->getErrors();
                    $_SESSION['form_data'] = $data;
                    redirect();
                } else {
                    $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                    if (!$user_id = $user->save('user')) {
                        $_SESSION['error'] = 'Ошибка';
                        redirect();
                    }
                }
            }
            $data['user_id'] = isset($user_id) ? $user_id : $_SESSION['user']['id'];
            $data['note'] = !empty($_POST['note']) ? $_POST['note'] : '';
            $user_email = isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : $_POST['email'];
            $order_id = Order::saveOrder($data);
            Order::mailOrder($order_id,$user_email);
        }
        redirect();
    }
}