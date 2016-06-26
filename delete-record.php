<?php
include('./database/db_connection.php');

$username = $_GET['username'];

$sql = "DELETE FROM sec_users WHERE username= '$username' ";

if ($con->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Record Deleted Successfuly!");</script>';
	echo "<meta http-equiv='refresh' content='0;url=members.php'>";
} else {
    echo '<script type="text/javascript">alert("Error Deleting Record.");</script>';
	echo "<meta http-equiv='refresh' content='0;url=members.php'>";

}

?>
