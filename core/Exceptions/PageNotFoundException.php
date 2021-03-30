<?php


namespace Core\Exceptions;


class PageNotFoundException extends HttpException
{
    protected $message = "Page not found";
    protected $code = 404;
}