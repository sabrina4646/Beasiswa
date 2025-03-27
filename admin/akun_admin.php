<?php
    include "koneksi.php";
    $id_admin=$_SESSION['id_admin'];
    $cek = mysqli_query($db,"select * from admin where id_admin='$id_admin'");
    
        $data = mysqli_fetch_array($cek);
        $a = $data['id_admin'];
        $b = $data['nama'];
        $c = $data['username'];
        $d = $data['password'];
        
        
?>

<div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Data Admin</h2>
            </div>
        </div>
        <div class="row text-right">
            <div class="col">
                
            <form method="post" action="index.php?pg=update_admin" id='myForm' enctype="multipart/form-data">
                
                <div class="row mb-3">
                    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="id_admin" value="<?php echo $a; ?>">
                        <input type="text" class="form-control" id="inputNama" name="nama" required value="<?php echo $b; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUsername" name="username" required value="<?php echo $c; ?>">
                    </div>
                </div>      
                <a href="index.php?pg=edit_password"><button type="button" class="btn btn-primary" name="edit_password" id="tombol">Edit Password</button></a>
                <button type="submit" class="btn btn-primary" name="update" id="tombol">Update</button>
                <button type="reset" class="btn btn-warning">BATAL</button>
            
            </form>

            </div>
        </div>
</div>
