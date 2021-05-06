<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="header">
  	<h1>LOGIN</h1>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	
  		<p>Username</p>
  		<input type="text" name="username" placeholder="Enter Username">
  	
  	
  		<p>Password</p>
  		<input type="password" name="password" placeholder="Enter Password">
  	
  	
  		<input type="submit" class="btn" name="login_user" value="Login">
  	
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>