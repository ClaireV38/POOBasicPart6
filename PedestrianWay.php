<?php

require_once 'Highway.php';
require_once 'Vehicle.php';

final class PedestrianWay extends Highway
{
    const NBLANE = 1;
    const MAXSPEED = 10;

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
     * add a Vehicle in currentVehicle property if the Vehicle is a bike or skateboarc
     */
    public function addVehicle(Vehicle $vehicle): self
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard ) {
            array_push($this->currentVehicles, $vehicle);
        }
        return $this;
    }
}