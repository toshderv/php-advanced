<?php


namespace Oop;


class File
{
    protected $fileName;

    protected $file;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    public function open()
    {
        $this->file = fopen($this->fileName, 'w');
    }

    public function __clone()
    {
        unset($this->file);
    }
}