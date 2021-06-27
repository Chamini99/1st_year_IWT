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


if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE bookticket set DateBook='" . $_POST['Date'] . "' ,TimeBook='" . $_POST['Time'] . "' WHERE BookID='" . $_POST['BookID'] . "'");
    $message = "Record Modified Successfully";
    header("Location: BookingDetails.php");

}
$result = mysqli_query($conn,"SELECT * FROM bookticket WHERE BookID='" . $_GET['BookID'] . "'");
$row= mysqli_fetch_array($result);
?>
    <center>
<h2 >Update My Bookings</h2>
    </center>


<form name="frmUser" method="post" action="">
    <table style="margin-left: 600px;width: 400px;height: 100px;">
        <tr>
            <td><label>Date</label></td>
            <td>    <input type="date" name="Date" class="txtField" value="<?php echo $row['DateBook']; ?>"style="width: 160px;height: 30px;border-radius: 5px;">
            </td>
        </tr>

        <tr>
            <td> <label>Time</label></td>
            <td>     <input type="time" name="Time" class="txtField" value="<?php echo $row['TimeBook']; ?>"style="width: 160px;height: 30px;border-radius: 5px;">
            </td>
        </tr>
        <tr>
            <td>    <input type="hidden" name="BookID" class="txtField" value="<?php echo $row['BookID']; ?>"></td>
            <td>    <input type="hidden" name="BookID"  value="<?php echo $row['BookID']; ?>" style="width: 160px;height: 30px;border-radius: 5px;"></td>
        </tr>
    </table>


<br>
    <input type="submit" class="btn"value="Continue" style="margin-left:650px; ">
</form>

    <br><br><br><br><br><br>

</div>

<div class="footer" style="margin-top: -20px;">
    <img src="Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>


































</body>
