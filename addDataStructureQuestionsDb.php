<?php
    include_once '../dbcon.php';
    if(isset($_POST['submit'])) {
    $courseName = mysqli_real_escape_string($conn,$_POST['CName']);
    $questionNumber = mysqli_real_escape_string($conn,$_POST['QNumber']);
    $question = mysqli_real_escape_string($conn,$_POST['IQuestion']);
    $option1 = mysqli_real_escape_string($conn,$_POST['Option1']);
    $option2 = mysqli_real_escape_string($conn,$_POST['Option2']);
    $option3 = mysqli_real_escape_string($conn,$_POST['Option3']);
    $option4 = mysqli_real_escape_string($conn,$_POST['Option4']);
    $correctOption = mysqli_real_escape_string($conn,$_POST['COption']);
  
    $insert= "INSERT INTO adddatastructurequestions_tbl(course_name, question_number, question, option_1, option_2, option_3, option_4, correct_option)
    VALUES('$courseName','$questionNumber','$question','$option1','$option2','$option3','$option4','$correctOption')";
    $insert_query = mysqli_query($conn, $insert);
    if($insert_query) {
        ?>
          <script>
               alert('Data inserted');
               location.replace('./addDataStructureQuestions.php');
          </script>
        <?php    
    } else {
        ?>
       
            <script>
                 alert('Failed to insert data :(');
            </script>
        <?php   
        }

    }
    
?>
