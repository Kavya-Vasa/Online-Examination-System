
<?php
        session_start();
        include_once '../dbcon.php';
        if (isset($_POST['adsignup'])) {
            $adminusername = mysqli_real_escape_string($conn, $_POST['user']);
            $adminpassword = mysqli_real_escape_string($conn, $_POST['pass']);

            $insert = "INSERT INTO adminsignup_tbl(admin_username, admin_password)
        VALUES ('$adminusername', '$adminpassword')";
            $insert_query = mysqli_query($conn, $insert);
            if ($insert_query) {
                $_SESSION['adminpassword'] = $adminpassword;
        ?>
            <script>
                alert('Signed Up successfully')
                location.replace('./index.php');
            </script>
        <?php
            } else {
        ?>
                <script>
                    alert('Failed to Sign Up :(');
                </script>
            <?php
            }
        }
        
            ?> 