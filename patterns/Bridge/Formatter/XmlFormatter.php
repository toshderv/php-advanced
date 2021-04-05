<?php


namespace Patterns\Bridge\Formatter;


class XmlFormatter extends FormatAbstract
{

    public function format($data) {
        echo 'Xml report is generated' . PHP_EOL;
    }
}