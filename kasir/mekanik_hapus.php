<?php
	include("sess_check.php");
		$id = $_GET['mek'];	
		$sql = "DELETE FROM mekanik WHERE id_mek='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: mekanik.php?act=delete&msg=success");
?>