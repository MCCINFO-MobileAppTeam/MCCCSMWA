<?php
require_once 'includes/page_start.php';
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<titleNEWorks Information</title>
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
                <h2>Our Partnership with NEworks</h2>	
                    <p>MCC is the first institution in the state to partner with the Nebraska Department of Labor and utilize the NEworks job site.</p>
					<br>
					
				<h2>NEworks can benefit your career planning</h2>
					<p>Current MCC students and alumni use the keyword search <strong>Recruit MCC</strong> to view open positions. <br>
					<p>Employers interested in filling positions with MCC talent use <strong>Recruit MCC</strong> in their postings.<br>
					<br>
                <h2><a href="https://neworks.nebraska.gov/vosnet/Default.aspx" rel="external" data-role="button" data-inline="true" >Visit NEworks</a></h2>				
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
