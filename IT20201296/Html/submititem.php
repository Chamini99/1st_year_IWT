<?php
	include_once '../../Database.php';
?>

<?php
	
	$busNO= $_POST["bno"];
	$routeNO=$_POST["rno"];
	$sPoint=$_POST["spoint"];
	$destination=$_POST["destination"];
	
	
	$sql  ="insert into bus details(Bus_ID,Bus_No,Route_No,Start_point,Destination)values('','$busNO','$routeNO','$sPoint','$destination')";

	if(mysqli_query($conn,$sql)){
		header("Location:Administration page.php");
	}
	else{
		echo"<script>alert('Error in insertion records')</script>";
	}

	mysqli_close($conn);

?>
