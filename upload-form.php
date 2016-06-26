<?php

session_start();
if(!isset($_SESSION['username']))
{
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Upload Documents</title>
	<meta name="autor" content="Jozell M. Rili">
  	<meta name="description" content="Simple Registration-Login Page">

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

	<div class="">
		<div class="box">
			<h4>Upload File</h4>

			<form action="upload.php" method="post" enctype="multipart/form-data">
        		<input type="file" name="uploaded_file"><br>
       			<input type="submit" value="Upload file">
   			</form>
		</div>	
	</div>

</body>
</html>
		</div>	
	</div>

</body>
</html>