<?php

   include("connection.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $Firstname  = mysqli_real_escape_string($db,$_POST['firstname']);
      $lastname   = mysqli_real_escape_string($db,$_POST['lastname']);
      $email      = mysqli_real_escape_string($db,$_POST['Email']);
      $password   = mysqli_real_escape_string($db,$_POST['password']);

      /*$confirm_password = mysqli_real_escape_string($db,$_POST['confirm_password']);*/


      $sql = "INSERT INTO user (firstname, lastname, email,password) VALUES ( '$Firstname' , '$lastname' ,'$email' ,'$password')";

      if ($db->query($sql) === TRUE) {


    	         header("location: registration.php");
      }

     else{

    		//echo "Error: " . $sql . "<br>" . $db->error;

    		echo '<script style="text/javascript"> alert("Email ID or Password is Wrong!"); </script>';
                echo "You are Already Registered";
      }


   }




?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link rel="icon" type="image/jpeg" href="Login.jpeg">
    <link rel="stylesheet" href="UserLogin.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  </head>

  <body>

    <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Sign Up</h1>

          <form action="UserLogin.php" method="post">

          <div class="top-row">
            <div class="field-wrap">

              <input name="firstname" type="text" required autocomplete="off" placeholder="First Name"/>
            </div>

            <div class="field-wrap">


              <input name="lastname" type="text"required autocomplete="off" placeholder="Last Name"/>
            </div>
          </div>

          <div class="field-wrap">


            <input  name="Email" type="email" required autocomplete="off" placeholder="Email Address"/>
          </div>

          <div class="field-wrap">



            <input name="password"  type="password" required autocomplete="off" placeholder="Set A Password"/>

          </div>


         <!--
           <div class="field-crap" >

                    <input  name="confirm_password" type="password" required autocomplete = "off" placeholder="Confirm Password"/>

          </div>
          -->

          <button name="submit" type="submit" class="button button-block"/>REGISTER</button>

          </form>

        </div>

        <div id="login">
         <!-- <marquee onmouseover = "stop()" onmouseout = "start()" >--><h1>Welcome Student!</h1>

          <form action="user_login.php" method="post">

            <div class="field-wrap">



            <input name=  "Email" type="email"required autocomplete="off" placeholder="Email Address"/>
          </div>

          <div class="field-wrap">



            <input name  = "password" type="password"required autocomplete="off" placeholder="Password"/>
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="button button-block"/>Log In</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->


        <script src="UserLogin.js"></script>



  </body>
</html>
