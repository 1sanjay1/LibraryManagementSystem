<?php

  session_start();

  $email = $_POST['Email'];
  $pwd   = $_POST['Password'];

  if(isset($email) && isset($pwd) )
  {
    if($email == 'sanjayucp1554@gmail.com' && $pwd == 'sanjay004'){

           $_SESSION['admin']['is_active'] = true;
           $_SESSION['email'] = $email;
           $_SESSION['pwd'] = $pwd;
           header("location: InsertBook.php");
    }
    else
    {
      //session_destroy();
      die("Invalid Password or Email ID!");
    }
  }
?>
