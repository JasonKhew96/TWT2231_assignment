<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <title>Profile - Tindustries</title>
  </head>

  <body>
    <div class="container">
    <?php include('header.php'); ?>
    <ul class="nav nav-tabs justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payroll.php">Payroll</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    <?php
      require_once 'session.php';
      require_once "config.php";

      $query = "SELECT * FROM staff, department WHERE guid = '$guid' AND department.depart_id = staff.depart_id";
      $result = mysqli_query($db, $query) or die('SQL Query error.');

      if (mysqli_num_rows($result)) {
          $row = mysqli_fetch_array($result);
          echo '<table class="table">';

          echo "<tr>";
          echo '<th scope="row">Staff ID</th>';
          echo "<td>".$row["staff_id"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">First Name</th>';
          echo "<td>".$row["first_name"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">Last Name</th>';
          echo "<td>".$row["last_name"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">Date of birth</th>';
          echo "<td>".$row["dob"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">Gender</th>';
          echo "<td>".$row["gender"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">Email</th>';
          echo "<td>".$row["email"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">Depart ID</th>';
          echo "<td>".$row["depart_id"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">Active</th>';
          echo "<td>".$row["is_active"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th  scope="row">Address 1</th>';
          echo "<td>".$row["addr"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">Address 2</th>';
          echo "<td>".$row["addr2"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">District</th>';
          echo "<td>".$row["district"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">City</th>';
          echo "<td>".$row["city"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">Postal Code</th>';
          echo "<td>".$row["postal_code"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">Phone Home</th>';
          echo "<td>".$row["phone_home"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">Phone personal</th>';
          echo "<td>".$row["phone_personal"]."</td>";
          echo "</tr>";

          echo "<tr>";
          echo '<th scope="row">Department</th>';
          echo "<td>".$row["depart_name"]."</td>";
          echo "</tr>";

          echo "</table>";
      } else {
          echo "0 results";
      }
    ?>
    <?php include('footer.php'); ?>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
