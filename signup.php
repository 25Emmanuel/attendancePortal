<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== Iconscout CSS ===== -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="signup.css" />

    <!--<title>Login & Registration Form</title>-->
  </head>
  <body>
    <!-- <div class="logo"></div> -->
    <div class="imgg">
      <img src="Logoo.png" />
    </div>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
      <a href="index.php">Home</a>

      <!-- <a href="signup.php">Login / Signup</a> -->
    </div>

    <div id="main">
      <button class="openbtn" onclick="openNav()">☰</button>
    </div>

    <div class="container">
      <div class="forms">
        <div class="form login">
          <h1 class="title">Login</h1>
          <!-- Removed a Hash from here also -->
          <form action="login.php">
            <div class="input-field">
              <input type="text" placeholder="Enter your email" name="email" />
              <i class="uil uil-envelope icon"></i>
            </div>
            <div class="input-field">
              <input
                type="password"
                class="password"
                name="password"
                placeholder="Enter your password"
                
              />
              <i class="uil uil-lock icon"></i>
              <i class="uil uil-eye-slash showHidePw"></i>
            </div>

            <div class="checkbox-text">
              <div class="checkbox-content">
                <input type="checkbox" id="logCheck" />
                <label for="logCheck" class="text">Remember me</label>
              </div>

              <a href="#" class="text">Forgot password?</a>
            </div>

            <div class="input-field button">
              <input type="submit" name='login' value="Login"/>
              <!-- <button class="button">Login</button> -->
            </div>
            <!-- <button class="btn">Login</button> -->
          </form>

          <div class="login-signup">
            <span class="text"
              >Not a member?
              <a href="#sign-up" class="text signup-link">Signup Now</a>
            </span>
          </div>
        </div>

        <!-- Registration Form -->
        <div id='sign-up' class="form signup">
          <h1 class="title">Registration</h1>
          <!-- Removed a Hash from here also -->
          <form action="startsignup.php">
            <div class="input-field">
              <input type="text" placeholder="Enter your firstname" name="firstname" />
              <i class="uil uil-user"></i>
            </div>
            <div class="input-field">
              <input type="text" placeholder="Enter your email" name="email" />
              <i class="uil uil-envelope icon"></i>
            </div>
            <div class="input-field">
              <input
                type="password"
                class="password"
                name="password"
                placeholder="Create a password"
              
              />
              <i class="uil uil-lock icon"></i>
            </div>
            <div class="input-field">
              <input
                type="password"
                class="password"
                name="passwordConfirmation"
                placeholder="Confirm a password"
            
              />
              <i class="uil uil-lock icon"></i>
              <i class="uil uil-eye-slash showHidePw"></i>
            </div>

            <div class="checkbox-text">
              <div class="checkbox-content">
                <input type="checkbox" id="termCon" />
                <label for="termCon" class="text"
                  >I accepted all terms and conditions</label
                >
              </div>
            </div>
            <div class="input-field button">
              <input type="submit" onclick="sign()" name="start-sign-up" value="Sign-up"/>
            </div>
          </form>

          <div class="login-signup">
            <span class="text"
              >Already a member?
              <a href="" class="text login-link">Login Now</a>
            </span>
          </div>
        </div>
      </div>
    </div>

    <script src="signup.js"></script>
  </body>
</html>
