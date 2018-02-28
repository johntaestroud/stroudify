<?php
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");


	$account = new Account();

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
?>


<html>
<head>
	<title>Welcome to Stroudify</title>
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
				<?php echo $account->getError(Constants::$usernameCharacters); ?>
			 <label for="username">Username</label>
			 <input id="username" name="username" type="text" placeholder="Username" required>
		   </p>

		   <p>
				<?php echo $account->getError(Constants::$firstNameCharacters); ?>
			 <label for="firstName">First name</label>
			 <input id="firstName" name="firstName" type="text" placeholder="First Name" required>
		   </p>

		   <p>
				<?php echo $account->getError(Constants::$lastNameCharacters); ?>
			 <label for="lastName">Last Name</label>
			 <input id="lastName" name="lastName" type="text" placeholder="Last Name" required>
		   </p>

		   <p>
				<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$emailInvalid); ?>
			 <label for="email">Email</label>
			 <input id="email" name="email" type="email" placeholder="johndoe@gmail" required>
		   </p>

		   <p>
			 <label for="email2">Confirm Email</label>
			 <input id="email2" name="email2" type="email" placeholder="johndoe@gmail" required>
		   </p>

		   <p>
				<?php echo $account->getError(Constants::$passwordDoNotMatch); ?>
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>

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