<?php
extract($_GET);
if($pg=="pendaftaran") include "mahasiswa/pendaftaran.php";
elseif($pg=="update_pendaftaran") include "mahasiswa/update_pendaftaran.php";
elseif($pg=="simpan_pendaftaran") include "mahasiswa/simpan_pendaftaran.php";

elseif($pg=="akun_mahasiswa") include "mahasiswa/akun_mahasiswa.php";
elseif($pg=="update_mahasiswa") include "mahasiswa/update_mahasiswa.php";
elseif($pg=="edit_password") include "mahasiswa/edit_password.php";
?>