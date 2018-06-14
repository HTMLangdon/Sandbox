<?php

	session_start();
	if(isset($_SESSION["distributor-user-name"]) && isset($_SESSION["distributor-user-password"]))
	{
		//do nothing?
//		echo 'session un & pw vars set.';
		
	}
	else
	{
		if(isset($_POST["distributor-user-name"]) && isset($_POST["distributor-user-password"]))
		{
			header("Location:distributor.php");
		}
	}


?>






<!--log out-->
<!--
//	session_start();
//	unset($_SESSION["distributor-user-name"]);
//	unset($_SESSION["distributor-user-name"]);
//	header("Location:user_login_session.php");
-->
















