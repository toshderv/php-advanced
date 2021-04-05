<?php


namespace Patterns\Composite;


class Span extends HtmlNodeAbstract
{

    protected function getName(): string {
        return 'span';
    }
}