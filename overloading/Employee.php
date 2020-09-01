<?php

// Overloading in PHP
// Basically create  dynamic properties

class Employee
{
    // array to hold dynamic properties
    private $info = array();

    // called when a unknown property is set
    public function __set($name, $value)
    {
        $this->info[$name] = $value;
    }

    // called when a dynamic property is called
    public function __get($name)
    {
        if (array_key_exists($name, $this->info))
        {
            return $this->info[$name];
        }
        else
        {
            return null;
        }
    }

    // method overloading
    public function __call($name, $arguments)
    {
        echo 'Method Name: '. $name . ' Arguments: ' . implode(',', $arguments);
    }

    // static method overloading
    public static function __callStatic($name, $arguments)
    {
        echo 'Method Name: ' . $name . ' Arguments: ' . implode(',', $arguments);
    }
}