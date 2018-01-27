<!DOCTYPE html>
<html>
  <head>
    <title>Staff List</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      require_once 'session.php';
      if ($isadmin == 0){
        header('Location: index.html');
        exit();
      } elseif ($isadmin == 1) {
        require_once "config.php";

        $query = "SELECT staff_id, first_name, last_name, is_active FROM staff";
        $result = mysqli_query($db, $query) or die('SQL Query error.');

        if (mysqli_num_rows($result) > 0) {
          echo "<table>";
            echo "<tr>";
              echo "<th>ID</th>";
              echo "<th>Name</th>";
              echo "<th>Active</th>";
            echo "</tr>";
          // output data of each row
          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
              echo "<td>".$row["staff_id"]."</td>";
              echo "<td>".$row["first_name"]." ".$row["last_name"]."</td>";
              echo "<td>".$row["is_active"]."</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
      }
    ?>
  </body>
</html>
