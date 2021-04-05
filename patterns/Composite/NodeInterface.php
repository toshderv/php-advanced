<?php


namespace Patterns\Composite;


interface NodeInterface
{
    public function render();

    public function addChild(NodeInterface $node);
}