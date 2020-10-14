<?php

// index.php


require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$master = new Truck('white', 3, 'fuel', 10);
var_dump($master);
$master->setCurrentLoading(-2);
var_dump($master);
echo $master->checkLoading();
$master->setCurrentLoading(11);
$master->setCurrentLoading(10);
echo $master->checkLoading();
var_dump($master);

$traffic = new Truck('black', 4, 'fuel', 15);
var_dump($traffic);
echo $traffic->forward();
echo '<br> Vitesse du camion : ' . $traffic->getCurrentSpeed() . ' km/h' . '<br>';
echo $traffic->brake();
echo '<br> Vitesse du camion : ' . $traffic->getCurrentSpeed() . ' km/h' . '<br>';
echo $traffic->brake();
echo '<br><br>';


