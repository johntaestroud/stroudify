<?php

function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText
}

function sanitizeFormUsername($inputText) {
	$username = strip_tags($username);
	$username = str_replace(" ", "", $username);//find & replace every space
	return $inputText
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));// converts all strings to lowercase first and then uppercase
	return $inputText;
}


if(isset($_POST['loginButton'])) {

}

if(isset($_POST['registerButton'])) {
	//register button was pressed
	$username = sanitizeFormUsername($_POST['username']);
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$email = sanitizeFormString($_POST['email']);
	$email2 = sanitizeFormString($_POST['email2']);
	$password = sanitizeFormPassword($_POST['password']);
	$password2 = sanitizeFormPassword($_POST['password2']);	


}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
			 <label for="loginUsername">Username</label>
			 <input id="loginUsername" name="loginUsername" type="text" placeholder="Username" required>
		   </p>

		   <p>
			<label for="loginPassword">Password</label>
			<input id="loginPassword" name="loginPassword" type="password" placeholder="Password" required>
		   </p>

		  <button type="submit" name="loginButton">Log in</button>

		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>
			<p>
			 <label for="username">Username</label>
			 <input id="username" name="username" type="text" placeholder="Username" required>
		   </p>

		   <p>
			 <label for="firstName">First name</label>
			 <input id="firstName" name="firstName" type="text" placeholder="First Name" required>
		   </p>

		   <p>
			 <label for="lastName">Last Name</label>
			 <input id="lastName" name="lastName" type="text" placeholder="Last Name" required>
		   </p>

		   <p>
			 <label for="email">Email</label>
			 <input id="email" name="email" type="email" placeholder="johndoe@gmail" required>
		   </p>

		   <p>
			 <label for="email2">Confirm Email</label>
			 <input id="email2" name="email2" type="email" placeholder="johndoe@gmail" required>
		   </p>

		   <p>
			<label for="password">Password</label>
			<input id="password" name="password" type="password" placeholder="Password" required>
		   </p>

		    <p>
			<label for="password2">Confirm Password</label>
			<input id="password2" name="password2" type="password" placeholder="Confirm password" required>
		   </p>

		  <button type="submit" name="registerButton">Sign Up</button>

		</form>


	</div>

</body>
</html>