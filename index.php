<!DOCTYPE html>

<html>

<head>

	<title> STUDENT LOGIN FORM</title>
	<style>
		body {
			background-repeat: no-repeat;
			background-size: cover;
			color: white;
		}

		.login-form {
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			position: absolute;
			border: 2px solid white;
			padding: 10px 15px;
		}
	</style>

</head>

<body style="background-image:url('login.jpeg')">
	<div class="login-form">

		<h1>Student Login<hr color="white"/></h1>
			<form method="POST" action="indexDb.php">

				<label>Email</label>
				<input required type="text" name="Email" placeholder="E-mail"><br><br>

				<label>Password</label>
				<input required type="password" name="password" placeholder="password"><br><br>

				<button type="submit" name="login_btn">login</button><br><br>
				<p>New User? &nbsp; &nbsp;<a href="signupstud.php" style="color:white">SignUp</a></p>
			</form>
	</div>
</body>

</html>