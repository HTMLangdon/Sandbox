<?php
	/*session_start();
	$SL_server = 'localhost';
	$SL_database = 'find_the_eagle_db';
	$SL_user = 'root';
	$SL_password = 'arflgreen';
	$SL_table = 'badass_users';
	include '_functions/user/_db-connect.php';


	mysql_select_db($SL_user)or die("cannot select DB");

	// username and password sent from form 
	$distributorUserName = $_POST['distributor-user-name']; 
	$distributorUserPassword = $_POST['distributor-user-password']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$distributorUserName = stripslashes($distributorUserName);
	$distributorUserPassword = stripslashes($distributorUserPassword);
	$distributorUserName = mysql_real_escape_string($distributorUserName);
	$distributorUserPassword = mysql_real_escape_string($distributorUserPassword);
	$SQLDatabaseTableQuery="SELECT * FROM $SL_table WHERE username='$distributorUserName' and password='$distributorUserPassword'";
	
	$result = mysql_query($SQLDatabaseTableQuery);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	// If result matched $distributorUserName and $distributorUserPassword, table row must be 1 row
	if($count==1)
	{
		// Register $distributorUserName, $distributorUserPassword and redirect to file "login_success.php"
		session_register("distributorUserName");
		session_register("distributorUserPassword"); 
		header("location:login_success.php");
	}
	else
	
	{
		echo "Wrong Username or Password";
	}*/

	session_start();

	if($_GET['distributor-user-name'] == "admin" && $_GET['distributor-user-password'] == "admin")
	{
		$_SESSION["distributor-user-name"] = $_GET['distributor-user-name'];
		$_SESSION["distributor-user-password"] = $_GET['distributor-user-password'];
		
		header("location:../../distributor-index.php");
	}
	else
	{
		header("location:../../distributor.php?errors=invalid%20login%20information");
	}



?>













