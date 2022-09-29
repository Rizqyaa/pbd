<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">   <title>. Beranda .</title>
</head>
<body>
<h2 style="padding-bottom: 15px;padding-top: 45px;padding-left: 80px;">Beranda</h2>
<div class="" style="width: 15rem;padding-left: 50px;">
  <div class="card " style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">
        <?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location:form.html");
}
echo "Username : "; echo $_SESSION['username'];
echo "<br />";
echo "Password : "; echo $_SESSION['password'];
echo "<br />";

 ?>
 </p>
  </div>
</div>
</div>
<br>
   <div class="container">
       <div class="col">
 <a class="btn btn-primary" href="user.php">Halaman User</a>
 <br>
 <br>
 <form action="logoutus.html">
 <button class="btn btn-danger ">Logout</button>
</div>
</div>
</form>
</body>
</html>