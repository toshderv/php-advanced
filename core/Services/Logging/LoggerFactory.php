<?php


namespace Logging;


class LoggerFactory extends \Core\Contracts\FactoryAbstract
{
    /**
     * @return Logger
     */
    protected function createConcrete(): Logger
    {
        $writer = new \Logging\DbWriter();
        $formatter = new \Logging\JsonFormatter();
        $logger = new Logger($writer, $formatter);

        return $logger;
    }
}