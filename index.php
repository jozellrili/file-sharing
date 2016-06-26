<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="autor" content="Jozell M. Rili">
  <meta name="description" content="Simple Registration-Login Page">

  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="form-page">
  <div class="form">
    <h1>Login</h1>
    <form class="login-form" method="POST" action="checklogin.php">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button name="btn-login">login</button>
      <p class="message">Not registered? <a href="registration-form.php">Create an account</a></p>
    </form>
  </div>
</div>

</body>
</html>