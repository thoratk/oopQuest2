<?php
require_once 'Car.php';
require_once 'Truck.php';
//$car = new Car('green', 4, 'electric');
//echo $car->forward();
//var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);
$trunk=new Truck('red',4,'electric',50);
echo $trunk->calculateCapacity();