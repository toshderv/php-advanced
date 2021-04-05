<?php


namespace Oop;


class Engine
{
    protected $power = 10;

    public function getPower()
    {
        return $this->power;
    }

    public function start()
    {
        echo "Started\n";
    }
}