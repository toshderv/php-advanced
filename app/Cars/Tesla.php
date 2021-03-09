<?php


namespace App\Cars;

use App\Cars\Car;


class Tesla extends Car
{
    protected const CAR_NAME = 'Tesla';
    protected const CAR_SPEED_MAX = 245;

    public function __construct()
    {
        $this->carName = self::CAR_NAME;
        $this->carSpeedMax = self::CAR_SPEED_MAX;
    }
}