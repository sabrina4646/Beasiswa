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
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="id_admin" value="<?php echo $a; ?>">
                        <input type="password" class="form-control" id="password_baru" name="password_baru" onkeyup="checkPasswordMatch()" require">
                    </div>
                </div> 
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" onkeyup="checkPasswordMatch()" require">
                        <label id="password_match"></label>
                    </div>
                </div> 
                
                <button type="submit" class="btn btn-primary" name="update_password" id="update_password">Update</button>
                <button type="reset" class="btn btn-warning">BATAL</button>
            
            </form>

            </div>
        </div>
</div>

<script>
        function checkPasswordMatch() {
            var password_baru = document.getElementById("password_baru").value;
            var password_confirm = document.getElementById("password_confirm").value;
            var password_match = document.getElementById("password_match");

            if (password_baru === password_confirm) {
                password_match.innerHTML = "Password cocok!";
                password_match.style.color = "green";
            } else {
                password_match.innerHTML = "Password tidak cocok!";
                password_match.style.color = "red";
            }
        }
</script>
