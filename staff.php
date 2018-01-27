<!DOCTYPE html>
<html>
  <head>
    <title>Staff Details</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      require_once 'session.php';
      require_once "config.php";

      $query = "SELECT * FROM staff WHERE guid = '$guid'";
      $result = mysqli_query($db, $query) or die('SQL Query error.');

      if (mysqli_num_rows($result)) {
          $row = mysqli_fetch_array($result);
          echo "<table>";
          echo "<tr>";
          {
            echo "<td>Staff ID</td>";
            echo "<td>".$row["staff_id"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>First Name</td>";
            echo "<td>".$row["first_name"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>Last Name</td>";
            echo "<td>".$row["last_name"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>Date of birth</td>";
            echo "<td>".$row["dob"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>Gender</td>";
            echo "<td>".$row["gender"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>Email</td>";
            echo "<td>".$row["email"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>Depart ID</td>";
            echo "<td>".$row["depart_id"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>Active</td>";
            echo "<td>".$row["is_active"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>Address 1</td>";
            echo "<td>".$row["addr"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>Address 2</td>";
            echo "<td>".$row["addr2"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>District</td>";
            echo "<td>".$row["district"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>City</td>";
            echo "<td>".$row["city"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>Postal Code</td>";
            echo "<td>".$row["postal_code"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>Phone Home</td>";
            echo "<td>".$row["phone_home"]."</td>";
          }
          echo "</tr>";
          echo "<tr>";
          {
            echo "<td>Phone personal</td>";
            echo "<td>".$row["phone_personal"]."</td>";
          }
          echo "</tr>";
          // echo "<tr>";
          // echo "<td>".$row["staff_id"]."</td>";
          // echo "<td>".$row["first_name"]." ".$row["last_name"]."</td>";
          // echo "<td>".$row["is_active"]."</td>";
          // echo "</tr>";
          echo "</table>";
      } else {
          echo "0 results";
      }
    ?>
  </body>
</html>
