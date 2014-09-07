<?php

	//update appointment
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		//collect data
		$tableID = $_POST['TableID'];
		
		$comments = htmlspecialchars($_POST['comments']);
		$comments = str_replace("\r\n", "&#xd;",$comments);
		$comments = str_replace("'", "&apos;", $comments);
		$location = $_POST['location'];
		$status = $_POST['status'];
		//connect to DB
		require ('includes/mysqli_connect.php');//connect DB
		
		//build query
		$u = "UPDATE `appt_request` SET `status` = '".$status."', `mtg_location` = '".$location."', `comments` = '".$comments."' WHERE `appt_request_id` ='".$tableID."'";
		//echo $u;<--testing purposes only
		//clean up DB connection
		mysqli_query ($dbc, $u);
		mysqli_close($dbc);
		
		//redirect to appointment page
		$host		= $_SERVER['HTTP_HOST'];
		$uri		= rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra	= 'appointment.php';
		header("Location: http://$host$uri/$extra");
		exit;

		
	}
?>