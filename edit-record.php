<?php
include('./database/db_connection.php');


	$username = $_GET['old-username'];
	$new_name = $_GET['name'];
	$new_username = $_GET['username'];

	$sql = "UPDATE `sec_users` SET name ='$new_name', username = '$new_username' WHERE username= '$username' ";

	if ($con->query($sql) === TRUE) {
		echo '<script type="text/javascript">alert("Record updated successfully");</script>';
		echo "<meta http-equiv='refresh' content='0;url=members.php'>";
		
	} else {
		echo '<script type="text/javascript">alert("Error updating record");</script>';
		echo "<meta http-equiv='refresh' content='0;url=members.php'>";
	}

?>