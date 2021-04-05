<?php


namespace Patterns\AbstractFactory;


class HtmlBody implements BodyInterface
{
    public function renderBody()
    {
        return '<p>Body</p>';
    }
}