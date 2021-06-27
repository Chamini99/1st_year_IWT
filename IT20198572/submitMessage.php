<?php
	include_once '../Database.php';
?>

<?php
	$name = $_POST["field1"];
	$email = $_POST["field2"];
	$phone = $_POST["field3"];
	$message = $_POST["field6"];

	//we need a query to send the data from the users into the database

	$sql = "insert into messages(sname,email,phone,message) values('$name','$email','$phone','$message')";
	//$sql variable holds a query string

	//next we have to execute the query

	if(mysqli_query($conn, $sql))
	{
		echo "<script> alert('Record inserted successfully!'') </script>";
		header("Location: ../Home.php");
	}
	else{
		echo "<script> alert('Error in insertion!') </script>";
	}
	
	//it will execute the query string by using the connection object and depending on whether the execution was successful or not, it will give an alert message


?>