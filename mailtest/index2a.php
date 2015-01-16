<?php
	require_once('Mail.php');
	
	$recipient = 'grosas@mccneb.edu';
	$headers['From'] = 'MCC Career Services <infosmtp@mccneb.edu>';
	$headers['To'] = 'grosas@mccneb.edu';
	$headers['Subject'] = 'MCC Test Message';
	$headers['Reply-To'] = 'MCC Career Services <careerservices@mccneb.edu>';
	$body = 'This is a test message.';
	$smtp = Mail::factory('smtp',
		array('host' => '10.168.5.200',
			'auth'=>true,
			'username'=>'infosmtp@mccneb.edu',
			'password'=>'3x21nTf!'));
	$smtp->send($recipient, $headers, $body);
	if(PEAR::isError($smtp)) {
		echo 'Error: ' . $smtp->getMessage();
	} else {
		echo 'Success? ';
	}
	//$headers = 'From: webmaster@example.com';
	//echo(mail('guillermo.rosas@icloud.com', 'test message', 'this test', $headers));
?>