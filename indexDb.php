<?php
    session_start();
    include_once '../dbcon.php';
    if(isset($_POST['login_btn'])) {
    
        $StudentPassword = mysqli_real_escape_string($conn, $_POST['password']);
        $StudentEmail = mysqli_real_escape_string($conn, $_POST['Email']);
        $select = "SELECT * FROM studentsignup_tbl WHERE student_email = '$StudentEmail'";
        $select_query = mysqli_query($conn, $select);
        if(mysqli_num_rows($select_query) > 0) {
            $row = mysqli_fetch_assoc($select_query);
            if($row['student_password'] == $StudentPassword) {
                $_SESSION['studentEmail'] = $StudentEmail;
                ?>
                    <script>
                        alert('Logged in successfully');
                        location.replace('./afterstudentloginpage.php');
                    </script>
                <?php
            }else {
                ?>
                    <script>
                        alert('Failed to login:('); 
                    </script>
                <?php
            }
        }else {
            ?>
                <script>
                    alert('Email not found !!');
                </script>
            <?php
        }

    }
?> 
