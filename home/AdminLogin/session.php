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
      session_destroy();
      echo '
        <h1 class="error" style="border: 1px solid black;
            width: 800px;
            margin: 40px auto;
            background: #f4f4f4;
            color: red;
            padding: 100px;text-align: center;">Invalid Admin Account!

            <p style="font-size: 20px;text-align: center;"><a href="../home.php">Go to the home page</a></p>
         </h1>
      ';
    }
  }
?>
