<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>insert</title>
</head>
<body>

    <div class="card col-md-6 offset-md-3 mt-5">
          <?php if(isset($_GET['error'])) : ?>
          <div class="alert alert-danger" role="alert">
              <p><?= $_GET['error'] ?></p>
          </div>
          <?php endif ?>
        <div class="card-header" style="text-align: center;">
          Insert
        </div>
        <div class="card-body offset-md-2">
          <blockquote class="blockquote mb-0">
            <form method="POST" action="insert.php" class="row g-3" style="padding-top: 20px; padding-left: 25px;">
    
    
                <div class="col-auto">
                    <label class="form-label">Nis</label>
                    <input type="text" name="nis" class="form-control" placeholder="nis" required>
                </div>
                <div class="col-auto">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="nama" required>
                </div>
                <div class="col-5" id="">
                   
                    <label for="" class="form-label">Kelas</label>
                    <select name="kelas" id="" class="form-select" aria-label="Default select example">                        
                        <option>12 RPL</option>
                        <option>11 RPL</option>
                        <option>10 RPL</option>
                        <option>12 TKJ</option>
                        <option>11 TKJ</option>
                        <option>10 TKJ</option>
                        <option>12 OTKP</option>
                        <option>11 OTKP</option>
                        <option>10 OTKP</option>
                        <option>12 TKR</option>
                        <option>11 TKR</option>
                        <option>10 TKR</option>
                    </select>
                </div>
                <div class="col-auto" id="">
                    <label class="form-label">posisi</label>
                    <select name="posisi" id="" class="form-select" aria-label="Default select example">                        
                      <option>Ketua Kelas</option>
                      <option>Wakil Ketua Kelas</option>
                      <option>Sekretaris</option>
                      <option>Bendahara</option>
                      <option>Murid</option>
                     
                    </select>
                </div>
                <div class="d-grid gap-2 d-md-block mx-auto" style="padding-top:5px;">
                    <button type="submit" value="simpan" class="btn btn-primary mb-3" style="--bs-btn-font-weight: 600;">.   .Save.   .</button>
                    <a type="" class="btn btn-danger mb-3" style="--bs-btn-font-weight: 600;" href="index.php" >.   .Batal.   .</a>
                    </div>
            </form>
            <!-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> -->
          </blockquote>
        </div>
      </div>
    
   
</body>
</html>