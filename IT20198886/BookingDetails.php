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


        .bstyle{
            background-image:url('Images/sum.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position:center;

        }

    </style>
</head>
<body>
<?php include('TicketHeading.php');?>


<div class="bstyle" >

<?php

$uid=$_SESSION['userID'] ;
$result = mysqli_query($conn,"SELECT * FROM bookticket where UserID='$uid'");
?>


<br><br>
<center>
    <h1 style="color: #3e3e3e">My Bookings</h1>
</center>
<br>
<table style="width: 100%;" >
    <tr align="left">
        <th>Book ID</th>
        <th>Travel Date</th>
        <th>Travel Time</th>
        <th>Start Point</th>
        <th>End Point</th>
        <th>Bus No</th>
        <th>Quantity</th>
        <th>Price</th>
        <th style="color: #fae200">Update</th>

    </tr>


    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {

        ?>
        <tr>
            <td><?php echo  $row["BookID"];?></td>
            <td><?php echo  $row["DateBook"];?></td>
            <td><?php echo  $row["TimeBook"];?></td>
            <td><?php echo $row["Startpoint"];?></td>
            <td><?php echo  $row["Endpoint"];?></td>
            <td><?php echo   $row["BusNumber"];?></td>
            <td><?php echo  $row["Quantity"];?></td>
            <td><?php echo   $row["Price"];?></td>
            <td><a href="UpdateBooking.php?BookID=<?php echo $row["BookID"]; ?>">Update</a></td>
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
