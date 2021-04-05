<?php


namespace Patterns\Composite;


abstract class NodeAbstract implements NodeInterface
{
    /**
     * @var NodeInterface[]
     */
    protected $children = [];

    protected $text;

    public function __construct($text = null)
    {
        $this->text = $text;
    }

    public function addChild(NodeInterface $node) {
        $this->children[] = $node;
    }
}