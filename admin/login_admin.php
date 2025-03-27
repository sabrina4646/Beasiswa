<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/style_login.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
  </head>
  <body>
    

    <div class="container">
      <div class="card login-form" style="height:400px;">
        <div class="card-body">
        <h1 class="text-center">LOGIN ADMIN</h1>
        <hr>
        </div>
        <div class="card-text">
          
        <form class="row g-3 needs-validation" action="proses_login_admin.php" method="post">
          
          <div class="col-12">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="text" name="username" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Username Tidak Boleh Kosong
              </div>
            </div>
          </div>

          <div class="col-12">
            <label for="validationCustomPassword" class="form-label">Password</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="password" name="password" class="form-control" id="validationCustomPassword" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Password Tidak Boleh Kosong
              </div>
            </div>
          </div>
          
          <div class="col-12 d-grid gap-2">
            <button class="btn btn-primary" type="submit">LOGIN</button>
            <button class="btn btn-warning" type="reset">CANCEL</button>
          </div>

        </form>

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>