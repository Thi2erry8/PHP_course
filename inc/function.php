<?php
      function authentification_user($email, $password) {
        return $email == USER_NAME && $password == PASSWORD;
      }
      
      function redirect($url){
        header("Location: $url");
      }
?>