<?php

  include('../Connection/connection.php');

  $title     = $_POST['TITLE'];
  $isbn      = $_POST['ISBN'];

  $check = "SELECT * FROM Book WHERE '$title' = Title and '$isbn' = ISBN_No";
  $result = mysqli_query($db,$check);
  $num = mysqli_num_rows($result);

  if($num == 0) {

    echo '
      <h1 class="error" style="border: 1px solid black;
          width: 800px;
          margin: 40px auto;
          background: #f4f4f4;
          color: red;
          padding: 100px;text-align: center;">Invalid Data OR This Book is not available in the library!

          <p style="font-size: 20px;text-align: center;"><a href="DeleteBook.php">Go to the previous page</a></p>
       </h1>
    ';

  }
  else {

    if(strlen($title) != 0 && strlen((string)$isbn) != 0)
    {
      $query = "DELETE FROM Book WHERE '$title' = Title and '$isbn' = ISBN_No";
    }
    else if(strlen($title) != 0)
    {
      $query = "DELETE FROM Book WHERE '$title' = Title ";
    }
    else if(strlen($isbn) != 0)
    {
      $query = "DELETE FROM Book WHERE '$isbn' = ISBN_No";
    }
    else
    {
      die("Please fill at least one field!");
    }

    if(!mysqli_query($db,$query))
    {
      die("Error:Connection is not establsihed");
    }

    echo '
      <h1 class="error" style="border: 1px solid black;
          width: 800px;
          margin: 40px auto;
          background: #f4f4f4;
          color: red;
          padding: 100px;text-align: center;">Book record has been deleted successfully!

          <p style="font-size: 20px;text-align: center;"><a href="DeleteBook.php">Go to the previous page</a></p>
       </h1>
    ';

  }

  mysqli_close($db);

?>
