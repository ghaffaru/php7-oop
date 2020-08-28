<?php

require('./PassengerVehicle.php');

// extends another subclass 'PassengerVehicle
class Car extends PassengerVehicle
{
    private $noOfDoors;

    public function getNoOfDoors()
    {
        return $this->noOfDoors;
    }

    public function setNoOfDoors($noOfDoors)
    {
        $this->noOfDoors = $noOfDoors;
    }
}