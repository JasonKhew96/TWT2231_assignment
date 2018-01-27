<?php
  require_once "config.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $refer = $_POST['refer'];
    $logintype = $_POST['type'];

    if (empty($username) || empty($password)){
      header('Location: login.php?refer=' . urlencode($refer) . '&error=' . urlencode('Username or password is empty.'));
      exit();
      // die('Username or password is empty.');
    }

    $myusername = mysqli_real_escape_string($db,$username);
    $mypassword = mysqli_real_escape_string($db,$password);

    $query = '';
    if ($logintype == 'admin') {
      $query = "SELECT acc_id, MD5(UNIX_TIMESTAMP() + acc_id + RAND(UNIX_TIMESTAMP())) FROM account WHERE username = '$myusername' and password = password('$mypassword')";
    } elseif ($logintype == 'staff') {
      $query = "SELECT staff_id, MD5(UNIX_TIMESTAMP() + staff_id + RAND(UNIX_TIMESTAMP())) FROM staff WHERE username = '$myusername' and password = password('$mypassword')";
    } else {
      header('Location: login.php?refer=' . urlencode($refer) . '&error=' . urlencode('Unknown error.'));
      exit();
    }

    $result = mysqli_query($db, $query) or die('SQL Query error.');

    if ( mysqli_num_rows($result) ) {
        $row = mysqli_fetch_row($result);
        // Update the user record
        if ($logintype == 'Admin Login') {
          $query = "UPDATE account SET guid = '$row[1]' WHERE acc_id = $row[0]";
        } elseif ($logintype == 'Staff Login') {
          $query = "UPDATE staff SET guid = '$row[1]' WHERE staff_id = $row[0]";
        }

        mysqli_query($db,$query) or die('SQL Query error.');

        // Set the cookie and redirect
        // setcookie( string name [, string value [, int expire [, string path
        // [, string domain [, bool secure]]]]])
        // Setting cookie expire date, 6 hours from now
        $cookieexpiry = (time() + 21600);
        setcookie("session_id", $row[1], $cookieexpiry);

        header('Location: '.$refer);
    } else {
      header('Location: login.php?refer=' . urlencode($refer) . '&error=' . urlencode('Username or password is wrong.'));
      exit();
      // die('Username or password is wrong.');
    }

  }
 ?>
