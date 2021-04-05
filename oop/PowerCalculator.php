<?php


namespace Oop;


trait PowerCalculator
{
    protected $engine;

    public function calculate()
    {
        if ($this->engine) {
            return $this->engine->getPower();
        }

        return null;
    }
}