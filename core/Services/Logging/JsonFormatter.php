<?php


namespace Logging;


class JsonFormatter implements FormatterInterface
{

    /**
     * @inheritDoc
     */
    public function format(string $level, string $message, array $context = []): string
    {
        $log = [
            'level' => $level,
            'message' => $message,
            'context' => $context,
        ];

        return json_encode($log);
    }
}