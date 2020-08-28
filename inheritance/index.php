<?php

// Using the classes
require('./Car.php');
require('./Bike.php');

$car = new Car();

$car->setNoOfWheels(4);

$car->setColor('Red');

$car->setFuel('Petrol');

$car->setSpeed(0);

$car->setPassengerSeats(4);

$car->setNoOfWheels(2);

$car->start();
echo $car->getColor();
$car->accelerate();
$car->brake();

$bike1 = new Bike();
$bike1->accelerate();
$bike1->brake();