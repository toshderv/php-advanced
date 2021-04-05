<?php


namespace Patterns\FactoryMethod;


class SimpleProductFactory extends FactoryAbstract
{
    protected function createConcrete(): ProductInterface
    {
        // get parameters
        return new SimpleProduct();
    }
}