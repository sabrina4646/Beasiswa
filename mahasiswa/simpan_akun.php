<?php
    include "../koneksi.php";
    extract($_POST);
    if(isset($simpan)){
        $cek_nim = mysqli_query($db,"select * from akun_mahasiswa where nim='$nim'");
        if(mysqli_num_rows($cek_nim)>0){
            echo "<script>alert('Maaf Anda Sudah Terdaftar. Silahkan Login');</script>";
            echo "<meta http-equiv='refresh' content='0; url=login_mahasiswa.php'>";
        } else {
            $pass=md5($password);
            //simpan ke tabel akun mahasiswa
            $perintah = mysqli_query($db,"insert into akun_mahasiswa values('$nim','$nama','$pass')");
            
            //simpan ke tabel daftar
            $tgl=date("Y-m-d");
            $perintah2 = mysqli_query($db,"insert into tb_daftar values('','$tgl','$nim','','','','$ipk','','','','0')");
            
            if($perintah){
                echo "<script>alert('Akun Berhasil Dibuat. Silahkan Melakukan Login');</script>";
                echo "<meta http-equiv='refresh' content='0; url=login_mahasiswa.php'>";
            }
            else {
                echo "<script>alert('Maaf Akun Gagal Dibuat. Silahkan Ulangi Kembali!');</script>";
                echo "<meta http-equiv='refresh' content='0; url=pendaftaran_akun.php'>";
            }
        }
        
    }
?>