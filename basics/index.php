<?php

require('./Calculator.php');
// Using the Calculator class

$calculator1 = new Calculator(10, 20);

echo '<br />';
echo 'Add: ' . $calculator1->add();

echo '<br />';
echo 'Subtraction: ' . $calculator1->subtract();

echo '<br />';

echo 'Multiply: ' . $calculator1->multiply();

echo '<br />';

echo 'Division: ' . $calculator1->divide();





