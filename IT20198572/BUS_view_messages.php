<?php
    include_once '../Database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>ClickBus.lk</title>
    <link rel = "icon" href ="Images/buslogo.png" type = "image/x-icon">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="BUS_css.css">
    <link rel="stylesheet" href="BUS_my_css.css">
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

<table>
    <tr>
        <td>
            <img src="images/buslogo.png">
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




<br> <br> <br>
<div>
    <table border="1" width=100%>
        <tr>
            <th class="col1"> Message ID </th>
            <th class="col2"> Name </th>
            <th class="col3"> Email </th>
            <th class="col4"> Phone </th>
            <th class="col5"> Message </th>
        </tr>

        <?php

        $sql = "select * from messages";

        $result = $conn->query($sql);

        if($result->num_rows>0)
        {
            while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row["message_id"]."</td><td>".$row["sname"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["message"]."</td><td><center><a href=delete.php?id=$row[message_id]>DELETE</a></td></tr>";
            }
        }
        else
        {
            echo "0 results";
        }
    echo "</table>";

    $conn->close();

        ?>
</div>





<div class="footer">
    <img src="images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>

</body>
</html>