<?php
include_once '../dbcon.php';
if (isset($_POST['button1'])) {

    $StudentName = mysqli_real_escape_string($conn, $_POST['user']);
    $StudentPassword = mysqli_real_escape_string($conn, $_POST['pass']);
    $StudentEmail = mysqli_real_escape_string($conn, $_POST['email']);

    $insert = "UPDATE studentsignup_tbl
                SET student_name = '$StudentName', student_password = '$StudentPassword'
                WHERE student_email = '$StudentEmail'";
    $insert_query = mysqli_query($conn, $insert);
    if ($insert_query) {
?>
        <script>
            alert('Profile updated successfully');
            location.replace('./updatestudprofile.php');
        </script>
    <?php

    } else {
    ?>
        <script>
            alert('Failed to update profile :(. Try again');
        </script>
<?php
    }
}
?>