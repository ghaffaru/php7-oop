<?php
declare(strict_types=1); // strict scalar type hinting

require 'User.php';
require 'UserController.php';

$user1 = new User(1, 'Ghaff');

UserController::update($user1, 'Wal');

// throws error , expects User object as first param
// UserController::update('test', 'Muamed'); 


echo $user1->name; // the name got changed

$user2 = new User(2, 'Samed');

UserController::index([$user1, $user2]);

echo UserController::getName($user2);