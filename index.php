<?php
include("includes/config.php");

//session_destroy();

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
} else {
	#header("Location: register.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Stroudify</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>


	<div id="nowPlayingContainer">
		<div id="nowPlayingBar">

		</div>
	</div>		


</body>
</html>