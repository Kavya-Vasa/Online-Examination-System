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
     height: 600px;
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
</style>
<body style= "background:powderblue";>
<h2 style= "font-family:verdana;">Admin Panel - Add Microprocessor Questions</h2>
<form method="POST" action="./addMicroprocessorQuestionsDb.php">
<h3 style="font-family:ariel;">
</head>
<label for="CName"> Course Name: </label>
<input type="text" id="CName" name="CName" value="" placeholder="Enter Course Name" autocomplete="off"><br><br>

<label for="QNumber"> Question Number: </label>
<input type="text" id="QNumber" name="QNumber" value="" placeholder="Enter Question Number" autocomplete="off"><br><br>

<label for="IQuestion"> Input Question Here: </label>
<input type="text" id="IQuestion" name="IQuestion" value="" placeholder="Enter Question" autocomplete="off"><br><br>

<label for="Option1">Option 1:</label>
<input type="text" id="Option1" name="Option1" value="" placeholder="Enter Option 1" autocomplete="off"><br><br>

<label for="Option2">Option 2:</label>
<input type="text" id="Option2" name="Option2" value="" placeholder="Enter Option 2" autocomplete="off"><br><br>

<label for="Option3">Option 3:</label>
<input type="text" id="Option3" name="Option3" value="" placeholder="Enter Option 3" autocomplete="off"><br><br>

<label for="Option4">Option 4:</label>
<input type="text" id="Option4" name="Option4" value="" placeholder="Enter Option 4" autocomplete="off"><br><br>

<label for="COption"> Enter Correct Option Number Here: </label>
<input type="text" id="COption" name="COption" value="" placeholder="Enter Correct Option Here" autocomplete="off"><br><br>

<input type="submit" value="Submit" name="submit"> <br><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; <a href="./addQuestions.php" class="myButton">Click here to go back to the Add Questions page </a>&nbsp;&nbsp;
<a href="./Home.php" class="myButton">Click here to go back to the Homepage</a>
</h3>
</form>
</body>
</html> 


