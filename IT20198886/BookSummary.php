<?php
include_once("../Database.php");

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>ClickBus.lk</title>
    <link rel="icon" href="Images/buslogo.png" type="image/x-icon">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="script" href="js/homepage.js">


    <script language="javascript" type="text/javascript" src="homepage.js"></script>
    <style>


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

<br>
<?php



$Date = $_GET['Date'];
$Time = $_GET['Time'];
$Startpoint = $_GET['Startpoint'];
$Endpoint = $_GET['Endpoint'];
$qty = $_GET['qty'];

$sql = "SELECT route_num FROM view_shedule where start_point ='$Startpoint' AND end_point='$Endpoint'";
$result = $conn->query($sql);


$sql2 = "SELECT price FROM view_shedule where start_point ='$Startpoint' AND end_point='$Endpoint'";
$result2 = $conn->query($sql2);


?>


<div style="background-image: url(   );">
    <h2 style="margin-left: 500px">Your Booking Summary</h2>

    <br><br><br>
    <table style="width:750px;height: 100px;margin-left: 300px;">
        <tr>
            <th>User ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>From</th>
            <th>To</th>
            <th>Bus No</th>
            <th>QTY</th>
            <th>Price</th>
        </tr>
        <tr>
            <td id="UID">
                <?php


                echo $_SESSION['userID'] ; ?>
            </td>
            <td name="date">
                <?php echo $Date ?>

            </td>
            <td>
                <?php echo $Time ?>

            </td>
            <td>
                <?php echo $Startpoint ?>

            </td>
            <td>
                <?php echo $Endpoint ?>

            </td>
            <?php
$busno=0;
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row1 = $result->fetch_assoc()) {
                    $busno = $row1["route_num"];
                    echo "<td>" . $busno . "</td>";

                }
            } else {
                echo "<td>0 results</td>";
            }

            ?>


            <td>
                <?php echo $qty ?>

            </td>
            <?php
            $total=0;
            if ($result2->num_rows > 0) {
                // output data of each row
                while ($row2 = $result2->fetch_assoc()) {
                    $price = $row2["price"];
                    $total = $qty * $price;
                    echo "<td>" . $total . "</td>";
                }
            } else {
                echo "<td>0 results</td>";
            }

            ?>

        </tr>


    </table>


    <form method="get" action="BookingPayment.php">
        <input type="hidden" name="uid" value="<?php echo $_SESSION['userID'] ; ?>">
        <input type="hidden" name="date" value="<?php echo $Date; ?>">
        <input type="hidden" name="time" value="<?php echo $Time; ?>">
        <input type="hidden" name="startpoint" value="<?php echo $Startpoint; ?>">
        <input type="hidden" name="endpoint" value="<?php echo $Endpoint; ?>">
        <input type="hidden" name="busno" value="<?php echo $busno; ?>">
        <input type="hidden" name="qty" value="<?php echo $qty; ?>">
        <input type="hidden" name="total" value="<?php echo $total; ?>">

        <br><br>
        <input type="submit" class="btn" value="Continue your travel">


        <br><br>

</div>
</form>
    <br><br><br><br>
</div>
<div class="footer" style="margin-top: -20px;">
    <img src="Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>

</body>
