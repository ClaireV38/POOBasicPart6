<?php

require_once 'Vehicle.php';

abstract class Highway
{
    /**
     * @var array
     */
    protected $currentVehicles = [];

    /**
     * @var integer
     */
    protected $nbLane;

    /**
     * @var integer
     */
    protected $maxSpeed;

    /**
     *
     */
    abstract public function AddVehicle(Vehicle $Vehicle);

    /**
     * @return array
     */
    public function getCurrentVehicles(): int
    {
        return $this->currentVehicles;
    }

    /**
     *
     */
    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    /**
     * @return integer
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     *
     */
    public function setNbLane(int $nbLane): void
    {
        $this->$nbLane = $nbLane;
    }

    /**
     * @return integer
     */
    public function maxSpeed(): int
    {
        return $this->nbLane;
    }

    /**
     *
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->$maxSpeed = $maxSpeed;
    }


}
