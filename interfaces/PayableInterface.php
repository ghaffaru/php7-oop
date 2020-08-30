<?php

//An Interface is a piece of code that describes a capability
// but does not give you concrete implementation of what it does.

//It tells you what it does but leaves you to fill in the details of 'how' it does what it does

interface PayableInterface
{
    public function handlePayment();
}