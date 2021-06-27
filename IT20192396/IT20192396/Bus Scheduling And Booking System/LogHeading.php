
<table style="width: 100%">
    <tr>
        <td>
            <img src="Images/buslogo.png">
        </td>
        <td style="">
            <h4 style="">Email : clickbus@bus.com</h4><br><br>
            <h4 style="margin-top:-20px;">Call : +94 11 2750 979</h4>
        </td>
        <td>
    </tr>

</table>

<div class="topnav">



        <?php
        if (isset($_SESSION['uemail'])) {
            echo "'<a class='active' href='../../../Home.php'>Home</a>";
            echo "<div class='dropdown'>";
            echo " <button class='dropbtn'>Schedule<i class='fa fa-caret-down'></i>
                    </button>
                    <div class='dropdown-content'>
                     <a href='../../../IT20188818/route.php'>Route schedule</a>
                    <a href='../../../IT20188818/details.php'>Bus schedule</a>
              </div>
               </div>
               <a href='../../../IT20198886/BookTicket.php'>Book Ticket</a>
               <a href='../../../IT20198886/BookingDetails.php'>MY Bookings History</a>
                <a href='../../../IT20198572/BUS_contact_info.php'>Contact Us</a>
            
            <div style='margin-left: 1100px;margin-top: -20px;'>";
            echo "<a href='logout.php'><span class='glyphicon glyphicon-log-in'>Log out</a>";
        }
        else {
            echo "'<a class='active' href='../../../Home.php'>Home</a>";
            echo "<div class='dropdown'>";
             echo " <button class='dropbtn'>Schedule<i class='fa fa-caret-down'></i>
                    </button>
                    <div class='dropdown-content'>
                    <a href='../../../IT20188818/route.php'>Route schedule</a>
                    <a href='../../../IT20188818/details.php'>Bus schedule</a>
              </div>
               </div>
               <a href='Login.php'>MY Bookings</a>
                <a href='../../../IT20198572/BUS_contact_info.php'>Contact Us</a>
            
            <div style='margin-left: 1100px;margin-top:-15px;'>";
            echo "<a href='Register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a>";
            echo "<a href='Login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a>";
        }
        ?>
    </div>
</div>