<?php
	include 'koneksi.php';

	$data1 = $_GET['data1'];

	mysqli_query($koneksi, "INSERT INTO tb_entry(uid) VALUES('$data1')");

	// $sql = "INSERT INTO rfid VALUES ('','','idcard','val')";
 //    mysqli_query($koneksi, $sql);
?>