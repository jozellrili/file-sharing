<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("Location: index.php");
}

include('./database/db_connection.php');

$username = $_GET['username'];

$sql = "SELECT * FROM sec_users WHERE username = '$username' ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
	       $name = $row['name'];
	       $username = $row['username'];
	    }
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Info</title>
	<meta name="autor" content="Jozell M. Rili">
  	<meta name="description" content="">

  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	  	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	 <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
                 <a class="navbar-brand topnav" href="#">
                    <img src="img/abc-logo.png" alt="" class="img-responsive" style="width:180px; height: 30px";>
                </a>

            </div>
      		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
				    <li>
                        <a href="home.php"  class="active">HOME</a>
                    </li>
                    <li>
                        <a href="members.php">USERS</a>
                    </li>
                    <li>
                        <a href="upload-form.php">DOCUMENTS</a>
                    </li>

                    <li>
                        <a href="logout.php">LOGOUT</a>
                    </li>                    
                   
                </ul>
            </div>
           <!-- navigation  -->

   	        </div>
        <!-- /.container -->
       
    </nav>  

	<div class="form-page">
		<div class="form">
			<h1>Edit Info</h1>
			<form id="registration-form" class="register-form" method="GET" action="edit-record.php">
			  <label for="name">Name:</label>
			  <input name="name" type="text" value="<?php echo $name; ?>"/>
			  <label for="username">Username:</label>
			  <input name="username" type="text" value="<?php echo $username; ?>"/>
			  <input name="old-username" type="hidden" value="<?php echo $username; ?>"/>
		      <button name="btn-save">Save</button> 
		    </form>
		</div>
	</div>

</body>
</html>