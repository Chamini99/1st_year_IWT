<?php require('../Database.php') ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>ClickBus.lk</title>
    <link rel = "icon" href ="Images/buslogo.png" type = "image/x-icon">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/details.css">
    <link rel="script" href="js/homepage.js">
    <script src="js/details.js"></script>
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
<?php include('ScheduleHeading.php');?>

 

<!-------------------------------------Body part----------------------------------------------->
<div class="bg">
  <br>
<h2 class="font">Enter your details here...</h2></p>


<br><br><br>


<div class="layout">
<form action="submitAddDetails.php" method="post" onsubmit="return checkPoint()">
  
  <label for="date" class="font">Enter date:</label><br>
  <input type="date" id="date" name="date" required>
<br><br>
  

  <label for="time" class="font">Enter time:</label><br>
  <input type="time" id="time" name="time" required>
  <br><br>


  <label for="spoint" class="font">Enter your start point</label><br>
    <select id="spoint" name="spoint" required>
      <option value="kottawa">kottawa</option>
      <option value="kaduwela">kaduwela</option>
      <option value="matara">Matara</option>
      <option value="kadawatha">kadawatha</option>
        <option value="kadawatha">Galle</option>
        <option value="kadawatha">Maharagama</option>

    </select>
<br><br>

<img class="image" src="Images/map1.jpg">

    <label for="epoint" class="font">Enter your end point</label><br>
    <select id="epoint" name="epoint" required>
        <option value="kottawa">kottawa</option>
        <option value="kaduwela">kaduwela</option>
        <option value="matara">Matara</option>
        <option value="kadawatha">kadawatha</option>
        <option value="kadawatha">Galle</option>
        <option value="kadawatha">Maharagama</option>
    </select>
<br><br>


 <button type="submit" id="submit" class="submit" color="white">View shedule</button>
 <button type="reset" id="reset" class="reset">Reset</button>
 
</form>
<!--link to ggole map-->
<a class="link" href="https://www.google.lk/maps/@6.8878336,79.8851072,13z?hl=en">View google map</a>
  <br><br>
</div>

</div>



<!---------------------------------------------------------------------------------------------------------------------->
<!--footer-->
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


<div class="footer" style="margin-top: -20px;">
    <img src="Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>




</body>
</html>

