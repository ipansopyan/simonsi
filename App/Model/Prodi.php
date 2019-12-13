<?php
namespace App\Model;

/**
 *
 */
class Prodi 
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
        $query  = mysqli_query($con, "SELECT * FROM prodi");
        // $row = mysqli_fetch_array($query);
        return $query;
  }

  public function add_fakultas($name)
  {
    $con    = $this->openDb();
    $query  = mysqli_query($con, "INSERT INTO prodi (name) VALUES ('$name')");
    return $query;
  }

  public function cek_prodi($name){
    $con = $this->openDb();
    $query  = mysqli_query($con, "SELECT * FROM prodi WHERE name = '$name'");
    $result =  mysqli_fetch_array($query);
    return $result;
  }

  public function prodi_user($id)
  {
        $con = $this->openDb();
        $query  = mysqli_query($con, "SELECT * FROM prodi WHERE id = '$id'");
        $row = mysqli_fetch_array($query);
        return $row;
  }

}

 ?>