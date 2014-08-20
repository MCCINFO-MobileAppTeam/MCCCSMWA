<?php
	$headers = 'From: webmaster@example.com';
	echo(mail('repaschall@mccneb.edu', 'test message', 'this test', $headers));
	echo "<h1>Testing PHP Email</h1>";
?>