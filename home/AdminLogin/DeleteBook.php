<?php

  session_start();

  $is_true = $_SESSION['admin']['is_active'];

  if( !isset($_SESSION['admin']['is_active'])  ) {
    header("location: ../home.php");
  }

?>

<!DOCTYPE html>
<html>
 <head>
    <title>Delete Book</title>
    <link rel="icon" type="image/png" href="admin.png"/>
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
    </style>
    <script type="text/javascript">
       function checkLength() {
            var elements = document.getElementsByClassName('textbox');
            for(var i=0;i<2;i++)
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
                <div id="LeftTopBar"> <p>Administration</p></div>
             </td>
             <td>
                <div id="RightTopBar"> <a href='logout.php'>logout</a></div>
             </td>

         <tr height="300">
            <td colspan="2" valign="top" >

               <div class="MiddleBar">
                  <table align="center" border="0" width="100%" cellpadding="0" cellspacing="10">
                     <tr>
                        <td><div class="Inner_td"><a href="InsertBook.php">Insert Book</a></div></td>
                        <td><div class="Inner_td"><a href="DeleteBook.php">Delete Book</a></div></td>
                        <td><div class="Inner_td"><a href="DeleteUser.php">Delete User</a></div></td>
                        <td><div class="Inner_td"><a href="DeleteFine.php">Clear Fine</a></div></td>
                     </tr>
                  </table>

                  <hr />

                  <form method="post" action="delete_book_from_database.php">
                     <table align="center" cellpadding="5px" cellspacing="0px" border="0" style="width:100%;">
                        <tr>
                           <td>ISBN NO. :</td><td><input class="textbox" name="ISBN"type="integer" placeholder="DIGITS" maxlength="10" required/></td>
                        </tr>
                        <tr>
                           <td>TITLE :</td><td><input class="textbox" name="TITLE" type="text" placeholder="CHARACTERS" maxlength="50" ></td>
                        </tr>
                        <tr height="150px">
                           <td colspan="2"><button type="submit" class="button button-block" style="width:50%;margin:0px 200px;margin-bottom:5px;" onclick=" return checkLength();"/>DELETE</button></td>
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
