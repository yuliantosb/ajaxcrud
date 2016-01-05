<?php
	$server		= 'localhost';
	$username	= 'root';
	$password	= '';
	$db			= 'ajaxcrud';

	mysql_connect($server, $username, $password) or die ('<h1>Cannot connect to server');
	mysql_select_db($db) or die ('<h1>Cannot connet to database</h1>');
?>