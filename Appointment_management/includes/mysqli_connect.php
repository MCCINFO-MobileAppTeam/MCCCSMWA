<?php
	define('DB_USERNAME', 'nathan');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', '127.0.0.1');
	define('DB_NAME', 'nathan');
	
	$dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ('Could not connect to MySQL: ' . mysqli_connect_error() && trigger_error("Could not connect to MySQL database", E_USER_NOTICE));
	mysqli_set_charset($dbc, 'utf8');
?>