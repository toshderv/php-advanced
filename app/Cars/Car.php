<?php


namespace App\Cars;

use App\MovableInterface;


class Car implements MovableInterface
{
    protected $carName;
    protected $carSpeedMax;
    protected $carSpeedCurrent = 0;
    protected $carAutoServiceCheck = false;

    /**
     * @param $speed
     * @return bool
     */
    private function checkLimitSpeed($speed): bool
    {
        if ($this->carSpeedMax >= $speed) {
            $this->carSpeedCurrent = $speed;

            return true;
        } else {
            $this->carSpeedCurrent = $this->carSpeedMax;
            $this->carAutoServiceCheck = true;

            return false;
        }
    }

    /**
     * @return string
     */
    public function start(): void
    {
        echo $this->carName . ' start engine!<br>';
    }

    /**
     * @return void
     */
    public function stop(): void
    {
        if ($this->carSpeedCurrent !== 0) {
            $this->carSpeedCurrent = 0;
        }

        if ($this->carAutoServiceCheck === true) {
            echo 'It was an amazing trip, but now you have to contact the service station,'
                .'because we used the car to the maximum.<br>';
        } else {
            echo 'We have saved the resource of the machine! Great trip, thanks!<br>';
        }
    }

    /**
     * @param $speed
     * @return void
     */
    public function up($speed): void
    {
        if ($this->checkLimitSpeed($speed) === true) {
            echo "Ok, we are driving at $speed km / h<br>";
        } else {
            echo 'Easier, easier, friend.'
                . "The maximum speed of this car is $this->carSpeedMax km / h."
                . 'But I warn you, after that you will have to go the service station.<br>';
        }
    }

    /**
     * @param $speed
     * @return void
     */
    public function down($speed): void
    {
        if ($speed === 0) {
            if ($this->carSpeedCurrent > 0) {
                $this->carSpeedCurrent = $speed;
                echo 'Great stop!<br>';
            } else {
                echo 'We already stand!<br>';
            }
        } elseif ($speed >= $this->carSpeedCurrent) {
            echo 'Are you sure you want to slow down? =)<br>';
        } else {
            echo "You have successfully reduced your speed to $speed km / h from $this->carSpeedCurrent km / h<br>";
            $this->carSpeedCurrent = $speed;
        }
    }
}