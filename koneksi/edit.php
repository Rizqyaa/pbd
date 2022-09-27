<?php

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$posisi = $_POST['posisi'];
$nis = $_POST['nis'];

$database = new PDO('mysql:host=localhost;dbname=mixx', 'root', '');
$query = $database->query("UPDATE `murid` SET `nama` = '$nama', `kelas` = '$kelas' WHERE `nis`= '$nis'");

if($query){
    header("Location:index.php");
}