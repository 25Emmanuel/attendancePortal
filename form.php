<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="form.css" />

    <!----===== Iconscout CSS ===== -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <title>Regisration Form</title>
  </head>
  <style>
    /* table, th, td {
  border:1px solid black;
} */
  </style>
  <body>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
      <a href="index.php">Home</a>
      <a href="signup.php">Login</a>
    </div>
    <div id="main">
      <button class="openbtn" onclick="openNav()">☰</button>
    </div>
    <img src="images/Logoo.png" class="img" />
    <div class="container">
      <h2>SIWES</h2>
      <header>TMD PERSONAL RECORD FORM</header>

      <form action="signupcont.php">
        <!-- <div class="form first"> -->
        <div class="details personal">
          <span class="title">Personal Details</span>

          <div class="fields">
            <div class="input-field">
              <label> SURNAME</label>
              <input
                type="text"
                placeholder="Enter your surname"
                name="surname"
                required
              />
            </div>
            <div class="input-field">
              <label>OTHER NAMES</label>
              <input
                type="text"
                placeholder="Enter your other name"
                name="othername"
                required
              />
            </div>
            <div class="input-field">
              <label>PRESENT HOME ADDRESS</label>
              <input
                type="text"
                placeholder="Enter your address"
                name="address"
                required
              />
            </div>

            <div class="input-field">
              <label>Mobile Number</label>
              <input
                type="tel"
                pattern="[0-9]{11}"
                placeholder="Mobile number (+234)"
                name="mobile"
                required
              />
            </div>
            <div class="input-field">
              <label>E-MAIL</label>
              <input type="email" placeholder="Alternate-email" name="alternate-email" required />
            </div>
            <div class="input-field">
              <label>Gender</label>
              <select name="gender" required>
                <option disabled selected>Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="input-field">
              <label>DATE OF BIRTH</label>
              <input type="date" name="dob" required />
            </div>
            <div class="input-field">
              <label>Reg/ Matric Number</label>
              <input
                type="text"
                placeholder="Reg / Matric Number"
                name="matricNo"
                required
              />
            </div>
            <div class="input-field">
              <label>CONTACT NAME (IF CASE OF EMERGENCY)</label>
              <input
                type="text"
                placeholder="Contact name (if case of emergency)"
                name="contactName"
                required
              />
            </div>
            <div class="input-field">
              <label>CONTACT NUMBER (IF CASE OF EMERGENCY)</label>
              <input
                type="number"
                placeholder="Contact number"
                name="contactNumber"
                required
              />
            </div>
            <div class="input-field">
              <label>CONTACT ADDRESS (IF CASE OF EMERGENCY)</label>
              <input
                type="text"
                placeholder="Contact address"
                name="contactAddress"
                required
              />
            </div>

            <div class="input-field">
              <label>NAME OF SCHOOL</label>
              <input
                type="text"
                placeholder="Name of school"
                name="school"
                required
              />
            </div>

            <!-- <button class="submit">
              <a href="next.html">Next</a>
             </button> -->

            <!-- <a class="next" href="next.html">Next</a> -->
            <input type="submit" class="next" name="form-part-1" value="Next">
            <!-- </div> 
          <div class="input-field button">
            <a class="next" href="next.html"><input type="button" value="Next" /></a>
          </div> -->
          </div>
        </div>
      </form>
    </div>

    <script src="form.js"></script>
  </body>
</html>
