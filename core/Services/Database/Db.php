<?php


namespace Core\Services\Database;


class Db
{
    /**
     * @var \PDO
     */
    protected \PDO $pdo;

    /**
     * Db constructor.
     * @param $dsn
     * @param $user
     * @param $password
     */
    public function __construct($dsn, $user, $password)
    {
        $this->pdo = new \PDO($dsn, $user, $password);
    }

    /**
     * Return sql query result
     * @param Query $query
     * @return array
     */
    public function query(Query $query): array
    {
        $sql = $query->toSql();
        $result = $this->pdo->query($sql);

        return $result->fetchAll();
    }
}