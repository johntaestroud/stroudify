<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");

//session_destroy();

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
	echo "<script>userLoggedIn = '$userLoggedIn';</script>"
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

	<div class="mainContainer">

		<div class="topContainer">
			
			<?php include("includes/navBarContainer.php"); ?>

			<div id="mainViewContainer">
				
				<div id="mainContent">