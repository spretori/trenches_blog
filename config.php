<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect ("54.153.169.253:3306", "sharne", "sddfjhwieu", "sharne");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define ('BASE_URL', 'http://54.153.169.253/sharne/Blog/');
?>