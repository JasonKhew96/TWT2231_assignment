<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <title>Login - Tindustries</title>
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
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="./login.php">Login</a>
      </li>
    </ul>
    <!-- Content -->
    <div class="row justify-content-center">
      <div class="col col-lg-4 col-sm-8">
        <?php
          if (isset($_GET['error'])) {
              echo '<div class="alert alert-primary" role="alert">' . $_GET['error'] . '</div>';
          } elseif (isset($_COOKIE['session_id'])) {
              header('Location: index.php');
          }
        ?>
        <form action="actionlogin.php" method="POST">
            <div class="form-group">
            <label for="usernmame">Username</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          </div>
          <input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
          <button type="submit" name="type" value="staff" class="btn btn-primary">Staff login</button>
          <button type="submit" name="type" value="admin" class="btn btn-primary">Admin login</button>
        </form>
      </div>
    </div>

    <?php include('footer.php'); ?>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
