<?php
	session_start();
	unset($_SESSION["distributor-user-name"]);
	unset($_SESSION["distributor-user-password"]);
	header("Location:distributor-log-in.php");
?>