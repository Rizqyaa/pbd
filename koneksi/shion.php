<?php
session_start();
$nama = $_POST['nama'];
$password = $_POST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=mixx', 'root', '');
$query = $koneksi->query("select * from login where nama='$nama' AND password='$password'");
$data = $query->fetch();
if($query->rowCount() > 0){

    header("Location:index.php");
}