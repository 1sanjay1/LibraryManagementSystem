<?php

  include("../Connection/connection.php");

  $Firstname  = mysqli_real_escape_string($db,$_POST['firstname']);
  $lastname   = mysqli_real_escape_string($db,$_POST['lastname']);
  $email      = mysqli_real_escape_string($db,$_POST['Email']);
  $password   = mysqli_real_escape_string($db,$_POST['password']);

  $query = "SELECT * FROM user WHERE  email = '$email' ";

  if( mysqli_num_rows(mysqli_query($db, $query)))
  {
    echo '
      <h1 class="error" style="border: 1px solid black;
          width: 800px;
          margin: 40px auto;
          background: #f4f4f4;
          color: red;
          padding: 100px;text-align: center;">You are already registered!

          <p style="font-size: 20px;text-align: center;"><a href="UserLogin.php">Go to the signup page</a></p>
       </h1>
    ';
  }
  else {

    $sql = "INSERT INTO user (firstname, lastname, email,password) VALUES ( '$Firstname' , '$lastname' ,'$email' ,'$password')";

    if ($db->query($sql) === TRUE) {

      echo '
        <h1 class="error" style="border: 1px solid black;
            width: 800px;
            margin: 40px auto;
            background: #f4f4f4;
            color: red;
            padding: 100px;text-align: center;">New Registration has been completed Successfully!

            <p style="font-size: 20px;text-align: center;"><a href="../home.php">Go to the Home page</a></p>
         </h1>
      ';

    }
  }

  mysqli_close($db);

?>
