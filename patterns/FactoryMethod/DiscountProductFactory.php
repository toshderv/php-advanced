<?php


namespace Patterns\FactoryMethod;


class DiscountProductFactory extends FactoryAbstract
{

    protected function createConcrete(): ProductInterface
    {
        // ...
        return new DiscountProduct();
    }
}