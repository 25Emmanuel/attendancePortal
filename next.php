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
      <!-- <a href="#">Attendance</a> -->
      <a href="signup.php">Login</a>
    </div>
    <div id="main">
      <button class="openbtn" onclick="openNav()">☰</button>
    </div>
    <img src="images/Logoo.png" class="img" />
    <div class="container">
      <h2>SIWES</h2>
      <header>TMD PERSONAL RECORD FORM</header>

      <form action="signuphandler.php">
        <!-- <div class="form first"> -->
        <div class="details personal">
          <span class="title">Personal Details</span>

          <div class="fields">
            <div class="input">
              <span>ANY MEDICAL CHALLENGE</span>
              <label for="chkYes">
                <input
                  type="radio"
                  id="chkYes"
                  name="any-medical-challenge"
                  value="yes"
                  onclick="ShowHideDiv()"
                />YES
              </label>
              <label for="chkNo">
                <input
                  type="radio"
                  id="chkNo"
                  name="any-medical-challenge"
                  value="no"
                  onclick="ShowHideDiv()"
                />NO
              </label>
              <div id="dvPassport" style="display: none">
                <h4>IF YES,INDICATE:</h4>
                <textarea
                  
                  placeholder="indicate"
                  id="text"
                  cols="80"
                  rows="4"
                  name="medicalConditionIfYes"
                ></textarea>
              </div>
            </div>
          </div>
          <div class="input-field">
            <label>ADDRESS OF SCHOOL</label>
            <input
              type="text"
              placeholder="Address of school"
              name="schoolAddress"
              
            />
          </div>
          <!-- <div class="input">
            <label> UNIVERSITY</label>
            <div class="input-field">
              <label>NAME & ADDRESS OF INSTITUTION </label>
              <input type="text" />
            </div>
          </div> -->
          <div class="input-field">
            <label>LEVEL</label>
            <select name="level">
              <option disabled selected>Select Level</option>
              <option value="100">100 LEVEL/YEAR 1</option>
              <option value="200">200 LEVEL/YEAR 2</option>
              <option value="300">300 LEVEL/YEAR 3</option>
              <option value="400">400 LEVEL/YEAR 4</option>
              <option value="500">500 LEVEL/YEAR 5</option>
              <option value="600">600 LEVEL/YEAR 6</option>
            </select>
          </div>
          <div class="input-field">
            <label>COURSE OF STUDY</label>
            <select name="course">
              <option disabled selected>Select Course</option>
              <option>Accounting</option>
              <option value="Mathematics">Mathematics</option>
              <option value="Engineering">Engineering</option>
              <option value="Public & Business Admin">Public and Business Admin</option>
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Agric Engineering">Agric Engineering</option>
              <option value="Information Technology">Information Technology</option>
              <option value="Computer Science">Computer Science</option>
              <option value="Information & Library Technology">Information and Library Technology</option>
              <option value="Physics">Physics</option>
              <option value="Environmental Management">Environmental Management</option>
              <option value="Chemical Engineering">Chemical Engineering</option>
              <option value="Economics">Economics</option>
              <option value="Electrical Engineering">Electrical Engineering</option>
              <option>Others</option>
            </select>
          </div>
          <div class="input-field">
            <label>DEPT.POSTED</label>
            <input
              type="text"
              placeholder="Department posted"
              name="departmentPosted"
    
            />
          </div>
          <div class="input-field">
            <label>DURATION</label>
            <select name="duration">
              <option disabled selected>Select Duration</option>
              <option value="2 weeks">2 weeks</option>
              <option value="4 weeks">4 weeks</option>
              <option value="6 weeks">6 weeks</option>
              <option value="8 weeks">8 weeks</option>
              <option value="10 weeks">10 weeks</option>
              <option value="12 weeks">12 weeks</option>
              <option value="14 weeks">14 weeks</option>
              <option value="16 weeks">16 weeks</option>
              <option value="18 weeks">18 weeks</option>
              <option value="20 weeks">20 weeks</option>
              <option value="22 weeks">22 weeks</option>
              <option value="24 weeks">24 weeks</option>
            </select>
          </div>

          

          <button class="submit" type="submit" name="form-final-part" value="sign-up" >
            <span class="btnText">Submit</span>
            <i class="uil uil-navigator"></i>
          </button>

          <!-- <div class="input-field button">
          <input type="button" value="Submit" />
        </div> -->
          <!-- <button onclick="window.location.href = 'form.html';">Back</button> -->
          <a class="back" href="form.php">Back</a>

          <!-- <div class="input-field button">
          <a class="back" href="form.html"><input type="button" value="Back" /></a>
        </div> -->
        </div>
      </form>
    </div>

    <script src="form.js"></script>
  </body>
</html>
