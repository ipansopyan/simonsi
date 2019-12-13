<?php
namespace App\Model;

/**
 *
 */
class User
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

  public function cek_login($nim,$password)
  {
        $con = $this->openDb();
        $query  = mysqli_query($con, "SELECT * FROM user WHERE n_induk = '$nim' && passwd = '$password'");
        $row = mysqli_fetch_array($query);
        return $row;
  }

  public function cek_user($nim)
  {
      $con = $this->openDb();
      $query  = mysqli_query($con, "SELECT * FROM user WHERE n_induk = '$nim'");
      $result =  mysqli_num_rows($query);
      return $result;

  }

  public function create_user($nim,$role,$name,$email,$passwd,$prodi,$kelas)
  {
        $con    = $this->openDb();
        $query  = mysqli_query($con, "INSERT INTO user (n_induk,role,name,email,passwd,prodi_id,kelas) VALUES ('$nim','$role','$name','$email','$passwd','$prodi','$kelas')");
        return $query;
  }

  public function secret($data)
  {
      $con    = $this->openDb();
      $secret = mysqli_real_escape_string($con, $data);
      return $secret;
  }
  public function data_dosen()
  {
        $con = $this->openDb();
        $query  = mysqli_query($con, "SELECT * FROM user WHERE role = 2");
        // $row = mysqli_fetch_array($query);
        return $query;
  }

}

 ?>