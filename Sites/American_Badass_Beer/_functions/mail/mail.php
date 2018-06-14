<?php
	$email_sender = '';
	$email_receuver = '';
	$email_subject = '';
	$email_headers = '';
	$email_body = '';
	$email_signature = '';
	$email_structure = '';


	$email_headers = "MIME-Version: 1.0\r\n";
	$email_headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$email_headers .= "From: The Sending Name <$email_sender>\r\n";
	$msg = '
	<html>
		<head></head>
		<body>
			formatted message...
		</body>
	</html>';

class Email
{

	public function __construct()
	{

	}
	public function FunNameskiDoodles()
	{
	
	}

	public function getValueAsUTF8($xData)
	{
		$xData = trim($xData);
		$xData = stripslashes($xData);
		$xData = htmlspecialchars($xData);
		return $xData;
	}

	// Confirm/Validate e-mail address as well-formed 
	function validateEmail( $xAddressatj )
	{
		$pattern = '/^[a-z\d]+(?:[\-\.\_][a-z\d]+)*[a-z\d]+@[\w\d]+(?:[-\.][a-z\d][a-z\d\-]*[a-z\d])*[a-z\d]+\.([a-z]{2,4})(\.([a-z]{2,4}))*$/i';
		return preg_match($pattern,$xAddressatj) ? true : false;
	}




0ok 
}





999                                                                                            






?>