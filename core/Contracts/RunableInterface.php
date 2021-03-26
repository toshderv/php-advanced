<?php


namespace Core\Contracts;


/**
 * Interface RunableInterface
 * Интерфейс для запуска приложения
 *
 * @package Core\Contracts
 */
interface RunableInterface
{
    /**
     * @return mixed
     */
    public function run();
}