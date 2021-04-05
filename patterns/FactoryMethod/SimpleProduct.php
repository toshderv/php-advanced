<?php


namespace Patterns\FactoryMethod;


class SimpleProduct implements ProductInterface
{
    public function __construct()
    {

    }

    public function getName(): string
    {
        return "Simple product\n";
    }
}