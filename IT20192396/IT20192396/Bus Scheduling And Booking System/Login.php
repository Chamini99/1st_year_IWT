<?php
    session_start();
?>

<?php
include_once("../../../Database.php");
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="script" href="js/homepage.js">
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
    <div class="form">
      <form action="log.php" method="POST">
        <div>
          <h1>Login</h1>
        </div>
        <div class="txt-box">
          <input type="email" id="emailAdd" name="emailAdd" placeholder="Email Address" pattern="[a-zA-Z0-9._]+@[a-z0-9]+\.[a-z]{2,3}" required>
        </div>
        <div class="txt-box">
          <input type="password" id="pwd" name="pwd" placeholder="Password" pattern="[a-zA-Z0-9]{8,12}" required>
        </div>
        <br>
        <div class="txt-box">
          <input type="submit" id="btn1" name="btn1" value="Login">
        </div>
        <br>
        <div class="signup">Don't have an account? <a href="Register.php">Sign Up</a>
            <br><br>
            <a style="color: #ecda00" href="../../../IT20201296/Html/admin%20login.php">Admin Login Here</a>
        </div>

      </form>
    </div>

  </div>

<?php
  if (isset($_GET["error"])){
    if ($_GET["error"] == "wrongLogin") {
      echo "<script> alert ('Email Address or Password Incorrect')</script>";
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