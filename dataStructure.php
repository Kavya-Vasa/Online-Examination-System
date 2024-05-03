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
<h2> Data Structure Question List </h2>
<form>
<?php
session_start();
include_once '../dbcon.php';

$records = mysqli_query($conn, "select * from adddatastructurequestions_tbl");
if(mysqli_num_rows($records) > 0) {
  while($row = mysqli_fetch_assoc($records)) {
    ?>
    <h3>&nbsp; Q<?php echo $row['question_number'];?>.</h3>
    <h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row['question'];?></h3>
    <p>Option 1: <?php echo $row['option_1'];?></p>
    <p>Option 2: <?php echo $row['option_2'];?></p>
    <p>Option 3: <?php echo $row['option_3'];?></p>
    <p>Option 4: <?php echo $row['option_4'];?></p>
    <p>Correct Option: <?php echo $row['correct_option'];?></p>
    <?php
  }
}else {
  echo "NO data found in database";
}
?>
<br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="./questionList.php" class="myButton">Click here to go back to the Question List page</a>
<a href="./dashboard.php" class="myButton">Click here to go back to the Homepage</a>
</form>
</body>
</html
