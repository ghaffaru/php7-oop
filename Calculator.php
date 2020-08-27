<?php

class Calculator
{
    public $number1;

    public $number2;

    public function add($number1, $number2)
    {
        return $this->number1 + $this->number2;
    }

    public function subtract($number1, $number2)
    {
        return $this->number1 - $this->number2;
    }

    public function multiply($number1, $number2)
    {
        return $this->number1  * $this->number2;
    }

    public function divide($number1,  $number2)
    {
        return $this->number1 / $this->number2;
    }
}

