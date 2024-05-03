<!DOCTYPE html>

<html>

<head>

<title>AFTER STUDENT LOGIN PAGE</title>
<style>
h1{
	border: black solid 5px;
	float: centre;
	border-radius: 4px;
	width: 700px;
	height: 400px;

}
/*
{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
}
*/


h1,p{
color:crimson;
}


.afterstudentlogin-form{
top: 50%;
left:50%;
transform: translate(-50%, -50%);
position:absolute;
}


ul {

	
	list-style-type: none;
}

ul li{
	display: inline-block;	
}
	
ul li a{ 
	text-decoration: none;
	color: crimson;
	padding: 7px 20px;
	border: 2px solid black;
	font-weight:bold;
	}

ul li a:hover{
	background-color:gray;
	
	
	}
	

img{
top: 55%;
left:50%;
transform: translate(-50%, -50%);
position:absolute;
}

.button1{
top:83%;
left:50%;
transform: translate(-50%, -50%);
position:absolute;
color: crimson;
border: 2px solid black;
font-weight:bold;
padding: 7px 20px;
text-decoration: none;
}

.button1:hover{
	background-color:gray;
}

</style>

</head>
<body style="background-color:powderblue"> 
<div class="afterstudentlogin-form"> 

<ul>
<li><a href="updatestudprofile.php" >PROFILE</a></li> 
<li><a href="exam.php" >EXAM</a></li>
<li><a href="index.php">LOGOUT</a></li>
</ul>

<h1 style="font-size:25px;text-align:center;margin-top:58px;"><br>WELCOME TO ONLINE EXAM<hr color="black"/></h1>
<img src="regi.png" width="225px" height="220px">
<button class="button1" type="submit"><a href ="coursesTable.php">SELECT YOUR COURSE NOW!</a></button><br><br>


</div>

</body>
</html>
