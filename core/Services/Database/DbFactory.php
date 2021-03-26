<?php

namespace Core\Services\Database;

use Core\Contracts\FactoryAbstract;

class DbFactory extends FactoryAbstract
{
    /**
     * @return Db
     */
    protected function createConcrete(): Db
    {
        return new Db($this->options['dsn'], $this->options['user'], $this->options['password']);
    }
}