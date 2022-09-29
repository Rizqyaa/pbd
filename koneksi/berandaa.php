<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>Beranda</title>
</head>
<body>
   <h2 style="padding: 50px;">Beranda</h2>
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <?php

session_start();
if(!isset($_SESSION["username"])) { // jika ada session username
   header("Location:form.php");
}
 echo "username :"; echo $_SESSION['username'];
 echo "<br />";
 echo "password :"; echo $_SESSION['password'];
 ?>
  </div>
</div>

   <br>
   <form action="index.php">
 <button class="btn btn-primary">Datauser</button>
</form>
<br>
 <form action="delete.php">
 <button class="btn btn-danger ">Logout</button>
</form>
</body>
</html>