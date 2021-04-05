<?php

use patterns\AbstractFactory\AbstractFactoryAbstract;
use Patterns\AbstractFactory\TextFactory;

require_once '../../vendor/autoload.php';

$factory = new TextFactory();
render($factory);


function render(AbstractFactoryAbstract $factory)
{
    $header = $factory->getHeader();
    $body = $factory->getBody();
    $footer = $factory->getFooter();

    echo $header->renderHeader();
    echo PHP_EOL;
    echo $body->renderBody();
    echo PHP_EOL;
    echo $footer->renderFooter();
}