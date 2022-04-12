<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="assets/LOGONoBackground.ico"/>
    <title>Knit-For-My-Pet</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <style>
    body {
      background-image: url('unicornride.gif');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
      background-color: black;
    }
    </style>
    <script src="script.js"></script>
    <div id = "header">
    </div>
    <img src="assets/LOGONoBackground.png" alt="Knit-It Logo">
    <tr>
      <form method="post" action="index.php">
      <?php include('errors.php'); ?>
      <br>
          <button type="submit" name="login_user" id="button">Sign In</button>
        <td>
          <br>
            <input type="text" name="username" placeholder="Username" />
        </td>
        <td>
          <br>
            <input type="password" name="password" placeholder="Password" />
        </td>
        <td id = "Buttons">
          <br>
          <button type="button" id="button" onclick="location.href='register.php';">Register</button>
        </td>
       </form>
      </tr>
  </body>
</html>