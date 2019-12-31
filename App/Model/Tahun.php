<?php
namespace App\Model;

/**
 *
 */
class Tahun 
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
        $query  = mysqli_query($con, "SELECT * FROM thn_aka");
        // $row = mysqli_fetch_array($query);
        return $query;
  }
  public function tahun_ajar()
  {
        $con = $this->openDb();
        $query  = mysqli_query($con, "SELECT * FROM thn_aka WHERE status='1'");
        $row = mysqli_fetch_array($query);
        return $row;
  }
  public function tahun($id)
  {
        $con = $this->openDb();
        $query  = mysqli_query($con, "SELECT * FROM thn_aka WHERE id = '$id'");
        $row = mysqli_fetch_array($query);
        return $row;
  }
  

}

 ?>