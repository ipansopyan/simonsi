<?php

namespace App\Controller;

use App\Route;
use App\Model\Model;

class Controller
{




  public function __construct()
  {
   
  }


  public function view($view)
  {
    $dir = $_SERVER["DOCUMENT_ROOT"];
    include  $dir."/simonsi/App/View/".$view.".php";
  }









}



 ?>
