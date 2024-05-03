<!DOCTYPE html>

<html>

<head>

	<title> STUDENT signup FORM</title>
	<style>
		/* {
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
		} */

		body {
			background-repeat: no-repeat;
			background-size: cover;
		}

		h1,
		p {
			color: white;
		}

		.signup-form {
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
	<div class="signup-form">

		<h1>Student SignUp<hr color="white"/></h1>
		<form method="POST" action="signupstudDb.php">

			<p>Student Name</p>
			<input required type="text" name="Name" placeholder="User Name"><br></br>

			<p>Password</p>
			<input required type="password" name="Password" placeholder="password"><br><br>


			<p>email</p>
			<input required type="text" name="Email" placeholder="E-mail"><br><br>

			<button type="submit" name="SignUp_btn">SignUp</button><br><br>
			<p>Already account? &nbsp; &nbsp;<a href="index.php" style="color:white">Login</a></p>
		</form>
	</div>
</body>

</html>