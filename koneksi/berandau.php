<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">   <title>. Beranda .</title>
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
          <a class="nav-link active" aria-current="page" href="berandau.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="indexu.php">Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="indexu.php">Halaman User</a>
        </li>
        <li class="nav-item">
        <a href="logout.php" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Logout ?')">Logout</a>      
        </li>
      </ul>
    </div>
  </div>
</nav>

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

</form>
</body>
</html>