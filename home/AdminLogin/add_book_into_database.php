<?php

  session_start();

  include('../Connection/connection.php');

  $is_true = $_SESSION['admin']['is_active'];

  if( !isset($_SESSION['admin']['is_active'])  ) {
    header("location: ../home.php");
  }

  $title     = $_POST['Title'];
  $isbn      = $_POST['ISBN'];
  $publisher = $_POST['Publisher'];
  $price     = $_POST['Price'];
  $author    = $_POST['Author'];
  $edition   = $_POST['Edition'];
  $yop       = $_POST['YearOfPub'];
  $category  = $_POST['Category'];
  $url	     = $_POST['url'];


  $description = strtolower($title).strtolower((string)$isbn).strtolower($publisher).strtolower((string)$price).strtolower($author).strtolower($edition).strtolower($yop).strtolower($category);

  $description = str_replace(' ', '', $description);

  $query = "INSERT INTO Book(title,Author,ISBN_No,Edition,Publisher,Year_of_Pub,Price,Category,DESCRIPTION,imgUrl)
                            VALUES('$title','$author','$isbn','$edition','$publisher','$yop','$price','$category','$description','$url')";


  if(!mysqli_query($db,$query))
  {
    echo '
      <h1 class="error" style="border: 1px solid black;
          width: 800px;
          margin: 40px auto;
          background: #f4f4f4;
          color: red;
          padding: 100px;text-align: center;">Accession number can not be same

          <p style="font-size: 20px;text-align: center;"><a href="InsertBook.php">Go to the previous page</a></p>
       </h1>
    ';
  }
  else{

       echo '
         <h1 class="error" style="border: 1px solid black;
             width: 800px;
             margin: 40px auto;
             background: #f4f4f4;
             color: red;
             padding: 100px;text-align: center;">Record has been added Successfully!

             <p style="font-size: 20px;text-align: center;"><a href="InsertBook.php">Go to the previous page</a></p>
          </h1>
       ';
   }

   mysqli_close($db);

?>
