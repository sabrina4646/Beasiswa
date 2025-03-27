<?php
    include "koneksi.php";
    extract($_GET);
    if(isset($id)){
        $perintah = mysqli_query($db,"DELETE FROM tb_daftar WHERE id_daftar='$id' ");
        if($perintah){
            echo "<script>alert('Data Berhasil Dihapus');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?pg=pendaftaran'>";			
        } else {
            echo "<script>alert('Data Gagal Dihapus. Ulangi Kembali');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?pg=pendaftaran'>";
        }
    }

?>