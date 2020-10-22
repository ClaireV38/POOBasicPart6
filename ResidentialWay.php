<?php

require_once 'Highway.php';
require_once 'Vehicle.php';

final class ResidentialWay extends Highway
{
    const NBLANE = 2;
    const MAXSPEED = 50;

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
     * add a Vehicle in currentVehicle
     */
    public function addVehicle(Vehicle $vehicle): self
    {
        array_push($this->currentVehicles, $vehicle);
        return $this;
    }
}