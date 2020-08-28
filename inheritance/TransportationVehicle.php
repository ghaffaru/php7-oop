<?php

class TransportationVehicle extends Vehicle
{
    private $noOfDoors;
    private $loadCapacity;

    public function getNoOfDoors()
    {
        return $this->noOfDoors;
    }

    public function setNoOfDoors($doors)
    {
        $this->noOfDoors = $doors;
    }

    public function getLoadCapacity()
    {
        return $this->loadCapacity;
    }

    public function setLoadCapacity($loadCapacity)
    {
        $this->loadCapacity = $loadCapacity;
    }
}