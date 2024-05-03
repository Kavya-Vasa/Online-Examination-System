<?php  include_once '../dbcon.php';
session_start();

//check to see if score is set
if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if($_POST){
    $number = $_POST['number'];
    $course = $_POST['course'];
    if($number == 1) {
        $_SESSION["score"] = 0;
       }
    $selected_choice = $_POST['option'];

    echo $number. '<br>';
    echo $selected_choice;
    $next = $number+1;  


//get total questions
$query = "SELECT * FROM $course"."_questions";

//get result
$results = $conn->query($query) or die($conn->error.__LINE__);
$total = $results->num_rows;


//get correct choice
$query = "SELECT * FROM $course"."_choices WHERE question_number = $number AND is_correct = 1";

//get result
$result = $conn->query($query) or die($conn->error.__LINE__);

//get row
$row = $result->fetch_assoc();

//set correct choice
$correct_choice = $row['question_number'];

//compare
if($correct_choice == $selected_choice){
    //ans is correct
    $_SESSION['score']++;
}


//check last question
if($number == $total){
  header("Location:final.php?course=".$course);
  exit();
} else{
    header("Location:question.php?n=".$next."&course=".$course);
}

}
?>