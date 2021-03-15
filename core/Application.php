<?php

namespace Core;

use Core\Contracts\{ContainerInterface, RunnableInterface};

class Application implements ContainerInterface, RunnableInterface
{
    /**
     * @var Application|null
     */
    private static ?Application $instance = null;

    private const GREETING = 'Hello OOP! This is a method called from an instance.';

    /**
     * Application constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return Application
     */
    public static function getInstance(): Application
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function get()
    {
        // TODO: Implement get() method.
    }

    public function has()
    {
        // TODO: Implement has() method.
    }

    /**
     * @return string
     */
    public function run(): string
    {
        // TODO: Implement run() method.

        return self::GREETING;
    }
}