<?php


namespace Patterns\FactoryMethod;


class DiscountProduct implements ProductInterface
{
    public function getName(): string
    {
        return "Discount product\n";
    }
}