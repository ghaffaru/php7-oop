<?php

class Student
{
    private $name;

    private $level;

    private $info;
    public function __construct($name, $level, $info)
    {
        $this->name = $name;
        $this->level = $level;
        $this->info = $info;
    }

    // what to do when object is called as a string
    public function __toString()
    {
        return 'Name: ' . $this->name . ' Level: ' . $this->level;
    }

    // called when the object of the class is called as a function
    public function __invoke()
    {
        echo 'Student Acting as function';
    }

    // what should be shown when var_dump is called on the object
    public function __debugInfo()
    {
        return [
            'Student Name' => $this->name,
            'Student Level' => $this->level
        ];
    }

    // before object serialization
    public function __sleep()
    {
        // do stuff
        return [
            'name'
        ];
    }

    // after unserializing an object
    public function __wakeup()
    {
        echo 'Unserialized';
    }

    // what to do when object is cloned (Deep Cloning)
    public function __clone()
    {
        
        foreach ($this as $key => $value)
        {
            if (is_object($value))
            {
                $this->$key = clone $this->$key;
            }
        }
    }
}

// Usage
$student1 = new Student('Ghaff', 100);

echo $student1;

if (is_callable($student1))
{
    $student1(); // called as a function
}

var_dump($student1); // overwritten by __debugInfo

serialize($student1); // serializing to trigger __sleep

echo serialize($student1);

unserialize(serialize($student1));