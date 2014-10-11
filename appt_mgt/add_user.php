<?php
	session_start();
	if(!isset($_SESSION['user'])){
		redirect('appointment.php');
	}
	
	$errors="";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		//Check for user name
		if (empty ($_POST['user_name'])){
			$errors[] = 'You must enter a username.';
			$uname = 'EMPTY';
		}else{
			$uname = trim($_POST['user_name']);
		}
		
		//check password
		if (!empty($_POST['pass1'])){
			if ($_POST['pass1'] != $_POST['pass2']) {
				$errors[] = 'The password does not match.';
			}else{
				$pass = trim($_POST['pass1']);
			}
		}else{
			$errors[] = 'No password given.';
		}
		
		//connect to database
		require('includes/mysqli_connect.php');
		
		//check that username does not already exist
		if ($uname != 'EMPTY'){
			$uname_query = "SELECT username from admin WHERE username='$uname'";
			$uname_request = mysqli_query($dbc, $uname_query);
			$check = mysqli_num_rows($uname_request);
			if ($check >= 1){
				$errors[] = "The username '". $uname ."' is already in use.";
			}
		}
		//If everything is fine, register the user in the database.
		if (empty($errors)) {
			$q = "INSERT INTO admin (username, password) VALUES ('$uname', SHA1('$pass'))";
			$r = mysqli_query ($dbc, $q);
			//if addition is sucessful, notify user
			if (mysqli_affected_rows($dbc) == 1){
				echo '<h1>User Added Sucessfully</h1>';
				$home = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
				$home = rtrim($home, '/\\');
				$home .= '/' . 'appointment.php';
				echo '<a href="'.$home.'">Return to main page</a>';
			} else { //if it didnt work
				echo '<h1>System error</h1><p>User could not be added at this time. If problem persist please contact the administrator.</p>';
				echo '<p>' .mysqli_errors($dbc) . '<BR /><BR />Query: ' . $q . '</p>';
			}
			//If errors print message.
			if($errors != ""){
				echo $errors;
			}
		}
	}else{
		//if not a submission and there are no errors, print form.
		build_form();
	}
function build_form(){
	echo '<h2>Add User</h2>';
	echo '<form id="add_user" action="add_user.php" method="post">';
	if (isset($_POST['user_name'])){
		$uname = $_post['user_name'];
		echo 'Username: <input type="text" name="user_name" id="user_name" class="required" value="'.$uname.'"/><br />';
	}else{
		echo 'Username: <input type="text" name="user_name" id="username" class="required" value=""/><br />';
	}
	echo 'Enter Password: <input type="password" name="pass1" id="pass1" class="required" value=""/><br />';
	echo 'Confirm Password: <input type="password" name="pass2" id="pass2" class="required" value=""/><br />';
	echo '<input id="submit" type="submit" value="login" /></form>';
}
function redirect($page = 'appointment_login.php'){
	$url = 'http://' . $_SERVER['HTTP_HOST'] .dirname($_SERVER['PHP_SELF']);
	$url = rtrim($url, '/\\');
	$url .= '/' . $page;
	header("Location: $url");
	exit();
}
?>