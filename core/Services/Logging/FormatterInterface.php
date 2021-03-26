<?php


namespace Logging;


interface FormatterInterface
{
    /**
     * Formats the log
     *
     * @param string $level
     * @param string $message
     * @param array $context
     *
     * @return string
     */
    public function format(string $level, string $message, array $context = []): string;
}