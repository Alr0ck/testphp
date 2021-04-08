<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "dbtest";
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	if(mysqli_connect_errno()){
		echo "Database Not Connected".mysqli_connect_error();
	}
?>
