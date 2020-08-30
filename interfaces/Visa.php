<?php

require('./Visa.php');

class Visa implements PayableInterface
{
    public function handlePayment()
    {
        // specific to visa
    }
}