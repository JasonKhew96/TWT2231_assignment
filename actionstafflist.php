<?php
  require_once 'session.php';
  if ($isadmin == 0) {
      echo 'Error.';
      exit();
  } elseif ($isadmin == 1) {
      require_once "config.php";

      $results_per_page = 20;
      if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page = 1; };
      $start_from = ($page - 1) * $results_per_page;

      $query = "SELECT staff_id, first_name, last_name, is_active FROM staff ORDER BY staff_id ASC LIMIT ".$start_from.",".$results_per_page;
      $result = mysqli_query($db, $query) or die('SQL Query error.');

      $datas = new stdClass();
      $datas->result = 0;
      $datas->message = '';

      if (mysqli_num_rows($result) > 0) {
          $data = array();
          while ($row = mysqli_fetch_array($result)) {
              $staff_id = (int)$row["staff_id"];
              $first_name = $row["first_name"];
              $last_name = $row["last_name"];
              $is_active = $row["is_active"];
              $myArray = array('staff_id' => $staff_id, 'first_name' => $first_name, 'last_name' => $last_name, 'is_active' => $is_active);
              array_push($data, $myArray);
          }
          $datas->data = $data;
          $datas->result = 1;
      } else {
          $datas->message = 'No result were found.';
      }
      echo json_encode($datas);
  }
