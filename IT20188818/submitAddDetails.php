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


	$query = "INSERT INTO view_shedule(start_point,end_point,sdate,stime,route_num,price) VALUES('$spoint','$epoint','$sdate','$stime','$route_number','$price')";

	$result = mysqli_query($conn,$query);

	if($result){
		echo "<br>"."Record added";
		header('location:../IT20201296/Html/Administration page.php');

	}else{
		echo "<br>" ."Record adding is failed";
	}



?>