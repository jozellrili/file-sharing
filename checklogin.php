<?php
ob_start();
session_start();
//include db connection
include('./database/db_connection.php');
include('test_input.php');

$sql="SELECT * FROM sec_users WHERE username='$username' and password='$password'";
$result=mysqli_query($con, $sql);
// check record if exist
//$row = mysqli_num_rows($result);
//fetch array value
$row=mysqli_fetch_array($result,MYSQLI_NUM);
// If result matched $username and $password
if($row) {
	// Register $username, $password and redirect to file "login_success.php"
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
	$_SESSION["name"] = $name;
	header("location:home.php");
}
else {
	echo '<script type="text/javascript">alert("Wrong Username or Password");</script>';
}
?>