<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>ClickBus.lk</title>
    <link rel = "icon" href ="Images/buslogo.png" type = "image/x-icon">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="script" href="js/homepage.js">
    <link rel="script" href="js/table.js">
<style>
    .topnav {
    overflow: hidden;
    background-color: #333;
    }

    .bckg{
    	background-color: grey;
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
    </tr>

</table>
<div class="topnav">

    <div style="margin-left: 1100px;">

        <a href='../IT20192396/IT20192396/Bus%20Scheduling%20And%20Booking%20System/logout.php'><span class='glyphicon glyphicon-log-in'>Log out</a>

    </div>
</div>





<!------------------------body Part ------------------------------------------------------------------------------------>
<br>
<div class="bckg">
<form class="frm" method="post" action="submitAddDetails.php">
	<fieldset>
		<legend>Add_details_To DB</legend><br><br>

		<label id="sdate" name="sdate">Enter Date</label>
		<input type="date" name="sdate"><br><br>

		<label id="stime" name="stime">Enter Time</label>
		<input type="time" name="stime"><br><br>

		<label id="spoint" name="spoint">Enter Start Point</label>
		<input type="text" name="spoint"><br><br>

		<label id="epoint" name="epoint">Enter End Point</label>
		<input type="text" name="epoint"><br><br>

		<label id="route_number" name="route_number">Enter Route number</label>
		<input type="text" name="route_number"><br><br>

		<label id="price" name="price">Price</label>
		<input type="text" name="price"><br><br>



		<input type="submit" name="submit">

</fieldset>
	</form>

</div>
	<br><br><br>

<div class="bckg">

	<form class="frm" method="post" action="submitDeleteDetails.php">
	<fieldset>
		<legend>Delete_details_from DB</legend><br><br>

		<label id="sdate" name="sdate">Delete date</label>
		<input type="text" name="sdate"><br><br>

		<label id="stime" name="stime">Delete Time</label>
		<input type="text" name="stime"><br><br>

		<label id="spoint" name="spoint">Delete Start Point</label>
		<input type="text" name="spoint"><br><br>

		<label id="epoint" name="epoint">Delete End Point</label>
		<input type="text" name="epoint"><br><br>

		<label id="route_number" name="route_number">Delete Route number</label>
		<input type="text" name="route_number"><br><br>

		<label id="price" name="price">Delete Price</label>
		<input type="text" name="price"><br><br>



		<input type="submit" name="submit">


	</fieldset>

</div>
</form>

<hr>
<!------------------------------footer------------------------------------>

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
