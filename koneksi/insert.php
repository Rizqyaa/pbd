<?php 

$nis =htmlentities( $_POST['nis']);
$nama =htmlentities(trim( $_POST['nama']));
$kelas = $_POST['kelas'];
$posisi =htmlentities( $_POST['posisi']);

$pesan_error = "";

if(empty($nama)){
  $pesan_error .= "Data tidak boleh kosong";
}

if($pesan_error == ""){ // jika error kosong
  $database = new PDO("mysql:host=localhost;dbname=mixx",'root','');
  $query = $database->query("insert into murid values('$nis','$nama','$kelas','$posisi')");

  if($query){
     header("Location:index.php");
  }

}else{ // jika ada error
  header("Location:insertform.php?error=$pesan_error");
}