<?php

// index.php


require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';
require_once 'Highway.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Skateboard.php';
require_once 'Bike.php';


$alfa = new Car('grey',4,'fuel');
$alfa->setParkBrake(true);
var_dump($alfa);

var_dump($alfa);

$islightOn = $alfa->switchOn();
if ($islightOn)
    echo "la lumière est allumée <br>";
else
    echo "la lumière est éteinte <br>";

$islightOn = $alfa->switchOff();
if ($islightOn)
    echo "la lumière est allumée <br>";
else
    echo "la lumière est éteinte <br>";


$btween = new Bike('black',1);
var_dump($btween);
try {
    $islightOn = $btween->switchOn();
} catch (Exception $e)
{
    echo "Exception received  : ". $e->getMessage() . "<br/>";
}
if ($islightOn)
    echo "la lumière est allumée <br>";
else
    echo "la lumière est éteinte <br>";


$btween->forward();
var_dump($btween);
try {
    $islightOn = $btween->switchOn();
} catch (Exception $e)
{
    echo "Exception received  : ". $e->getMessage() . "<br/>";
}
if ($islightOn)
    echo "la lumière est allumée <br>";
else
    echo "la lumière est éteinte <br>";

$islightOn = $btween->switchOff();
if ($islightOn)
    echo "la lumière est allumée <br>";
else
    echo "la lumière est éteinte <br>";







