<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	echo "CAME FROM AJAX"
} else {
	include("includes/header.php");
	include("includes/footer.php");

}

?>