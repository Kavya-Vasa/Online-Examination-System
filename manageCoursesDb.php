<?php
     include_once '../dbcon.php';
     if(isset($_POST['Add'])){
    $courseName = mysqli_real_escape_string($conn,$_POST['CName']);
    $courseCode = mysqli_real_escape_string($conn,$_POST['CCode']);
    $examDate = mysqli_real_escape_string($conn,$_POST['CDate']);
    $eligibleStudents = mysqli_real_escape_string($conn,$_POST['CStudents']);

    $insert= "INSERT INTO managecourses_tbl(course_name, course_code, exam_date, eligible_students) VALUES('$courseName', '$courseCode', '$examDate', '$eligibleStudents')";
    $insert_query = mysqli_query($conn, $insert);
    if($insert_query) {
        ?>
        <script>
             alert('Data inserted');
             location.replace('./manageCourses.php');
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