<?php


namespace Patterns\Builder;


interface BuilderInterface
{
    public function build(): ProductInterface;
}