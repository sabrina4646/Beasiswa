<?php
    include "koneksi.php";
    extract($_POST);
    if(isset($update)){
        
        $_SESSION['nama'] = $nama;
        $_SESSION['nim'] = $nim_baru;

        $perintah = mysqli_query($db,"UPDATE akun_mahasiswa 
                    SET nama='$nama', nim='$nim_baru'
                    WHERE nim='$nim'");
        
        $cek_pendaftaran=mysqli_query($db,"SELECT * FROM tb_daftar
                                         WHERE nim='$nim'");
        if(mysqli_num_rows($cek_pendaftaran)>0){
            $perintah2 = mysqli_query($db,"UPDATE tb_daftar 
                                        SET nim='$nim_baru'
                                        WHERE nim='$nim'");
        }

        if($perintah){
            echo "<script>alert('Data Siswa Berhasil Diubah');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?pg=akun_mahasiswa'>";
        }
    } 
    else if(isset($update_password)){
        $pass = md5($password_baru);
        $perintah = mysqli_query($db,"UPDATE akun_mahasiswa 
                    SET password='$pass'
                    WHERE nim='$nim'");
        if($perintah){
            echo "<script>alert('Password Berhasil Diubah');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?pg=akun_mahasiswa'>";
        }
    } 

?>
