<?php
    $title = ' Post_request';
   
    include('./inc/header.php');
    include('./inc/function.php');
    include('./inc/config.php');

    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      $password = $_POST['password'] ;
      if($email == false){
        $status = 'Please enter a valid email address';
      }
    }
    
    if(authentification_user($email,$password)){
      $_SESSION['email'] = $email ;
      redirect('admin.php');
      die();
    } else{
    $status = "The provided credentials didn't wwork";
   }
 
?>


    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5"><?= $title; ?></h1>
        </div>
      </div>
      
      <div class="row">
            <form action ="" method="POST">
                   
                    <div class="form-group">
                          <label for="email">Email:</label>
                          <input class="form-control" type="text" name="email" id="email"/>
                    </div>
                    
                    <div class="form-group">
                          <label for="password">Password</label>
                          <input class="form-control" type="password" name="password" id="password"/>
                    </div> 
                    
                    <div class="form-group">
                          <input type="submit" value="Login" />
                    </div>
            </form>
      </div>

    </div>
  </body>

</html>