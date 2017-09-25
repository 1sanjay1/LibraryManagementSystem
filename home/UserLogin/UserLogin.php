<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link rel="icon" type="image/jpeg" href="Login.jpeg">
    <link rel="stylesheet" href="UserLogin.css">
  </head>

  <body>

    <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">

        <!-- html code for signup page -->
        <div id="signup">
          <h1>Sign Up</h1>

          <form action="registration.php" method="post">

            <div class="top-row">

              <div class="field-wrap">
                <input name="firstname" type="text" required autocomplete="off" placeholder="First Name"/>
              </div>
              <div class="field-wrap">
                <input name="lastname" type="text"required autocomplete="off" placeholder="Last Name"/>
              </div>
            </div>
            <div class="field-wrap">
              <input  name="Email" type="email" required autocomplete="off" placeholder="Email Address"/>
            </div>
            <div class="field-wrap">
              <input name="password"  type="password" required autocomplete="off" placeholder="Set A Password"/>
            </div>

            <button name="submit" type="submit" class="button button-block"/>REGISTER</button>

          </form>

        </div>
        <!-- Ending of signup page -->


        <!-- starting of login page -->
        <div id="login">

          <h1>Welcome Student!</h1>

          <form action="user_login.php" method="post">

            <div class="field-wrap">
              <input name=  "Email" type="email"required autocomplete="off" placeholder="Email Address"/>
            </div>
            <div class="field-wrap">
              <input name  = "password" type="password"required autocomplete="off" placeholder="Password"/>
            </div>
            <p class="forgot"><a href="#">Forgot Password?</a></p>
            <button class="button button-block"/>Log In</button>

          </form>

        </div>
        <!-- Ending of login page -->

      </div><!-- tab-content -->

    </div> <!-- /form -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="UserLogin.js"></script>

  </body>
</html>
