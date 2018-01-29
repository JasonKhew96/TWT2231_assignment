<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <title>Staff List - Tindustries</title>
  </head>
  <body>
    <div class="container">
    <?php include('header.php'); ?>

    <!-- Navigation bar -->
    <ul class="nav nav-tabs justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="./index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="./stafflist.php">Staff List</a>
      </li>
      <li class="nav-item">
        <?php
        require_once 'session.php';
        if ($islogin) {
            echo '<a class="nav-link" href="./logout.php">Logout</a>';
        } else {
            echo '<a class="nav-link" href="./login.php">Login</a>';
        }
        ?>
      </li>
    </ul>

    <div id="ajaxtable"></div>

    <?php include('footer.php'); ?>
    </div>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
