<?php

use Reflection\User;

require_once '../vendor/autoload.php';

$reflectionClass = new ReflectionClass(User::class);
/*$properties = $reflectionClass->getProperties();
foreach ($properties as $property) {
    $name = $property->getName();
    $type = $property->getType();
}*/

$constructor = $reflectionClass->getMethod('__construct');
$input = [
    'name' => 'Hello',
    'age' => 12,
];
$arguments = [];
foreach ($constructor->getParameters() as $parameter) {
    $name = $parameter->getName();
    $arguments[$name] = isset($input[$name]) ? $input[$name] : null;
}

$user = $reflectionClass->newInstanceArgs($arguments);

/*$reflectionFunction = new ReflectionFunction('getSomeThing');

function getSomeThing(int $var)
{

}*/

exit();