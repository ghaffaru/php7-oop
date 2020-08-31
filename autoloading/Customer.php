<?php

class Customer
{
    private $name;

    public function __construct()
    {
        $this->name;
    }

    public function __toString()
    {
        return 'Name: '. $this->name;
    }
}