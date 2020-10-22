<?php

require_once 'HighWay.php';

final class PedestrianWay extends Highway
{
    public function addVehicle($vehicle){
        $currentVehicles = [];
        if($vehicle instanceof Bycicle || $vehicle instanceof Skateboard){
            $this->currentVehicles = array_push($currentVehicles, $vehicle);
        }
    }
}