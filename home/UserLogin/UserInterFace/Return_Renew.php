<?php

  include("active.php");

  if(!$is_active){
    header("location:/stark/home/UserLogin/UserLogin.php");
  }

  $email =  $_SESSION['$email'];
  $user_id = $_SESSION['$user_id'];

  // change fine status if there is any delay.
  $status_query = "SELECT * FROM user_books WHERE user_id  = '$user_id' ";
  $query_set = mysqli_query($db, $status_query);

  $total_fine = 0;
  $total_days = 0;

  while ($row = mysqli_fetch_array($query_set)) {

    $present_date  = time();
    $fine_date    = $present_date - strtotime($row['Return_date']);

    if($fine_date < 0)
      ;
    else {
      $fine_days   =  ceil($fine_date / (60 * 60 * 24));
      $total_days = $total_days + $fine_days;
      $total_fine = $total_fine + 2*$fine_days;
    }
  }

  //update fine of the user
  $status_query = "UPDATE user SET fine = '$total_fine' , ExtraDays = '$total_days' WHERE id  = '$user_id' ";
  mysqli_query($db, $status_query);

?>


<!DOCTYPE html>
<html>
 <head>
    <title>Book Search</title>
    <link rel="icon" type="image/jpeg" href="images/images.jpeg"/>
    <link rel="stylesheet" type="text/css" href="user.css"/>
    <style type="text/css">
      .MiddleBar table {
        text-align:center;
      }

      hr {
       display: block;
       margin-top: 0.5em;
       margin-bottom: 0.5em;
       margin-left: auto;
       margin-right: auto;
       border-style: inset;
       border-width: 1px;
      }

      form {
       font-size:12pt;
       color:#8B008B;
      }
     form table{
        table-layout: fixed;
        width: 400px;
        margin:100px;
      }

     form table td {
        overflow: hidden;
      }
    </style>
 </head>
 <body>
    <div class="outer">
       <table align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
         <tr style="background-color:#00FFFF;">
             <td>
                <div id="LeftTopBar"> <p>Return and Renew</p></div>
             </td>
             <td>
                <div id="RightTopBar"> <a href="#"><?php echo $email;?></a> </div>
             </td>
         </tr>

         <tr height="300" style="background-color:#00FFFF;">
            <td colspan="2" valign="top" >
               <div class="NavigationBar" >
                  <ul>
                     <li><a href="user.php">Home</a></li>
                     <li><a href="Search.php">Search/Borrow</a></li>
                     <li><a href="Return_Renew.php">Return/Renew</a></li>
                     <li><a href="UpdateUser.php">Update Profile</a></li>
                     <li><a href="logout.php">Logout</a></li>
                  </ul>
               </div>
               <div class="MiddleBar" style="height:405px;">

                     <table  align="center" cellpadding="5px" cellspacing="0px" border="1" style="width:100%;margin:0px;padding:0px;">
                        <col width="80">
                        <col width="300">
                        <col width="100">
                        <col width="100">
                        <col width="100">
                        <tr height="50">
                           <td  colspan="3" style="background-color:;">&nbsp;&nbsp;&nbsp; Fine Amount:</td><td colspan="1" style="background-color:;">&nbsp;&nbsp;&nbsp;<?php echo '₹ '.$total_fine;?></td>
                           <td  colspan="2" style="background-color:;">&nbsp;&nbsp;&nbsp;Extra Days :</td><td colspan="1" style="background-color:;">&nbsp;&nbsp;&nbsp;<?php echo $total_days;?></td>
                        </tr>

                        <tr height="40" style="color:#FFFFFF;" >
                          <td style="background-color:#2F4F4F;">ISBN No.</td>
                          <td style="background-color:#2F4F4F;">Title</td>
                          <td style="background-color:#2F4F4F;">Author</td>
                          <td style="background-color:#2F4F4F;">Issue Date</td>
                          <td style="background-color:#2F4F4F;">Return Date</td>
                          <td style="background-color:#2F4F4F;">Return</td>
                          <td style="background-color:#2F4F4F;">Renew</td>
                        </tr>


<?php

    $getBookQuery = "SELECT * FROM user_books, Book WHERE user_books.ISBN_No = Book.ISBN_No";
    $getQueryResult = mysqli_query($db, $getBookQuery);

    while( $row = mysqli_fetch_array($getQueryResult)) {

                    ?>
                        <tr>
                            <td style="background-color:#999;"> <?php echo $row['ISBN_No']; ?></td>
                            <td style="background-color:silver;"><?php echo $row['title'];  ?></td>
                            <td style="background-color:#999;"><?php echo $row['Author']; ?></td>
                            <td style="background-color:silver;"><?php echo $row['Issue_date']; ?></td>
                            <td style="background-color:#999;"><?php echo $row['Return_date'];  ?></td>

                            <div id="Return_Book">
                              <form action = "Return.php" method="post" >
                                <td><button type="submit" class="button button-block" style="width:;margin:0px;"/>Return</button></td>
                                <input type = "hidden" name="id" value="<?php echo $row['ISBN_No'];?>"/>
                              </form>
                            </div>

                            <div id="Return_Book">
                              <form action = "Renew.php" method="post" >
                                <td><button type = "submit" class="button button-block" style="width:;margin:0px;"/>Renew</button></td>
                                <input type="hidden" name="id" value="<?php echo $row['ISBN_No']; ?>"/>
                              </form>
                            </div>

                        </tr>
                    <?php

    }
?>

                      </table>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
  </body>
</html>
