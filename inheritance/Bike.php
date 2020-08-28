<?php

// extends another subclass 'PassengerVehicle'
require('./PassengerVehicle.php');

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
}