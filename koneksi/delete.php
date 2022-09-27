<?php

$nis = $_GET['nis'];

$db = new PDO('mysql:host=localhost;dbname=mixx','root','');
$query = $db->query("DELETE FROM `murid` WHERE nis='$nis'");

if($query){
    header("Location:index.php");
 }