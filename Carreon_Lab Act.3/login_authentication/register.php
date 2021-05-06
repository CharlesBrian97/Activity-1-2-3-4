<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="header">
  	<h1>REGISTER</h1>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	
  	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
  	
  	
  	  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
  	
  	
  	  <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at
      least 8 or more characters" placeholder="Password" name="password_1">
  	
  	
  	  <input type="password" placeholder="Confirm Password" name="password_2">
  	
  	
  	  <input type="submit" class="btn" name="reg_user" value="Register">
  	
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>