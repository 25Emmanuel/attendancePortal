<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300;600&family=Lora:wght@500&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="attendance.css" />
    <title>Document</title>
  </head>
  <body>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
      <a href="index.php">Home</a>
      <!-- <a href="attendance.html">Attendance</a> -->
      <!-- <a href="signup.php">Login / Signup</a> -->
    </div>

    <div id="main">
      <button class="openbtn" onclick="openNav()">☰</button>
      <div class="logout-btn-container">
        <form action="logout.php">
            <input type="submit" value="Logout" name="logOut" class="logout-btn">
        </form>
      </div>
    </div>

    <div class="welcome">

      <?php 
        session_start();
        if (isset($_SESSION['firstname'])) {

          $firstname = $_SESSION['firstname'];
          echo "<h1>Welcome $firstname</h1>"; 
        }
      ?>
    </div>

    
    <div class="att-container">
      <h1 class="page-header">DAILY ATTENDANCE</h1>
      <div class="day-information">
        <div class="day-holder"></div>
        <div class="date-holder"></div>
      </div>
      <div class="avg-att">
        <?php
          if (isset($_SESSION['average'])) {
            $average = $_SESSION['average'];
            echo "<p class='avg'>Average-Att</p>: "."<p class='avg'>$average%<p>";
          }
        ?>
        <!-- <h3>Avg Att: 65.7%</h3> -->
      </div>
      <form action="tester.php">
        <table class="table">
          <tr class="headers">
            <th>Sign-In</th>
            <th>Sign-Out</th>
          </tr>
          <tr id="btn-row">
            <td>
              <input type="checkbox" name="signIn" 
              <?php 
                if (isset($_SESSION['signIn'])) {
                  echo $_SESSION['signIn'] ? 'checked' : null;
                  
                } 
              ?>
              value="SignedIn" class="sign-in" id="sign-in-toogle-btn">
              <label for="sign-in-toogle-btn" id="sign-in-toogle-btn" class="sign-in-toogle-btn"></label>
            </td>
            <td>
              <input type="checkbox" name="signOut" 
              <?php 
                if (isset($_SESSION['signOut'])) {
                  echo $_SESSION['signOut'] ? 'checked' : null;
                  
                } 
              ?>
              value="SignedOut" id="sign-out-toogle-btn" class="sign-out">
              <label for="sign-out-toogle-btn"  id="sign-out-toogle-btn" class="sign-out-toogle-btn"></label>
            </td>
          </tr>
        </table>
        <input type="submit" class="submit-btn" name="attendance"/>
      </form>

    </div>

    <!-- alert box -->
    
    <?php
    if (isset($_SESSION['alert-In'])) {
      $alert = $_SESSION['alert-In'];
      echo $alert;
      echo $alert ? '<script type="text/javascript"> alert("Sign-In Successfully")</script>' : null;
    } else if (isset($_SESSION['alert-Out'])) {
      $alert = $_SESSION['alert-Out'];
      echo $alert;
      echo $alert ? '<script type="text/javascript"> alert("Sign-Out Successfully")</script>' : null;
    }
      
    ?>

    <div class="alert-cont">
        <div class="box">
            <div class="content">
                <h3 id="message">Succesful!</h3>
                <div class="check-cont">
                  <p id="check">&#x2713</p>
                </div>
            </div>
        </div>
    </div>
    <!-- alertbox -->
    <script src="attendance.js"></script>
  </body>
</html>
