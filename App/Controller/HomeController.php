<?php
namespace App\Controller;

$dir = $_SERVER['DOCUMENT_ROOT'];

require_once "Controller.php";
require_once "$dir/simonsi/App/Model/User.php";
require_once "$dir/simonsi/App/Model/Prodi.php";

use App\Controller\Controller;
use App\Model\Model;
use App\Model\User;
use App\Model\Prodi;

/**
 *
 */
class HomeController extends Controller
{

  function __construct()
  {
   
    $this->user = New User();
    $this->prodi = New Prodi();
  }

public function index(){
  $prodis = $this->prodi->index();
  $dir = $_SERVER['DOCUMENT_ROOT'];
  include $dir."/simonsi/App/View/Home/home.php";
 }
}

 ?>
