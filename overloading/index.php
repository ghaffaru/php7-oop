<?php

require 'Employee.php';

$employee1 = new Employee();


$employee1->name = 'Ghaff'; // property overloading

echo $employee1->name;

$employee1->testFun('Hey');

Employee::test();