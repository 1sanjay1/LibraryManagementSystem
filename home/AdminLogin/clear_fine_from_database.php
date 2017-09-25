<?php

  session_start();

  include('connection.php');

  $is_true = $_SESSION['admin']['is_active'];

  if( !isset($_SESSION['admin']['is_active'])  ) {
    header("location: /stark/home/home.php");
  }

  $firstName = $_POST['firstName'];
  $email = $_POST['emaiID'];

  $query = "UPDATE user SET fine = 0, ExtraDays = 0, deleted_book_fine = 0, deleted_extra_days = 0 WHERE firstname='$firstName' and email='$email' ";

  if(mysqli_query($db, $query))
    echo '
      <h1 class="error" style="border: 1px solid black;
          width: 800px;
          margin: 40px auto;
          background: #f4f4f4;
          color: red;
          padding: 100px;text-align: center;">Fine amount has been cleared Successfully!

          <p style="font-size: 20px;text-align: center;"><a href="DeleteUser.php">Go to the previous page</a></p>
       </h1>
    ';

  mysqli_close($db);
?>
