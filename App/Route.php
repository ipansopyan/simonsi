<?php
namespace App;
require_once "Controller/AuthController.php";
require_once "Controller/HomeController.php";
require_once "Controller/AdminController.php";

use App\Controller\Controller;
use App\Controller\AuthController;
use App\Controller\SimonsiController;
use App\Controller\AdminController;
use App\Controller\HomeController;





class Route
{
  // private $authController;

  function __construct()
  {
    $this->authController     = new AuthController();
    $this->homeController     = new HomeController();
    $this->adminController  = new AdminController();
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
          }elseif ($simonsi == 'add_data_akademik') {
            $this->homeController->add_data_akademik();
          }elseif($simonsi == 'get_matkul'){
            $this->homeController->get_matkul();
          }else if($simonsi == 'submit_data'){
            $this->homeController->submit_data();
          }else if($simonsi == 'detail'){
            $this->homeController->detail();
          }elseif ($simonsi == 'edit') {
            $this->homeController->edit();
          }elseif ($simonsi == 'update_data') {
            $this->homeController->update();
          }else if($simonsi == 'delete'){
            $this->homeController->delete();
          }else if($simonsi == 'detail1'){
            $this->homeController->detail1();
          }

          //admin controller

          if ($simonsi == 'admin') {
            $this->adminController->index();
          }elseif ($simonsi == 'addfakultas') {
            $this->adminController->addfakultas();
          }elseif ($simonsi == 'add_fakultas_submit') {
            $this->adminController->add_fakultas_submit();
          }else if($simonsi == 'add_fakultas_submit')

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
