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
	background-image:url('../images/bus3.jpg');
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
	background-position:center;
	
}



.homebook1{
background-color: #FFA600;
  border: none;
  color: black;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  width:50%;
  border-radius: 15px;
}

.homebook1:hover {
  background-color: #494847; 
  color: #FFA600;
  
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



.homebook2{
background-color: #FFA600;
  border: none;
  color: black;
  padding: 15px;
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
  

<center>
<h1 style="font-family:Garamond; color:#FFA600; text-decoration: underline;"><br><b style="font-size:150%;">Admin details</b></h1>




<table id="t01">
  <tr>
  
     <th>Admin ID</th>
	<th>First name</th>
	<th>Last name</th>
    <th>Contact number</th>
	<th>Email address</th>
	<th></th>
	

  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	<td>      <button><b>Delete</b></button> <br> </a></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	<td> <button><b>Delete</b></button> <br> </a></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	<td> <button><b>Delete</b></button> <br> </a></td>
  </tr>
</table>






</center>




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



<div class="footer">
    <img src="../Images/buslogo.png">
    <p>Design By 1st Year Students For IWT</p>
</div>




</body>
</html>