<?php
$time = date('l, d F Y, H:i:s');
$err = "\r\n Submissions Sucessfull at:". $time;
error_log($err, 3, 'testing.log');
?>