<?php
  require_once "config.php";

  if (isset($_COOKIE['session_id'])) {
    $guid = mysqli_real_escape_string($db,$_COOKIE["session_id"]);
    // echo $_COOKIE["session_id"];
    $queryadmin = "SELECT acc_id FROM account WHERE guid = '$guid'";
    $querystaff = "SELECT staff_id FROM staff WHERE guid = '$guid'";

    $resultadmin = mysqli_query($db, $queryadmin) or die('SQL Query error.');
    $resultstaff = mysqli_query($db, $querystaff) or die('SQL Query error.');

    $isadmin = -1;

    if (mysqli_num_rows($resultadmin)) {
      $isadmin = 1;
    } elseif (mysqli_num_rows($resultstaff)) {
      $isadmin = 0;
    }

  } else {
    header('Location: login.php');
  }
 ?>
