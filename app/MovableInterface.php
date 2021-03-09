<?php


namespace App;


interface MovableInterface
{
    /**
     * Включает зажигание
     * @return void
     */
    public function start(): void;

    /**
     * Выключает зажигание
     * @return void
     */
    public function stop(): void;

    /**
     * Увеличивает скорость движения
     * @param $speed
     * @return void
     */
    public function up($speed): void;

    /**
     * Уменьшает скорость движения
     * @param $speed
     * @return void
     */
    public function down($speed): void;
}