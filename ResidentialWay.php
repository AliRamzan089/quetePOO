<?php

require_once 'HighWay.php';

final class ResidentialWay extends Highway
{
    public function addVehicle($vehicle){
        $currentVehicles = [];
        if($vehicle instanceof Car || $vehicle instanceof Bycicle || $vehicle instanceof Skateboard){
            $this->currentVehicles = array_push($currentVehicles, $vehicle);
        }
    } 
}