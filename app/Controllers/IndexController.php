<?php


namespace App\Controllers;


/**
 * Class IndexController
 * Пример контроллера
 *
 * @package App\Controllers
 */
class IndexController
{
    public function index($name, $var)
    {
        echo 'Run index method index controller with params name, var: ' . $name . ' - ' . $var;
    }

    public function user()
    {
        echo 'User method';
    }
}