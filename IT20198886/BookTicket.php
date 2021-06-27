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


    <script language="javascript" type="text/javascript" src="homeoage.js"></script>

    <style>


        .bstyle{
            background-image:url('Images/book.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position:center;

        }

    </style>

</head>
<body>
<?php include('TicketHeading.php'); ?>

<div class="bstyle" >
<br>
<center>
    <h1 style="color: #292929">Book Your Ticket</h1>
</center>
    <br>
<script>
    function checkPoint() {
        if (document.getElementById("Startpoint").value == document.getElementById("Endpoint").value) {
            alert("You cannot add same start and end point.");
            return false;
        } else {


            var date = document.getElementById("EnterDate").value;
            var varDate = new Date(date); //dd-mm-YYYY
            var today = new Date();

            if (varDate >= today) {
                //Do something..

                var qty = document.getElementById("qty").value;
                if (qty > 0) {
                    return true;
                } else {
                    alert("You Cannot Add Negative Numbers To The Quantity");
                    return false;

                }


            } else {
                alert("You Cannot Book Previous Dates");
                return false;
            }

        }


    }


</script>


<form method="get" action="BookSummary.php" onsubmit="return checkPoint()">
    <table style="margin-left: 520px;width: 400px;height: 250px;">
        <tr>
            <td><label><b>Date</b></label></td>
            <td><input type="date" id="EnterDate" required name="Date"
                       style="width: 155px;height: 30px;border-radius: 5px;"></td>
        </tr>

        <tr>
            <td><label><b>Time</b</label></td>
            <td><input type="Time" id="EnterTime" required name="Time"
                       style="width: 155px;height: 30px;border-radius: 5px;"></td>
        </tr>

        <tr>
            <td><label><b>Start point</b</label></td>
            <td><select id="Startpoint" name="Startpoint" required
                        style="width: 160px;height: 30px;border-radius: 5px;">
                    <option>Matara</option>
                    <option>kaduwela</option>
                    <option>kottawa</option>
                    <option>Maharagama</option>
                    <option>Galle</option>
                    <option>kadawatha</option>

                </select></td>
        </tr>
        <tr>
            <td><label><b>End point</b</label></td>
            <td><select id="Endpoint" name="Endpoint" required style="width: 160px;height: 30px;border-radius: 5px;">
                    <option>Matara</option>
                    <option>kaduwela</option>
                    <option>kottawa</option>
                    <option>Maharagama</option>
                    <option>Galle</option>
                    <option>kadawatha</option>


                </select></td>
        </tr>
        <tr>
            <td><label><b>Number of Tickets</b</label></td>
            <td><input type="number" id="qty" required name="qty" style="width: 155px;height: 30px;border-radius: 5px;">
            </td>
        </tr>
    </table>


    <br><br><br>
    <input type="submit" class="btn" value="Continue">
</form>


<br><br><br>

</div>
<div class="footer" style="margin-top: -20px">
    <img src="Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>


</body>
