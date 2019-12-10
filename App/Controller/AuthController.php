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

class AuthController extends Controller
{

  function __construct()
  {
    $this->user = new User();
    $this->prodi = new Prodi();
    // $this->prodiuser = new ProdiUser();


  }
  public function register()
  {
    $prodis = $this->prodi->index();
    $dir = $_SERVER['DOCUMENT_ROOT'];
    include $dir."/simonsi/App/View/Auth/register.php";
    
    

    // session_destroy();
  }

  public function index(){
    echo "tes";
  }

  public function login()
  {
    $this->view('Auth/login');
    // session_destroy();
    

  }

  public function logged()
  {

      $nim    = $this->user->secret($_POST['nim']);
      $password = $this->user->secret(sha1($_POST['password']));

      $result = $this->user->cek_login($nim,$password);

   
      if ($result['1'] == $nim && $result['5'] == $password) {
        $_SESSION['email'] = $result['email'];
        $_SESSION['name']  = $result['name'];
        $_SESSION['id']    = $result['id'];
        header("Location: index.php?simonsi=home");
        // echo "halaman home";
      }else {
          $_SESSION['pesan']  = 'user tidak ada';
          echo "user tidak ada";
          // header('Location: http://localhost/httaccess');

        die;
        // header("Location: index.php");

      }

      }

  public function logout()
  {

      header("Location: index.php");
      session_destroy();
  }

 

  public function registered()
  {

  $nim    = $this->user->secret($_POST['nim']);
  $name    = $this->user->secret($_POST['name']);
  $email    = $this->user->secret($_POST['email']);
  $prodi  = $this->user->secret($_POST['prodi']);
  $kelas  = $this->user->secret($_POST['kelas']);
  $role  = $this->user->secret($_POST['role']);
  $passwd = $this->user->secret(sha1($_POST['passwd']));

  $result = $this->user->cek_user($nim);


  if ($result > 0) {
    // $_SESSION['pesan']  = 'user sudah terdaftar';
    echo "user ada";
    // header("Location: index.php?simonsi=register");
  }else{
    try {
      $this->user->create_user($nim,$role,$name,$email,$passwd,$prodi,$kelas);

      // $result = $this->user->cek_login($email,$passwd);
      $_SESSION['email'] = $email;
      $_SESSION['name']  = $name;
      $_SESSION['nim']    = $nim;
    
      echo "daftar selesai";
      // header("Location: index.php?simonsi=home");
  
    } catch (\Exception $e) {

    }

  }
}





}


 ?>
