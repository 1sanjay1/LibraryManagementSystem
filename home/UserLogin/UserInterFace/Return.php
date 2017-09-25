<?php

  include("active.php");

  if(!$is_active){
    header("location: ../../home.php");
  }

  $ISBN_No =  $_POST['id'];

  $user_id = $_SESSION['$user_id'];

  //check if fine is applied on the book which will be deleted now
  $current_book_fine_query = "SELECT * FROM user_books WHERE user_id = '$user_id' and ISBN_No = '$ISBN_No'";
  $current_query_result = mysqli_query($db, $current_book_fine_query);
  $current_query_result_row = mysqli_fetch_array($current_query_result);
  $book_fine = $current_query_result_row['book_fine'];
  $extra_days = $current_query_result_row['extra_days'];

  //update fine amout of deleted book fine in user table
  $update_deleted_fine = "UPDATE user SET deleted_book_fine = deleted_book_fine + '$book_fine' WHERE id = '$user_id'";
  mysqli_query($db, $update_deleted_fine);

  //update extra_days of deleted book
  $update_deleted_days = "UPDATE user SET deleted_extra_days = deleted_extra_days + '$extra_days' WHERE id = '$user_id'";
  mysqli_query($db, $update_deleted_days);


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
           header("location: Return_Renew.php");
      }

  }

?>
