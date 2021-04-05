<?php


namespace Solving\Adapter;


use PDO;


class Sqlite
{
    public function auth()
    {
        $config = include('config.php');
        $file = $config['sqlite'];

        return new PDO("sqlite:$file");
    }
}