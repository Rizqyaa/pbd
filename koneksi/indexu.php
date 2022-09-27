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

<div class="container mt-5">
<div class="row" >
      <div class="col-md-10 offset-md-1">
        <form class="card-body cardbody-color p-lg-4 " method="get">
  <b class="text-center">D A T A U S E R</b> 
<div class="d-grid gap-2 col-3">
</div>
<div class="cointainer-sm">

<table class="table table-dark table-borderless container text-center">
  <thead>
    <tr>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Posisi</th>
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

        
    </tr>
    <?php endwhile ?>
  </tbody>
</table>
</div>
    </form>
      <div>
        <a class="btn btn-outline-danger" href="form.html">
          Logout
        </a>
      </div>
</div>
</div>
</div>
</div>

  </body>
</html>