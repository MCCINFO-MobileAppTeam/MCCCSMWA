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
                <h2>Our Mission</h2>	
                    <p>The mission of Career Services at Metropolitan Community College is to foster collaborative relationships with both internal and external partners, to facilitate the development of responsible career decision-making skills and to provide comprehensive career development.</p>
					<br>
				<h2>Career Services Offers</h2>
					<p>Career assessment and exploration<br>
					NEworks registration assistance<br>
					Interview prep assistance<br>
					Job and internship strategies<br>
					Résumé and cover letter assistance/critique</p>
					<br>
                <h2>Get to Know Us Better</h2>				
                <iframe id="ensembleEmbeddedContent_U_UBIWEJC0mTVVP6gAaF1Q" src="https://mccneb.ensemblevideo.com/app/plugin/embed.aspx?ID=U_UBIWEJC0mTVVP6gAaF1Q&displayTitle=false&startTime=0&autoPlay=false&hideControls=false&showCaptions=false&width=240&height=180&displaySharing=false" frameborder="0" style="width:240px;height:236px;" height="236" width="240" allowfullscreen></iframe>					
	</div><!--closing content div-->
	
<?php
include ('includes/footer.php');
?>  
	
</div><!-- closing page div -->
</body><!-- closing body div -->
</html><!-- closing html div -->
