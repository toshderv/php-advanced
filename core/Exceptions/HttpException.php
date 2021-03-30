<?php


namespace Core\Exceptions;


class HttpException extends \Exception
{
    protected $message = "Internal Server Error";
    protected $code = 500;
}