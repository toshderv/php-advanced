<?php


namespace Patterns\Bridge\Formatter;


class JsonFormatter extends FormatAbstract
{
    public function format($data) {
        $json = json_encode($data);

        echo 'Created report' . $json . PHP_EOL;
    }
}