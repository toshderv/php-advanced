<?php


namespace Core\Services\Database;


class QueryBuilder implements BuilderInterface
{
    protected string $dbName;

    protected array|string $select = '*';

    protected ?array $where = null;

    /**
     * @param string $dbName
     * @return QueryBuilder
     */
    public function setDbName(string $dbName): static
    {
        $this->$dbName = $dbName;
        return $this;
    }

    /**
     * @param array|string $select
     * @return QueryBuilder
     */
    public function setSelect(array|string $select): static
    {
        $this->select = $select;
        return $this;
    }

    /**
     * @param array|null $where
     * @return QueryBuilder
     */
    public function setWhere(?array $where): static
    {
        $this->where = $where;
        return $this;
    }
}