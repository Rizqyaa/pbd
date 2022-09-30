<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <?php 
$db = new PDO("mysql:host=localhost;dbname=mixx", 'root', '');
$query = $db->query('select * from murid');

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="berandaa.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Data</a>
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
<?php
session_start();
if(isset($_SESSION['username'])){
    echo "Welcome, ";
    echo $_SESSION["username"];
    echo "<br />";
}
?>
<div class="container mt-5">
<div class="row" >
      <div class="col-md-10 offset-md-1">
        <form class="card-body cardbody-color p-lg-4 " method="get">
  <b class="text-center">D A T A  S I S W A</b> 
<div class="d-grid gap-2 col-3">

  <a href="insertform.php" class="btn btn-outline-primary mb-3">Insert</a>
</div>
<div class="cointainer-sm">

<table class="table table-dark table-borderless container text-center">
  <thead>
    <tr>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Posisi</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
    while ($data = $query->fetch()):?>
    <tr>

        <td><?= $data['nis']?></td>

        <td><?= $data['nama']?></td>

        <td><?= $data['kelas']?></td>

        <td><?= $data['posisi']?></td>

        <td>
        <a href="editform.php?nis=<?= $data['nis']; ?>" class="btn btn-outline-light edit"> Edit </a>
        <a href="delete.php?nis=<?= $data['nis']; ?>" 
                        class="btn btn-outline-danger"
                        onClick="return confirm('Affh lu yakin mw menghapus data ini ?')"> Delete </a>

        <!-- <a href="delete.php?nis=<?= $data['nis']; ?>" class="btn btn-outline-danger delete"> Delete </a> -->
        </td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>
</div>
    </form>
      
</div>
</div>
</div>
</div>

  </body>
</html>