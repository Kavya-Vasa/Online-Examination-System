
<!DOCTYPE html>
<html>
<head>
<style>
form {
     border: gray solid 8px;
     margin: auto;
     width:70%;
     height:600px;
     color:black;
     }
body
    {
     text-align:center;
     background:powderblue;
     }
h2
  {
   font-size: 30px;
  }
h1
  {
   background:goldenrod;
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
}

.myButton:hover {
  background: purple;
}
table, th, td{
border: 1px solid darkslategray;
border-collapse:collapse;
height: 8%;
width: 900px;
}
th
{
  color:darkblue;
}
td
{ 
  color: crimson;
  height: 30px;
}
table.center {
margin-left: auto;
margin-right: auto;
}
h4
  {
   font-size:28px;
   font-weight:bold;
   color:maroon;
  }
</style>
</head>
<body>
<h2> View the Details of Candidates who are appearing for the examination here </h2>
<form>
<h4> Candidate Details </h4>
<table class="center">
<tr>
<th> Candidate Enrollment Number </th>
<th> Candidate Name </th>
<th> Candidate Username </th>
<th> Candidate Password </th>
<th> Candidate Email </th>
</tr>

<?php

include "../dbcon.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from candidate_details"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['enrollment_number']; ?></td>
    <td><?php echo $data['candidate_name']; ?></td>
    <td><?php echo $data['candidate_username']; ?></td>
    <td><?php echo $data['candidate_password']; ?></td>
    <td><?php echo $data['candidate_email']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($conn); // Close connection ?>

<br><br>


<a href="./dashboard.php" class="myButton">Click here to go back to the Home page</a>
</form>
