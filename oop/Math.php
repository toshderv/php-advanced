<?php


namespace Oop;


class Math
{
    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new DivideByZeroException('Hello', 505);
        }

        //throw new \Exception('Another exception');

        hello();

        return $a / $b;
    }
}