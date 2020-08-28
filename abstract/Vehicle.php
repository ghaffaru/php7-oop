<?php

// Abstract Classes -> cant create an object from them
// Eg.

abstract class Vehicle
{
    private $color;


    // abstract method -> must be implemented by subclass
    abstract public function doMaintainance();
}

// Creates an error
$vehicle1 = new Vehicle();


class Car extends Vehicle
{
    // Implementing doMaintainance abstract method
    public function doMaintainance()
    {
        echo 'Car maintance';
    }
}

// Car is a concrete class
// It implements all abstract methods