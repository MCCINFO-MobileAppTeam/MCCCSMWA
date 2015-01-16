<?php
require_once 'includes/page_start.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>MCCCS Email Results</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="assets/css/mcccsmwa.css">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
</head> 
<body> 

<!-- MCCCS Email Results -->
<div data-role="page" data-content-theme="a" id="csmwa">
	
	<div data-role="header" id="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
			<a href="index.php" data-icon="home" data-inline="true" data-iconpos="notext" class="ui-btn-right">home</a>
			<a href="#csmwa" data-icon="back" data-inline="true" data-iconpos="notext" class="ui-btn-left" data-rel="back">back</a>
			<img src="assets/images/mcc_career_services_small.png" width="203" height="59" alt="MCC Career Services">
	</div><!--header closing div-->
	
	<div data-role="content"><!-- opening content div-->

	<?php if ($_SERVER['REQUEST_METHOD'] !== 'POST') { 
			$firstName = $_SESSION['_firstName'];
			$lastName = $_SESSION['_lastName'];
			$email = $_SESSION['_email'];?>
					<h1>Receive Your Assessment Results</h1>
					<form data-ajax="false" method="POST">
                        <div data-role="fieldcontain">
                            <label for="first_name">First Name</label>
                            <input maxlength="50" name="first_name" id="first_name" type="text" value="<?php echo $firstName ?>">
                        </div>                        
						<div data-role="fieldcontain">
                            <label for="last_name">Last Name</label>
                            <input maxlength="50" name="last_name" id="last_name" type="text" value="<?php echo $lastName ?>">
                        </div>
                        <div data-role="fieldcontain">
                            <label for="email">Email Address</label>
                            <input maxlength="80" name="email" type="email" value="<?php echo $email ?>" required>
                        </div>
						<div data-role="fieldcontain">
							<input type="submit" value="Submit">
						</div>
                    </form>
	<?php } else {

    $type1 = personalityType($_SESSION['type1']);
    $type2 = personalityType($_SESSION['type2']);
    $type3 = personalityType($_SESSION['type3']);
	$type1_desc = personalityTypeDescription($_SESSION['type1']); 	
	$type2_desc = personalityTypeDescription($_SESSION['type2']); 	
	$type3_desc = personalityTypeDescription($_SESSION['type3']); 		
	$type1_html = personalityTypeHtml($_SESSION['type1']); 
	$type2_html = personalityTypeHtml($_SESSION['type2']); 	
	$type3_html = personalityTypeHtml($_SESSION['type3']);	

	$emailRegex = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	$nameRegex = "/^[A-Za-z .'-]+$/";
    $errors = array();
    if (empty($_POST['first_name'])) {
      //  $errors[] = 'You must specify a first name.';
    } else {
		$firstName = $_POST['first_name'];
		if (!preg_match($nameRegex, $firstName)) {
			$errors[] = 'The first name does not appear to be valid.';
		}
		$_SESSION['_firstName'] = $firstName;
    }
    if (empty($_POST['last_name'])) {
       // $errors[] = 'You must specify a last name.';
    } else {
        $lastName = $_POST['last_name'];
		if (!preg_match($nameRegex, $lastName)) {
			$errors[] = 'The last name does not appear to be valid.';
		}  
		$_SESSION['_lastName'] = $lastName;
    }
	if (empty($_POST['email'])) {
        $errors[] = 'You must specify a valid email.';
    } else {
        $email = $_POST['email'];
		if (!preg_match($emailRegex, $email)) {
			$errors[] = 'The email does not appear to be valid.';
		}  
		$_SESSION['_email'] = $email;
    }
    if (count($errors) === 0) {
		$subject = 'Your MCC Career Services Interests Assessment Results';
		$domain = "http://infolnx7.mccinfo.net/~repaschall/mcccsmwa/realistic_careers_mcc_programs.html";
		$message = '
		<html>
		<head>
		  <title>Assessment Results</title>
		</head>
		<body>
		  <table>

			<tr>
			  <td>Thank you for completing the MCC Career Services <b>Identifying Your Interests</b> Assessment.</td>
			</tr> 	
			<tr>
			  <td>&nbsp;</td>
			</tr>  
		  
			<tr>
			  <td>Below are your top three personality types.</td>
			</tr>  
			<tr>
			  <td>&nbsp;</td>
			</tr>  	
		 
			<tr>
			  <td> Our Career Navigators are able to assist current MCC students and alumni with the next steps of career exploration and planning.  If you are <b>not</b> a current student or alumni, we encourage you to contact Heartland Workforce Development for assistance with career exploration and job search.</td>
			</tr>  
			<tr>
			  <td><a href="http://www.hws-ne.org/for-workers/career-center/">Heartland Workforce Development</a><br><p>Call: 402-738-4060</p></td>
			<tr>
			  <td>&nbsp;</td>
			</tr>  
		 
			<tr>
			  <td><b>' . $type1 . '</b></td>
			</tr>
			
			<tr>
			  <td>' . $type1_desc . '</td>	
			</tr>	 
			<tr>
				<td><a href="'. $type1_html . '">' . $type1 . ' Careers and Majors</a></td>
			</tr><br>
			
			<tr>
			  <td><b>' . $type2 . '</b></td>
			</tr>
			<tr>
			  <td>' . $type2_desc . '</td>	
			</tr>
			<tr>
				<td><a href="'. $type2_html . '">' . $type2 . ' Careers and Majors</a></td>
			</tr><br>	
			
			<tr>
			  <td><b>' . $type3 . '</b></td>
			</tr>
			<tr>
			  <td>' . $type3_desc . '</td>	
			</tr>
			<tr>
				<td><a href="'. $type3_html . '">' . $type3 . ' Careers and Majors</a></td>
			</tr>	
			
		</table>

		  <br><b>Learn more about MCC</b><br>
			<a href="https://www.mccneb.edu/future/get_content.asp?url=/careercenter/career_cluster/">Explore all MCC Majors</a> 
		  
		  <br><br><b>Contact MCC Career Services</b><br>
		  Call:  (402) 250-6143<br>
		  Email:  skip123paschall@gmail.com<br>
		  <a href="https://www.mccneb.edu/careercenter/">Career Services full site</a><br>   
		  <a href="http://infolnx7.mccinfo.net/~repaschall/mcccsmwa_skip/">Career Services mobile app</a>     

		 </body>
		</html>
	';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	mail($email, $subject, $message, $headers);
	?>
			<h3>Thank you for taking the assessment.<br>
			Check your email for your assessment results.</h3>
			<div>
				<!--<h3>Take Charge of Your Future</h3>-->
				<a class="button" href="next_steps.php" data-role="button" data-inline="true" >Return to Next Steps</a>
			</div>						
	<?php
		}
		else {
	?>
						<ul class="errors">
	<?php foreach ($errors as $error) { ?>
							<li class="error"><?php echo $error; ?></li>
	<?php } ?>
						</ul>
	<?php
		}
	} ?>	
	
	</div><!--closing content div-->
	
	<div data-role="footer" data-position="fixed" data-tap-toggle="false" data-theme="a"><!-- opening footer div-->     
		 	<p id="footer">| <a href="http://www.mccneb.edu">MCC Home</a> | <a href="http://www.mccneb.edu/careercenter/">MCC Career Services</a> | <br>
			| <a href="http://www.mccneb.edu/future/">Future MCC Student</a> | <a href="http://www.mccneb.edu/currentstudents/2resourcecenter.asp">Current MCC Students</a> | 
			<br> Metropolitan Community College<br>Copyright © 2014, All Rights Reserved. 
			</p>
	</div><!-- footer closing div -->   
	
</div><!-- closing page div -->
</body><!-- closing body div -->
</html><!-- closing html div -->
