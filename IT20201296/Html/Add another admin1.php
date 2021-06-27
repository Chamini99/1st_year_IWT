<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>ClickBus.lk</title>
    <link rel = "icon" href ="../Images/buslogo.png" type = "image/x-icon">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="script" href="../js/homepage.js">
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
	
	.bstyle{
	background-image:url('../images/admin2.jpg');
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
	background-position:center;
	
}



.homebook2{
background-color: #FFA600;
  border: none;
  color: black;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  width:500px;
  
}

.homebook2:hover {
  background-color: #494847; 
  color: #FFA600;
  text-decoration: none;
}

.homebook2:visited{
	text-decoration:none;
}



table {
  width:100%;
}
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}



input[type=text], input[type=password], input[type=tel], input[type=date] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  
}

input[type=text]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=date]:focus {
  background-color: #ddd;
  outline: none;
}

.container1 {
  padding: 10px;
  margin: 150px 400px;
}

	
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            <img src="../Images/buslogo.png">
        </td>
        <td>
            <h4 style="padding-left:210px;">Email : clickbus@bus.com</h4><br><br>
            <h4 style="padding-left:210px;margin-top:-20px;">Call : +94 11 2750 979</h4>
        </td>
        <td>
    </tr>

</table>
<div class="topnav">
    <a class='active' href='Administration%20page.php'>Home</a>
    <div style="margin-left: 1100px;">

        <a href='../../IT20192396/IT20192396/Bus%20Scheduling%20And%20Booking%20System/logout.php'><span class='glyphicon glyphicon-log-in'>Log out</a>

    </div>
</div>











<div class="bstyle">
  
<form action="" target="" method="" onsubmit="return checkPassword()">
<center>
<br><h1 style="font-family:Garamond; color:#FFA600; text-decoration: underline;"><b style="font-size:150%;">Add another admin</b></h1></center>




<div class="container1">
    <label style="color:lightgray; font-size:20px;" id="fname"><b>First name :</b></label>
    <input type="text" placeholder="Enter first name" name="fname" required>
	
	<label style="color:lightgray; font-size:20px;" id="lname"><b>Last name :</b></label>
    <input type="text" placeholder="Enter last name" name="lname" required>
	
	<label style="color:lightgray; font-size:20px;" id="DOB"><b>Date of birth : </b></label>
    <input type="date" name="DOB"
       value="2018-07-22"
       min="1800-01-01" max="2020-12-31">
	
	<label style="color:lightgray; font-size:20px;" id="email"><b>E-mail address :</b></label>
    <input type="email" placeholder="Enter e-mail" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}" required>
	<br><br>
	<label style="color:lightgray; font-size:20px;" id="cnumber"><b>Contact number :</b></label>
    <input type="tel" placeholder="Enter contact number" name="cnumber" pattern="[0-9]{10}" required>

    <label style="color:lightgray; font-size:20px;" for="psw"><b>Password :</b></label>
    <input type="password" placeholder="Enter Password" id="pswd" name="psw" pattern="[a-zA-Z0-9._%+-]{5,20}" required>

    <label style="color:lightgray; font-size:20px;" for="psw-enter"><b>Re-enter Password :</b></label>
    <input type="password" placeholder="Repeat Password" id="repswd" name="psw-enter" pattern="[a-zA-Z0-9._%+-]{5,20}" required>
	
	
	<script>
		function checkPassword(){
			if(document.getElementsById("pswd").value != document.getElementsById("repswd").value)
				{alert("Passwords are mismatched!!");
				return fales;
				}
			else{
				alert("Passwords matched!!");
				return true;
			}	
		}
		
	
	
	</script>
	
	
	<center><div><b><input class="homebook2" name="submit" type="submit" value="Submit"></b></div>
	                <input class="homebook2" name="reset" type="reset" value="Reset details">
	</center>
  </div>
</form>



/*js part*/
<script>
function myfuncton1(){
	
	alert("You are leaving this page!!!")
	
}
</script>

 <a href="Administration page.php"><button onclick="myfuncton1()" class="homebook2"><b>< Back to Administration page</b></button> </a>



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

    <img src="../Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>




</body>
</html>