<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Beranda</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="berandaa.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php">Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="admin.php">Halaman Admin</a>
        </li>
        <li class="nav-item">
        <a href="logout.php" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Logout ?')">Logout</a>      
        </li>
      </ul>
    </div>
  </div>
</nav>

   <h2 style="padding: 50px;">Beranda</h2>
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <?php

session_start();
if(!isset($_SESSION["username"])) { // jika ada session username
   header("Location:form.html");
}
 echo "username :"; echo $_SESSION['username'];
 echo "<br />";
 echo "password :"; echo $_SESSION['password'];
 ?>
  </div>
</div>
</body>
</html>