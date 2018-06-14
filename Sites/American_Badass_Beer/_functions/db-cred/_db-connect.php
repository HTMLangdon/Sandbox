<?php
	$sl_server = 'localhost';
	$SL_database = 'find_the_eagle_db';
	$SL_user = 'root';
	$SL_password = 'arflgreen';
	$SL_table = '';

	$mySQLi = new mysqli($sl_server, $SL_user, $SL_password, $SL_database);

	if ($mySQLi->connect_error)
	{
		die("Connection failed: " . $mySQLi->connect_error);
	}
?>