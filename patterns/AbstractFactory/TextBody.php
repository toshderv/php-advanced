<?php


namespace Patterns\AbstractFactory;


class TextBody implements BodyInterface
{

    public function renderBody()
    {
        return 'Body';
    }
}