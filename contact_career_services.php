<?php
require_once 'includes/page_start.php';
?>
<!DOCTYPE html> 
<html>
	<head>
	<meta charset="utf-8">
	<title>MCCCS Contact Info</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="assets/css/mcccsmwa.css">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
</head> 
<body> 

<!-- MCCCS Contact Info Page -->
<div data-role="page" data-content-theme="a" id="csmwa">
	
	<div data-role="header" id="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
			<a href="index.php" data-icon="home" data-inline="true" data-iconpos="notext" class="ui-btn-right">home</a>
			<a href="#csmwa" data-icon="back" data-inline="true" data-iconpos="notext" class="ui-btn-left" data-rel="back">back</a>
			<img src="assets/images/mcc_career_services_small.png" width="203" height="59" alt="MCC Career Services">
	</div><!--header closing div-->
	
	<div data-role="content"><!-- opening content div-->
	            <h2>Contact Us<br>MCC Career Services</h2><p>We are here for you!</p>
                <div class="options">
                    <div class="option">
						<a href="tel:4022506143" class="mobile_tel" data-role="button" data-icon="phone">Call (402) 738-4647</a>
                    </div>
                    <div class="option">
						<a href="career_services_locations.php" data-role="button" data-icon="location" rel="external">Our Locations</a>
                    </div>					
                    <div class="option">
						<a href="campus_maps.php" data-role="button" data-icon="location" rel="external">Campus Maps</a>
                    </div>

                </div>
				<script>
					if (screen.width <= 500) {
						$('.mobile_tel').each(function() {
							$(this).wrap("<a href='tel:4028506170'/>");
						});
					}
				</script>
	
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
