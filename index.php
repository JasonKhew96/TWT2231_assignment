<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <title>Home - Tindustries</title>
</head>

<body>
  <div class="container">
  <?php include('header.php'); ?>

  <!-- Navigation bar -->
  <ul class="nav nav-tabs justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" href="index.php">Home</a>
    </li>
    <?php
    require_once 'session.php';

      if ($isadmin == 1) {
          echo '<li class="nav-item">';
          echo '<a class="nav-link" href="stafflist.php">Staff List</a>';
          echo '</li>';
      } elseif ($isadmin == 0) {
          echo '<li class="nav-item">';
          echo '<a class="nav-link" href="profile.php">Profile</a>';
          echo '</li>';
          echo '<li class="nav-item">';
          echo '<a class="nav-link" href="payroll.php">Payroll</a>';
          echo '</li>';
      }
    ?>
    <li class="nav-item">
      <?php
      require_once 'session.php';
      if ($islogin) {
          echo '<a class="nav-link" href="logout.php">Logout</a>';
      } else {
          echo '<a class="nav-link" href="login.php">Login</a>';
      }
      ?>
    </li>
  </ul>
  <?php include('footer.php'); ?>
  </div>

  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
