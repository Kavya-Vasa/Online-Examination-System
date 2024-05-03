<!DOCTYPE html>
<html>
<head>
<style>
input[type=submit] 
          {
     width:9%;
           }
form {
     border: grey solid 8px;
     margin: auto;
     width:60%;
     height:500px;
     color:black;
     }
body
    {
     text-align: center;
     background:powderblue;
     }
h1
  {
   background:goldenrod;
  }
h4
  {
   font-size:28px;
   font-weight:bold;
   color:darkblue;
  }
h2
  {
   font-family:verdana;
  }
input[type=text] {
      width: 45%;
      height:25px;
      }
label
     {
     font-size:20px;
     font-family: ariel;
     font-weight:bold;
    }
button
    {
     width: 10%;
     height:21px;
    }
</style>
</head>
<body>
<h2>Admin Panel - Manage Courses</h2>
<form method="POST" action="./manageCoursesDb.php">
<h4> Add Course Details </h4>
<label for="CName">Course Name:</label>
<input autocomplete="off" type="text" id="CName" name="CName" value="" placeholder="Enter Course Name"><br><br><br>
<label for="CCode">Course Code:</label>
<input autocomplete="off" type="text" id="CCode" name="CCode" value="" placeholder="Enter Course Code"><br><br><br>
<label for="CDate">Exam Date for the Course:</label>
<input autocomplete="off" type="text" id="CDate" name="CDate" value="" placeholder="Enter Exam Date for the Course"><br><br><br>
<label for="CStudents">Number of eligible Students appearing for this Course:</label><br><br>
<input autocomplete="off" type="text" id="CStudents" name="CStudents" value="" placeholder="Enter Number of eligible Students appearing for this Course"><br><br><br>
<input type="submit" value="Add" name="Add">
</form>

</body>
</html>
