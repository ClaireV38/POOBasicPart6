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

$A7 = new MotorWay();
var_dump($A7);
$A7->addVehicle($twingo = new Car('green',4,'fuel'));
$A7->addVehicle($master = new Truck('white',3,'fuel',50));
var_dump($A7);

$mainAvenue = new ResidentialWay();
var_dump($mainAvenue);
$mainAvenue->addVehicle($alfa = new Car('green',4,'fuel'));
$mainAvenue->addVehicle($mySkate = new Skateboard('fushia',1));
$mainAvenue->addVehicle($traffic = new Truck('cream',3,'fuel',70));
var_dump($mainAvenue);

$greenLane = new PedestrianWay();
var_dump($greenLane);
$greenLane->addVehicle($megane = new Car('violet',4,'fuel'));
$greenLane->addVehicle($mySkate2 = new Skateboard('red',1));
$greenLane->addVehicle($docker = new Truck('blue',4,'fuel',20));
var_dump($greenLane);