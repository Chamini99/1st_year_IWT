<?php
include_once("../Database.php");
?>


<?php




// Escape user inputs for security
$uid = mysqli_real_escape_string($conn, $_REQUEST['uid']);
$date = mysqli_real_escape_string($conn, $_REQUEST['date']);
$time = mysqli_real_escape_string($conn, $_REQUEST['time']);
$startpoint = mysqli_real_escape_string($conn, $_REQUEST['startpoint']);
$endpoint = mysqli_real_escape_string($conn, $_REQUEST['endpoint']);
$busno = mysqli_real_escape_string($conn, $_REQUEST['busno']);
$qty = mysqli_real_escape_string($conn, $_REQUEST['qty']);
$total = mysqli_real_escape_string($conn, $_REQUEST['total']);
$cardnumber = mysqli_real_escape_string($conn, $_REQUEST['cardnumber']);
$payid = mysqli_real_escape_string($conn, $_REQUEST['payid']);


function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}





// Attempt insert query execution
$sql = "INSERT INTO bookticket (UserID, DateBook, TimeBook,Startpoint,Endpoint,BusNumber,Quantity,Price,CreditCardNo,PayID) VALUES ('$uid', '$date', '$time', '$startpoint', '$endpoint', '$busno', '$qty', '$total', '$cardnumber', '$payid')";
if(mysqli_query($conn, $sql)){
    phpAlert("Your Booking added successfully");
    header("Location: ../Home.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>