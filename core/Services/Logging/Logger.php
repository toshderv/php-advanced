<?php

namespace Logging;

/**
 * Interface RunableInterface
 * Интерфейс для запуска приложения
 *
 * @package Logging
 */
class Logger extends \Psr\Log\AbstractLogger
{

    /**
     * @var WriterInterface
     */
    protected WriterInterface $writer;

    /**
     * @var FormatterInterface
     */
    protected FormatterInterface $formatter;

    /**
     * Logger constructor.
     * @param WriterInterface $writer
     * @param FormatterInterface $formatter
     */
    public function __construct(WriterInterface $writer, FormatterInterface $formatter)
    {
        $this->writer = $writer;
        $this->formatter = $formatter;
    }

    /**
     * @inheritDoc
     */
    public function log($level, $message, $context = array())
    {
        $content = $this->formatter->format($level, $message, $context);
        $this->writer->write($content);
    }
}