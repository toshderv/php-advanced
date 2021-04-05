<?php


namespace Solving\Adapter;


use PDO;


class SqliteConnection implements Connection
{
    /** @var Sqlite */
    private Sqlite $sqlite;

    public function __construct(Sqlite $sqlite)
    {
        $this->sqlite = $sqlite;
    }

    public function connect(): PDO
    {
        return $this->sqlite->auth();
    }
}