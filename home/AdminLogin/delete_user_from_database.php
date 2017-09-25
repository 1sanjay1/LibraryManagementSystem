<?php

  include('../Connection/connection.php');

  $first_name     = $_POST['First_Name'];
  $id             = $_POST['ID'];

  $check = "SELECT * FROM user WHERE '$first_name' = firstname and '$id' = id ";
  $result = mysqli_query($db,$check);
  $num = mysqli_num_rows($result);

  if($num == 0) {

      echo '
        <h1 class="error" style="border: 1px solid black;
            width: 800px;
            margin: 40px auto;
            background: #f4f4f4;
            color: red;
            padding: 100px;text-align: center;">Invalid Data OR This user is not available in the library!

            <p style="font-size: 20px;text-align: center;"><a href="DeleteUser.php">Go to the previous page</a></p>
         </h1>
      ';

  }
  else {

      if(strlen($first_name) != 0 && strlen((string)$id) != 0)
      {
        $query = "DELETE FROM user WHERE '$first_name' = firstname and '$id' = id";
      }
      else if(strlen($first_name) != 0)
      {
        $query = "DELETE FROM user WHERE '$first_name' = firstname ";
      }
      else if(strlen($id) != 0)
      {
        $query = "DELETE FROM user WHERE '$id' = id ";
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
            padding: 100px;text-align: center;">user record has been deleted successfully!

            <p style="font-size: 20px;text-align: center;"><a href="DeleteUser.php">Go to the previous page</a></p>
         </h1>
      ';

  }

  mysqli_close($db);

?>
