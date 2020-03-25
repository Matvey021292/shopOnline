<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 22.10.2018
 * Time: 23:22
 */

namespace app\controllers\admin;


use app\models\User;
use shop\libs\Pagination;

class UserController extends AppController
{
    public function loginAdminAction()
    {
        if (!empty($_POST)) {
           if (isset($_SESSION['auth_login'])){
               $_SESSION['auth_login'] = $_POST['login'];
               $_SESSION['auth_password'] = $_POST['password'];
           }
            $user = new User();
            if ($user->login(true)) {
                $_SESSION['success'] = "Вы успешно авторизированы";
            } else {
                $_SESSION['error'] = 'Логин или пароль указан не верно';
            }
            if (User::isAdmin()) {
                redirect(ADMIN);
            } else {
                redirect();
            }
        }
        $this->layout = 'login';
    }

    public function editAction()
    {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $user = new \app\models\admin\User();
            $data = $_POST;
            $user->load($data);
            if (!$user->attributes['password']) {
                unset($user->attributes['password']);
            } else {
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            }
            if (!$user->validate($data) || !$user->chechUnique()) {
                $user->getErrors();
                redirect();
            }
            if ($user->update('user', $id)) {
                $_SESSION['success'] = ' Изменения сохранены';
            }
            redirect();

        }
        $user_id = $this->getRequestID();
        $user = \R::load('user', $user_id);
        $orders = \R::getAll("SELECT `order`.`id`, `order`.`user_id`, `order`.`status`, `order`.`date`, `order`.`update_at`, `order`.`currency`, ROUND(SUM(`order_product`.`price`), 2) AS `sum` FROM `order`
  JOIN `order_product` ON `order`.`id` = `order_product`.`order_id`
  WHERE user_id = {$user_id} GROUP BY `order`.`id` ORDER BY `order`.`status`, `order`.`id`");
        $this->setMeta('Редактировать пользователя');
        $this->set(compact('user', 'orders'));
    }

    public function addAction()
    {
        $this->setMeta('Добавить пользователя');

    }

    public function indexAction()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : '1';
        $perpage = 20;
        $count = \R::count('user');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $users = \R::findAll('user', "LIMIT $start,$perpage");
        $this->setMeta('Список пользователей');
        $this->set(compact('users', 'pagination', 'count'));
    }



}