<?php


namespace Patterns\Composite;


abstract class HtmlNodeAbstract extends NodeAbstract
{
    abstract protected function getName(): string;

    public function render()
    {
        $tag = $this->getName();
        echo '<' . $tag . '>' . $this->text;
        foreach ($this->children as $child) {
            $child->render();
        }
        echo '</' . $tag . '>';
    }
}