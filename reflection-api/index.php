<?php


// reflection is the ability of a computer program to examine, introspect,
// and modify its own structure and behavior at runtime 

require 'Student.php';

$class = new ReflectionClass(Student::class);

// echo $class;

$constructor = $class->getConstructor();

$parameters = $class->getConstructor()->getParameters();

$className = $class->getName();

$documentation = $class->getDocComment();

$parentClass = $class->getParentClass();


// echo $className;
// echo $documentation;

// Reflection on Methods
$method = new ReflectionMethod(Student::class, 'getName');

$methodDoc = $method->getDocComment();

$isPrivate = $method->isPrivate();

// echo $methodDoc;