<?php
require_once 'includes/page_start.php';
require_once 'includes/functions.php';
session_start();
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>MCCCS Schedule Appoint</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="assets/css/mcccsmwa.css">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
</head> 
<body> 

<!-- MCCCS Schedule Appointment Page -->
<div data-role="page" data-content-theme="a" id="csmwa">
	
	<div data-role="header" id="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
			<a href="index.php" data-icon="home" data-inline="true" data-iconpos="notext" class="ui-btn-right">home</a>
			<a href="#csmwa" data-icon="back" data-inline="true" data-iconpos="notext" class="ui-btn-left" data-rel="back">back</a>
			<img src="assets/images/mcc_career_services_small.png" width="203" height="59" alt="MCC Career Services">
	</div><!--header closing div-->
	
	<div data-role="content">
	
	<?php if ($_SERVER['REQUEST_METHOD'] !== 'POST') { 
			$firstName = $_SESSION['_firstName'];
			$lastName = $_SESSION['_lastName'];
			$email = $_SESSION['_email'];
			$phone = $_SESSION['_phone']; ?>
					<h1>Request An Appointment With Career Services</h1>
					<form data-ajax="false" method="POST" id="appointment_form">
						<!--<div class="form-field"> old wrapper class="form-field"-->
                        <div data-role="fieldcontain">
                            <label for="first_name">First Name</label>
                            <input maxlength="50" name="first_name" id="first_name" type="text" value="<?php echo $firstName ?>" required>
                        </div>                        
						<div data-role="fieldcontain">
                            <label for="last_name">Last Name</label>
                            <input maxlength="50" name="last_name" type="text" value="<?php echo $lastName ?>" required>
                        </div>
						<div data-role="fieldcontain">	
							<fieldset data-role="controlgroup"> 
								<legend>Please Selelct One</legend> 											
									<label for="radio_current">I am a current MCC student.</label> 	 
									<input  type="radio" name="mcc_status" id="radio_current" value="Current MCC student" required>					
									<label for="radio_alumni">I have taken classes in the past or have graduated from MCC</label> 			
									<input  type="radio" name="mcc_status" id="radio_alumni" value="Alumni">
									<label for="radio_never">I have never taken classes at MCC.</label> 			
									<input  type="radio" name="mcc_status" id="radio_never" value="Never taken classes at MCC">
							</fieldset>
						</div>
						<div data-role="fieldcontain">	
							<fieldset data-role="controlgroup" data-type="horizontal"> 
								<legend>Preferred contact method</legend> 											
									<label for="radio_email">Email Me</label> 	 
									<input  type="radio" name="contact_method" id="radio_email" value="Email" required>					
									<label for="radio_phone">Call Me</label> 			
									<input  type="radio" name="contact_method" id="radio_phone" value="Phone">
							</fieldset>
						</div>
                        <div data-role="fieldcontain">
                            <label for="email">Email Address</label>
                            <input maxlength="80" name="email" type="email" value="<?php echo $email ?>">
                        </div>
						<div data-role="fieldcontain">
                            <label for="phone">Phone Number</label>
                            <input name="phone" id="phone" type="tel" value="<?php echo $phone ?>">
                        </div>						
						<div data-role="fieldcontain">		
							<fieldset data-role="controlgroup" data-type="horizontal"> 
								<legend>Best contact time</legend> 
									<label for="radio_anyTime">Any Time</label> 	
									<input  type="radio" name="contact_time" id="radio_anyTime" value="Any Time"> 
									<label for="radio_morning">Morning</label> 	
									<input  type="radio" name="contact_time" id="radio_morning" value="Morning"> 						
									<label for="radio_afternoon">Afternoon</label> 			
									<input  type="radio" name="contact_time" id="radio_afternoon" value="Afternoon">
							</fieldset>
						</div>
						<div data-role="fieldcontain">								
							<label for="contact_days[]" class="select">Best day(s) to contact you</label> 
							<select name="contact_days[]" id="contact_days[]" multiple="multiple" data-native-menu="false">
								<option>Day(s)</option>
								<option value="Any Day"/>Any Day</option>
								<option value="Monday">Monday</option>
								<option value="Tuesday">Tuesday</option>
								<option value="Wednesday">Wednesday</option>
								<option value="Thursday">Thursday</option>
								<option value="Friday">Friday</option>
							</select>
						</div>						
						<div data-role="fieldcontain">		
							<label for="campus_select" class="select">Preferred campus</label>
							<select name="campus_select" id="campus_select">								
								<option value="Any Location">Select Location</option> 	
								<option value="Elkhorn Valley Campus">Elkhorn Valley Campus</option> 							
								<option value="Fort Omaha Campus">Fort Omaha Campus</option> 			
								<option value="MCC Express">MCC Express</option> 			
								<option value="South Omaha Campus">South Omaha Campus</option> 
							</select>
						</div>
						<div data-role="fieldcontain">
							<input type="submit" value="Submit">
						</div>
                    </form>
	<?php } else {
		$emailRegex = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		$nameRegex = "/^[A-Za-z .'-]+$/";
		$errors = array();
		$mccStatus = $_POST['mcc_status'];	
		if ($mccStatus == 'Never taken classes at MCC') {
			$errors[] = 'Our Career Navigators are able to assist current MCC students and alumni with the next steps of career exploration and planning.  If you are <b>not</b> a current student or alumni, we encourage you to contact Heartland Workforce Development for assistance with career exploration and job search.<br><a href="http://www.hws-ne.org/for-workers/career-center/">Heartland Workforce Development</a><br>Call: 402-738-4060';
		} 
		if (empty($_POST['first_name'])) {
			$errors[] = 'You must specify a first name.';
		} else {
			$firstName = $_POST['first_name'];
			if (!preg_match($nameRegex, $firstName)) {
				$errors[] = 'The first name does not appear to be valid.';
			}
			$_SESSION['_firstName'] = $firstName;
		}
		if (empty($_POST['last_name'])) {
			$errors[] = 'You must specify a last name.';
		} else {
			$lastName = $_POST['last_name'];
			if (!preg_match($nameRegex, $lastName)) {
				$errors[] = 'The last name does not appear to be valid.';
			}  
			$_SESSION['_lastName'] = $lastName;
		}
		if (isset($_POST['contact_method'])) {
			$contactMethod = $_POST['contact_method'];
		} else {
			$errors[] = 'You must select a contact method.';
		}	 
		if ($contactMethod == 'Email') {
			if (empty($_POST['email'])) {
				$errors[] = 'You must specify an email or select another contact method.';
			} else {
				$email = $_POST['email'];
				$phone = $_POST['phone'];	
				$_SESSION['_phone'] = $phone;
				if (!preg_match($emailRegex, $email)) {
					$errors[] = 'The email does not appear to be valid.';
				} 
				$_SESSION['_email'] = $email;
			}
		} 
		if ($contactMethod == 'Phone'){	
			if (empty($_POST['phone'])) {
				$errors[] = 'You must specify a phone number or select another contact method.';			
			} else {
				$phone = $_POST['phone'];
				$_SESSION['_phone'] = $phone;
				if (!empty($_POST['email'])) {
					$email = $_POST['email'];
					if (!preg_match($emailRegex, $email)) {
						$errors[] = 'The email does not appear to be valid.';
					} 
					$_SESSION['_email'] = $email;
				}
			}
		} 
		if (isset($_POST['contact_time'])) {
			$time = $_POST['contact_time'];
		} else {
			$time = 'None Specified';
		}
		if (isset($_POST['contact_days'])) {
			foreach( $_POST['contact_days'] as $day )
			$days .= "$day  ";     
		} else { 
			$days = 'None Specified';
		}
		if (isset($_POST['campus_select'])) {
			$location = $_POST['campus_select'];
		} else {
			$location = 'None Specified';
		}    
		if (count($errors) === 0) {  
			$_SESSION['_firstName'] = $firstName;
			$_SESSION['_lastName'] = $lastName;
			$_SESSION['_email'] = $email;
			$type1 = personalityType($_SESSION['type1']);
			$type2 = personalityType($_SESSION['type2']);
			$type3 = personalityType($_SESSION['type3']);
			$message = $firstName . ' ' . $lastName . " has requested to meet with a Career Services Navigator.\n\n" .
				"This student has taken the Holland Code Assessment.\n\n" .		
				"The student has the following top three personality types: \n\n" .
				$type1 . "\n" .
				$type2 . "\n" .
				$type3 . "\n\n" .
				"MCC Status: " . $mccStatus . "\n" .
				"Preferred Contact Method: " . $contactMethod . "\n" .
				"Student Email Address: " . $email . "\n" .
				"Student Phone Number: " . $phone . "\n" .
				"Preferred Meeting Days: " . $days . "\n" .
				"Preferred Meeting Time: " . $time . "\n" . 
				"Preferred Meeting Location: " . $location . "\n\n" .	
				"Please do not reply to this message directly.\n\n";
			$fromEmail = 'CCC@MCC.net';
			$subject = 'MCC Career Services Appointment Request: ' . $firstName . ' ' . $lastName;
			$email_to = "skip123paschall@gmail.com"; 
			/* $email_to = "rhschuman@gmail.com"; */
			mail($email_to, $subject, $message, $fromEmail);
	?>
			<h1>Thank you for requesting to meet with Career Services.<br>
			A Career Navigator will contact you within two business days.</h1>
			<div><br>
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

