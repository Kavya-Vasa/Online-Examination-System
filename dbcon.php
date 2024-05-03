<?php
    $server = "localhost";
    $user = "root";
    $pass ="";
    $db = "cbes_db";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if(!$conn) {
		echo "Failed to connect database";
	}
?>