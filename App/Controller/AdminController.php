<?php
namespace App\Controller;

$dir = $_SERVER['DOCUMENT_ROOT'];

require_once "Controller.php";
require_once "$dir/simonsi/App/Model/User.php";
require_once "$dir/simonsi/App/Model/Prodi.php";
require_once "$dir/simonsi/App/Model/Matkul.php";
require_once "$dir/simonsi/App/Model/Tahun.php";
require_once "$dir/simonsi/App/Model/Penilaian.php";


use App\Controller\Controller;
use App\Model\Model;
use App\Model\User;
use App\Model\Prodi;
use App\Model\Matkul;
use App\Model\Tahun;
use App\Model\Penilaian;

/**
 *
 */
class AdminController extends Controller
{

  function __construct()
  {
   
    $this->user = New User();
    $this->prodi = New Prodi();
    $this->matkul = New Matkul();
    $this->tahun_aka = New Tahun();
    $this->penilaian = New Penilaian();
    // if($_SESSION['role'] == NULL || $_SESSION['role'] != 3  ){
      
    //   header('Location: index.php?simosni=login');
    //   exit;
    //   session_destroy();
      
    // }
  }

public function index(){
    // if($_SESSION['role'] == NULL || $_SESSION['role'] != 3  ){      
    //   session_destroy();
    //   header('Location: index.php?simosni=login');
    //   exit;
    // }
    
    $prodi = $this->prodi->index();
    $dosens = $this->user->data_dosen();
    $mahasiswas = $this->user->data_mahasiswa();
    $matkuls = $this->matkul->index();
    $tahun_akas = $this->tahun_aka->index();
    $tahun_aka_id = $this->tahun_aka->tahun_ajar();
    $penilaians = $this->penilaian->nilai_pembelajaran();
    $dir = $_SERVER['DOCUMENT_ROOT'];
    include $dir."/simonsi/App/View/Admin/home.php";
 }
public function addfakultas(){
  $dir = $_SERVER['DOCUMENT_ROOT'];
  include $dir."/simonsi/App/View/Admin/fakultas.php";
}
public function add_fakultas_submit(){
  $name = $this->user->secret($_POST['name']);
  $result = $this->prodi->cek_prodi($name);
  if ($result['1'] == $name){
    echo "fakultas sudah ada";
  }else{
    $this->prodi->add_fakultas($name);
    $prodi = $this->prodi->index();
    $dir = $_SERVER['DOCUMENT_ROOT'];
    include $dir."/simonsi/App/View/Admin/home.php";
  }
}
}

 ?>
