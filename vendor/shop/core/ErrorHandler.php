<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 22.09.2018
 * Time: 19:55
 */

namespace shop;


class ErrorHandler
{
    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exepttionHendler']);
    }

    public function exepttionHendler($e)
    {
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayErrors('exeption', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    protected function logErrors($message = '', $file = '', $line = '')
    {
        error_log("[" . date('Y-m-d H:i:s') . "] Text error: {$message} | File:{$file}| Line: {$line}\n==================\n", 3, ROOT . '/tmp/errors.log');

    }

    protected function displayErrors($errno, $errstr, $errfile, $errline, $response = 404)
    {
        http_response_code($response);
        if ($response == 404 && !DEBUG) {
            require WWW . '/errors/404.php';
            die;
        }
        if (DEBUG) {
            require WWW . '/errors/dev.php';
        } else {
            require WWW . '/errors/prod.php';
        }
        die;
    }
}