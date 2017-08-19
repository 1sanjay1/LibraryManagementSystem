<?php

  include("active.php");

  if(!$is_active){
    header("location:/stark/home/UserLogin/UserLogin.php");
  }

  $ISBN_No =  $_POST['id'];

  $user_id = $_SESSION['$user_id'];

  $sql = "DELETE FROM user_books WHERE user_id = '$user_id' and ISBN_No = '$ISBN_No'";

  if ($db->query($sql) === TRUE) {

      $SQLquery = "SELECT * FROM user WHERE id = '$user_id' ";
      $sqlResult = mysqli_query($db, $SQLquery);

      $sqlRow = mysqli_fetch_array($sqlResult);
      $book_count = $sqlRow['Book_count'] - 1;

      if( $book_count < 0)
        $book_count = 0;

      $count_sql = "UPDATE user SET Book_count = '$book_count' WHERE id = '$user_id'";

      if($db->query($count_sql) === TRUE){
           header("location: /stark/home/UserLogin/UserInterFace/Return_Renew.php");
      }

  }

?>
