<?php
	session_start();
	function redirect($page = 'appointment_login.php'){
		$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
		$url = rtrim($url, '/\\');
		$url .= '/' . $page;
		header("Location: $url");
		exit();
	}
	
	if(isset($_SESSION['user'])){
		$_SEEESION = array();
		session_destroy();
		redirect();
	} else {
		redirect();
	}
?>