<?php
session_start();
$_SESSION['nim'] = NULL;
extract($_POST);
include "../koneksi.php";
			
			
			$qry	= mysqli_query($db,"SELECT * FROM akun_mahasiswa 
					WHERE nim = '$nim' AND password = '$password'");
			$jum	= mysqli_num_rows($qry);

			if ($jum == 1)
			{
				$data_siswa	= mysqli_fetch_array($qry, MYSQLI_BOTH);
				$_SESSION['nim'] = $data_siswa['nim'];
				$_SESSION['nama'] = $data_siswa['nama'];
				echo "<script>alert('Anda berhasil Log In');</script>";
				echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
			}
			else
			{
				echo "<meta http-equiv='refresh' content='0; url=login_mahasiswa.php'>";
				echo "<script>alert('Anda Gagal Log In');</script>";
			}
		
		
	
?>