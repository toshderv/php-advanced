<?php


namespace Patterns\Composite;


class Div extends HtmlNodeAbstract
{

    protected function getName(): string {
        return 'div';
    }
}