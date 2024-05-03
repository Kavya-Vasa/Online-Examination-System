<!DOCTYPE html>
<html>
<head>
<style>
form {
     border: grey solid 8px;
     margin: auto;
     width:60%;
     height:600px;
     color:black;
     }
body
    {
     text-align: center;
     background:powderblue;
     }
h2
  {
   font-family:verdana;
  }
p
  {
  margin-top:5%;
  font-size:21px;
  font-family:book antiqua;
  color: crimson;
  font-weight:lighter;
  }
h4
  {
   color:darkblue;
   font-weight:bold;
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
  font-size: 14px;
  text-decoration: none;
  border-radius: 5px;
}

.myButton:hover {
  background: purple;
}
</style>
</head>
<body>
<h2> Admin Panel <h2>
<form>
<h4>Welcome to the Admin Control Panel</h4>
<!-- <button type="submit" formaction="C:\xampp\htdocs\Web Application of computer based examination system\admin\dashboard.php">Home</button>
<button type="submit" formaction="C:\xampp\htdocs\Web Application of computer based examination system\admin\Add Candidate Details.php">Add Candidate Details</button>
<button type="submit" formaction="C:\xampp\htdocs\Web Application of computer based examination system\admin\Manage Courses.php">Manage Courses</button>
<button type="submit" formaction="C:\xampp\htdocs\Web Application of computer based examination system\admin\Add Questions.php">Add Questions</button>
<button type="submit" formaction="C:\xampp\htdocs\Web Application of computer based examination system\admin\Question List.php">View Question List</button>
<button type="submit" formaction="C:\xampp\htdocs\Web Application of computer based examination system\admin\View Result.php">View Exam Result</button>
<button type="submit" formaction="C:\xampp\htdocs\Web Application of computer based examination system\admin\index.php">Logout</button> -->
<a href="./manageCourses.php" class="myButton">Manage Courses</a> 
<a href="./addquestions.php" class="myButton">Add questions</a> 
<a href="./addCandidateDetails.php" class="myButton">Add Candidate Details</a><br><br>
<a href="./viewCandidatesAppearingForTheExam.php" class="myButton"> View the eligible Candidates and their details here </a>
&nbsp<a href="./questionList.php" class="myButton">View Question List</a><br><br>
<a href="./index.php" class="myButton">Logout</a>
<p>You can control the examination system from here<p>
<img src="canstockphoto41851460.jpg" height="190" width="240">
</form>
<!-- <h1>Developed by Kavya Vasa and Hiteshi Lodaya</h1> -->
</body>
</html>
