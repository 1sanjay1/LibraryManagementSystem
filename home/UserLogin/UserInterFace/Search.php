<?php

  include("active.php");

  if(!$is_active){
      header("location: ../../home.php");
  }

  $user_id =  $_SESSION['$user_id'];
  $email   =  $_SESSION['$email'];

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

      .textbox
      {
       font-size:10pt;
       height:20px;
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
    </style>
    <script type="text/javascript">
       function checkLength() {
            var elements = document.getElementsByClassName('textbox');
            for(var i=0;i<4;i++)
            {
              if(elements[i].value.length != 0)
                return true;
            }
            alert("Please fill at least one field");
            return false;
       }
    </script>
 </head>
 <body>
    <div class="outer">
       <table align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
         <tr style="background-color:#00FFFF;">
             <td>
                <div id="LeftTopBar"> <p>Search and Borrow</p></div>
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
               <div class="MiddleBar">
                  <form action='new_result.php' method='post'>
                     <table  align="center" cellpadding="8px" cellspacing="5px" border="0" style="width:100%;">
                        <tr height="100px">
                           <td valign="bottom">&nbsp;&nbsp;&nbsp;Search Keyword :</td><td valign="bottom">&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" placeholder="CHARACTERS"  name="search"/>
                           </td>

                        </tr>
                        <tr height="150px" >
                           <td colspan="4"><button type="submit" class="button button-block" onclick=" return checkLength();" style="width:50%;margin:0px 200px;"/>Submit</button></td>
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
