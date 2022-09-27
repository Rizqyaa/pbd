<?php

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$posisi = $_POST['posisi'];


$database = new PDO('mysql:host=localhost;dbname=mixx', 'root', '');
$query = $database->query("UPDATE `murid` SET `nis` = '$nis', `nama` = '$nama', `kelas` = '$kelas' WHERE `nis`= '$nis'");

if($query){
    header("Location:index.php");
}