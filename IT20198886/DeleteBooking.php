<?php
include_once("../Database.php");
$sql = "DELETE FROM bookticket WHERE BookID='" . $_GET["BookID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: ViewAllBookings.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>