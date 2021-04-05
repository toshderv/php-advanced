<?php


use Patterns\Builder\ProductBuilder;

require_once '../../vendor/autoload.php';


$builder = new ProductBuilder();

$builder->setName('Hello')
    ->setDesign('style')
    ->setPrice(1234)
    ->setWidth(22);

if (isset($height)) {
    $builder->setHeight(456);
}

$product = $builder->build();


$builder = new ProductBuilder();
$product2 = $builder->setName('Test')
    ->setPrice(333)->setDescription('Desc')->setDesign('test')->build();

exit();
