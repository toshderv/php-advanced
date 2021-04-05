<?php


namespace Patterns\AbstractFactory;


class TextHeader implements HeaderInterface
{

    public function renderHeader()
    {
        return 'Header';
    }
}