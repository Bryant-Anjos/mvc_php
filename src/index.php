<?php

require_once 'vendor/autoload.php';

use App\Controllers\UsersController;

$usersController = new UsersController();

$usersController->index();
