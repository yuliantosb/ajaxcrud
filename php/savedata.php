<?php
	include('config.php');

	$name			= $_POST['name'];
	$occupation		= $_POST['occupation'];
	$date_of_birth	= $_POST['date_of_birth'];
	$place_of_birth	= $_POST['place_of_birth'];
	$gender			= $_POST['gender'];
	$address		= $_POST['address'];

	mysql_query("INSERT INTO data_member VALUES ('', '$name', '$occupation', '$date_of_birth', '$place_of_birth', '$gender', '$address')");

?>