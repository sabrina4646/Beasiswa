<?php
    include "koneksi.php";
    extract($_POST);
    if(isset($update)){
        
        $_SESSION['nama'] = $nama;

        $perintah = mysqli_query($db,"UPDATE admin 
                    SET nama='$nama', username='$username'
                    WHERE id_admin='$id_admin'");

        
        if($perintah){
            echo "<script>alert('Data Admin Berhasil Diubah');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?pg=akun_admin'>";
        }
    } 
    else if(isset($update_password)){
        $pass = md5($password_baru);
        $perintah = mysqli_query($db,"UPDATE admin 
                    SET password='$pass'
                    WHERE id_admin='$id_admin'");
        if($perintah){
            echo "<script>alert('Password Berhasil Diubah');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?pg=akun_admin'>";
        }
    } 

?>
