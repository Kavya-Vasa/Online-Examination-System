<!DOCTYPE html>
<html>
<head>
<style>
h1
  {
   background:goldenrod;
   text-align:center;
  }
input[type=text] {
      width: 30%;
      height:25px;
      }

input[type=submit] 
          {
     width:10%;
           }
form {
     border: grey solid 8px;
     margin: auto;
     width:60%;
     height:500px;
     }
label
     {
      margin-left: 20%;
      color:black;
     }
h2 
  {
   color:black;
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
.margin
   {
    margin-top:10%;
   }
h3
  {
   text-align: center;
   font-size:30px;
   color: darkblue;
   }
p
  {
  margin-top:8%;
  font-size:21px;
  font-family:book antiqua;
  color: crimson;
  font-weight:lighter;
  text-align: center;
  }
</style>
<body style= "background:powderblue";>
<h2 style= "font-family:verdana;">Admin Panel - Add Questions</h2>
<form method="POST" action="./addQuestionsDb.php">
<h3 style="font-family:ariel;">Add Questions for every course here </h3>
</head>
<div class="margin"><center><a href="./addCoreJavaQuestions.php" class="myButton"> Add Core Java Questions here </a>
&nbsp; &nbsp;<a href="./addDBMSQuestions.php" class="myButton"> Add DBMS Questions here </a><br><br><br>
<a href="./addDataStructureQuestions.php" class="myButton"> Add Data Structure Questions here </a>
&nbsp; &nbsp;<a href="./addOperatingSystemsQuestions.php" class="myButton"> Add Operating Systems Questions here </a><br><br><br>
<a href="./addMicroprocessorQuestions.php" class="myButton"> Add Microprocessor Questions here </a>
&nbsp; &nbsp;<a href="./dashboard.php" class="myButton">Click here to go back to the Homepage</a></center></div>
<p> Select the Course you want to add questions for. </p> 
</form>

</body>
</html> 


