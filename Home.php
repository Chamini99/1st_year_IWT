<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>ClickBus.lk</title>
    <link rel = "icon" href ="IT20198886/Images/buslogo.png" type = "image/x-icon">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="IT20198886/css/style.css">
    <link rel="script" href="IT20198886/js/homepage.js">

</head>
<body>

<?php include('HomeHeading.php');?>




<div class="" style="max-width:100%;">
    <img class="mySlides" src="IT20198886/Images/1.jpg" style="width:100%">
    <img class="mySlides" src="IT20198886/Images/22.jpg" style="width:100%">
    <img class="mySlides" src="IT20198886/Images/33.jpg" style="width:100%">
</div>
<center>
    <h1 style="color: #3e3e3e"><b>Welcome to ClickBus.com online booking services!</b></h1>
    <h3 style="color: #3e3e3e"><b>Your online portal to reserve Sri Lanka Transport Board passenger transit services, for highway across Sri Lanka.</b></h3>
    <h4 style="margin-left:50px;margin-right:50px;color: #3e3e3e"><b>Want your public transportation and online bus ticket booking issues sorted? We at SLTB EXPRESS will attend to all your online bus seat reservations, booking requirements and make sure that you have a safe and a comfortable journey. A unique platform of online bus booking Sri Lanka has to offer, we have made it easy for you to reserve your seats to avoid hassle and inconveniences, reach your destination with the comfort that you deserve. Happy Journeys!</h4>
<br>
    <br>
    <div  style="border: 2px solid #494847;width:500px;">
        <h2  style="color: #3e3e3e">You Can Contact With Us </h2>
        <button class="homebook" onclick="window.location='IT20198572/BUS_contact_info.php'"><b>Contact With Us</b></button>
        <br><br>
    </div>
    <br>



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
    <img src="IT20198886/Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>




</body>
</html>