<?php

	//update appointment
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		//collect data
		$tableID = $_POST['TableID'];
		
		$status = $_POST['status'];
		$lastmod = $_POST['lastmod'];
		$contact = $_POST['contact'];
		$time = $_POST['time'];
		$days = $_POST['days'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$location = $_POST['location'];
		
		$comments = htmlspecialchars($_POST['comments']);
		$comments = str_replace("\r\n", "&#xd;",$comments);
		$comments = str_replace("'", "&apos;", $comments);
		
		//connect to DB
		require ('includes/mysqli_connect.php');//connect DB
		
		//build query
		$u = "UPDATE `appt_request` SET `status` = '".$status."', `last_mod_dt` = '".$lastmod."', `contact_method` = '".$contact."', `mtg_time` = '".$time."', `mtg_days` = '".$days."', `email_addr` = '".$email."', `phone` = '".$phone."',`mtg_location` = '".$location."', `comments` = '".$comments."' WHERE `appt_request_id` ='".$tableID."'";
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