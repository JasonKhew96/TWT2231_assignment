<?php
  require_once 'config.php';
  if (isset($_COOKIE['session_id'])) {
    // echo "logging out... Please wait";
    $guid = mysqli_real_escape_string($db,$_COOKIE["session_id"]);
    // echo $_COOKIE["session_id"];
    $queryadmin = "UPDATE account SET guid = NULL WHERE acc_id = $guid";
    $querystaff = "UPDATE staff SET guid = NULL WHERE staff_id = $guid";

    $resultadmin = mysqli_query($db, $queryadmin); // or die('SQL Query error.');
    $resultstaff = mysqli_query($db, $querystaff); // or die('SQL Query error.');

    setcookie("session_id", '', 0);
  }
  header('Location: login.php');
?>
