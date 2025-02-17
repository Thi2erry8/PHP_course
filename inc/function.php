<?php
      function authentification_user($email, $password) {
        return $email == USER_NAME && $password == PASSWORD;
      }
      
      function redirect($url){
        header("Location: $url");
      }

      function is_user_authentificated(){
        return isset($_SESSION['email']);
      }

      function ensure_user_is_authentificated(){
        if(!is_user_authentificated()){
            redirect('login.php');
            die();
        }
      }
?>