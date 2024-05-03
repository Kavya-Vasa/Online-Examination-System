<!DOCTYPE html>

<html>

<head>

<title> ADMIN SignUp FORM</title>
<style>
	/*
{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
}
*/

body{
	background-repeat:no-repeat;
background-size:cover;
}

h1,p{
color:white;
}

.signupadmin-form{
top: 50%;
left:50%;
transform: translate(-50%, -50%);
position:absolute;
border: 2px solid white;
padding: 10px 15px;

}
</style>

</head>
<body style="background-image:url('login.jpeg')"> 
<div class="signupadmin-form"> 

<h1>Admin SignUp <hr color="white"/></h1>
<form method="POST" action="signupadminDb.php">

<p>Admin Name</p>
<input required type="text" name="user" placeholder="User Name"><br></br>

<p>Password</p>
<input required type="password" name="pass" placeholder="password"><br><br>

<button type="submit" name="adsignup">SignUp</button><br><br>
<p>Already account? &nbsp; &nbsp;<a href="index.php" style="color:white">Login</a></p>
</form>
</body> 
</html>
