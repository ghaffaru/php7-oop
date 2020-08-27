<?php

class Calculator
{
    public $number1;

    public $number2;

    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function add()
    {
        return $this->number1 + $this->number2;
    }

    public function subtract()
    {
        return $this->number1 - $this->number2;
    }

    public function multiply()
    {
        return $this->number1  * $this->number2;
    }

    public function divide()
    {
        return $this->number1 / $this->number2;
    }
}

