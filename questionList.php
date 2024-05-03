<!DOCTYPE html>
<html>
<head>
<style>
body
   {
    text-align: center;
    background:powderblue;
   }
.myButton {
  border: none;
  outline: none;
  padding: 10px 8px;
  background: gray;
  color: white;
  font-size: 18px;
  text-decoration: none;
  border-radius: 5px;
  margin:auto;
}

.myButton:hover {
  background: purple;
}
h1
  {
   background:goldenrod;
  }
p
  {
   color: crimson;
   font-size: 23px;
   font-weight: lighter;
   font-family: book antiqua;
  }
form {
     border: grey solid 8px;
     margin: auto;
     width:60%;
     height:500px;
     color:black;
     }
h3
  {
   color:darkblue;
   font-size:30px;
   font-weight:bold;
  }
</style>
</head>
<body>
<h2 style="font-family:verdana;">Admin Panel - Question List</h2><br><br>
<form>
<h3> Welcome to View Question List page<h3>
<a href= "./coreJava.php" class= "myButton">Core Java Question List</a>
<a href="./dBMS.php" class="myButton">DBMS Question List</a>
<a href="./dataStructure.php" class="myButton">Data Structure Question List</a><br><br>
<a href="./operatingSystems.php" class="myButton">Operating Systems Question List</a>
<a href="./microprocessor.php" class="myButton">Microprocessor Question List</a><br><br>
<a href="./dashboard.php" class="myButton">Click here to go back to the Homepage</a><br><br>
<p>Here you can view the question list for every course.<p>
</form>

</body>
</html>