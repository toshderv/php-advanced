<?php


namespace Logging;


/**
 * Class DbWriter
 * @package Logging
 */
class DbWriter implements WriterInterface
{
    /**
     * @var mixed|null
     */
    protected $db;

    /**
     * DbWriter constructor.
     * @param null $db
     */
    public function __construct($db = null)
    {
        $this->db = $db;
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function write($message)
    {
//        file_put_contents('db.txt', $message . PHP_EOL, FILE_APPEND);
    }
}