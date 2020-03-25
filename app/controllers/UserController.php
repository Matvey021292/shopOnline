<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 17.10.2018
 * Time: 22:05
 */

namespace app\controllers;


use app\models\User;

class UserController extends AppController
{
    public function signupAction()
    {
        if (!empty($_POST)) {
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if (!$user->validate($data) || !$user->chechUnique()) {
                $user->getErrors();
                $_SESSION['form_data'] = $data;
            } else {
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if ($user->save('user')) {
                    echo 200;
                } else {
                    echo 'Ошибка';
                }
            }
//            redirect();
        die;
        }
        $this->setMeta('Регистрация');

    }

    public function loginAction()
    {
        if (!empty($_POST)) {
            $user = new User();
            if ($user->login()) {
                $_SESSION['success'] = 'Вы успешно авторизованы';
                echo 200;
            } else {
                $_SESSION['error'] = 'Логин или пароль введен не верно';
                echo 400;
            }
            die;
        }
        $this->setMeta('Вход');
    }

    public function logoutAction()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        redirect();
    }
}