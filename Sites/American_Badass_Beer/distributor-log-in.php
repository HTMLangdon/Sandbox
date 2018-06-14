<?php
	session_start();
	$message="";
	/*
	if(count($_POST)>0)
	{
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("phppot_examples",$conn);
		$result = mysql_query("SELECT * FROM badass_users WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
		$row  = mysql_fetch_array($result);
		
		if(is_array($row))
		{
			$_SESSION["user_id"] = $row[user_id];
			$_SESSION["user_name"] = $row[user_name];
		}
		else0
		{
			$message = "Invalid Username or Password!";
		}
	}

	if(isset($_SESSION["user_id"]))
	{
		header("Location:user_dashboard.php");
	}
*/
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Distributor Portal Page - Please Log in</title>
	<meta charset="utf-8">
	<title>BADASS BEER | FIND THE EAGLE</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="javascripts/vendor/jquery-1.11.2.min.js"><script>')</script>
	<link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/theme-2.css" rel="stylesheet" type="text/css" media="all" />
	<!--[if gte IE 9]><link rel="stylesheet" type="text/css" href="css/ie9.css"/><![endif]-->
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	<script type="text/javascript" src="js/blazy.min.js"></script>
	<script type=text/javascript src="js/jquery.min.js"></script>


<style>
	#distributor-log-in
	{
		background-color:black;	
	}
	#distributor-log-in label,
	#distributor-log-in input
	{
		color:white;
		font-family: "brothreg";
		font-size: 15px
	}
	
	input#distributor-user-name
	{
		padding: 5px 5px 5px 5px;
		margin-bottom: 0px !important;
		margin-right: 0px !important;
	}

	input#distributor-user-password
	{
		padding: 5px 0px 5px 5px;
		margin-bottom: 0px !important;
		margin-right: 0px !important;
	}
	
</style>
</head>

	<body id="distributor-log-in">

		<?php include "_includes/_navigation.php" ?>

		<section class="position: absolute; top:0; bottom:0; right:0; left:0; margin:auto;">
			<form method="POST" action="_functions/user/_parse-user-login-credentials.php" id="distributor-login-form" class="log-in-form">
				<label class="distributor-login-label" for="distributor-user-name">User Name:</label>
				<input type="text" name="distributor-user-name" id="distributor-user-name" class="login-input" />
				<label for="distributor-user-password" class="distributor-login-label"></label>
				<input type="text" name="distributor-user-password" id="distributor-user-password" class="login-input" />
			</form>
		</section>

		<?php include "_includes/_footer.php" ?>	

	</body>

</html>


