<?php
  
  
  include("connection.php");
  $email = $_GET['Email'];
  $pwd   = $_GET['Password'];
  if(isset($email) && isset($pwd) )
  {
    if($email == 'sanjayucp1554@gmail.com' && $pwd == 'sanjay004'){
           
           $is_active = true;
           $_SESSION['$is_active'] = $is_active; 
      } 
      
    else
    {
      die("Invalid Password or Email ID!");
    }
  }
?>

<!DOCTYPE html>
<html>
 <head>
    <title>Add Book</title>
    <link rel="icon" type="image/png" href="newuser.png"/>
    <link rel="stylesheet" type="text/css" href="Admin.css"/>
    <style type="text/css">
       .textbox {
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
       #submit {
         padding:5px;
         margin:5px;
         text-align:center;
       }
       #Submit {
         padding:0px;
         margin:0px 0px 0px 10px;
         height:30px;
       }
       #Reset {
         padding:0px;
         margin:0px 10px 0px 0px;
         height:30px;
       }
       #Submit,#Reset {
         background-color:green;
         color:#FFFFFF;
         padding-top:5px;
       }
    </style>
 </head>
 <body>
    <div class="outer">
       <table align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
         <tr style="background-color:#00FFFF;">
             <td>
                <div id="LeftTopBar"> <p>Administration</p></div>
             </td>
             <td>
                <div id="RightTopBar"> <a href='logout.php' >logout</a></div>
             </td>
          
         <tr height="300">
            <td colspan="2" valign="top" >
               
               <div class="MiddleBar">
                  <table align="center" border="0" width="100%" cellpadding="0" cellspacing="10">
                     <tr>
                        <td><div class="Inner_td"><a href="InsertBook.php?Email=<?php echo $email ?>&Password=<?php echo $pwd;?>
                        ">Insert Book</a></div></td>
                        
                        <td><div class="Inner_td"><a href="DeleteBook.php?Email=<?php echo $email ?>&Password=<?php echo $pwd;?>
                        ">Delete Book</a></div></td>
                        <td><div class="Inner_td"><a href="DeleteUser.php?Email=<?php echo $email ?>&Password=<?php echo $pwd;?>
                        ">Delete User</a></div></td>
                     </tr>
                  </table>
                   
                  <hr />

                  <form method="post" action="add_book_into_database.php">
                     <table align="center" cellpadding="5px" cellspacing="0px" border="0" style="width:100%;">
                        <tr>
                           <td> TITLE :</td><td><input class="textbox" name="Title"type="text" placeholder="CHARACTERS" maxlength="50" required/></td>
                           <td> AUTHOR :</td><td><input class="textbox" name="Author" type="text" placeholder="CHARACTERS"maxlength="30" required/></td>
                        </tr>
                        <tr>
                           <td>ISBN NO. :</td><td><input class="textbox" name="ISBN" type="integer" placeholder="DIGITS"maxlength="10" required/></td>
                           <td>EDITION :</td><td><input class="textbox" name="Edition" type="text" placeholder="CHARACTERS"maxlength="10" required/></td>
                        </tr>
                        <tr>
                           <td>PUBLISHER :</td><td><input class="textbox" name="Publisher" type="text" placeholder="CHARACTERS"maxlength="30" required /></td>
                           <td>YEAR OF PUB :</td><td><input class="textbox" name="YearOfPub" type="text" placeholder="YEAR"maxlength="10" required/></td>
                        </tr>
                        <tr >
                           <td >PRICE :</td><td><input class="textbox" name="Price" type="integer" placeholder="INTEGERS" maxlength="10" required/></td>
                           <td >CATEGORY :</td><td><input class="textbox" name="Category" type="text" placeholder="CSE/MECH/META/HUMANITY/SOCIAL SCINECE" maxlength="50" required/></td>
                        </tr>
                        <tr>
                           <td>Image Url :</td><td><input class="textbox" name="url" type="text" placeholder="image url" required/></td>
                           <td></td>
                        </tr>
                        <tr>                   
                           <td colspan="2"height="80px"><button type="submit" class="button button-block"/>ADD</button></td>
                           <td colspan="2"height="80px"><button type="reset" class="button button-block"/>RESET</button></td>
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
