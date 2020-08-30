<?php

require('./PayableInterface.php');

// Implement the interface
class Paypal implements PayableInterface
{
    public function handlePayment()
    {
        // Specific to paypal
    }
}