<?php
// Autoloading
// Automatically locate classes without require or include

function loader($class)
{
    $file = $class . '.php';


    if (!file_exists($file))
    {
        return false;
    }
    include $file;
}

spl_autoload_register('loader');