<?php
require_once 'includes/page_start.php';
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>MCCCS Assessment Intro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="assets/css/mcccsmwa.css">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
</head> 
<body> 

<!-- Assessment Intro Home Page -->
<div data-role="page" data-content-theme="a" id="csmwa">
	
	<div data-role="header" id="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
			<a href="index.php" data-icon="home" data-inline="true" data-iconpos="notext" class="ui-btn-right">home</a>
			<a href="#csmwa" data-icon="back" data-inline="true" data-iconpos="notext" class="ui-btn-left" data-rel="back">back</a>
			<img src="assets/images/mcc_career_services_small.png" width="203" height="59" alt="MCC Career Services">
	</div><!--header closing div-->
	
	<div data-role="content"><!-- opening content div-->
<<<<<<< HEAD
        <h3>Identify Your Interests</h3>
        <p class="intro">Take our assessment to learn how your personality matches to careers and MCC programs.<br><br>
		Be honest with yourself.<br>
		Go with your first thought.<br>
		Relax and have fun.</p>
		
		<!--<p class="intro">Be honest with yourself.<br>
        Go with your first thought.<br>
        Relax and have fun.<br>
        </p>-->		
=======
        <h2>Identify Your Interests</h2>
        <p class="intro">MCC Career Services provides a scientifically validated self-assessment tool.<br><br>
        Learn how your personality matches to career options and MCC programs.</p>
        <h2>Tips for taking the assessment</h2>
		<p class="intro">Be honest with yourself.<br>
        Go with your first thought.<br>
        Relax and have fun.<br>
        </p>		
>>>>>>> origin/master
					
		<ul data-role="listview">
			<li data-icon="action" data-iconshadow="true"><a href="assessment.php">Take the assessment now</a></li>
            <li data-icon="video"><a href="video_cs_intro.php">Watch our assessment video</a></li>
		</ul>		
	</div><!--closing content div-->
	
<?php
include ('includes/footer.php');
?>  
	
</div><!-- closing page div -->
</body><!-- closing body div -->
</html><!-- closing html div -->
