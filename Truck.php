<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var integer
     */
    private $storageCapacity;

    /**
     * @var integer
     */
    private $currentLoading;

    /**
     * @var string
     */
    private $energy;


    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function checkLoading(): string
    {
        $message="";
        if ($this->currentLoading === $this->storageCapacity) {
            $message = "full";
        } else {
            $message = "in filling";
        }
        return $message;
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        if ($storageCapacity >= 0) {
            $this->storageCapacity = $storageCapacity;
        }
    }


    public function getCurrentLoading(): int
    {
        return $this->currentLoading;
    }

    public function setCurrentLoading(int $currentLoading): void
    {
        if ($currentLoading >= 0  && $currentLoading <= $this->storageCapacity) {
            $this->currentLoading = $currentLoading;
        }
    }




}
