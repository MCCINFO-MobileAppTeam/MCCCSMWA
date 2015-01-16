<?php
	$headers = 'From: webmaster@example.com';
	echo(mail('guillermo.rosas@icloud.com', 'test message', 'this test', $headers));
?>