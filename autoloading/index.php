<?php

require __DIR__ . '/autoloader_fun.php';


// Automatically loaded !
$price = new Product('Phone', 100);

$customer = new Customer('Ghaff');

echo $customer;

echo $price;