<?php
	
	include('config.php');
	
	$id = $_GET['id'];

	mysql_query("DELETE FROM data_member WHERE id='$id'");

?>