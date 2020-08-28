<?php

require('./Vehicle.php');

class PassengerVehicle extends Vehicle
{
    private $passengerSeats;

    public function getPassengerSeats()
    {
        return $this->passengerSeats;
    }

    public function setPassengerSeats($seats)
    {
        $this->passengerSeats = $seats;
    }
}