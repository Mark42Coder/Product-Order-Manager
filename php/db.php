<?php
	// $HOST_NAME = "localhost";
	// $USERNAME = "udayamve_1";
	// $PASSWORD = "UdayamVellore@123";
	// $DATABASE = "udayamve_1";
	$HOST_NAME = "localhost";
	$USERNAME = "udayamve_1";
	$PASSWORD = "UdayamVellore@123";
	$DATABASE = "udayamve_1";

	$con = new mysqli($HOST_NAME, $USERNAME, $PASSWORD, $DATABASE);

	if ($con -> connect_errno) {
		echo "Failed to connect to MySQL: " . $con -> connect_error;
		exit();
	}
?>