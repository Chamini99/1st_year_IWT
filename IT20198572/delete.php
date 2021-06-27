<?php
	include_once '../Database.php';

	$query = "delete from messages where message_id = '$_GET[id]'";
	
	if (mysqli_query($conn, $query))
	{
			echo "<script> alert('Record deleted successfully!'') </script>";
        header("Location: BUS_view_messages.php");

    }
	else
	{
		echo "<script> alert('unable to delete!'') </script>";

    }
	


