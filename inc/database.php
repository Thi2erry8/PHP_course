<?php 
        $servername = "127.0.0.1";//'127.0.0.1'localhost
        $username = "root";
        $password = ""; // Laissez vide si vous utilisez XAMPP
        $dbname = "myfirstdatabase";
        $conn = mysqli_connect( $servername,$username,$password,$dbname) ;
 
        if(!$conn){
           echo "Connection error: " .mysqli_connect_error();
        }
 
        //write query for all utilisateur
        $sql = 'SELECT email , id FROM utilisateur';
        
        // make query & get result
        $result = mysqli_query($conn, $sql);
        
        // ftech the resultingrows as an array
        $utilisateurs = mysqli_fetch_all($result , MYSQLI_ASSOC) ;      
       
        // free result from memory
        mysqli_free_result($result);
 
        // close connection
        
        
 
 
 
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
            }
              
             $email = mysqli_real_escape_string($conn , $_POST['email']) ;
               $password = mysqli_real_escape_string($conn , $_POST['password']) ; 

            $sql = "INSERT INTO utilisateur(email,password) VALUES 
                    ('$email','$password')";
              
            if(mysqli_query($conn, $sql)){
                echo "<script>alert ('donees envoyees')</script>";
               }else{
                 echo 'query error:' . mysqli_error($conn);
               }


         }
       //

       /*  print_r($utilisateurs); */ 

?>