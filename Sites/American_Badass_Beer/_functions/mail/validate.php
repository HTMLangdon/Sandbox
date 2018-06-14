<?php
	/* validate an email address */
	function validateEmail( $em )
	{
		$pattern = '/^[a-z\d]+(?:[\-\.\_][a-z\d]+)*[a-z\d]+@[\w\d]+(?:[-\.][a-z\d][a-z\d\-]*[a-z\d])*[a-z\d]+\.([a-z]{2,4})(\.([a-z]{2,4}))*$/i';
		return preg_match($pattern,$em) ? true : false;
	}
?>


