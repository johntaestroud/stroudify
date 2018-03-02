<?php
	ob_start();


	$timezone = date_default_timezone_set("Europe/London");

	$con = mysql_connect("localhost", "root", "", "stroudify");

	if(mysql_connect_errno()) {
		echo "Failed to connect: " . mysql_connect_errno();
	}


?>