<?php
	echo '<h1>Testing PHP Email 2e</h1>';
	$headers = 'From: webmaster@example.com';
	echo(mail('skip.paschall@mutualofomaha.com', 'test message', 'this test', $headers));
?>