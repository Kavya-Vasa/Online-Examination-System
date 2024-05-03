<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      font-family: arial, sans-serif;
      height: 100vh;
      display: flex;
      /* justify-content: center; */
      /* align-items: center; */
      background: powderblue;
    }

    ul {
      list-style-type: none;
    }

    ul li {
      display: inline-block;
      white-space: nowrap;
    }

    ul li a {
      text-decoration: none;
      color: crimson;
      /* top: 25px;
      left: 340px; */
      /* position: absolute; */
      padding: 7px 20px;
      border: 2px solid black;
      font-weight: bold;
    }

    ul li a:hover {
      background-color: gray;
    }


    form {
      border: black solid 5px;
      border-radius: 5px;
      width: 700px;
      height: 400px;
      padding: 20px;
    }

    table {
      /* bordertop: ;top: 25px;
      left: 340px; */
      justify-content: center;
      align-items: center;
      /* position: relative; */
      border-collapse: collapse;
      width: 100%;
      height: 100%;
    }

    td,
    th {
      border: 1px solid black;
      text-align: center;
      padding: 10px;
    }

    tr:nth-child(even) {
      background-color: powderblue;
      color: black;
    }

    .button {
      background-color: crimson;
      color: #fff;
      font-size: 14px;
      border-radius: 5px;
      padding: 5px 8px;
    }

    .button:hover {
      background-color: gray;
    }
  </style>
</head>

<body>

  <ul style="margin-top:5%">
    <li><a href="updatestudprofile.php" style="margin-left: 288%;">PROFILE</a></li>
    <li><a href="exam.php" style="margin-left: 378%;">EXAM</a></li>
    <li><a href="index.php" style="margin-left: 318%;">LOGOUT</a></li>
  </ul>
  <form style="margin-top: 10%; margin-left: -5%;">

    <table>

      <!-- <tr>
        <th>S.N.</th>
        <th>Course Name</th>
        <th>Total Questions</th>
        <th>Marks</th>
        <th colspan="5">Time Limit</th>
      </tr>

      <tr>
        <td>1.</td>
        <td>Core Java</td>
        <td>10</td>
        <td>20</td>
        <td>30 min</td>
        <td style="width:53px;"><a class="button" href="question.php?n=1&course=cj">START</a></td>
      </tr>

      <tr>
        <td>2.</td>
        <td>DBMS</td>
        <td>10</td>
        <td>20</td>
        <td>30 min</td>
        <td style="width:53px;"><a class="button" href="question.php?n=1&course=dbms">START</a></td>
      </tr>

      <tr>
        <td>3.</td>
        <td>Data Structure</td>
        <td>10</td>
        <td>20</td>
        <td>30 min</td>
        <td style="width:53px;"><a class="button" href="question.php?n=1&course=ds">START </a> </td>
      </tr>

      <tr>
        <td>4.</td>
        <td>Operating System</td>
        <td>10</td>
        <td>20</td>
        <td>30 min</td>
        <td style="width:53px;"><a class="button" href="question.php?n=1&course=os">START </a> </td>
      </tr>

      <tr>
        <td>5.</td>
        <td>Microprocessor</td>
        <td>10</td>
        <td>20</td>
        <td>30 min</td>
        <td style="width:53px;"><a class="button" href="question.php?n=1&course=mp">START </a> </td>
      </tr> -->
       
      <tr>
        
        <th>Course Name</th>
        <th>Total Questions</th>
        <th>Marks</th>
        <th colspan="5">Time Limit</th>
      </tr>
<?php

      include "../dbcon.php"; // Using database connection file here

      $subjects = [
        'Core Java' => 'cj',
        'Database Management System' => 'dbms',
        'Operating System' => 'os',
        'Microprocessor' => 'mp',
        'Data Structures' => 'ds',
    ];

      $records = mysqli_query($conn, "SELECT * FROM managecourses_tbl"); // fetch data from database

      while ($data = mysqli_fetch_array($records)) {
      ?>

        <tr>
          <td><?php echo $data['course_name'] ?></td>
          <td><?php echo $data['total_questions'] ?></td>
          <td><?php echo $data['marks'] ?></td>
          <td><?php echo $data['time_limit'] ?></td>
          <td style="width:53px;"><a class="button" href="question.php?n=1&course=<?php echo $subjects[$data['course_name']] ?>">START </a> </td>          
        </tr>
      <?php
      }
      ?>
    </table>
  </form>
</body>

</html>