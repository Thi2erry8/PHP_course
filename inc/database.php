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