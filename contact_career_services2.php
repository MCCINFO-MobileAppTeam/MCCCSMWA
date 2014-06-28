<?php
require_once 'includes/page_start.php';
?>
<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>MCC Career Services</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<link href="assets/css/mcccsmwa.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<!--
<script type="text/javascript">
$(document).bind("mobileinit", function () {
    $.mobile.ajaxEnabled = false;
});
</script>
-->
</head> 
<body> 

<!-- Home Page -->
<div data-role="page" data-content-theme="a" id="page">
	<div id="header" data-position="fixed" data-role="header">
    	<a href="#nav-panel" data-icon="back" data-iconpos="notext">Menu</a>
        <a href="#add-form" data-icon="home" data-iconpos="notext">Add</a>
		<img src="assets/images/mcc_career_services_small.png" width="203" height="59" alt="MCC Career Services">
    	<!-- <img src="assets/images/MCC_40th_250px.png" class="logoimage" width="250" height="50" alt="MCC Career Services" > -->
	</div><!--header closing div-->
	<div data-role="content">
	            <h1>Contact MCC Career Services<br>We're here for you!</h1>
                <div class="options">
                    <div class="option">
				<!--<div class="option-text">
                            <p>Talk with a Career Services Navigator.</p>
                        </div> -->
						<!--<a class="mobile_tel"  data-role="button" data-icon="tel"> Call us function </a>-->
						<a href="tel:4022506143" class="mobile_tel" data-role="button" data-icon="phone">Call (402) 738-4647</a>
                        <!--<p class="mobile_tel">Call (402) 738-4647</p>-->
                    </div>
                    <!-- <div class="option">
                       <div class="option-text">
                            <p>Send an email to Career Services.</p>
                        </div> 
                        <a href="email_mcc2.php" data-role="button" data-icon="mail">Send Questions or Comments</a>
                    </div> -->
                    <div class="option">
						<!--<div class="option-text">
                            <p>Visit a Career Services office.</p>
                        </div>  -->
                        <a href="campus_maps.php" data-role="button" data-icon="info" rel="external">View MCC Campus Maps</a>
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
	<div data-role="footer" data-position="fixed">   
		 	<p id="footer">| <a href="http://www.mccneb.edu">MCC Home</a> | <a href="http://www.mccneb.edu/careercenter/">MCC Career Services</a> | <br>
			| <a href="http://www.mccneb.edu/future/">Future MCC Student</a> | <a href="http://www.mccneb.edu/currentstudents/2resourcecenter.asp">Current MCC Students</a> | 
			<br> Metropolitan Community College<br>Copyright © 2014, All Rights Reserved. 
			</p>
	</div><!-- Footer Closing div -->   
</div><!--home page closing div-->

</body>
</html>
