<?php

namespace AnalyzeResponse;

use JetBrains\PhpStorm\Pure;

class ViewConstructor
{
    private string $tname = 'Name';
    private string $tvalue = 'Value';
    private string $noData = 'No data';

    /**
     * ViewConstructor constructor.
     * @param array $data
     */
    public function __construct(
        public array $data = []
    )
    {
    }

    /**
     * @return string
     */
    private function baseStyle(): string
    {
        return '<style>'
            .'table{margin: 0 auto; width: 500px}'
            .'th,td{text-align: center}'
            .'</style>';
    }

    /**
     * @return string
     */
    private function tableStructure(): string
    {
        return '<table>'
            .'<thead><tr>'
            ."<th>$this->tname</th>"
            ."<th>$this->tvalue</tr>"
            .'</tr><thead>'
            .'<tbody>'
            .$this->tableData()
            .'</tbody>'
            .'</table>';
    }

    /**
     * @return string
     */
    private function tableData(): string
    {
        $data = $this->data;

        if (empty($data)){
            return "<td colspan='2'>$this->noData</td>";
        }

        $tbodyString = '';

        foreach ($data as $name => $values) {
            $tbodyString .= '<tr>';
            $tbodyString .= "<td>$name</td><td>" . implode(', ', $values) . "</td>";
            $tbodyString .= '<tr>';
        }

        return $tbodyString;
    }

    /**
     * @return string
     */
    private function concatData(): string
    {
        return $this->baseStyle() . $this->tableStructure();
    }

    /**
     * @return mixed
     */
    public function getData(): mixed
    {
        return $this->concatData();
    }
}