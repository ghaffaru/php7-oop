<?php


class UserController
{
    public static function update(User $user, string $name) // Requires a User object
    {
        $user->name = $name;
    }  
    
    public static function index(array $users) // Typehinting arrays
    {
        foreach ($users as $user)
        {
            echo $user->name;
        }
    }

    public static function getName(User $user): string // return type of string
    {
        return $user->name;
    }
}