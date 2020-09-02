<?php

require __DIR__ .  '../../vendor/autoload.php';

use App\Models\{Admin, User};

// $admin = new Admin();

$user = new User();

$admin->login('admin@gmail.com', '12433');

// user can also use the function login from the trait
// $user->login('user@gmail.com', 'dahk');


