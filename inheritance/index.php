<?php

// Using the classes
require('./Car.php');

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

