<?php
  define('DB_SERVER', 'localhost:3306');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'staff_payroll');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  if (!$db) die("Could not connect to database.");
  mysqli_query($db,"SET NAMES utf8") or die('SQL Query error.');
 ?>
