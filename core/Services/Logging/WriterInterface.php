<?php


namespace Logging;


interface WriterInterface
{
    /**
     * @param string $content
     * @return void
     */
    public function write(string $content);
}