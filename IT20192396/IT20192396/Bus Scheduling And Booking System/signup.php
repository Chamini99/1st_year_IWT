<?php

if(isset($_POST["btn2"])){

	$first_name = $_POST["fname"];
	$last_name = $_POST["lname"];
	$email = $_POST["emailAdd"];
	$mobile_num = $_POST["mobile"];
	$dob = $_POST["dob"];
	$gender = $_POST["gender"];
	$pwd = $_POST["pwd"];
	$confirm_pwd = $_POST["rpwd"];

	require_once '../../../Database.php';
	require_once 'function.php';

	if (emailExists($conn, $email) !== false){
		header("location: register.php?error=emailExists");
		exit();
	}

	createUser($conn, $first_name, $last_name, $email, $mobile_num, $dob, $gender, $pwd);

}
else{
	header("location: register.php");
	exit();
}

?>