<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style_login.css" rel="stylesheet">
  </head>
  <body>
    

    <div class="container">
      <div class="card login-form"  style="height:550px;">
        <div class="card-body">
        <h3 class="text-center">PENDAFTARAN <br>AKUN MAHASISWA <br>UNTUK BEASISWA</h3>
        <hr>
        </div>
        <div class="card-text">
        <form class="row g-12 needs-validation" novalidate style="margin:10px" action="simpan_akun.php" method="post">
      <div class="col-md-12">
        <label for="validationCustom01" class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" id="validationCustom01" value="" required>
        <div class="invalid-feedback">
          NIM Harus Diisi
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustomNama" class="form-label">Nama</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" name="nama" class="form-control" id="validationCustomNama" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Nama Harus Diisi
          </div>
        </div>
      </div>
      <div class="col-md-12>
        <label for="validationCustom03" class="form-label">Password</label>
        <input type="text" name="password" class="form-control" id="validationCustom03" required>
        <div class="invalid-feedback">
          Password Harus Diisi
        </div>
      </div>
      <div class="col-md-12>
        <label for="validationCustom03" class="form-label">IPK</label>
        <input type="text" name="ipk" class="form-control" id="validationCustom03" required>
        <div class="invalid-feedback">
          IPK Harus Diisi
        </div>
      </div>  
      <div class="col-12 d-grid gap-2" style="padding-top: 10px;">
        <button class="btn btn-primary" type="submit" name="simpan">DAFTAR</button>
        <button class="btn btn-warning" type="reset" name="batal">BATAL</button>
      </div>
      <div>      
        <a href="login_siswa.php" style="color: white;">Kembali</a>
      </div>
    </form>
        </div>
      </div>
    </div>

    <script src="../dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>