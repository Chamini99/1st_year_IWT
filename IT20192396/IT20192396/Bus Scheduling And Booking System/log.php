<?php

	if (isset($_POST["btn1"])){

		$email 	= $_POST["emailAdd"];
		$pwd 	= $_POST["pwd"];

		require_once '../../../Database.php';
		require_once 'function.php';

		loginUser($conn, $email, $pwd);
	}
	else{
		header("location: Login.php");
		exit();
	}

?>