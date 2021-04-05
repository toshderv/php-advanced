<?php


namespace Patterns\AbstractFactory;


class TextFooter implements FooterInterface
{

    public function renderFooter()
    {
        return 'Footer';
    }
}