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
    <link rel="stylesheet" href="css/route.css">
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
<?php include('ScheduleHeading.php');?>

<!-------------------------------------------------------------------------------------------------------------->  
<div class="bgr">
<center>
  <h2 class="top">Welcome to Route Details Page</h2>
  <br><br>

<table id="table2" name="table2" style="width:70%">
  <tr>
    <th>Bus ID</th>
    <th>Start point</th> 
    <th>End point</th>
    <th>Date</th>
    <th>Time</th>
      <th>Bus No</th>
    <th>Price</th>
  </tr>
  
<?php

    $qry = "SELECT * FROM view_shedule";
    $result= $conn->query($qry);

    if ($result->num_rows>0) {

       while ($row=$result->fetch_assoc()) {
           echo"<tr><td>".$row["bus_id"]."</td><td>".$row["start_point"]."</td><td>".$row["end_point"]."</td><td>".$row["sdate"]."</td><td>".$row["stime"]."</td><td>".$row["route_num"]."</td><td>".$row["price"]."</td><tr>";
       }
    }else{
        echo "0 results in table";
    }

   echo"</table>";

   $conn->close();

?>



<br><br><br><br>
<button type="avl" id="avl" class="avl"><b><a href="details.php">View Availability</a></b></button>
</center>
</div>
<!-------------------------------------------------------------------------------------------------------------->
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