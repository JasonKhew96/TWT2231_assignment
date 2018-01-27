<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      if (isset($_GET['error'])) {
        echo '<p>' . $_GET['error'] . '</p>';
      } elseif (isset($_COOKIE['session_id'])) {
        header('Location: index.php');
      }
    ?>
    <form action="actionlogin.php" method="POST">
      Username:<br/>
      <input type="text" name="username">
      <br/>
      Password:<br/>
      <input type="password" name="password">
      <br/>
      <input type="submit" name="type" value="Staff Login">
      <input type="submit" name="type" value="Admin Login">
      <input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
    </form>
  </body>
</html>
