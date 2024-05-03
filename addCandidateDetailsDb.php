<?php
    include_once '../dbcon.php';
    if(isset($_POST['submit_btn'])) {
        $enrollmentNumber = mysqli_real_escape_string($conn, $_POST['ENumber']);
        $candidateName = mysqli_real_escape_string($conn, $_POST['Name']);
        $candidateUsername = mysqli_real_escape_string($conn, $_POST['UName']);
        $candidatePassword = mysqli_real_escape_string($conn, $_POST['Password']);
        $candidateEmail = mysqli_real_escape_string($conn, $_POST['Email']);

        $insert = "INSERT INTO candidate_details(enrollment_number,candidate_name, candidate_username, candidate_password, candidate_email)
        VALUES('$enrollmentNumber','$candidateName','$candidateUsername','$candidatePassword','$candidateEmail')";
        $insert_query = mysqli_query($conn, $insert);
        if($insert_query) {
            ?>
                <script>
                    alert('Data inserted');
                    location.replace('addCandidateDetails.php');
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert('Failed to insert data :(');
                </script>
            <?php
        }

    }

?>
