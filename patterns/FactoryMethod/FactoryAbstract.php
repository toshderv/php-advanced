<?php


namespace Patterns\FactoryMethod;


abstract class FactoryAbstract
{
    public function createInstance(): ProductInterface
    {
        return $this->createConcrete();
    }

    abstract protected function createConcrete(): ProductInterface;
}