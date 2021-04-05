<?php


namespace Patterns\AbstractFactory;


class TextFactory extends AbstractFactoryAbstract
{

    public function getHeader(): HeaderInterface
    {
        return new TextHeader();
    }

    public function getBody(): BodyInterface
    {
        return new TextBody();
    }

    public function getFooter(): FooterInterface
    {
        return new TextFooter();
    }
}