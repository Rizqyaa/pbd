<?php

$nis = $_GET['nis'];
$db =new PDO("mysql:host=localhost;dbname=mixx", 'root', '');
$query = $db->query("select * from murid where nis=$nis ");
$data = $query->fetch();

?>
<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>
<div class="card col-md-6 offset-md-3 mt-5">
  <div class="card-header" style="text-align: center;">
    Edit
  </div>
  <div class="card-body offset-md-2">
    <blockquote class="blockquote mb-0">
    <form method="POST" action="edit.php" class="row g-3" style="padding-top: 20px; padding-left: 25px;">
        <div class="col-auto">
            <label class="form-label">Nis</label>
            <input type="text" name="nis" class="form-control" placeholder="nis" value="<?= $data['nis'] ?>">
        </div>
        <div class="col-auto">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="nama" value="<?= $data['nama'] ?>">
        </div>
        <div class="col-auto">
            <label for="" class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" placeholder="kelas" value="<?= $data['kelas'] ?>">
        </div>
        <div class="col-auto">
            <label class="form-label">posisi</label>
            <input type="text" name="posisi" class="form-control" placeholder="posisi" value="<?= $data['posisi']?>">
        </div>
        <div class="d-grid gap-2 d-md-block mx-auto" style="padding-top:5px;">
            <button type="submit" value="simpan" class="btn btn-primary mb-3" style="--bs-btn-font-weight: 80;">.   .Update.   .</button>
            <button type="" class="btn btn-danger mb-3" style="--bs-btn-font-weight: 600;" action="index.php" >.   .Batal.   .</button>
            </div>
    </form>
      <!-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> -->
    </blockquote>
  </div>
</div>
   

</body>
</html>