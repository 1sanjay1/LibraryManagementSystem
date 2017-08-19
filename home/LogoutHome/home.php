<!DOCTYPE html>
<html>
<head>
   <title>MNIT LIBRARY</title>
   <link rel="icon" type="image/png" href="logo.png"/>
   <link rel="stylesheet" type="text/css" href="home.css"/>
   <style type="text/css">
      #MiddleBar {
        background-image: url(logo1.png);
        border-width:2px;
        border-color:black;
        border-style:solid;
        font-family:"Comic Sans MS", cursive;
        color:black;
        height:800px;
        margin:0px 100px;
      }

      #image {
        margin:0px;
        padding:0px;
      }

      #MiddleBar #image img {
        width:100%;
        height:300px;
        }

      #welcome {
        background-color:silver;
        padding:0px 100px;
        color:blue;
        text-shadow:2px 2px 2px white;
        border-style:inset;
        border-color:#CC0011;
        border-width:5px;
      }

      #login {
        padding-left:10px;
      }

      #login h1 a {
        text-decoration:none;
        text-shadow:1px 1px 2px #8B0000;
      }

      #login h1 a:hover {
        background:#696969;
        font-size:30px;
        padding:0px 10px;
        border-radius:10px;
      }
      
      #header1-left { 
        margin:0px
        padding:0px;
        position:absolute;
        left:1000px;
        color:#FFFFFF;
      }
      
   </style>

</head>
<body> 
   <div id="TopBar1">
        <div id="img">
           <img src="logo.png" height="80" width="80">
        </div>
        <div id="header1">CENTRAL LIBRARY</div>
        <div id="header2"><div id="d1">MALAVIYA NATIONAL INSTITUTE OF TECHNOLOGY JAIPUR</div></div>
   </div>                                      <!--Ending of TopBar1 -->
   <div id="TopBar2">
            <div class="NavigationBar">
               <ul>
                  <li><a href="home.php">Home</a></li>
                  <li><a href="#">About Us</a>
                     <ul>
                        <li><a href="AboutUs.html">Library</a></li>
                        <li><a href="Staff.html">Staff</a></li>
                        <li><a href="location_index.html">Location Index</a></li>
                        <li><a href="IT_Infra.html">IT Infrastructure</a></li>
                     </ul>
                  </li>
                  <li><a href="#">Services</a>
                     <ul>
                        <li><a href="BookBank.html">Book Bank</a></li>
                        <li><a href="InterLibraryLoan.html">Inter-Library Loan</a></li>
                        <li><a href="protocopying.html">Protocopying</a></li>                  
                     </ul>  
                  </li>
                  <li><a href="Notices.html">Notices</a></li>
                  <li><a href="FAQ.html">FAQs</a></li>
                  <li><a href="/stark/home/home.php">Log Out</a></li>
               </ul>   
            </div>                                <!--Ending of NavigationBar-->
   </div>                                         <!--Ending of TopBar2 -->
   <div id="MiddleBar">
     <div id="image">
        <img src="about.JPG"/>
     </div>
     <div id = "welcome">
        <marquee direction="left" onmouseover="stop()" onmouseout="start()"><h1>WelCome To Student Library</h1></marquee>
     </div>
   </div>                                         <!--Ending of MiddleBar-->
   <div id="Footer">
    <table border=0 cellpading=0px cellspacing=0px>
      <tr>
        <td width=300px >
         <div id="FooterLeft">
         <h4>Contact us:</h4>
         <p>Mr. Deep Singh</p><br />
         <p>Assistant Librarian, Central Library</p><br/>
         <p>Phone no. - 9549657358</p><br />
         <p>Email: dsingh.library@mnit.ac.in</p>
         </div>
        </td>
       <td width=300px >
         <div id="FooterRight">
         <h4>Developer details</h4>
         <p>Sanjay Yadav</p><br />
         <p>(sanjayucp1554@gmail.com)</p><br />
         <p>Abhishek Verma</p><br />
         <p>(2014ucp1572@mnit.ac.in)</p>
         </div>
       </td>
      </tr>
    </table>
   </div>
                                        <!--Ending of Footer-->
</body>
</html>
