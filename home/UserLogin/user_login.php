<?php

   session_start();

   include("../Connection/connection.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form second

      $email      = mysqli_real_escape_string($db,$_POST['Email']);

      $password   = mysqli_real_escape_string($db,$_POST['password']);

      /*$confirm_password = mysqli_real_escape_string($db,$_POST['confirm_password']);*/
      $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      //$active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count >= 1) {

         $_SESSION['$email'] = $email;
         $_SESSION['$password'] = $password;
         $_SESSION['$user_id'] = $row['id'];
         $_SESSION['$firstname'] = $row['firstname'];
         $active = True;
         $_SESSION['$is_active'] = $active;

        //  header("location:home/UserLogin/UserInterFace/user.php?email=".$email);
         header("location: UserInterFace/user.php");
      }else {

         //$error = "Your Login Name or Password is invalid";

         echo '
         <h1 class="error" style="border: 1px solid black;
         width: 800px;
         margin: 40px auto;
         background: #f4f4f4;
         color: red;
         padding: 100px;text-align: center;">Not a Registered Member. Please Do Register First.

         <p style="font-size: 20px;text-align: center;"><a href="UserLogin.php">Go to the Registeration page</a></p>
         </h1>

         ';

      }
   }


?>
