<?php


namespace App\Services\Logger;


use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{
    private function format($level, $message, $context, $timestamp)
    {
        $contextFormatted = '';
        $date = new \DateTime();

        $contextFormatted .= $date->setTimestamp($timestamp)->format('Y-m-d H:i:s') . ' '
            . 'Level: ' . $level . ' - ' . $message . PHP_EOL;

        foreach ($context as $key => $item) {
            $contextFormatted .= "###### TRACE $key: ######" . PHP_EOL
                . 'In line: ' . $item['line'] . PHP_EOL
                . 'In File: ' . $item['file'] . PHP_EOL
                . "###### END TRACE $key ######" . PHP_EOL;
        }

        $contextFormatted .= PHP_EOL . PHP_EOL;

        return $contextFormatted;
    }

    private function write($level, $message, $context)
    {
        $timestamp = new \DateTime();
        $filename = 'RoutingLog.txt';
        $logPath = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR
            . '..' . DIRECTORY_SEPARATOR . 'storage'
            . DIRECTORY_SEPARATOR . 'logs'
            . DIRECTORY_SEPARATOR . $filename;

        $logText = $this->format($level, $message, $context, $timestamp->getTimestamp());

        file_put_contents($logPath, $logText, FILE_APPEND | LOCK_EX);
    }

    /**
     * @inheritDoc
     */
    public function emergency($message, array $context = array())
    {
        // TODO: Implement emergency() method.
    }

    /**
     * @inheritDoc
     */
    public function alert($message, array $context = array())
    {
        // TODO: Implement alert() method.
    }

    /**
     * @inheritDoc
     */
    public function critical($message, array $context = array())
    {
        // TODO: Implement critical() method.
    }

    /**
     * @inheritDoc
     */
    public function error($message, array $context = array())
    {
        $level = (new \ReflectionMethod(__METHOD__))?->name;

        $this->write($level, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function warning($message, array $context = array())
    {
        // TODO: Implement warning() method.
    }

    /**
     * @inheritDoc
     */
    public function notice($message, array $context = array())
    {
        // TODO: Implement notice() method.
    }

    /**
     * @inheritDoc
     */
    public function info($message, array $context = array())
    {
        // TODO: Implement info() method.
    }

    /**
     * @inheritDoc
     */
    public function debug($message, array $context = array())
    {
        // TODO: Implement debug() method.
    }

    /**
     * @inheritDoc
     */
    public function log($level, $message, array $context = array())
    {
        // TODO: Implement log() method.
    }
}