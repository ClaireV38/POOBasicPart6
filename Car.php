<?php

//car.php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

	  /**
	  * @var string
	  */
	private $energy;
	  /**
      * @return string
      */

	  /**
	  * @var integer
	  */
	private $energyLevel;
	  /**
      * @return integer
      */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
      /**
      * @param string $color
      */
    public function setEnergyLevel(int $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }

	  /**
	  * @var bool
	  */
	private $engineIsOn = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);

    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

	public function start(): string
    {
        $sentence = "";
	    if ($this->energyLevel > 0) {
	       	$this->energyLevel--;
	       	$this->engineIsOn = true;
	        $sentence .= "Wroum!";
    	} else {
    		$sentence .= "no more energy !";
    	}
    	return $sentence;
    }

    public function forward(): string
    {
        $sentence = "";
	    if ($this->energyLevel > 0 && $this->engineIsOn === true) {
	       	$this->energyLevel--;
	       	$this->currentSpeed = 50;
	        $sentence .= "Go!";
    	} else {
    		$sentence .= "stop !";
    		$this->currentSpeed = 0;
    		}
    	return $sentence;
    }

    public function brake(): string
	{
	   $sentence = "";
	   while ($this->currentSpeed > 0) {
	       	$this->currentSpeed -= 10;
	        $sentence .= "Brake !!!";
    	}
    	$sentence .= "I'm stopped !";
    	return $sentence;
	}
}