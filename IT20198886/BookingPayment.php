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


    <script>
        function show1() {
            document.getElementById('div123').style.display = 'none';
        }

        function show2() {
            document.getElementById('div123').style.display = 'block';
        }
    </script>

    <style>


        .bstyle {
            background-image: url('Images/book.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;

        }

    </style>
</head>
<body>
<?php include('TicketHeading.php'); ?>
<div class="bstyle"
">
<br>

<h2 style="margin-left:90px;">Pay with</h2>


<div class="radio_button">
    <input type="radio" name="tab" value="igotnone" onclick="show1();"/>
    <label><b>Paypal</b></label>
    <img src="images/paypal.png" alt="" width="50px" style="margin-left: 60px"><br>
    <br> <input type="radio" name="tab" value="igottwo" onclick="show2();"/>
    <label><b>Credit/Debit card</b></label>
    <img src="images/credit.png" alt="" width="50px">
</div>
<br>

<?php
$uid = $_SESSION['userID'];
$date = $_GET['date'];
$time = $_GET['time'];
$startpoint = $_GET['startpoint'];
$endpoint = $_GET['endpoint'];
$busno = $_GET['busno'];
$qty = $_GET['qty'];
$total = $_GET['total'];

?>

<script>
    function successmsg() {

        var date = document.getElementById("Date").value;
        var varDate = new Date(date); //dd-mm-YYYY
        var today = new Date();

        if (date == "") {
            alert("Successfully Booked.");
            return true;
        } else {


            if (varDate >= today) {
                alert("Successfully Booked.");
                return true;
            } else {
                alert("Your card is expired.");
                return false;

            }
        }

    }
</script>


<form action="InsertBooking.php" method="post" onsubmit="return successmsg()">

    <input type="hidden" name="uid" value="<?php echo $uid; ?>">
    <input type="hidden" name="date" value="<?php echo $date; ?>">
    <input type="hidden" name="time" value="<?php echo $time; ?>">
    <input type="hidden" name="startpoint" value="<?php echo $startpoint; ?>">
    <input type="hidden" name="endpoint" value="<?php echo $endpoint; ?>">
    <input type="hidden" name="busno" value="<?php echo $busno; ?>">
    <input type="hidden" name="qty" value="<?php echo $qty; ?>">
    <input type="hidden" name="total" value="<?php echo $total; ?>">


    <div id="div123" class="hide1">
        <h3>Pay with credit/debit card</h3>
        <br><br>
        <div class="lbl1">
            <label for="Card number"><b>Card Number</b></label><br>
            <input type="number" id="Cardnumber" name="cardnumber" maxlength="16"><br>
            <label for="Security number"><b>Security Number</b></label><br>
            <input type="number" id="Security number" name="Security Number" maxlength="3"><br>
        </div>
        <div class="lbl2">
            <label for="Date"><b>Expireation Date</b></label><br>
            <input type="Date" id="Date" name="Expireation Date" style="..">
        </div>
    </div>


    <h3> Pay with PayPal</h3>
    <div class="lbl1">

        <input type="text" id="payid" name="payid"><br>
    </div>
    <input type="submit" class="btn" value="Confirm & Pay">


    <br><br><br><br>
</form>
</div>
<div class="footer" style="margin-top: -20px;">
    <img src="Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>

</body>
