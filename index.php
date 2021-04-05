<?php

class A {
    private static $a;

    public function __construct($a)
    {
        self::$a = $a;
    }
}

$a = new A(5);
$b = new A(100);










use Oop\Car;

require_once 'vendor/autoload.php';

$writer = new FileWriter('log.txt');
$writer = new DbWriter();


$logger = new Logger($writer);
$logger->log('Test');


// ..

$logger->log('Hello');




















require_once 'Shop/Order.php';
require_once 'Sorting/Order.php';


$students = ['Иванов', 'Петров', 'Сидоров'];
$students2 = ['Орлов', ...$students, 'Синицын'];

usleep(5_000_000);

$a = true;

$ob = new Car();

exit();


$params = [
    [
        'id' => 1,
        'name' => 'a',
    ],
    [
        'id' => 2,
        'name' => 'b',
    ]
];
$ids1 = array_map(function($item){
    return $item['id'];
}, $params);

$ids2 = array_map(fn($item) => $item['id'], $params);






list($a, $b) = $params;

[$a, $b] = $params;



test(new class() extends Car {
    protected $name = '';
    public function __construct($name, $year)
    {
        parent::__construct($name, $year);
    }
});


function test(Car $car)
{
    // TODO
}






$arr = [];
usort($arr, function($a, $b){
    /*if ($a === $b) {
        return 0;
    }

    return $a > $b ? 1 : 0;*/

    return $a <=> $b;
});


//echo Car::getCountry();

set_error_handler(function(){
    $a = '';
});

register_shutdown_function(function(){
    $a = '';
});

run(5, 2);
function run($a, $b)
{
    $math = new \Oop\Math();
    try {
        $math->divide($a, $b);
    } catch (Error $exception) {
        $t = '';
    }

    /*try {
        $result = $math->divide($a, $b);
    } catch (\Oop\DivideByZeroException $exception) {
        echo $exception->getMessage() . PHP_EOL;
    } catch (RuntimeException $exception) {
        echo 'Catch runtime exception' . PHP_EOL;
    } finally {
        echo 'Finally' . PHP_EOL;
    }*/
}

echo "Next line";


// ...

exit();

















$car = new Car('BMW', 2017);

unset($car);

exit();






$order = new Sorting\Order();
$order2 = new \Shop\Order();


$vehicles['car'] = $car;
echo $vehicles['car']->calculate() . PHP_EOL;
echo $vehicles['car']->testCalculate();

exit();
$vehicles['plain'] = new \Oop\Plain();
$vehicles['ship'] = new \Oop\Ship();


print_r($this);

//$vehicles['cat'] = new \Oop\Cat();

// ...

/**
 * @param \Oop\Vehicle[] $vehicles
 */
function manageVehicles(array $vehicles)
{
    foreach ($vehicles as $vehicle) {
        if (!$vehicle instanceof \Oop\MovebleInterface) {
            throw new Exception('class not implements ' . \Oop\MovebleInterface::class);
        }

        if ($vehicle->getStatus() === Car::STATUS_READY) {
            $vehicle->move();
        }
    }
}

function sendVehicle(\Oop\MovebleInterface $vehicle)
{
    $vehicle->move();
}

manageVehicles($vehicles);

/*$serialized = serialize($car);

$unserialized = unserialize($serialized);*/



/*$file = new File('test.txt');
$file->open();

// ...

$file2 = clone $file;
$file2->setFileName('hello.txt');
$file2->open();*/

exit();