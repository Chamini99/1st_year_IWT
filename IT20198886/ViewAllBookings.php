<?php
include_once("../Database.php");
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
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #cdcdcd
        }

        th {
            background-color: #3e3e3e;
            color: white;
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
    </tr>

</table>
<div class="topnav">
    <a class='active' href='../IT20201296/Html/Administration%20page.php'>Home</a>
    <div style="margin-left: 1100px;">

        <a href='../IT20192396/IT20192396/Bus%20Scheduling%20And%20Booking%20System/logout.php'><span class='glyphicon glyphicon-log-in'>Log out</a>

    </div>
</div>





<?php


$result = mysqli_query($conn,"SELECT * FROM bookticket");
?>


<br><br>
<center>
    <h1 style="color: #3e3e3e">View All Bookings</h1>
</center>
<br>
<table style="width: 100%;" >
    <tr align="left">
        <th>User ID</th>
        <th>Book ID</th>
        <th>Travel Date</th>
        <th>Travel Time</th>
        <th>Start Point</th>
        <th>End Point</th>
        <th>Bus No</th>
        <th>Quantity</th>
        <th>Price</th>
        <th style="color: #ff7500">DELETE</th>

    </tr>


    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {

        ?>
        <tr>
            <td><?php echo  $row["UserID"];?></td>
            <td><?php echo  $row["BookID"];?></td>
            <td><?php echo  $row["DateBook"];?></td>
            <td><?php echo  $row["TimeBook"];?></td>
            <td><?php echo $row["Startpoint"];?></td>
            <td><?php echo  $row["Endpoint"];?></td>
            <td><?php echo   $row["BusNumber"];?></td>
            <td><?php echo  $row["Quantity"];?></td>
            <td><?php echo   $row["Price"];?></td>
            <td><a href="DeleteBooking.php?BookID=<?php echo $row["BookID"]; ?>">Delete</a></td>
        </tr>
        <?php
        $i++;
    }


    ?>

























</table>




<br><br><br>










<div class="footer">
    <img src="Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>




</body>
