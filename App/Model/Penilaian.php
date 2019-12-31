<?php
namespace App\Model;

/**
 *
 */
class Penilaian 
{

  function __construct()
  {

  }

  public function openDb()
  {
    $host   = "localhost";
    $uname  = "root";
    $passwd = "";
    $dbname = 'simonsi';

    $con  = mysqli_connect($host, $uname, $passwd, $dbname);
    return $con;
  }

  public function nilai_pembelajaran()
  {
    $con = $this->openDb();
    $query  = mysqli_query($con, "SELECT * FROM data_aka");
    // $row = mysqli_fetch_array($query);
    return $query;
  }
  public function create($user_id,$dosen_id,$prodi_id,$matkul_id,$ta_id,$date,$soal1,$soal2,$soal3,$saran)
  {
    $con    = $this->openDb();
    $query  = mysqli_query($con, "INSERT INTO data_aka (user_id,dosen_id,prodi_id,matkul_id,ta_id,tgl_nilai,soal1,soal2,soal3,saran) VALUES ('$user_id','$dosen_id','$prodi_id','$matkul_id','$ta_id','$date','$soal1','$soal2','$soal3','$saran')");
    return $query;
  }
  public function detail($id){
    $con = $this->openDb();
    $query  = mysqli_query($con, "SELECT * FROM data_aka WHERE id = '$id'");
    $row = mysqli_fetch_array($query);
    return $row;
  }
  public function update($id,$user_id,$dosen_id,$prodi_id,$matkul_id,$ta_id,$date,$soal1,$soal2,$soal3,$saran)
  {
    $con    = $this->openDb();
    $query  = mysqli_query($con, "UPDATE data_aka SET 
      dosen_id  = '$dosen_id',
      prodi_id  = '$prodi_id',
      matkul_id = '$matkul_id',
      tgl_nilai = '$date',
      soal1     = '$soal1',
      soal2     = '$soal2',
      soal3     = '$soal3',
      saran     = '$saran'
    WHERE id = '$id'");
    return $query;
  }
  public function delete($id)
  {
    $con = $this->openDb();
    $query  = mysqli_query($con, "DELETE FROM data_aka WHERE id = '$id'");
    // $row = mysqli_fetch_array($query);
    return $query;
  }
  public function cek_data($dosen_id,$matkul_id,$user_id)
  {
      $con = $this->openDb();
      $query  = mysqli_query($con, "SELECT * FROM data_aka WHERE user_id = '$user_id' dosen_id = '$dosen_id' && matkul_id = '$matkul_id'");
      $result =  mysqli_num_rows($query);
      return $result;
  }
}

 ?>