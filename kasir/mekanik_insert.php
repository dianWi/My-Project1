<?php
include("sess_check.php");

$nama=$_POST['nama'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];

	$sql="INSERT INTO mekanik(nama_mek,telp_mek,alamat_mek)VALUES('$nama','$telp','$alamat')";
	$ress = mysqli_query($conn, $sql);
	if($ress){
		echo "<script>alert('Tambah Mekanik Berhasil!');</script>";
		echo "<script type='text/javascript'> document.location = 'mekanik.php'; </script>";
	}else{
		echo("Error description: " . mysqli_error($conn));
		echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
		echo "<script type='text/javascript'> document.location = 'mekanik_tambah.php'; </script>";
	}
?>