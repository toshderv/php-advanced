<?php


namespace Oop;


abstract class Vehicle implements MovebleInterface
{
    public const STATUS_READY = 'ready';

    public const STATUS_SENT = 'sent';

    public const STATUS_BROKEN = 'broken';

    protected $status;

    protected $year;

    public function getStatus()
    {
        return $this->status;
    }

    public function move()
    {
        echo "I am moving\n";
    }

    abstract public function start();
}