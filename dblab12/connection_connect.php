<?php
	$servername = "localhost";
	$username = "db24_026";
	$password = "db24_026";
	$dbname = "db24_026_testmvc";
	$conn = new mysqli($servername,$username,$password);
	if($conn->connect_error)
	{
		die("Connection Field:".$conn->connect_error);
	}
	echo "Conection success";

	$conn->set_charset("utf8");
?>
