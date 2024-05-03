<!DOCTYPE html>
<html>
<head>
<style>
h1
  {
   background:goldenrod;
   text-align:center;
  }
form {
     border: grey solid 8px;
     margin: auto;
     width:60%;
     height: 2900px;
     }
h2 
  {
   color:darkblue;
   text-align:center;
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
p
 {
 font-family: time new roman;
 color: crimson;
 font-size: 18px;
 margin-left: 5%;
 }
</style>
</head>
<body style= "background:powderblue";>
<h2> Operating Systems Question List </h2>
<form>
<?php
include "../dbcon.php";

$records = mysqli_query($conn, "select * from addoperatingsystemsquestions_tbl");

while($data = mysqli_fetch_array($records))
{
?>
<h3>&nbsp; Q<?php echo $data['question_number'];?>.</h3>
<h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $data['question'];?></h3>
<p>Option 1: <?php echo $data['option_1'];?></p>
<p>Option 2: <?php echo $data['option_2'];?></p>
<p>Option 3: <?php echo $data['option_3'];?></p>
<p>Option 4: <?php echo $data['option_4'];?></p>
<p>Correct Option: <?php echo $data['correct_option'];?></p>

<?php
}
?>
<?php mysqli_close($conn);
?>
<br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="./questionList.php" class="myButton">Click here to go back to the Question List page</a>
<a href="./dashboard.php" class="myButton">Click here to go back to the Homepage</a>
</form>

</body>
</html
