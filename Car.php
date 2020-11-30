<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var bool
     */
    private $hasParkBrake;
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

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

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function setParkBrake(): string
    {
        if($hasParkBrake = true){
            return "you can drive safely";
        }else{
            return "Too much used";
        }
        
    }

    public function start()
    {
        try {
           if ($this->hasParkBrake == true) {
            throw new Exception ('Park brake is on');}
        } catch (Exception $e) {
            echo $e->getMessage();
            return $this->setParkBrake(false);
        } finally {
            echo "Ma voiture roule comme un donut";
        }
    }
}