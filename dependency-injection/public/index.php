<?php

use App\Format\JSON;
use App\Format\XML;
use App\Serializer;

require __DIR__ .  '../../vendor/autoload.php';

print_r('Dependency Injection');

$data = [
    'name' => 'Ghaff',
    'age' => 45
];

$serializer = new Serializer(new XML());
var_dump($serializer->serialize($data));
