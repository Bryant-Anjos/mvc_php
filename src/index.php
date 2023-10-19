<?php

require_once 'vendor/autoload.php';

use App\Controllers\User;

$user = new User();

echo $user->name;
