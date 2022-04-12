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
      <form method="post" id="my_form" action="register.php">
      <?php include('errors.php'); ?>
      <br>
          <button type="button" id="button" onclick="location.href='index.php';">Back to Homepage</button>
        <td>
          <br>
            <input type="text" name="username" form="my_form" placeholder="Username" value="<?php echo $username; ?>"/>
        </td>
        <td>
          <br>
            <input type="password" name="password_1" form="my_form" placeholder="Password" />
        </td>
        <td>
          <br>
            <input type="password" name="password_2" form="my_form" placeholder="Confirm Password" />
        </td>
        <td>
          <br>
            <input type="text" name="email" form="my_form" placeholder="e-mail" value="<?php echo $email; ?>" />
        </td>
        <td id = "Buttons">
            <br>
              <input type="submit" name="reg_user" id="button" value="Sign-Up"/>
            </td>
          </form>
      </tr>
  </body>
</html>