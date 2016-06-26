<?php
include('./database/db_connection.php');
include('test_input.php');

if(isset($_POST['btn-signup'])) {

	if($password != $_POST['cpassword']) {
		echo '<script type="text/javascript">alert("Passwords do not match!");</script>';
		echo "<meta http-equiv='refresh' content='0;url=registration-form.php'>";
	}
	if (empty($username) && empty($password)) {
		echo '<script type="text/javascript">alert("Fill all the required fields");</script>';
		echo "<meta http-equiv='refresh' content='0;url=registration-form.php'>";
	}
	else {
		mysqli_query($con, "INSERT INTO sec_users (name, username, password) VALUES ('$name', $username', '$password')");
		echo '<script type="text/javascript">alert("Registration Successful!");</script>';
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";

	}
}
?>