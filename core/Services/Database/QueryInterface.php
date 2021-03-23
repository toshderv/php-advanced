<?php


namespace Core\Services\Database;


interface QueryInterface
{
    public function toSql(): string;
}