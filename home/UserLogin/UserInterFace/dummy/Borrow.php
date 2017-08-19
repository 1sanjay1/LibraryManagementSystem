<!DOCTYPE html>
<html>
 <head>
    <title>Borrow Books</title>
    <link rel="icon" type="image/jpeg" href="images.jpeg"/> 
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

      hr{ 
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
                <div id="RightTopBar"> <p>User Name</p> </div>
             </td>
         </tr>
          
         <tr height="300" style="background-color:#00FFFF;">
            <td colspan="2" valign="top" >
               <div class="NavigationBar" >
                  <ul>
                     <li><a href="user.php">Home</a></li>
                     <li><a href="Search.php">Search</a></li>
                     <li><a href="#">Borrow</a></li>
                     <li><a href="#">Return</a></li>
                     <li><a href="#">Renew</a></li>
                  </ul>
               </div>
               <div class="MiddleBar">
                  <form>
                     <table align="center" cellpadding="5px" cellspacing="2px" border="0" style="width:100%;">
                        <tr>
                           <td>&nbsp;&nbsp;&nbsp;TITLE :</td><td>&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" placeholder="CHARACTERS" maxlength="20"/></td>
                           <td>&nbsp;&nbsp;&nbsp;AUTHOR :</td><td>&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" placeholder="CHARACTERS"/></td>
                        </tr>
                        <tr>
                           <td>&nbsp;&nbsp;&nbsp;ISBN NO. :</td><td>&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" placeholder="DIGITS"/></td>
                           <td>&nbsp;&nbsp;&nbsp;ADDITION :</td><td>&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" placeholder="DIGITS"/></td>
                        </tr>
                        <tr>
                           <td>&nbsp;&nbsp;&nbsp;PUBLISHER :</td><td>&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" placeholder="CHARACTERS"/></td>
                           <td>&nbsp;&nbsp;&nbsp;YEAR OF PUB :</td><td>&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" placeholder="YEAR"/></td>
                        </tr>
                        <tr>
                           <td>&nbsp;&nbsp;&nbsp;ISSUE DATE :</td><td>&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" placeholder="DD/MM/YEAR"/></td>
                           <td>&nbsp;&nbsp;&nbsp;RETURN DATE :</td><td>&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" placeholder="DD/MM/YEAR"/></td>
                        </tr>
                     </table>
                  </form>
                  <hr />
               </div>
            </td>
         </tr>
       </table>
    </div>      
 </body>
</html>
