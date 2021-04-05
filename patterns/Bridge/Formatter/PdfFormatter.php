<?php


namespace Patterns\Bridge\Formatter;


class PdfFormatter extends FormatAbstract
{

    public function format($data) {
        echo 'PDF report is generated' . PHP_EOL;
    }
}