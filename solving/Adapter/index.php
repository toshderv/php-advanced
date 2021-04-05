<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//use Solving\Adapter\MysqlConnection;
//use Solving\Adapter\Sqlite;

//$pdo = (new MysqlConnection())->connect();
//$stmt = $pdo->prepare('SELECT * FROM `query`');
//$stmt->execute();
//$data = $stmt->fetchAll();
//var_dump($data); // This is work

//$pdo = (new Sqlite())->auth();
//$stmt = $pdo->query('SELECT * FROM `query`');
//$data = $stmt->fetchAll();
//var_dump($data); // This is work

use Solving\Adapter\Connection;
use Solving\Adapter\MysqlConnection;
use Solving\Adapter\Sqlite;
use Solving\Adapter\SqliteConnection;

function clientDump(Connection $connection)
{
    $pdo = $connection->connect();
    var_dump($pdo);
    $stmt = $pdo->query('SELECT * FROM `query`');
    $data = $stmt->fetch();

    return $data ?? null;
}
echo 'Mysql data:<br>';
$connection = new MysqlConnection();
$data = clientDump($connection);
var_dump($data);

echo '<br>=============================================================<br>';

echo 'Sqlite data<br>';
$sqlite = new Sqlite();
$connection = new SqliteConnection($sqlite);
$data = clientDump($connection);
var_dump($data);