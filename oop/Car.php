<?php


namespace Oop;


class Car extends Vehicle
{
    use PowerCalculator, TestTrait {
        PowerCalculator::calculate insteadof TestTrait;
        TestTrait::calculate as testCalculate;
    }

    public static $country = 'USA';

    protected $name;

    protected $engine;

    public function __construct($name, $year)
    {
        $this->name = $name;
        $this->year = $year;
        $this->engine = new Engine();
    }

    public static function getCountry()
    {
        return self::$country;
    }

    public function sayYear()
    {
        echo $this->year;
    }

    public function sayName()
    {
        echo $this->name;
    }

    public function move()
    {
        $this->startEngine();

        echo "Going\n";
    }

    protected function startEngine()
    {
        $this->engine->start();

        // ...
    }


    public function __sleep()
    {
        return [
            'year'
        ];
    }

    public function __wakeup()
    {
        $this->name = 'Honda';
    }

    public function start()
    {
        // TODO: Implement start() method.
    }
}