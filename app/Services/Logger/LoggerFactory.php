<?php


namespace App\Services\Logger;


use Core\Contracts\FactoryAbstract;


class LoggerFactory extends FactoryAbstract
{
    protected function createConcrete()
    {
        return new Logger();
    }
}