<?php

  include("active.php");

  if(!$is_active){
    header("location: ../../home.php");
  }

  $isbn = $_POST['id'];

  $user_id = $_SESSION['$user_id'];
  $email   = $_SESSION['$email'];

  $fine_query  =  "SELECT * FROM user WHERE  id = '$user_id'";
  $fine_result = mysqli_query($db,$fine_query);
  $fine_count  = mysqli_num_rows($fine_result);

  if($fine_count > 0){
    $fine_row = mysqli_fetch_array($fine_result);
    $fine_amount = $fine_row['fine'];
  }

  if($fine_amount > 0){

    ?>
      <h1 class="error" style="border: 1px solid black; width: 800px; margin: 40px auto; background: #f4f4f4; color: red;padding: 100px;text-align: center;">Previous Fine is due. Please pay it first.
      <p style="font-size: 20px;text-align: center;"><a href="Return_Renew.php">Go to the previous page</a></p>
      </h1>
    <?php

  }
  else {

   $new_issue_date = date("Y-m-d");
   $new_return_date = date('Y-m-d', strtotime("+30 days"));

   $insert_sql = "UPDATE user_books SET Issue_date = '$new_issue_date' , Return_date = '$new_return_date' WHERE user_id =
                    '$user_id' and ISBN_No = '$isbn' ";

   if ($db->query($insert_sql) === TRUE) {
    //echo "Record updated successfully";
    header("location: Return_Renew.php");
   }

  }

?>
