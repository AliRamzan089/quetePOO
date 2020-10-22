<?php

abstract class HighWay 
{
    /**
     * @var string
     */
    private $currentVehicles;

    /**
     * @var int
     */
    private $nbLane;

    /**
     * @var int
     */
    private $maxSpeed;

    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
    
    $this->currentVehicles = $currentVehicles;
    $this->nbLane = $nbLane;
    $this->maxSpeed = $maxSpeed;

    }


    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): array
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): int
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): int
    {
        $this->maxSpeed = $maxSpeed;
    }
    abstract public function addVehicle(object $vehicle);
}