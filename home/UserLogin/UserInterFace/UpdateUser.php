<?php

  include("active.php");

  if(!$is_active){
    header("location:/stark/home/UserLogin/UserLogin.php");
  }

  $user_id = $_SESSION['$user_id'];
  $email   = $_SESSION['$email'];

?>


<!DOCTYPE html>
<html>
 <head>
    <title>User Activity</title>
    <link rel="icon" type="image/jpeg" href="images/images1.jpeg"/>
    <link rel="stylesheet" type="text/css" href="user.css"/>
    <style type="text/css">
       .button {

         font-size:12pt;
         height:40px;
         width:50%;
         padding: 3px 10px;
         border-width:2px;
         border-color:red;
         border-radius:5px;
         box-shadow:3px 3px 1px #A52A2A;
       }
       form {
         font-size:12pt;
         color:#8B008B;
       }
       form table {
         margin:70px;
         padding:0px;
       }
    </style>
    <script type="text/javascript">
       function fun(value1,pos)
       {
         var re = prompt("Change "+ value1,value1);
         if(re)
         {
               var x = document.getElementsByClassName("button");
               x[pos].value = re;
               //document.write(x[pos].value);
               return true;
         }
         return false;
       }
    </script>
 </head>
 <body>
    <div class="outer">
       <table align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
         <tr style="background-color:#00FFFF;">
             <td>
                <div id="LeftTopBar"> <p>Update Profile </p></div>
             </td>
             <td>
                <div id="RightTopBar"><a href="#"> <p><?php echo $email;?></p></a> </div>
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
               <div class="MiddleBar">
                  <form method="post" action="add.php">
                     <table align="center" cellpadding="5px" cellspacing="5px" border="0" style="width:100%;">
                        <tr>
                           <td><button type = "submit" class="button" name="first_name"  value="" onclick=" return fun('First Name',0)">First Name</button></td>
                           <td><button type = "submit" class="button" name="village_city" value="" onclick=" return fun('Village',1)">Village/City</button></td>
                        </tr>
                        <tr>
                           <td><button type = "submit" class="button" name="last_name" value="" onclick=" return fun('Last Name',2)">Last Name</button></td>
                           <td><button type = "submit" class="button" name="state" value="" onclick=" return fun('State',3)">State</button></td>
                        </tr>
                        <tr>
                           <td><button type = "submit" class="button" name="father_name" value="" onclick=" return fun('Father Name',4)">Father Name</button></td>
                           <td><button type = "submit" class="button" name="email_id" value="" onclick=" return fun('Email ID',5)">Email ID</button></td>
                        </tr>
                        <tr>
                           <td><button type = "submit" class="button" name="dob" value="" onclick=" return fun('DOB',6)">DOB</button></td>
                           <td><button type = "submit" class="button" name="mobile_no" value="" onclick=" return fun('Mobile NO.',7)">Mobile NO.</button></td>
                        </tr>
                     </table>
                  </form>
               </div>
            </td>
         </tr>
       </table>
    </div>
 </body>
</html>
