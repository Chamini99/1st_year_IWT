<?php
	include_once '../Database.php';
?>

<?php

	
	$spoint= $_POST["spoint"];
	$epoint= $_POST["epoint"];
	$sdate= $_POST["sdate"];
	$stime= $_POST["stime"];
	$route_number= $_POST["route_number"];
	$price= $_POST["price"];



	$qery = "DELETE FROM view_shedule where sdate='sdate'";

	$record = mysqli_query($con,$qery);

	if($record){
		echo mysqli_affected_rows($con)."Record deleted";
	}else{
		echo "Delete failed";
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Delete query</title>
</head>
<body>

</body>
</html>

<?php mysqli_close($con); ?>