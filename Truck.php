<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    
     /**
    * @var integer
    */
    protected $stockCapacity;

    /**
    * @var integer
    */
    protected $load = 0;

    /**
     * @var string
     */
    private $energy ="fuel";

    /**
     * @var int
     */
    private $energyLevel;


    public function __construct(int $stockCapacity, int $energyLevel, string $color, int $nbSeats, string $energy)
    {
    parent::__construct($color, $nbSeats);
    $this->setStockCapacity($stockCapacity);
    $this->setEnergyLevel($energyLevel);
    $this->setEnergy($energy);

    }
   
   public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function setStockCapacity(int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    } 

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    } 


   public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function isFull(): string
    {
        $sentence = "";
        if ($this->getStockCapacity() < $this->getLoad()){
            $sentence .= "is full";
            return $sentence;
        } else {
        $sentence .= "in filling";
        return $sentence;
        }
    }
}