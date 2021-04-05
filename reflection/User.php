<?php


namespace Reflection;


class User
{
    public string $name;

    protected $age;

    public function __construct(string $name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}