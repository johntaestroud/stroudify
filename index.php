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
			<div id="nowPlayingLeft">
				<div class="content">
					<span class="albumLink">

						<img src="https://uicradio.files.wordpress.com/2016/03/dvsn.png" class="albumArtwork">
		
					</span>
				</div>
			</div>

			<div id="nowPlayingCenter">
				
				<div class="content playerControls">

					<div class="buttons">

						<button class="controlButton shuffle" title="shuffle button">
							<img src="assets/images/icons/shuffle.png" alt="shuffle">
						</button>

						<button class="controlButton prev" title="previous button">
							<img src="assets/images/icons/prev.png" alt="prev">
						</button>

						<button class="controlButton play" title="play button">
							<img src="assets/images/icons/play.png" alt="play">
						</button>

						<button class="controlButton pause" title="pause button" style="display: none;">
							<img src="assets/images/icons/pause.png" alt="pause">
						</button>

						<button class="controlButton next" title="next button">
							<img src="assets/images/icons/next.png" alt="next">
						</button>

						<button class="controlButton repeat" title="repeat button">
							<img src="assets/images/icons/repeat.png" alt="repeat">
						</button>

					</div>

					<div class="playbackBar">
						
						<span class="progressTime current">0.00</span>

						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress"></div>
							</div>
						</div>

						<span class="progressTime remaining">0.00</span>


					</div>

				</div>

			</div>

			<div id="nowPlayingRight">
				
			</div>

		</div>
	</div>		


</body>
</html>