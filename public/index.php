<?php
require '../vendor/autoload.php';

use App\Controllers\UserController;

$user = new UserController;
$user->index();