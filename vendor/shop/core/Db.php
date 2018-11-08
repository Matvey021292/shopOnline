<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 24.09.2018
 * Time: 23:26
 */

namespace shop;


class db
{
    use TSingletone;

    protected function __construct()
    {
        $db = require_once CONFIG . '/configDB.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if (!\R::testConnection()) {
            throw new \Exception('Error connection DB', 400);
        }
        \R::freeze(true);
        if (DEBUG) {
            \R::debug(true, 1);
        }
        \R::ext('xdispense', function ($type) {
            return \R::getRedBean()->dispense($type);
        });
    }
}