<?php

   include("active.php");
   if(!$is_active){

      header("location:/stark/home/UserLogin/UserLogin.php");

    }
?>

<?php


    $user_id =  $_SESSION['$user_id'];
    $_SESSION['$user_id'] = $user_id;

    $email = $_SESSION['$email'];
    $_SESSION['$email'] = $email;

    $TITLE      =  $_POST['title'];
    $AUTHOR     =  $_POST['author'];
    $PUBLISHER  =  $_POST['publisher'];
    $YEAR_PUB   =  $_POST['yearofpub'];


   // echo $TITLE.'<br>'.$AUTHOR.'<br>'.$PUBLISHER.'<br>'.$YEAR_PUB.'<br>';

    $sql_query =  "SELECT * FROM Book WHERE title = '$TITLE' OR Author = '$AUTHOR' OR Publisher = '$PUBLISHER' OR Year_of_Pub = '$YEAR_PUB'";


    $insert_run = mysqli_query($db , $sql_query);
    $i = 1 ;
    if($insert_run)
    {

        while($row = mysqli_fetch_assoc($insert_run))
        {
            $image_location = "IMAGES/".$row['Image_location'];

            $flag = $i % 2;
            ?>
              <html>
                <head>
                  <link rel="stylesheet" type="text/css" href="Search_result.css"/>
                  <script type="text/javascript">
                    function add()
                    {

                      //alert('You have borrowed successfully!');
                    }
                  </script>
                </head>
                <body>
                  <?php
                      $_SESSION['$title.'.$i.''] = $row['title'];
                      $_SESSION['$Author.'.$i.''] = $row['Author'];
                      $_SESSION['$Publisher.'.$i.''] = $row['Publisher'];
                      $_SESSION['$Year_of_Pub.'.$i.''] = $row['Year_of_Pub'];
                      $_SESSION['$ISBN_No.'.$i.''] = $row['ISBN_No'];
                      $_SESSION['$i'] = $i;
                   echo'
                         <table class="outerTable'.$flag.'" border="0" align="center">
                            <col width="60">
                            <col width="130">
                            <tr>
                              <td colspan="2" >
                                 <div id="borrowBook">
                                   <form action="Borrow.php" method="post" >
                                           <input type="submit" name="button" value="Borrow"/>
                                           <input type="hidden" name="id" value="'.$i.'"/>
                                   </form>
                                 </div>
                                 <div class="title">
                                    <p>'.$i.'. '.$row['title'].'</p>
                                 </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                  <div id="Img">
                                    <img src="'.$image_location.'"/>
                                  </div>
                              </td>
                              <td>

                                    <table class="innerTable" border="0">

                                       <tr>
                                          <td><div class="tuple1"><p>Author &nbsp;&nbsp;&nbsp;&nbsp;:</p></div></td>
                                          <td><div class="tuple2"><p>'.$row['Author'].'</p></div></td>
                                       </tr>
                                       <tr>
                                          <td><div class="tuple1"><p>Publisher &nbsp;&nbsp;&nbsp;&nbsp;:</p></div></td>
                                          <td><div class="tuple2"><p>'.$row['Publisher'].'</p></div></td>
                                       </tr>
                                       <tr>
                                          <td><div class="tuple1"><p>Year Of Pub &nbsp;&nbsp;&nbsp;&nbsp;:</p></div></td>
                                          <td><div class="tuple2"><p>'.$row['Year_of_Pub'].'</p></div></td>
                                       </tr>
                                       <tr>
                                          <td><div class="tuple1"><p>ISBN No. &nbsp;&nbsp;&nbsp;&nbsp;:</p></div></td>
                                          <td><div class="tuple2"><p>'.$row['ISBN_No'].'</p></div></td>
                                       <tr>
                                       <tr>
                                          <td><div class="tuple1"><p>Edition &nbsp;&nbsp;&nbsp;&nbsp;:</p></div></td>
                                          <td><div class="tuple2"><p>'.$row['Edition'].'</p></div></td>
                                       </tr>
                                    </table>

                              </td>
                            </tr>

                         </table>

                     ';
                  $i++;
                 ?>
                <hr style="visibility: hidden;">
                </body>
              </html>

           <?php

        }
    }
     else{

        echo "Book Not Found";
      }

?>
