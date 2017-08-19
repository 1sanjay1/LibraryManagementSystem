<?php

  include("active.php");

  if(!$is_active){
    header("location:/stark/home/UserLogin/UserLogin.php");
  }

  $user_id = $_SESSION['$user_id'];
  $email   = $_SESSION['$email'];

  // $_SESSION['$user_id'] = $user_id;

  // if($_GET){
  //     $email =  $_GET['email'];
  // }

  $query   =  "SELECT * FROM user WHERE id = '$user_id'";
  $result  =  mysqli_query($db,$query);

  if(!$result)
    die("Error : Database Connection!");

  $row = mysqli_fetch_array($result);
  mysqli_close($db);

  $DOB = $row['DOB'];
  $present_date  = time();
  $age_date    = $present_date - strtotime($DOB);
  $age_days    =  floor($age_date / (60 * 60 * 24));
  $age = (int)($age_days / 360);

  if($age === 2046){
        $age = 0;
  }


?>

<!DOCTYPE html>
<html>
 <head>
    <title>User Activity</title>
    <link rel="icon" type="image/jpeg" href="images/images1.jpeg"/>
    <link rel="stylesheet" type="text/css" href="user.css"/>
    <style type="text/css">
      .OuterProfile {
         margin:50px 100px;
         padding:0px;
      }
      .OuterProfile table {
         margin:0px;
         padding:0px;
         text-align:center;
         font-size:15pt;
         color:#8B008B;
      }
      .OuterProfile table tr {
         width:100%;
         height:50px;
      }
      .OuterProfile table{
        table-layout: fixed;

      }

      .OuterProfile table td {
        overflow: hidden;
      }
      #image {
        margin:0px;
        padding:0px;
        border-style:solid;
        border-width:1px;
        border-color:black;
        width:100%;
        height:250px;
      }
      img {
        margin:30px;
        padding-top:50px;
      }
    </style>
 </head>
 <body>
    <div class="outer">
       <table align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
         <tr style="background-color:#00FFFF;">
             <td>
                <div id="LeftTopBar"> <p>Book Activities</p></div>
             </td>
             <td>
                <div id="RightTopBar"><a href="https://mail.google.com/"> <?php echo $email;?></a> </div>
             </td>
         </tr>

         <tr height="300" style="background-color:#00FFFF;">
            <td colspan="2" valign="top" >
               <div class="NavigationBar" >
                  <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="Search.php">Search/Borrow</a></li>
                     <li><a href="Return_Renew.php">Return/Renew</a></li>
                     <li><a href="UpdateUser.php">Update Profile</a></li>
                     <li><a href="logout.php">Logout</a></li>
                  </ul>
               </div>
               <div class="MiddleBar">
                  <div class="OuterProfile">
                     <table border="0" cellpadding="0" cellspacing="0" >
                       <col width="100">
                       <col width="500">
                       <tr >
                         <td height="100%">
                           <div id="image" ><img src="images/images1.jpeg" height="100px" width="100px" /></div>
                         </td>
                         <td >
                           <table border="1" cellpadding="0" cellspacing="0">
                             <col width="80">
                             <col width="200">

                             <tr>
                               <td>Name :</td>
                               <td> <?php echo $row['firstname'].' '.$row['lastname'];?> </td>
                             </tr>
                             <tr>
                               <td>Father Name :</td>
                               <td> <?php echo $row['Father_name'];?> </td>
                             </tr>
                             <tr>
                               <td>ID :</td>
                               <td><?php echo $row['id'];?></td>
                             </tr>
                             <tr>
                               <td>DOB :</td>
                               <td> <?php echo $row['DOB']; ?> </td>
                             </tr>
                             <tr>
                               <td>Age :</td>
                               <td> <?php echo $age;?></td>
                             </tr>
                           </table>
                         </td>
                       <tr>
                     </table>
                  </div>
               </div>
            </td>
         </tr>
       </table>
    </div>
 </body>
</html>
