<?php
  include("active.php");
  if(!$is_active){
    header("location:/stark/home/UserLogin/UserLogin.php");
  }

  $i =  $_POST['id'];

  $user_id   = $_SESSION['$user_id'];
  $email     = $_SESSION['$email'];
  $title     = $_SESSION['$title.'.$i.''];
  $Author    = $_SESSION['$Author.'.$i.''];
  $Publisher = $_SESSION['$Publisher.'.$i.''];
  $ISBN_No   = $_SESSION['$ISBN_No.'.$i.''];

  //check any fines are due or not
  $check_fine_query = "SELECT * FROM user WHERE id = '$user_id'";
  $check_fine_result = mysqli_query($db, $check_fine_query);
  $getRow = mysqli_fetch_array($check_fine_result);

  if( $getRow['deleted_book_fine'] > 0 or $getRow['fine'] > 0) {

    echo '

     <h1 class="error" style="border: 1px solid black;
        width: 800px;
        margin: 40px auto;
        background: #f4f4f4;
        color: red;
        padding: 100px;text-align: center;">Previous fine is due. Please pay it first.

        <p style="font-size: 20px;text-align: center;"><a href="Search.php">Go to the previous page</a></p>
     </h1>

    ';

  } else {

      $sql = "SELECT * FROM Book WHERE title = '$title' and ISBN_No = '$ISBN_No'";

      $result = mysqli_query($db,$sql);
      $Book_row = mysqli_fetch_array($result);
      $count = mysqli_num_rows($result);


    // check book is available or not in the database
      if($count == 1) {

          $sql = "SELECT * FROM user WHERE id = '$user_id'";
          $result = mysqli_query($db,$sql);
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          $book_count = $row['Book_count'];

          $maxBookCount = 4;

      		if($book_count < $maxBookCount) {

              $book_count = $book_count + 1;
              $Borrow = True;
              $Issue_date = date("Y-m-d");
              $Return_date = date('Y-m-d', strtotime("+30 days"));
              $fine_status = false;

        		  $insert_sql = "INSERT INTO user_books (user_id, ISBN_NO, Book_count,Issue_date,Return_date,fine_status) VALUES ( '$user_id' ,
        '$ISBN_No' , '$book_count','$Issue_date','$Return_date','$fine_status')";

              if ($db->query($insert_sql) === TRUE ) {
                $insert_sql = "UPDATE user SET book_count = (book_count + 1) WHERE id = '$user_id'";
                if($db->query($insert_sql) === TRUE){
                    header("location: /stark/home/UserLogin/UserInterFace/user.php?email=".$email);
                }
              }
              else{

                 echo '

                  <h1 class="error" style="border: 1px solid black;
                     width: 800px;
                     margin: 40px auto;
                     background: #f4f4f4;
                     color: red;
                     padding: 100px;text-align: center;">Book has been already borrowed

                     <p style="font-size: 20px;text-align: center;"><a href="Search.php">Go to the previous page</a></p>
                  </h1>

                 ';
              }

    		 }
         else{

            echo '

             <h1 class="error" style="border: 1px solid black;
                width: 800px;
                margin: 40px auto;
                background: #f4f4f4;
                color: red;
                padding: 100px;text-align: center;">You Can not borrow more than '.$maxBookCount.' books

                <p style="font-size: 20px;text-align: center;"><a href="Search.php">Go to the previous page</a></p>
             </h1>

            ';

        }


    	 }

       else {

           echo '

            <h1 class="error" style="border: 1px solid black;
               width: 800px;
               margin: 40px auto;
               background: #f4f4f4;
               color: red;
               padding: 100px;text-align: center;">Some internal Error

               <p style="font-size: 20px;text-align: center;"><a href="Search.php">Go to the previous page</a></p>
            </h1>

           ';
      }
  }
?>
