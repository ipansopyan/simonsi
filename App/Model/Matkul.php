<?php
namespace App\Model;

/**
 *
 */
class Matkul 
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

  public function index()
  {
        $con = $this->openDb();
        $query  = mysqli_query($con, "SELECT * FROM matkul");
        // $row = mysqli_fetch_array($query);
        return $query;
  }
  public function matkul_dsn($dosen)
  {
    $con = $this->openDb();
      $query  = mysqli_query($con, "SELECT * FROM matkul WHERE dosen_id = '$dosen'");
      return $query;
  }
  public function matkul($id)
  {
        $con = $this->openDb();
        $query  = mysqli_query($con, "SELECT * FROM matkul WHERE id = '$id'");
        $row = mysqli_fetch_array($query);
        return $row;
  }
  

}

 ?>