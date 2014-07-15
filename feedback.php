<?php
require_once 'includes/page_start.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>MCCCS Feedback</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="assets/css/mcccsmwa.css">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
	<script>
		$(document).ready(function(){
		  $('#nav_text').hide(); 
		  $('#asmnt_text').hide();
		  $('#usage_text').hide();
	      $("input[name='assessment']").change(function(){
			if( this.id === 'asmnt_yes' )
              $('#asmnt_text').slideDown('slow'); 
            else if( $('#asmnt_text').is(':visible') )
              $('#asmnt_text').slideUp('slow');         		
          }); 
		  $("input[name='navigation']").change(function(){
		    if( this.id === 'nav_no' )
              $('#nav_text').slideDown('slow'); 
            else if( $('#nav_text').is(':visible') )
              $('#nav_text').slideUp('slow'); 
		   });
		   $("input[name='usage']").change(function(){
		    if( this.id === 'usage_no' )
              $('#usage_text').slideDown('slow'); 
            else if( $('#usage_text').is(':visible') )
              $('#usage_text').slideUp('slow'); 
		   });
        });
	</script>
</head> 
<body> 

<!-- MCCCS Feedback -->
<div data-role="page" data-content-theme="a" id="csmwa">
	
	<div data-role="header" id="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
			<a href="index.php" data-icon="home" data-inline="true" data-iconpos="notext" class="ui-btn-right">home</a>
			<a href="#csmwa" data-icon="back" data-inline="true" data-iconpos="notext" class="ui-btn-left" data-rel="back">back</a>
			<img src="assets/images/mcc_career_services_small.png" width="203" height="59" alt="MCC Career Services">
	</div><!--header closing div-->
	
	<div data-role="content"><!-- opening content div-->

	<?php if ($_SERVER['REQUEST_METHOD'] !== 'POST') { ?>
			<h1>Please give us your feedback to help improve user experience.</h1>
			<form data-ajax="false" method="POST">	
				<div data-role="fieldcontain">	
					<fieldset data-role="controlgroup"> 
						<legend>Did you have any issues taking the assessment?</legend> 											
							<label for="asmnt_yes">Yes</label> 	 
							<input  type="radio" name="assessment" id="asmnt_yes" value="Yes">					
							<label for="asmnt_no">No</label> 			
							<input  type="radio" name="assessment" id="asmnt_no" value="No">
					</fieldset>
				</div>
				<div id="asmnt_text" data-role="fieldcontain">
					<label for="asmnt_comment">What issues did you have?</label>
					<textarea name="asmnt_comment" id="asmnt_comment" value=""></textarea>
				</div>				
				<div data-role="fieldcontain">	
					<fieldset data-role="controlgroup"> 
						<legend>Was the app navigation easy to follow?</legend> 											
							<label for="nav_yes">Yes</label> 	 
							<input  type="radio" name="navigation" id="nav_yes" value="Yes">					
							<label for="nav_no">No</label> 			
							<input  type="radio" name="navigation" id="nav_no" value="No">
					</fieldset>
				</div>
				<div id="nav_text" data-role="fieldcontain">
					<label for="nav_comment">Navigation suggestions</label>
					<textarea name="nav_comment" id="nav_comment" value=""></textarea>
				</div>
				<div data-role="fieldcontain">	
					<fieldset data-role="controlgroup"> 
						<legend>Was the app easy to use?</legend> 											
							<label for="usage_yes">Yes</label> 	 
							<input  type="radio" name="usage" id="usage_yes" value="Yes">					
							<label for="usage_no">No</label> 			
							<input  type="radio" name="usage" id="usage_no" value="No">			
					</fieldset>					
				</div>			
				<div id="usage_text" data-role="fieldcontain">
					<label for="usage_comment">What was difficult?</label>
					<textarea name="usage_comment" id="usage_comment" value=""></textarea>
				</div>
				<div data-role="fieldcontain">
					<label for="comment">Please provide any additional feedback</label> 
					<textarea name="comment" id="comment" value=""></textarea>
				</div>
				<input type="submit" value="Submit">
			</form>
	<?php } else {
		 	/* $assessment = $_POST['assessment'];		
			$asmnt_comment = $_POST['asmnt_comment'];
			$navigation = $_POST['navigation'];	
			$nav_comment = $_POST['nav_comment'];
			$usage = $_POST['usage'];
			$usage_comment = $_POST['usage_comment'];
			$comment = $_POST['comment']; */ 
	     if (isset($_POST['assessment'])) {
			$assessment = $_POST['assessment'];			
		}
		if (isset($_POST['asmnt_comment'])) {
			$asmnt_comment = $_POST['asmnt_comment'];			
		}
		if (isset($_POST['navigation'])) {
			$navigation = $_POST['navigation'];	
		} 
		if (isset($_POST['nav_comment'])) {
			$nav_comment = $_POST['nav_comment'];			
		}		
		if (isset($_POST['usage'])) {
			$usage = $_POST['usage'];
		}
		if (isset($_POST['usage_comment'])) {
			$usage_comment = $_POST['usage_comment'];			
		}
		if (isset($_POST['comment'])) {
			$comment = $_POST['comment'];	
		}	  
		$message = "Feedback has been sent from the MCC Career Services App.\n\n" .
			"Did you have any issues taking the assessment?  " . $assessment . "\n" . $asmnt_comment . "\n\n" .
			"Was the app navigation easy to follow?  " . $navigation . "\n" . $nav_comment . "\n\n" .
			"Was the app easy to use?  " . $usage . "\n" . $usage_comment . "\n\n" .
			"Additional feedback:" . "\n" . $comment  . "\n\n\n" .
			"Please do not reply to this message directly.\n\n";
		$fromEmail = 'CCC@MCC.net';
		$subject = "Feedback sent from MCC Career Services App: ";
		/* $email_to = "skip123paschall@gmail.com"; */
		$email_to = "rhschuman@gmail.com";
		mail($email_to, $subject, $message, $fromEmail);
	?>
						<h3>Thank you for taking the time to give us your feedback.</h3>
						<div>
							<a class="button" href="index.php">Return to Home Page</a>
						</div>										
	<?php
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
