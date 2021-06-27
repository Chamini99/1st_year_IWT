<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>ClickBus.lk</title>
    <link rel = "icon" href ="Images/buslogo.png" type = "image/x-icon">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="script" href="js/homepage.js">
    <script src="js/register.js"></script>
<style>
    .topnav {
    overflow: hidden;
    background-color: #333;
    }

    .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 24px 22px;
    text-decoration: none;
    font-size: 16px;
    }

    .topnav a:hover {
    background-color: #ddd;
    color: black;
    }

    .topnav a.active {
    background-color: #e9ce00;
    color: black;
    }

    .topnav-right {
    float: right;
    }
    .dropdown {
    float: left;
    overflow: hidden;
    }

    /* Dropdown button */
    .dropdown .dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 26px 23px;
    background-color: inherit;
    font-family: inherit; /* Important for vertical align on mobile phones */
    margin: 0; /* Important for vertical align on mobile phones */
    }

    /* Add a red background color to navbar links on hover */
    .navbar a:hover, .dropdown:hover .dropbtn {
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
    float: none;
    color: black;
    padding: 25px 23px;
    text-decoration: none;
    display: block;
    text-align: left;
    }

    /* Add a grey background color to dropdown links on hover */
    .dropdown-content a:hover {
    background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
    display: block;
    }
    </style>
</head>
<body>
<?php include('LogHeading.php');?>


<section> 
<div class="bgrd"> 
  <div class="container">
        <div class="form">
          <h1 class="">User Registration</h1>
          <form action="signup.php" method="POST" onsubmit="return checkPassword()">
              <div class="alignl">
              <label>First Name</label>
              </div>
              <div class="txt-box alignl"  style="margin-top: 32px;margin-left: -72px;">
                <input type="text" id="fname" name="fname" placeholder="First Name" required>
              </div>
              <div class="alignr" style="margin-right: 190px">
              <label>Last Name</label>
              </div>
              <div class="txt-box alignr" style="margin-top: 15px;">
                <input type="text" id="lname" name="lname" placeholder="Last Name" required>
              </div>
              <div class="alignl">
              <label>Email Address</label>
              </div>
              <div class="txt-box alignl"  style="margin-top: 32px;margin-left: -95px;">
                <input type="email" id="emailAdd" name="emailAdd" pattern="[a-zA-Z0-9._]+@[a-z0-9]+\.[a-z]{2,3}" placeholder="Email Address" required>
              </div>
              <div class="alignr" style="margin-right: 160px">
              <label>Mobile Number</label>
              </div>
              <div class="txt-box alignr" style="margin-top: 15px;">
                <input type="text" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="Mobile Number" required>
              </div>
              <div class="alignl">
                <label>Date of Birth</label>
              </div>
              <div class="alignl" style="margin-top: 32px;margin-left: -82px;">
                <input type="date" id="dob" name="dob" class="box" required>
              </div>
              <div class="alignr" style="margin-right: 210px">
                <label>Gender</label><br>
              </div>
              <div class="alignr txt-box" style="margin-top: 15px;">
                <input type="text" id="gender" name="gender" placeholder="Male or Female" required>
              </div>
              <div class="alignl">
                <label>Password</label><br>
              </div>
              <div class="txt-box alignl" style="margin-top: 32px;margin-left: -65px;">
                <input type="password" id="pwd" name="pwd" pattern="[a-zA-Z0-9]{5,12}" placeholder="Password" required>
              </div>
              <div class="alignr" style="margin-right: 140px">
                <label>Confirm Password</label><br>
              </div>
              <div class="alignr txt-box" style="margin-top: 15px;">
                <input type="password" id="rpwd" name="rpwd" pattern="[a-zA-Z0-9]{5,12}" placeholder="Confirm Password" required>
              </div>
              <div class="alignl">
                <input type="checkbox" id="policy" name="policy" onclick="enableButton()" required>
                <label>Accept privacy policy and terms</label>
              </div>
              <div class="txt-box sub">
              <input type="submit" id="btn2" name="btn2" value="Register" disabled>
              </div>
          </form>
        </div>   
  </div>
</div>
<?php
  if (isset($_GET["error"])){
    if ($_GET["error"] == "emailExists") {
      echo "<script> alert ('Registration Failed. Email address already exists')</script>";
    }
  }
?>
</section>


<div class="footer">
    <img src="Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>

</body>
</html>