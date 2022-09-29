<?php

session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$k = new PDO('mysql:host=localhost;dbname=mixx','root','');
$query = $k->query("SELECT * FROM login WHERE username='$username' AND password='$password'");
$data=$query->fetch();
if($query->rowCount()> 0){

    
    if($data['posisi']=="Ketua Osis"){
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['posisi'] = "Ketua Osis";
        header("location:admin.php");
    }
    else if($data['posisi']=="Wakil Ketua Osis"){
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['posisi'] = "Wakil Ketua Osis";
        header("location:user.php");
    }
     else if($data['posisi']=="Ketua Kelas"){
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['posisi'] = "Ketua Kelas";
        header("location:user.php");
    }
     else if($data['posisi']=="Wakil ketua kelas"){
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['posisi'] = "Wakil ketua kelas";
        header("location:user.php");
    }
    else if($data['posisi']=="Bendahara"){
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['posisi'] = "Bendahara";
        header("location:user.php");
    }
     else if($data['posisi']=="Sekretaris"){
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['posisi'] = "Sekretaris";
        header("location:user.php");
    }
     else if($data['posisi']=="Murid"){
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['posisi'] = "Murid";
        header("location:user.php");
    }
     else{
    header("location:form.html");
}
}