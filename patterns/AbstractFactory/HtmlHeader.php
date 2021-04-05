<?php


namespace Patterns\AbstractFactory;


class HtmlHeader implements HeaderInterface
{
    public function renderHeader()
    {
        return '<h1>Header</h1>';
    }
}