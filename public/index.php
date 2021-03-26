<?php

//error_reporting(E_ALL);
//ini_set('display_startup_errors', 1);
//ini_set('display_errors', '1');

/**
 * Точка входа приложения
 */
use Core\Application;

require_once '../vendor/autoload.php';

$config = include '../config/config.php';

$app = Application::getInstance();
$app->initialize($config);
$app->run();