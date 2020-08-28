<?php

require('./TransportationVehicle.php');
// 
class Truck extends TransportationVehicle
{
    private $sizeOfContainer;

    public function getSizeOfContainer()
    {
        return $this->sizeOfContainer;
    }

    public function setSizeOfContainer($sizeOfContainer)
    {
        $this->sizeOfContainer = $sizeOfContainer;
    }
}