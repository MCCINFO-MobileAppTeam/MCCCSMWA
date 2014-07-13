<?php
//require_once 'includes/handler.php';
//include ('includes/handler.php');
//trigger_error ('testing 123', 1024);
require_once 'includes/page_start_index.php';
$_SESSION['_quesSet'] = 1;
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>MCC Career Services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="assets/css/mcccsmwa.css">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
</head> 
<body>

<!-- Home Page -->
<div data-role="page" data-content-theme="a" id="csmwa">

	<div data-role="header" id="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
			<!--<a href="index.php" data-icon="home" data-inline="true" data-iconpos="notext" class="ui-btn-right"></a>-->
			<img src="assets/images/mcc_career_services_small.png" width="203" height="59" alt="MCC Career Services">
	</div><!--header closing div-->

	<div data-role="content"><!-- opening content div-->
	    <p class="indexintro">Match yourself to career opportunities and MCC majors.</p>
		<ul data-role="listview">
			<li data-icon="eye" data-iconshadow="true"><a href="assessment_intro.php">Discover your passion</a></li>
			<li data-icon="search" data-iconshadow="true"><a href="https://www.mccneb.edu/future/get_content.asp?url=/careercenter/career_cluster/" rel="external">Engage in education</a></li>
            <li data-icon="video" data-iconshadow="true"><a href="neworks.php">Navigate your career</a></li>
			<li data-icon="info" data-iconshadow="true"><a href="career_services_information.php">Explore Career Services</a></li>
			<li data-icon="action" data-iconshadow="true"><a href="contact_career_services.php">Contact Us</a></li>			
		</ul>		
	</div><!--closing content div-->
	
<?php
include ('includes/footer.php');
?> 
	
</div><!-- closing page div -->
</body><!-- closing body div -->
</html><!-- closing html div -->
