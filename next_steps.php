<?php
require_once 'includes/page_start.php';
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>MCCCS Next Steps</title>
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
			<a href="index.php" data-icon="home" data-inline="true" data-iconpos="notext" class="ui-btn-right">home</a>
			<a href="#csmwa" data-icon="back" data-inline="true" data-iconpos="notext" class="ui-btn-left" data-rel="back">back</a>
			<img src="assets/images/mcc_career_services_small.png" width="203" height="59" alt="MCC Career Services">
	</div><!--header closing div-->
	
	<div data-role="content"><!-- opening content div-->
    
            <h3>You're On Your Way!</h3>
                <div class="options">
                    <div class="option">
                        <div class="option-text">
                            <p>Send my Assessment results to me.</p>
                        </div>
                        <a class="button" href="email_results.php" data-role="button" data-icon="mail" data-mini="false">Email my Assessment</a>
                    </div>
                    <div class="option">
                        <div class="option-text">
                            <p>Talk with a Career Navigator.</p>
                        </div>
                        <a class="button" href="schedule_appointment.php" data-role="button" data-icon="mail" data-mini="false">Schedule Appointment</a>
                    </div>
                    <div class="option">
                        <div class="option-text">
                            <p>Contact Career Services.</p>
                        </div>
                        <a class="button" href="contact_career_services.php" data-role="button" data-icon="action" data-mini="false">Contact Us</a>
                    </div>
                    <div class="option">
                        <div class="option-text">
                            <p>Share feedback for our app.</p>
                        </div>
                        <a class="button" href="feedback.php" data-role="button" data-icon="action" data-mini="false">Share Feedback</a>
                    </div>					
                 <div class="option-text"><h2>Get to Know Us Better</h2></div>
                <iframe id="ensembleEmbeddedContent_U_UBIWEJC0mTVVP6gAaF1Q" src="https://mccneb.ensemblevideo.com/app/plugin/embed.aspx?ID=U_UBIWEJC0mTVVP6gAaF1Q&displayTitle=false&startTime=0&autoPlay=false&hideControls=false&showCaptions=false&width=240&height=180&displaySharing=false" frameborder="0" style="width:240px;height:236px;" height="236" width="240" allowfullscreen></iframe>
                </div>
			
	</div><!--closing content div-->
	
<?php
include ('includes/footer.php');
?>   
	
</div><!-- closing page div -->
</body><!-- closing body div -->
</html><!-- closing html div -->

