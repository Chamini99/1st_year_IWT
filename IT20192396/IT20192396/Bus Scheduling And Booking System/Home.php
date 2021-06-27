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

<table>
    <tr>
        <td>
            <img src="Images/buslogo.png">
        </td>
        <td>
            <h4 style="padding-left:210px;">Email : clickbus@bus.com</h4><br><br>
            <h4 style="padding-left:210px;margin-top:-20px;">Call : +94 11 2750 979</h4>
        </td>
        <td>
            <input type="text" id="search" name="fname" placeholder="Search Here"><br>
    </tr>

</table>

    <div class="topnav">
    <a class="active" href="#">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Schedule
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="#">Route schedule</a>
            <a href="#">Bus schedule</a>

        </div>
    </div>
    <a href="#booking">MY Bookings</a>
    <a href="#contact">Contact Us</a>
    <div style="margin-left: 1100px;">
        <?php  
            if (isset($_SESSION['uemail'])) {
                echo "<a href='logout.php'><span class='glyphicon glyphicon-log-in'>Log out</a>";
            }
            else {
                echo "<a href='Register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a>";
                echo "<a href='Login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a>";
            }
        ?>
    </div>
</div>

<div class="" style="max-width:100%;">
    <img class="mySlides" src="Images/1.jpg" style="width:100%">
    <img class="mySlides" src="Images/22.jpg" style="width:100%">
    <img class="mySlides" src="Images/33.jpg" style="width:100%">
</div>
<center>
    <h2><b>Welcome to ClickBus.com online booking services!</b></h2>
    <h4><b>Your online portal to reserve Sri Lanka Transport Board passenger transit services, for highway across Sri Lanka.</b></h4>
    <h5 style="margin-left:50px;margin-right:50px;">Want your public transportation and online bus ticket booking issues sorted? We at SLTB EXPRESS will attend to all your online bus seat reservations, booking requirements and make sure that you have a safe and a comfortable journey. A unique platform of online bus booking Sri Lanka has to offer, we have made it easy for you to reserve your seats to avoid hassle and inconveniences, reach your destination with the comfort that you deserve. Happy Journeys!</h5>


    <div  style="border: 2px solid #494847;width:500px;">
        <h2 >Book Your Ticket From Here</h2>
        <button class="homebook"><b>Book Ticket</b></button>
        <br><br>
    </div>
    <br>
    
<?php
  if (isset($_GET["error"])){
    if ($_GET["error"] == "none") {
      echo "<script> alert ('Registration Successful')</script>";
    }
  }
?>


<br><br><br>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>

<br><br>

<div class="footer">
    <img src="Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>




</body>
</html>


