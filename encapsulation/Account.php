<?php

// Encapsulation => Hiding the class data from outside world
// only he code that is inside the class can access and change the data
// Practical in sensitive application like banking

// Eg. Account class
class Account 
{
    // securing the balance attribute 
    private $balance = 0;

    // balance accessible by only class methods
    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "Amount is deposited into  your account<br/>";
        echo "New balance is ". $this->balance . "<br/>";
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function withdraw($amount)
    {
        if ($amount <= $this->balance)
        {
            $this->balance -= $amount;
            echo "Cash withdrawn<br/>";
            echo "Remaining balance is " . $this->balance;
        }
        else 
        {
            echo "Insufficient Balance";
        }
    }

}