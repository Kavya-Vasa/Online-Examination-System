<?php include_once '../dbcon.php';
session_start();
//Set Question Number
$number = (int) $_GET['n'];
$course = $_GET['course'];

//get total questions
$query = "SELECT * FROM $course" . "_questions";

//get result
$results = $conn->query($query) or die($conn->error . __LINE__);
$total = $results->num_rows;

//Get Question
$query = "SELECT * FROM $course" . "_questions 
         WHERE question_number = $number";

//get result
$result = $conn->query($query) or die($conn->error . __LINE__);

$question = $result->fetch_assoc();

//Get Choices
$query = "SELECT * FROM $course" . "_choices 
         WHERE question_number = $number";

//get result
$choices = $conn->query($query) or die($conn->error . __LINE__);

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
        <meta charset="utf-8" />
        <title>Quiz Questions</title>
        <link rel="stylesheet" href="css/style.css" />
        <style>
            #countdown {
            float: right;
            font-size: 26px;
            color: crimson;
            font-weight: bold;
        }
        </style>
</head>

<body>
    <h1 align="center"><u>Test your <?php echo $subjects[$course] ?> knowledge</u></h1>
    <main>
        <div class="info">
            <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?> :</div><br>
            <div id="countdown"></div>
            <script src="script.js"></script>
            <p class="question">
                <?php echo $question['text']; ?>
            </p>
            <form action="process.php" method="post">
                <ul class="choices">
                    <?php while ($row = $choices->fetch_assoc()) : ?>
                        <li><input type="radio" name="option" value="<?php echo $row['question_number']; ?>" /> <?php echo $row['text']; ?> </li>
                        <hr color="crimson" />
                    <?php endwhile; ?>
                </ul>
                <button class="button1" onclick="window.location.href = 'final.php';">Next</button>
                <input type="hidden" name="number" value="<?php echo $number; ?>" />
                <input type="hidden" name="course" value="<?php echo $course; ?>" />
            </form>
        </div>
    </main>
</body>

</html>