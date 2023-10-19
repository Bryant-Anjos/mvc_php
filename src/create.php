<?php

require_once 'vendor/autoload.php';

use App\Models\UsersModel;
use App\Controllers\UsersController;

$usersModel = new UsersModel;
$usersController = new UsersController($usersModel);
$usersController->create();
