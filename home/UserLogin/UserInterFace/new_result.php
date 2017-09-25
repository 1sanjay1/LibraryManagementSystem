<?php

    include("active.php");

    if(!$is_active){
      header("location: ../../home.php");
    }

// fatch credentials from sessession varialbes
    $user_id =  $_SESSION['$user_id'];
    $email = $_SESSION['$email'];

    $keyword = strtolower((string)$_POST['search']);

    $keyword = str_replace(' ', '', $keyword);

    $sql_query = "SELECT * FROM Book WHERE DESCRIPTION like '%".$keyword."%'";
    $insert_run = mysqli_query($db , $sql_query);
    $num_rows = mysqli_num_rows($insert_run);
    $i = 1 ;

    if($num_rows <= 0) {

        echo '
        <h1 class="error" style="border: 1px solid black;
        width: 800px;
        margin: 40px auto;
        background: #f4f4f4;
        color: red;
        padding: 100px;text-align: center;">Book is not available

        <p style="font-size: 20px;text-align: center;"><a href="Search.php">Go to the previous page</a></p>
        </h1>

        ';

    }
    else if($insert_run)
    {
        while($row = mysqli_fetch_assoc($insert_run))
        {
            $image_location = $row['imgUrl'];

            $flag = $i % 2;
            ?>
              <html>
                <head>
                  <link rel="stylesheet" type="text/css" href="Search_result.css"/>
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
                         <table class="outerTable'.$flag.'" border="0" align="">
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
      else {

        echo '
        <h1 class="error" style="border: 1px solid black;
        width: 800px;
        margin: 40px auto;
        background: #f4f4f4;
        color: red;
        padding: 100px;text-align: center;">Internal Error occured

        <p style="font-size: 20px;text-align: center;"><a href="Search.php">Go to the previous page</a></p>
        </h1>

        ';

      }
?>
