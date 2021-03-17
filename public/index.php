<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Точка входа приложения
 */


use Core\Application;

require_once '../vendor/autoload.php';


$config = include '../config/config.php';

$app = Application::getInstance();
$app->initialize($config);
$app->run();