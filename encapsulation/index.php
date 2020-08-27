<?php

require('./Account.php');

$myAccount = new Account();

echo "Current Balance: " .  $myAccount->getBalance();

echo "<br/>";
// deposit
$myAccount->deposit(2000);

// withdraw
$myAccount->withdraw(245550);