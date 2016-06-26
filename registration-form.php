<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="autor" content="Jozell M. Rili">
  	<meta name="description" content="">

  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	  	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="form-page">
		<div class="form">
			<h1>Register</h1>
			<form id="registration-form" class="register-form" method="POST" action="register.php">
			  <input name="name" type="text" placeholder="Full Name"/>
		      <input name="username" type="text" placeholder="Username"/>
		      <input name="password" type="password" placeholder="Password"/>
		      <input id ="cpassword" name="cpassword" type="password" placeholder="Re-type password"/>
		      <button name="btn-signup" type="submit">Sign Up</button> 
		      <p class="message">Already registered? <a href="index.php">Sign In</a></p>
		    </form>

		    <div id="message"></div>
		</div>
	</div>

</body>



</html>