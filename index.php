<?php


session_start();
require_once "vendor/autoload.php";
require_once "App/Route.php";

use App\Route;
error_reporting(E_ALL^(E_NOTICE | E_WARNING));
$kernel = new Route($_GET['simonsi']);

$controller = $kernel->getController();

 ?>
