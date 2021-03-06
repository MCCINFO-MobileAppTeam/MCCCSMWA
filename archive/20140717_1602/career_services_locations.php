<?php
require_once 'includes/page_start.php';
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>MCCCS Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="assets/css/mcccsmwa.css">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
</head> 
<body> 

<!-- MCCCS Information Page -->
<div data-role="page" data-content-theme="a" id="csmwa">
	
	<div data-role="header" id="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
			<a href="index.php" data-icon="home" data-inline="true" data-iconpos="notext" class="ui-btn-right">home</a>
			<a href="#csmwa" data-icon="back" data-inline="true" data-iconpos="notext" class="ui-btn-left" data-rel="back">back</a>
			<img src="assets/images/mcc_career_services_small.png" width="203" height="59" alt="MCC Career Services">
	</div><!--header closing div-->
	
	<div data-role="content"><!-- opening content div-->
                <h2>Career Services Locations</h2>	
					<br>

	<div data-role="collapsible-set">

		<div data-role="collapsible">
		<h3>South Omaha Campus</h3>
		<p>27th and Q Street<br>Connector Building 148<br>Career Navigator:  Jill Rathje<br>Mon. 10am-3pm<br>Fri. 10am-2pm<br>Career Navigator:  Monki Cannon<br>Tues. & Thurs. 10am-3pm</p>
		</div>

		<div data-role="collapsible">
		<h3>MCC Express</h3>
		<p>24th & Vinton Street<br>Career Navigator:  Moniki Cannon<br>Weds. 10am-3pm</p>
		</div>		

		<div data-role="collapsible">
		<h3>Fort Omaha Campus</h3>
		<p>30th and Fort Street<br>Building 10<br>Career Navigator:  Angela McGraw<br>Mon. & Tues. 8:30am-12:30pm<br>Thurs. & Fri. 8:30am-12:30pm<br>Building 10<br>Weds. 8:30am-12:30pm</p>
		</div>

		<div data-role="collapsible">
		<h3>Elkorn Valley Campus</h3>
		<p>204th & Dodge Street<br>Career Navigator:  Jill Rathje<br>Weds. & Thurs 10am-3pm</p>
		</div>	

		
	</div>

					
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
