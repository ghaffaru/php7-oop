<?php

class Student
{
    public $name;

    public static $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count += 1;
    }

    public static function getStudentCount()
    {
        return self::$count;
    }

}

$student = new Student('Ghaff');
$student2 = new Student('Wal');

echo Student::$count;

// can also use the static method
echo Student::getStudentCount();