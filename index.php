<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require_once __DIR__.'/vendor/autoload.php';

use App\Cars\Lada;
use App\Cars\Tesla;

$lada = new Lada();
$lada->start();
$lada->up(random_int(50, 300));
$lada->down(random_int(0, 70));
$lada->stop();

echo '<hr>';

$tesla = new Tesla();
$tesla->start();
$tesla->up(random_int(50, 300));
$tesla->down(random_int(0, 70));
$tesla->stop();