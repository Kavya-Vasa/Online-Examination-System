<?php
session_start();
include_once '../dbcon.php';
$email = $_SESSION['studentEmail'];
$query = "SELECT * FROM studentsignup_tbl WHERE student_email = '$email'";
$sql_query = mysqli_query($conn, $query);
if (mysqli_num_rows($sql_query) > 0) {
   $row = mysqli_fetch_assoc($sql_query);
   $password = $row['student_password'];
   $name = $row['student_name'];
} else {
   echo "Data not found";
}
?>

<!DOCTYPE html>

<html>

<head>


   <style>
      h1 {
         color: crimson;
         text-align: center;
         font-size: 34px;
      }

      img {
         margin-top: 5%;
         margin-left: 5%;

      }



      form {
         border: black solid 5px;
         margin: 50px 100px 5px 50px;
         width: 60%;
         height: 50%;
         color: black;
         

      }


      label {
         font-size: 19px;
         font-family: ariel;
         font-weight: bold;
         color: crimson;


      }

      .button1 {
         color: crimson;
         border: 2px solid black;
         font-weight: bold;
         padding: 7px 20px;
         text-decoration: none;
      left: 60px;

      }

      .button1:hover {
         background-color: gray;

      }

      div {
         /* margin-top: 1px; */
         margin-left: 25%;
         position: absolute;
         top: 35%;
      }
   </style>

</head>


<body style="background-color:powderblue; margin-top: 5%;">


   <form action="updatestudprofileDb.php" method="POST" style="margin: auto;">
      <h1><br> Student Profile
         <hr color="black" />
      </h1>

      <!-- <div style="text-align: center"> -->
      <img src="profilelog.png" width="225px" height="220px">
      <div>
         <label for="user">Student Username: </label>
         <input required value="<?php echo $name; ?>" type="text" name="user" placeholder="User Name"><br><br><br>

         <label for="email">Student Email: </label>
         <input readonly required type="email" value="<?php echo $email; ?>" name="email" placeholder="E-mail"><br><br><br>

         <label for="pass">Student Password: </label>
         <input required type="password" value="<?php echo $password; ?>" name="pass" placeholder="password">
         <br><br><br><br><br>

         <button type="submit" class="button1" name="button1">UPDATE</button>
      </div>
   </form>
</body>

</html>