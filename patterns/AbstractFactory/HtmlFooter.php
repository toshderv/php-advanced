<?php


namespace Patterns\AbstractFactory;


class HtmlFooter implements FooterInterface
{
    public function renderFooter()
    {
        return '<h3>Footer</h3>';
    }
}