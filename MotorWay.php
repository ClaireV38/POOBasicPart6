<?php

require_once 'Highway.php';
require_once 'Vehicle.php';

final class MotorWay extends Highway
{
    const NBLANE = 4;
    const MAXSPEED = 130;

    /**
     * @const integer
     */
    protected $nbLane = self::NBLANE;

    /**
     * @const integer
     */
    protected $maxSpeed = self::MAXSPEED;

    /**
     * @return MotorWay
     * add a Vehicle in currentVehicle property if the Vehicle is a car
     */
    public function addVehicle(Vehicle $vehicle): self
    {
       if ($vehicle instanceof Car) {
           array_push($this->currentVehicles, $vehicle);
       }
       return $this;
    }
}