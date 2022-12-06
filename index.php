<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="index.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
      <a href="index.php">Home</a>
      <?php 
        session_start();
        $firstname = '';
        if (isset($_SESSION['firstname'])) {

          $firstname = $_SESSION['firstname'];
        }
      echo $firstname ?  '<a href="attendance.php">Attendance</a>' : '<a href="signup.php">Login / Signup</a>';
      ?>
      <!-- <a href="attendance.php">Attendance</a> -->
      <!-- <a href="signup.php">Login / Signup</a> -->
    </div>

    <div id="main">
      <button class="openbtn" onclick="openNav()">☰</button>
    </div>
    <!-- <img src="Login.png" alt=""> -->
    <div class="text-container">
      <h1 class="text">Welcome To SIWES Attendance Portal</h1>
      <h2 class="text">Click on the burger to continue</h2>
    </div>
    <script src="index.js"></script>
  </body>
</html>
