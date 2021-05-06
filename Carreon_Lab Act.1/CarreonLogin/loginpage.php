<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="ragnarok.css">
</head>
<body>
	<div id="main">
		<h1><center>LOGIN</center></h1>
		<form action="process.php" method="POST">
			<p>
				<label>Input Username:</label>
				<input type="text" name="username" id="user" class="text" placeholder="Username">
			</p>
			<p>
				<label>Input Password:</label>
				<input type="password" name="password" id="pass" class="text" placeholder="Password">
			</p>
			<p>
				<input type="Submit" name="btn" id="sub" value="Login" placeholder="Login">
			</p>
		</form>
	</div>
</body>
</html>