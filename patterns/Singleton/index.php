<?php

require_once '../../vendor/autoload.php';

$singleton1 = \Patterns\Singleton\Singleton::getInstance();

$singleton2 = \Patterns\Singleton\Singleton::getInstance();

$singleton3 = \Patterns\Singleton\Singleton::getInstance();

exit();