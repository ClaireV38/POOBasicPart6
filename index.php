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


$alfa = new Car('grey',4,'fuel');
$alfa->setParkBrake(true);
var_dump($alfa);

try {
    echo $alfa->start();
} catch (NoMoreEnergyException $e){
    echo "Exception received  : ". $e->getMessage() . "<br/>";
    $alfa->setEnergyLevel(30);
} catch (Exception $e){
    // code to manage exceptions
    echo "Exception received  : ". $e->getMessage() . "<br/>";
    $alfa->setParkBrake(false);
} finally{
    try {
        echo $alfa->start();
    } catch (NoMoreEnergyException $e){
        echo "Exception received  : ". $e->getMessage() . "<br/>";
        $alfa->setEnergyLevel(30);
    } catch (Exception $e){
        // code to manage exceptions
        echo "Exception received  : ". $e->getMessage() . "<br/>";
        $alfa->setParkBrake(false);
    } finally {
        echo "Ma voiture roule comme un donut";
    }
}


var_dump($alfa);


$A7 = new MotorWay();
var_dump($A7);
$A7->addVehicle($twingo = new Car('green',4,'fuel'));
$A7->addVehicle($master = new Truck('white',3,'fuel',50));
var_dump($A7);


