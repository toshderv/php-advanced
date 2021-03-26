<?php


namespace Core\Services\Routing;


use Core\Contracts\FactoryAbstract;

/**
 * Class RouterFactory
 * Реализация фабричного метода, которая создает конкретный экзепляр
 *
 * @package Core\Services\Routing
 */
class RouterFactory extends FactoryAbstract
{
    /**
     * @return Router
     */
    protected function createConcrete(): Router
    {
        return new Router();
    }
}