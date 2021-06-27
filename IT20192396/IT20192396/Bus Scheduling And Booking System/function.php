/*some code snippets were refered from youtube and edited*/
<?php

function emailExists($conn, $email){
	$sql = "SELECT * FROM details WHERE Email = '$email';";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: register.php?error=stmtfail");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "S", $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function createUser($conn, $first_name, $last_name, $email, $mobile_num, $dob, $gender, $pwd){
	$sql = "INSERT INTO details (First_name,Last_name,Email,Mobile_num,DOB,Gender,Upassword) VALUES ('$first_name', '$last_name', '$email', '$mobile_num', '$dob', '$gender', '$pwd');";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: register.php?error=stmtfail");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "sssssss", $first_name, $last_name, $email, $mobile_num, $dob, $gender, $pwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../../../Home.php?error=none");
	exit();

}

function loginUser($conn, $email, $pwd){

	if ($email != "" && $pwd != "") {
        $result = mysqli_query( $conn,"SELECT * FROM details WHERE Email = '$email' and Upassword = '$pwd'");
		$row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            session_start();
            $_SESSION["userID"] = $row['User_ID'];
            $_SESSION["uemail"] = $row['Email'];
            header("Location:../../../Home.php");

        } else {
            $message = "Invalid Username or Password!";
        }
    }




}