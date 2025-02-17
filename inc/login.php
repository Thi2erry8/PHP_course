<?php
    session_start();
    $title = 'Session';

    include('config.php');
    require_once('function.php');

    if (is_user_authentificated()) {
      redirect('admin.php');
      die();
    }
    

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      $password = $_POST['password']; // TODO: validate this!

      // compare with data store
      if (authentification_user($email, $password)) {
        $_SESSION['email'] = $email;
        redirect('admin.php');
        die();
      } else {
        $status = "The provided crendentials didn't not work";
      }
      
      
      if ($email == false) {
        $status = 'Please enter a valid email address';
      }
    }


?>
