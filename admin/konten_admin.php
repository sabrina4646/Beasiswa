<?php
    extract($_GET);
    if($pg=="pendaftaran") include "admin/pendaftaran.php";
    elseif($pg=="update_status") include "admin/update_status.php";
    elseif($pg=="edit_pendaftaran") include "admin/edit_pendaftaran.php";
    elseif($pg=="update_pendaftaran") include "admin/update_pendaftaran.php";
    elseif($pg=="hapus_pendaftaran") include "admin/hapus_pendaftaran.php";

    elseif($pg=="penerima_beasiswa") include "admin/penerima_beasiswa.php";

    elseif($pg=="akun_admin") include "admin/akun_admin.php";
    elseif($pg=="update_admin") include "admin/update_admin.php";
    elseif($pg=="edit_password") include "admin/edit_password.php";
?>