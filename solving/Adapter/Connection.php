<?php


namespace Solving\Adapter;


use PDO;


interface Connection
{
    public function connect(): PDO;
}