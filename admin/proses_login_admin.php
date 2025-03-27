<?php
session_start();
$_SESSION['nama'] = NULL;
extract($_POST);
include "../koneksi.php";
			
			$qry	= mysqli_query($db,"SELECT * FROM admin 
					WHERE username = '$username' AND password = '$password'");
			$jum	= mysqli_num_rows($qry);

			if ($jum == 1)
			{
				$data_admin	= mysqli_fetch_array($qry, MYSQLI_BOTH);
				$_SESSION['id_admin'] = $data_admin['id_admin'];
				$_SESSION['nama'] = $data_admin['nama'];
				echo "<script>alert('Anda berhasil Log In');</script>";
				echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
			}
			else
			{
				echo "<meta http-equiv='refresh' content='0; url=login_admin.php'>";
				echo "<script>alert('Anda Gagal Log In');</script>";
			}
	
?>
