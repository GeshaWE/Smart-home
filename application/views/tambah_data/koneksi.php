<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$password = "";
	$dbname = "db_smarthome";

	$dbconnect = new mysqli ($dbhost, $dbuser, $password, $dbname);
	if ($dbconnect->connect_error){
		die('Server Error');
	}
?>