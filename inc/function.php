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

      function get_data(){
        $fname = CONFIG['data_file'];
        
        $json = '';
        
        if(!file_exists($fname)){
            file_put_contents($fname,'');
        }else{
            $json = file_get_contents($fname);
        }

        return $json;


      }
?>