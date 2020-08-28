<?php

require('./TransportationVehicle.php');

class Van extends TransportationVehicle
{
    private $noOfBoxes;

    public function getNoOfBoxes()
    {
        return $this->noOfBoxes;
    }

    public function setNoOfBoxes($noOfBoxes)
    {
        $this->noOfBoxes = $noOfBoxes;
    }
}