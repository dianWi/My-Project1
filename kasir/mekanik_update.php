<?php
	include("sess_check.php");
	
	// query database memperbarui data pada database
	if(isset($_POST['perbarui'])) {
		$id=$_POST['mek'];
		$nama=$_POST['nama'];
		$telp=$_POST['telp'];
		$alamat=$_POST['alamat'];
		$sql = "UPDATE mekanik SET
				nama_mek='". $nama ."',
				telp_mek='". $telp ."',
				alamat_mek='". $alamat ."'
				WHERE id_mek='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: mekanik.php?act=update&msg=success");
	}
?>