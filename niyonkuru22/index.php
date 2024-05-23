<?php include("login.php")  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Environmental Education Consultancy</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <div class="form-container">
      <form action="" method="post">
      <small><?php  if ($msg) {echo $msg;}  ?></small>
        <div class="inpu-container">
          <label for="">Email</label>
          <input type="text" name="email" placeholder="Email" />
        </div>
        <div class="inpu-container">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="Password" />
        </div>
        <input type="submit" value="Login" name="login">
        <p>If you dont have Acount register <a href="register.html">here </a> </p>
      </form>
    </div>
  </body>
</html>
