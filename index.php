<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

 include('./inc/database.php');

 mysqli_close($conn);
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

       <?php //foreach($utilisateurs as $utilisateur): ?>
                 <!-- <div class="data">
                         <h1><?php //echo htmlspecialchars($utilisateur['id']); ?></h1>
                         <p><?php //echo htmlspecialchars($utilisateur['email']); ?></p>
                 </div> -->

        <?php //endforeach ?>
        <!-- fileSystem http://www.fiverr.com/s/xXKzwKx-->
</body>
</html>
