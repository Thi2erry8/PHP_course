<?php
 include('./inc/database.php')


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
       <form action="./inc/database.php" method="post">
        <label for="email"> your email</label>
              <input type="email" name="email" id="">
        <label for="password">Your password</label>
              <input type="password" name="password" id="">

              <input id="submit" type="submit" name="submit" value="submit">
       </form>
</body>
</html>