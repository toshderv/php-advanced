<?php


namespace Solving\Adapter;


use PDO;


class MysqlConnection implements Connection
{
    public function connect(): PDO
    {
        $config = include('config.php');
        $dsn = "mysql:host={$config['mysql']['dsn']['host']};"
            ."dbname={$config['mysql']['dsn']['dbname']};"
            ."charset={$config['mysql']['dsn']['charset']}";
        $user = $config['mysql']['user'];
        $pass = $config['mysql']['pass'];
        $opt = $config['mysql']['opt'];

        return new PDO($dsn, $user, $pass, $opt);
    }
}