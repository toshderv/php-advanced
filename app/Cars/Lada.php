<?php


namespace App\Cars;


class Lada extends Car
{
    protected const CAR_NAME = 'Lada';
    protected const CAR_SPEED_MAX = 160;

    public function __construct()
    {
        $this->carName = self::CAR_NAME;
        $this->carSpeedMax = self::CAR_SPEED_MAX;
    }

    public function start(): void
    {
        $count = 0;

        while (random_int(1, 5) !== 1) {
            echo 'vg - ';
            $count++;
        }

        echo $count === 0 ? 'You are lucky! It started up the first time =) - ' : '';

        parent::start();
    }
}