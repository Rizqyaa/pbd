<?php
session_start();
$nama = $_POST['nama'];
$password = $_POST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=mixx', 'root', '');
$query = $koneksi->query("select * from login where nama='$nama' AND password='$password'");
$data = $query->fetch();
    header("Location:index.php");
