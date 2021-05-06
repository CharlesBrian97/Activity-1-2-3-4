<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<style>
		body {
  			margin: 0;
  			padding: 0;
  			background: url(ragnarok.jpg)no-repeat center center fixed; 
    			-webkit-background-size: cover;
    			-moz-background-size: cover;
    			-o-background-size: cover;
  			background-size: cover;
 			font-family: calibri;
		}
		.boxer{
			width: 420px;
  			height: 520px;
  			background: rgba(255, 255, 255, 0.3);
  			color: #fff;
  			top: 50%;
  			left: 75%;
  			position: absolute;
  			transform: translate(-50%, -50%);
  			box-sizing: border-box;
  			padding: 70px 30px;
		}
		.pik{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}
		h1{
			margin: 0;
  			padding: 0 020px;
  			text-align: center;
  			font-size: 33px;
		}
		.boxer p {
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.boxer input{
			width: 100%;
			margin-bottom: 20px;
		}
		.boxer input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: white;
			font-size: 16px;	
		}
		.boxer input[type="submit"]
		{
  			border: none;
  			outline: none;
  			height: 40px;
		}
		a{
  			color: #9682BD;
		}
		.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
</style>
</head>
<body>
     <form action="login.php" method="post">
     	<div class="boxer">
            <center><h1>LOGIN</h1></center>
     	<?php if (isset($_GET['error'])) { ?>
     		<br><p class="error"><?php echo $_GET['error']; ?></p><br>
     	<?php } ?>
     	<p>Username</p>
     	<input type="text" name="uname" placeholder="Enter Username"><br>
     	<p>Password</p>
     	<input type="password" name="password" placeholder="Enter Password"><br>
            
        <input type="submit" value="Login">
		<a href="logout.php" class="ca"></a>
		<center><b><a href="changpass.php" class="ca">Forgot Password</a></b><br><br></center>
     	    
          
     </form>
</body>
</html>