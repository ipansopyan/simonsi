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
class HomeController extends Controller
{

  function __construct()
  {
   
    $this->user = New User();
    $this->prodi = New Prodi();
    $this->matkul = New Matkul();
    $this->tahun_aka = New Tahun();
    $this->penilaian = New Penilaian();
  }

public function index(){
  $prodis = $this->prodi->index();
  $user_id = $_SESSION['id'];
  $dosens = $this->user->data_dosen();
  $prodi = $this->prodi->index();
  $matkuls = $this->matkul->index();
  $tahun_akas = $this->tahun_aka->index();
  $penilaians = $this->penilaian->nilai_pembelajaran($user_id);
 
  $dir = $_SERVER['DOCUMENT_ROOT'];
  include $dir."/simonsi/App/View/Home/home.php";
 }

 public function add_data_akademik(){
  $prodis = $this->prodi->index();
  $user_id = $_SESSION['id'];
  $dosens = $this->user->data_dosen();
  $prodi = $this->prodi->index();
  $matkuls = $this->matkul->index();
  $tahun_akas = $this->tahun_aka->index();
  $dir = $_SERVER['DOCUMENT_ROOT'];
  include $dir."/simonsi/App/View/Home/add.php";
 }
 public function get_matkul()
 {
    $matkul = $_POST['matkul'];
    $matkul_dsn = $this->matkul->matkul_dsn($matkul);
    $matkul_arr =  array();

    while( $row = mysqli_fetch_array($matkul_dsn) ){
      $matkulid = $row['id'];
      $name = $row['name'];

      $matkul_arr[] = array("id" => $matkulid, "name" => $name);
  }
    
    echo json_encode($matkul_arr);
 }
 public function submit_data()
 {
  $user_id    = $_SESSION['id'];
  $prodi_id   = $_SESSION['prodi_id'];
  $dosen_id   = $this->user->secret($_POST['dosen']);
  $matkul_id  = $this->user->secret($_POST['matkul']);
  $soal1      = $this->user->secret($_POST['soal1']);
  $soal2      = $this->user->secret($_POST['soal2']);
  $soal3      = $this->user->secret($_POST['soal3']);
  $saran      = $this->user->secret($_POST['saran']);
  $ta         = $this->tahun_aka->tahun_ajar();
  $ta_id      = $ta['id'];
  $date       = date("Y-m-d");

  $result = $this->penilaian->cek_data($dosen_id,$matkul_id,$user_id);

  if ($result>0) {
   
    header("Location: index.php?simonsi=home");
    $_SESSION['pesan']    = 1;
    $_SESSION['isi'] = '<div class="alert alert-danger" role="alert">
              data penilaian dosen sudah ada! harap masukan data dosen yang lainnya
              </div>';
    if($_SESSION['pesan'] == 2){
      unset($_SESSION['pesan']);
    }
  }else {
    $this->penilaian->create($user_id,$dosen_id,$prodi_id,$matkul_id,$ta_id,$date,$soal1,$soal2,$soal3,$saran);
    $_SESSION['pesan']    = 1;
    $_SESSION['isi'] = '<div class="alert alert-success" role="alert">
              yayyyyy..!!! data berhasil di input
              </div>';
    if($_SESSION['pesan'] == 2){
      unset($_SESSION['pesan']);
    }
    header("Location: index.php?simonsi=home");
    
  }

 }

 
 public function edit()
 {
  $id = $_GET['id'];
  $penilaian   = $this->penilaian->detail($id);
  //  $prodi       = $this->prodi->prodi_user($penilaian['prodi_id']);
  $dosen      = $this->user->dosen($penilaian['dosen_id']);
  $matkul      = $this->matkul->matkul($penilaian['matkul_id']);
  //  $tahun      = $this->tahun_aka->tahun($penilaian['ta_id']);
  //  $dir         = $_SERVER['DOCUMENT_ROOT'];
  $prodis = $this->prodi->index();
  $user_id = $_SESSION['id'];
  $dosens = $this->user->data_dosen();
  $prodi = $this->prodi->index();
  $matkuls = $this->matkul->index();
  $tahun_akas = $this->tahun_aka->index();
  $dir = $_SERVER['DOCUMENT_ROOT'];

  include $dir."/simonsi/App/View/Home/edit.php";
 }
 public function update()
 {
   $id = $_GET['id'];
  $user_id    = $_SESSION['id'];
  $prodi_id   = $_SESSION['prodi_id'];
  $dosen_id   = $this->user->secret($_POST['dosen']);
  $matkul_id  = $this->user->secret($_POST['matkul']);
  $soal1      = $this->user->secret($_POST['soal1']);
  $soal2      = $this->user->secret($_POST['soal2']);
  $soal3      = $this->user->secret($_POST['soal3']);
  $saran      = $this->user->secret($_POST['saran']);
  $ta         = $this->tahun_aka->tahun_ajar();
  $ta_id      = $ta['id'];
  $date       = date("Y-m-d");


  $this->penilaian->update($id,$user_id,$dosen_id,$prodi_id,$matkul_id,$ta_id,$date,$soal1,$soal2,$soal3,$saran);
  $_SESSION['pesan']    = 1;
  $_SESSION['isi'] = '<div class="alert alert-success" role="alert">
            yayyyyy..!!! data berhasil di update
            </div>';
  if($_SESSION['pesan'] == 2){
    unset($_SESSION['pesan']);
  }
  header("Location: index.php?simonsi=home");
 }

 public function delete()
 {
   $id = $_GET['id'];

   $this->penilaian->delete($id);
   $this->penilaian->update($id,$user_id,$dosen_id,$prodi_id,$matkul_id,$ta_id,$date,$soal1,$soal2,$soal3,$saran);
   $_SESSION['pesan']    = 1;
   $_SESSION['isi'] = '<div class="alert alert-danger" role="alert">
             yayyyyy..!!! data berhasil di hapus
             </div>';
   if($_SESSION['pesan'] == 2){
     unset($_SESSION['pesan']);
   }
  header("Location: index.php?simonsi=home");
 }
 public function detail1()
 {
   $dat = $_POST['aka'];
   $penilaian   = $this->penilaian->detail($id);
   $prodi       = $this->prodi->prodi_user($penilaian['prodi_id']);
   $dosen       = $this->user->dosen($penilaian['dosen_id']);
   $matkul      = $this->matkul->matkul($penilaian['matkul_id']);
   $tahun      = $this->tahun_aka->tahun($penilaian['ta_id']);



  //  $dir         = $_SERVER['DOCUMENT_ROOT'];
  // include $dir."/simonsi/App/View/Home/detail.php";

  echo json_encode($dat);
 }

 public function detail()
 {
   $id          = $_GET['id'];
   $penilaian   = $this->penilaian->detail($id);
   $prodi       = $this->prodi->prodi_user($penilaian['prodi_id']);
   $dosen       = $this->user->dosen($penilaian['dosen_id']);
   $matkul      = $this->matkul->matkul($penilaian['matkul_id']);
   $tahun      = $this->tahun_aka->tahun($penilaian['ta_id']);
   $tes = $id;
   $dir         = $_SERVER['DOCUMENT_ROOT'];
  include $dir."/simonsi/App/View/Home/detail.php";
 }


}

 ?>
