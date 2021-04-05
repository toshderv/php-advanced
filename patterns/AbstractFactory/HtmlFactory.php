<?php


namespace Patterns\AbstractFactory;


class HtmlFactory extends AbstractFactoryAbstract
{
    public function getHeader(): HeaderInterface
    {
        return new HtmlHeader();
    }

    public function getBody(): BodyInterface
    {
        return new HtmlBody();
    }

    public function getFooter(): FooterInterface
    {
        return new HtmlFooter();
    }
}