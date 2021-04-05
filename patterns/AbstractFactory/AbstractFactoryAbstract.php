<?php


namespace Patterns\AbstractFactory;


abstract class AbstractFactoryAbstract
{
    abstract public function getHeader(): HeaderInterface;

    abstract public function getBody(): BodyInterface;

    abstract public function getFooter(): FooterInterface;
}