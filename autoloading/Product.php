<?php

class Product 
{
    private $name;
    
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;        
    }

    public function __toString()
    {
        return 'Name: ' . $this->name . ' Price: ' . $this->price;
    }
}