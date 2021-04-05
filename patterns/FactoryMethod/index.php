<?php


require_once '../../vendor/autoload.php';


$factories[] = new \Patterns\FactoryMethod\SimpleProductFactory();
$factories[] = new \Patterns\FactoryMethod\DiscountProductFactory();

/*$simpleProduct = $factory->createInstance();
$discountProduct = $factory->createInstance();*/

$products = createProducts($factories);

/**
 * @param \Patterns\FactoryMethod\FactoryAbstract[] $factories
 */
function createProducts(array $factories)
{
    $products = [];
    foreach ($factories as $factory) {
        $products[] = $factory->createInstance();
    }

    return $products;
}

exit();