<?php
/**
 * Class Student
 */
class Student
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Getter for property name
     */
    public function getName(): string 
    {
        return $this->name;
    }
}