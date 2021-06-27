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

<?php include('ContactHeading.php');?>


<br><br><br>
<center>
    <div class="form-style-3">
        <form method="post" action="submitMessage.php">
            <fieldset><legend>Personal</legend>
                <label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
                <label for="field2"><span>Email <span class="required">*</span></span><input type="email" class="input-field" name="field2" value="" /></label>
                <label for="field3"><span>Phone <span class="required">*</span></span><input type="text" class="input-field" name="field3" value="" /></label>
                <label for="field4"><span>Subject</span><select name="field4" class="select-field">
                        <option value="Appointment">Inquiry</option>
                        <option value="Interview">Report a bug</option>
                        <option value="Regarding a post">Feedback</option>
                    </select></label>
            </fieldset>
            <fieldset><legend>Message</legend>
                <label for="field6"><span>Message <span class="required">*</span></span><textarea name="field6" class="textarea-field"></textarea></label>
                <label><span> </span><input type="submit" value="Submit" /></label>
            </fieldset>
        </form>
    </div>
</center>
<br><br><br>


<div class="footer">
    <img src="Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>

</body>
</html>