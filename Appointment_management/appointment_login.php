<?php
	session_start();
	if (isset($_SESSION['user'])){
		redirect('appointment.php');
	}

	$errors="";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$uname = '';
		$pass = '';
		if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pass']) && !empty($_POST['pass'])){
			$uname = $_POST['user'];
			$pass = $_POST['pass'];
		} else {
			$errors = "Error: You must provide a username and password to login!";
			build_form();
			//trigger_error("\r\n Incorrect credentials at login: \r\n $time", E_USER_ERROR);
		}
		
		if($errors == "") {
			require('includes/mysqli_connect.php');//connect to DB
			$uname = mysqli_real_escape_string($dbc, trim($uname));
			$pass = mysqli_real_escape_string($dbc, trim($pass));
			$q = "SELECT username, password FROM admin WHERE (username='$uname' AND password=SHA1('$pass'))";//Query for user
			$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " .mysqli_error($dbc), E_USER_ERROR);
			if (@mysqli_num_rows ($r) == 1){
				$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
				$_SESSION['user'] = $uname;
				$_SESSION['authorized'] = "true";
				mysqli_close($dbc);
				redirect('appointment.php');
				exit();
			} else {
				$errors .= "\r\n Error: Incorrect Username or Password";
			}
			mysqli_close($dbc);
		}
		
		if($errors != ""){
			echo $errors;
		}
		
	} else {
		build_form();
	}
	function build_form(){
		echo '<h2>Please Log In</h2>';
		echo '<form id="login" action="appointment_login.php" method="post">';
		if (isset($_POST['user'])){
			$user=$_POST['user'];
			echo 'Enter your username: <input type="text" name="user" id="user" class="required" value="'.$user.'"/><br />';
		} else {
			echo 'Enter your username: <input type="text" name="user" id="user" class="required" value=""/><br />';
		}
		echo 'Enter your password: <input type="password" name="pass" id="pass" class="required" value=""/><br />';
		echo '<input id="submit" type="submit" value="login" /></form>';
	}
	
	function redirect($page = 'appointment_login.php'){
		$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
		$url = rtrim($url, '/\\');
		$url .= '/' . $page;
		header("Location: $url");
		exit();
	}
		
	?>