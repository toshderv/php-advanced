<?php


namespace Patterns\Bridge\Report;


use Patterns\Bridge\Formatter\FormatAbstract;

abstract class ReportAbstract
{
    protected $formatter;

    public function __construct(FormatAbstract $formatter)
    {
        $this->formatter = $formatter;
    }

    protected function loadData()
    {
        return [
            'count' => 1000
        ];
    }

    public function generate()
    {
        $data = $this->loadData();
        $this->formatter->format($data);
    }
}