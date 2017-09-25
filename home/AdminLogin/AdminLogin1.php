<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="icon" type="image/jpeg" href="../images/adminImg/Login.jpeg">
    <link rel="stylesheet" href="AdminLogin.css">
  </head>

  <body>
    <div class="form">
      <ul class="tab-group">
        <li class="tab"><a href="#">Admin Login</a></li>
      </ul>
      <div id="login">

        <marquee onmouseover = "stop()" onmouseout = "start()" ><h1>Welcome Admin!</h1></marquee>

        <form action="session.php" method="post">

           <div class="field-wrap">
              <input type="email" name="Email" required autocomplete="off" placeholder="Email Address"/>
           </div>

           <div class="field-wrap">
              <input type="password" name="Password" required autocomplete="off" placeholder="Password"/>
           </div>

           <p class="forgot"><a href="#">Forgot Password?</a></p>

           <button class="button button-block"/>Log In</button>
        </form>

      </div>
    </div> <!-- /form -->
  </body>
</html>
