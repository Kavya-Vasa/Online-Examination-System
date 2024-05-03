<?php  include_once '../dbcon.php';
session_start();

$course = $_GET['course'];

//get total questions
$query = "SELECT * FROM $course"."_questions";

//get result
$results = $conn->query($query) or die($conn->error.__LINE__);
$total = $results->num_rows;
$subjects = [
    'cj' => 'Core Java',
    'dbms' => 'Database Management System',
    'os' => 'Operating System',
    'mp' => 'Microprocessor',
    'ds' => 'Data Structures',
];

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Result</title>
<link rel="stylesheet"  href="css/style.css" />
</head>
<body>

<h1 align="left"><u><?php echo $subjects[$course] ?> Quiz Result</u></h1>
<main>
<div class="info">
<h2>You're Done!</h2>
<p>Congrats! You have completed the test</p>
<p><strong>Final Score</strong>: <?php echo $_SESSION['score']; ?> / <?php echo $total; ?></p>
<button class="button1" onclick="window.location.href='question.php?n=1&course=<?php echo $course; ?>'">Try Again</button>
<button class="button1" onclick="window.location.href='coursesTable.php';">Back to Quiz</button>
</div>
</main>

<footer ="center">Copyright &copy; 2021,<?php echo $subjects[$course] ?> quiz</h=>

</footer>

</body>
</html>