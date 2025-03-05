<?php
     if(isset($_POST['submit'])){
        /// Check email
       if(empty($_POST['email'])){
         echo '<script>alert("email empty")</script>';
       }else {
          $email = $_POST['email'];
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo '<script>alert("email incorrect")</script>';
          }
       }
       
        if(empty($_POST['password'])){
          echo '<script>alert("password empty")</script>' ;
          }else {
           $password = $_POST['password'];
           /* echo $password; */
          /*  if(!filter_var($email, FILTER_VALIDATE_PASSWORD)){
             echo '';           
            } */
        }
        /* echo $email .$password ; */
     }


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
       <form action="./index.php" method="post">
        <label for="email"> your email</label>
              <input type="email" name="email" id="">
        <label for="password">Your password</label>
              <input type="password" name="password" id="">

              <input id="submit" type="submit" name="submit" value="submit">
       </form>
</body>
</html>