<?php
	ob_start();

	$timezone = date_default_timezone_set('America/Los_Angeles');

	$con = mysqli_connect("localhost:8888", "root", "root", "stroudify");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}


?>