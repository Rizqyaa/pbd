<?php 

$nis = $_POST ['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$posisi = $_POST['posisi'];

$db = new PDO ('mysql:host=localhost;dbname=mixx', 'root', '');
$query = $db->query("insert into murid values ('$nis','$nama','$kelas', '$posisi')");

if($query){
    header("Location:index.php");
}