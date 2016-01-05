<?php
	include('config.php');

	$id = $_GET['id'];

	$name			= $_POST['name'];
	$occupation		= $_POST['occupation'];
	$date_of_birth	= $_POST['date_of_birth'];
	$place_of_birth	= $_POST['place_of_birth'];
	$gender			= $_POST['gender'];
	$address		= $_POST['address'];

	mysql_query("UPDATE data_member SET name = '$name', occupation = '$occupation', date_of_birth = '$date_of_birth', place_of_birth = '$place_of_birth', gender = '$gender', address = '$address' WHERE id = '$id'");
?>