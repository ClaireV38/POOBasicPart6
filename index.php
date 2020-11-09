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
require_once 'Speedometer.php';

$distanceInKm = 10 ;
$distanceInMiles =6.21;

echo "{$distanceInKm} km correspond à " . Speedometer::convertKmToMiles($distanceInKm) . "  Miles <br>";
echo "{$distanceInMiles} Miles correspond à " . Speedometer::convertMilesToKm($distanceInMiles) . " km <br>";









