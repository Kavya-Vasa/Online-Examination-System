<!DOCTYPE html>
<html>

<head>
  <style>
    input[type=text] {
      width: 30%;
      height: 25px;
    }

    input[type=submit] {
      width: 9%;
    }

    body {
      text-align: center;
      background: powderblue;
    }

    form {
      border: grey solid 8px;
      margin: auto;
      width: 60%;
      height: 500px;
      color: black;
    }

    h1 {
      background: goldenrod;
    }

    h4 {
      font-size: 28px;
      font-weight: bold;
      color: darkblue;
    }

    label {
      font-size: 20px;
      font-family: ariel;
      font-weight: bold;
    }

    h2 {
      font-family: verdana;
    }
  </style>
</head>

<body>
  <h2> Admin Panel - Add Candidate Details </h2>

  <form method="POST" action="AddCandidateDetailsDb.php">
    <h4> Add Candidate Details </h4>
    <label for="ENumber">Candidate Enrollment Number:</label>
    <input type="text" name="ENumber" value="" placeholder="Enter the Enrollment Number"><br><br><br>

    <label for="Name">Candidate Name:</label>
    <input type="text" name="Name" value="" placeholder="Enter Candidate Name"><br><br><br>

    <label for="UName">Candidate Username:</label>
    <input type="text" name="UName" value="" placeholder="Enter Candidate Username"><br><br><br>

    <label for="Password">Candidate Password:</label>
    <input type="text" name="Password" value="" placeholder="Enter Candidate Password"><br><br><br>

    <label for="Email">Candidate Email:</label>
    <input type="text" name="Email" value="" placeholder="Enter Candidate Email"><br><br><br>

    <input type="submit" value="Add" name="submit_btn">
  </form>

</body>

</html>