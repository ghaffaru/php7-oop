<?php

// Composer manages dependencies
// requiring composer's autoload file to automatically autoload classes
require __DIR__ .  '../../vendor/autoload.php';

use App\Models\Post;

$post = new Post();

// Anonymous function

$formats = ['PHP', 'Python', 'Ruby'];

function find(string $name, array $formats) 
{
    $found = array_filter($formats, function ($format) use ($name) {
        return $format === $name;
    });

    if (count($found))
    {
        return reset($found);
    }

    return null;
}

var_dump(find('Java', $formats));

// Reflection
$class = new ReflectionClass(Post::class);
var_dump($class);