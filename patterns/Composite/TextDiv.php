<?php


namespace Patterns\Composite;


class TextDiv extends NodeAbstract
{

    public function render() {
        echo $this->text;

        foreach ($this->children as $child) {
            $child->render();
        }
    }
}