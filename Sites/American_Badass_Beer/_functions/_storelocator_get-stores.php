<?php
	require "db-cred/_db-connect.php";
	//
	//	$servername = "localhost";
	//	$username_storeLocations = "root";
	//	$password_store_locations = "arflgreen";
	//	$database_store_locations = "find_the_eagle_db";
	//
	//	$mySQLi = new mysqli($servername, $username_storeLocations, $password_store_locations, $database_store_locations);
	//



	// Get parameters from URL
	$center_lat = $_POST["lat"];
	$center_lng = $_POST["lng"];
	$radius = $_POST["circ"];
	$resultLimit = $_POST["limit"];

	// Start XML file, create parent node
	$dom = new DOMDocument("1.0");
	$node = $dom->createElement("markers");
	$parnode = $dom->appendChild($node);

	/* change db to world db */
	$mySQLi->select_db($SL_database);



	// Search the rows in the markers tabl
//	$query = sprintf("SELECT id, name, address, zipcode, lat, lng FROM store_locations LIMIT 0 , 20");
// Search the rows in the markers table
//	$query = sprintf("SELECT address, name, lat, lng, ( 3959 * acos( cos( radians(%s) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(%s) ) + sin( radians(%s) ) * sin( radians( lat ) ) ) ) AS distance FROM store_location HAVING distance < %s ORDER BY distance LIMIT 0 , 20",

	$query = "SELECT name,street,city,state,zipcode,lat,lng, ( 3959 * acos( cos( radians($center_lat) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($center_lng) ) + sin( radians($center_lat) ) * sin( radians( lat ) ) ) ) AS distance FROM store_locations HAVING distance < $radius ORDER BY distance LIMIT 0 , $resultLimit";
	$result = $mySQLi->query($query);
	$result = $mySQLi->query($query);

	if (!$result)
	{
		die("Invalid query: " . mysql_error());
	}

	header("Content-type: text/xml");

	// Iterate through the rows, adding XML nodes for each
	while ($row = mysqli_fetch_assoc($result))
	{
		$node = $dom->createElement("marker");
		$newnode = $parnode->appendChild($node);
		$newnode->setAttribute("name", $row['name']);
		$newnode->setAttribute("street", $row['street']);
		$newnode->setAttribute("city", $row['city']);
		$newnode->setAttribute("state", $row['state']);
		$newnode->setAttribute("zipcode", $row['zipcode']);
		$newnode->setAttribute("lat", $row['lat']);
		$newnode->setAttribute("lng", $row['lng']);
		$newnode->setAttribute("distance", $row['distance']);
	}

	$SL_XMLData = $dom->saveXML();
	echo $SL_XMLData;






?>