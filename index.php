<?php
session_start();
if((isset($_SESSION['nim'])) || (isset($_SESSION['id_admin']))){
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penerimaan Beasiswa</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="datatables/jquery.dataTables.css">

    
	
  <link rel="stylesheet" href="datatables/dataTables.bootstrap4.min.css" />
  <script src="datatables/dataTables.bootstrap4.min.js"></script>


</head>
  <body>

  <section class="jumbotron text-center">
    <img src="gambar/logo.jpg" alt="logo" width="50px" class="rounded-circle">
  <h1 class="display-10">SMK DIGITALENT</h1>
</section>

<!-- MENU -->
<?php
if(isset($_SESSION['nim'])){
  include "mahasiswa/menu_mahasiswa.php";
}
else {
  include "admin/menu_admin.php";
}
?>
<!-- END MENU -->

<section id="content" style="height:600px;">
  <?php
  extract($_GET);
  if(isset($pg)){
    if(isset($_SESSION['nim'])){
      
      include "mahasiswa/konten_mahasiswa.php";
    }
    else {
      include "admin/konten_admin.php";
    }
  } else {
    include "home.php";
  }
  ?>
</section>

<footer class="bg-dark text-white">
    <p class="text-center">Created By : Digitalent VSGA 2023</p>
</footer>

    <script src="dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
    <!-- JQUERY -->
	  <script src="datatables/jquery.min.js"></script>

    <!-- DATATABLES JS -->
      <script src="datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="datatables/jquery.dataTables.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
    </script>

  </body>
</html>

<?php
}
else {
  echo "<meta http-equiv='refresh' content='0; url=masuk.php'>";
}
?>