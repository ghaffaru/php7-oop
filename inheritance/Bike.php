<?php

// extends another subclass 'PassengerVehicle'
// require('./PassengerVehicle.php');

class Bike extends PassengerVehicle
{
    private $saddleHeight;

    public function getSaddleHeight()
    {
        return $this->saddleHeight;
    }

    public function setSaddleHeight($saddleHeight)
    {
        $this->saddleHeight = $saddleHeight;
    }

    // Overriding
    public function accelerate()
    {
        echo "Bike acceleration";
    }

    // Overriding
    public function brake()
    {
        // Calling the parent first. ie. preserving the functionality of the parent class
        echo parent::brake();
        echo 'Bike brake then';
    }
}