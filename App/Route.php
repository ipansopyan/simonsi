<?php
namespace App;
require_once "Controller/AuthController.php";
require_once "Controller/HomeController.php";

use App\Controller\Controller;
use App\Controller\AuthController;
use App\Controller\SimonsiController;
use App\Controller\JoinController;
use App\Controller\HomeController;





class Route
{
  // private $authController;

  function __construct()
  {
    $this->authController     = new AuthController();
    $this->homeController     = new HomeController();
    // $this->simonsiController  = new simonsiController();
    // $this->joinController     = new JoinController();


  }

  public function getController()
  {

    $simonsi = isset($_GET['simonsi'])?$_GET['simonsi']:NULL;
      try {

        //auth controller
          if (!$simonsi || $simonsi == 'login') {
            $this->authController->login();
          }elseif ($simonsi == 'logout') {
            $this->authController->logout();
          }elseif ($simonsi == 'register') {
            $this->authController->register();
          }elseif ($simonsi == 'registered') {
            $this->authController->registered();
          } elseif ( $simonsi == 'logged' ) {
              $this->authController->logged();
          }else{
              // $this->showError("Page not found", "Page for operation ".$op." was not found!");
              // echo "halaman belum di buat";
          }

          //simonsi controller

          if ($simonsi == 'home') {
            $this->homeController->index();
          }elseif ($simonsi == 'create_simonsi') {
            $this->simonsiController->create_simonsi();
          }elseif ($simonsi == 'store_simonsi') {
            $this->simonsiController->store_simonsi();
          }elseif ($simonsi == 'show') {
            $this->simonsiController->detail_simonsi();
          }elseif ($simonsi == 'edit') {
            $this->simonsiController->edit_simonsi();
          }elseif ($simonsi == 'update') {
            $this->simonsiController->update();
          }

          //join controller

          if ($simonsi == 'join') {
            $this->joinController->join();
          }elseif ($simonsi == 'unjoin') {
            $this->joinController->unjoin();
          }
      } catch ( Exception $e ) {

          $this->showError("Application error", $e->getMessage());
      }
  }

  public function auth()
  {
      #code
  }
}

 ?>