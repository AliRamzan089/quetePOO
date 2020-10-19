<?php

require_once 'Vehicle.php';

class Camion extends Vehicle
{
        const ALLOWED_STOCKAGE = [
            'in filling',
            'full',
        ];
        
    public function getStockage(): string
    {
        return $this->stockage;
    }

    public function setEnergy(string $stockage): Car
    {
        if (in_array($stockage, self::ALLOWED_STOCKAGE)) {
            $this->stockage = $stockage;
        }
        return $this;
    }

}