<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    /**
     * @var integer
     */
    private $storageCapacity;

    /**
     * @var integer
     */
    private $currentLoading;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function checkloading(): string




}
