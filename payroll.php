<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <title>Payroll - Tindustries</title>
  </head>

  <body>
    <div class="container">
    <?php include('header.php'); ?>
    <ul class="nav nav-tabs justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="payroll.php">Payroll</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>

    <?php
      require_once 'session.php';
      require_once "config.php";

      if ($islogin == false){
        header('Location: index.php');
      }

      $query = "SELECT * FROM staff, payroll, department WHERE guid = '$guid' AND payroll.staff_id = staff.staff_id AND department.depart_id = staff.depart_id";
      $result = mysqli_query($db, $query) or die('SQL Query error.');

      if (mysqli_num_rows($result)) {
        echo '<table class="table">';

        echo '<thead>';
        echo '<tr>';
        echo '<th scope="column">Date</th>';
        echo '<th scope="column">Attendance Hours</th>';
        echo '<th scope="column">OT hours</th>';
        echo '<th scope="column">Total salary</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($row = mysqli_fetch_array($result)) {
          $payDate = $row['pay_date'];
          $attHrs = $row['att_hrs'];
          $otHrs = $row['ot_hrs'];
          echo '<tr>';
          echo "<td>$payDate</td>";
          echo "<td>$attHrs</td>";
          echo "<td>$otHrs</td>";
          $salaryRate = $row['salary_rate'];
          $otRate = $row['ot_rate'];
          $totalSalary = $salaryRate*$attHrs + $otRate*$otHrs;
          echo "<td>$totalSalary</td>";
          echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
      }
    ?>

    <?php include('footer.php'); ?>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>
