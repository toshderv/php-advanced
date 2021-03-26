<?php


namespace Core\Contracts;


/**
 * Class FactoryAbstract
 * Простая реализация паттерна фабричного метода (Factory Method)
 * Пример использования паттерна на практике
 *
 * @package Core\Contracts
 */
abstract class FactoryAbstract
{
    /**
     * @var
     */
    protected $app;

    /**
     * @var array
     */
    protected array $options;

    /**
     * FactoryAbstract constructor.
     * @param $app
     * @param array $options
     */
    public function __construct($app, $options = [])
    {
        $this->app = $app;
        $this->options = $options;
    }

    /**
     * Публичный метод, через который и будет происходить взаимодействие с конкретными фабриками
     *
     * @return mixed
     */
    public function createInstance(): mixed
    {
        return $this->createConcrete();
    }

    /**
     * Фабричный метод, который должны реализовать все наследники - фабрики, создающие конкретные экземпляры
     *
     * @return mixed
     */
    abstract protected function createConcrete();
}