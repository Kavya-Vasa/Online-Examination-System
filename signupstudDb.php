<?php
    session_start();
    include_once '../dbcon.php';
    if(isset($_POST['SignUp_btn'])) {
        
        $StudentName = mysqli_real_escape_string($conn, $_POST['Name']);
        $StudentPassword = mysqli_real_escape_string($conn, $_POST['Password']);
        $StudentEmail = mysqli_real_escape_string($conn, $_POST['Email']);

        $insert = "INSERT INTO studentsignup_tbl(student_name, student_password, student_email)
        VALUES ('$StudentName','$StudentPassword','$StudentEmail')";
        $insert_query = mysqli_query($conn, $insert);
        if($insert_query) {
                $_SESSION['studentEmail'] = $StudentEmail;
            ?>
                <script>
                    alert('SignedUp in successfully');
                    location.replace('./index.php');
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert('Failed to SignUp:('); 
                </script>
            <?php
        }

    }

?> 
