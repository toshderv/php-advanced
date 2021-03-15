<?php

namespace Core\Contracts;

interface ContainerInterface
{
    public function get();

    public function has();
}