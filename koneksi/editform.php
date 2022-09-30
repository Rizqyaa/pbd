<?php

$nis = $_GET['nis'];
$db =new PDO("mysql:host=localhost;dbname=mixx", 'root', '');
$query = $db->query("select * from murid where nis=$nis ");
$data = $query->fetch();

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
            <input type="text" name="nis" class="form-control" placeholder="nis" value="<?= $data['nis'] ?>" required>
        </div>
        <div class="col-auto">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="nama" value="<?= $data['nama'] ?>" required>
        </div>
        <div class="col-5">
            <label for="" class="form-label">Kelas</label>
            <select name="kelas" id="" class="form-select" aria-label="Default select example" value="<?= $data['kelas'] ?>" required>
                <option value="12 RPL" <?= $data['kelas'] == '1' ? 'selected' : '' ?>>12 RPL</option>
                <option value="11 RPL" <?= $data['kelas'] == '2' ? 'selected' : '' ?>>11 RPL</option>
                <option value="10 RPL" <?= $data['kelas'] == '3' ? 'selected' : '' ?>>10 RPL</option>
                <option value="12 TKJ" <?= $data['kelas'] == '4' ? 'selected' : '' ?>>12 TKJ</option>
                <option value="11 TKJ" <?= $data['kelas'] == '5' ? 'selected' : '' ?>>11 TKJ</option>
                <option value="10 TKJ" <?= $data['kelas'] == '6' ? 'selected' : '' ?>>10 TKJ</option>
                <option value="12 OTKP" <?= $data['kelas'] == '7' ? 'selected' : '' ?>>12 OTKP</option>
                <option value="11 OTKP" <?= $data['kelas'] == '8' ? 'selected' : '' ?>>11 OTKP</option>
                <option value="10 OTKP" <?= $data['kelas'] == '9' ? 'selected' : '' ?>>10 OTKP</option>
                <option value="12 TKR" <?= $data['kelas'] == '10' ? 'selected' : '' ?>>12 TKR</option>
                <option value="11 TKR" <?= $data['kelas'] == '11' ? 'selected' : '' ?>>11 TKR</option>
                <option value="10 TKR" <?= $data['kelas'] == '12' ? 'selected' : '' ?>>10 TKR</option>
            </select>
        </div>
        <div class="col-5">
            <label class="form-label">posisi</label>
            <label class="form-label">posisi</label>
                    <select name="posisi" id="" class="form-select" aria-label="Default select example" value="<?= $data['posisi']?>" required>                      
                      <option value="Ketua Kelas" <?= $data['posisi'] == '1' ? 'selected' : '' ?>>Ketua Kelas</option>
                      <option value="Wakil Ketua Kelas" <?= $data['posisi'] == '2' ? 'selected' : '' ?>>Wakil Ketua Kelas</option>
                      <option value="Sekretaris" <?= $data['posisi'] == '3' ? 'selected' : '' ?>>Sekretaris</option>
                      <option value="Bendahara" <?= $data['posisi'] == '4' ? 'selected' : '' ?>>Bendahara</option>
                      <option value="Murid" <?= $data['posisi'] == '5' ? 'selected' : '' ?>>Murid</option>
                     
                    </select>
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