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
        <div class="input-group">
          <div class="input-group-btn search-panel">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Filter By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#staffId">Staff ID</a>
              <a class="dropdown-item" href="#name">Name</a>
              <a class="dropdown-item" href="#isActive">Is active</a>
            </div>
          </div>
          <input type="hidden" name="search_param" value="all" id="search_param">
          <input type="text" class="form-control" name="x" placeholder="Search term...">
          <button type="button" class="btn btn-primary">Search</button>
        </div>
        <div id="ajaxtable"></div>

    <?php include('footer.php'); ?>
    </div>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
