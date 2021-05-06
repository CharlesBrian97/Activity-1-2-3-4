<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
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
  height: 620px;
  background: rgba(255, 255, 255, 0.5);
  color: white;
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
		.boxer input[type="submit"]{
			border: none;
  outline: none;
  height: 40px;
}
</style>
</head>
<body>
	<div class="boxer">
     <form action="foxcheck.php" method="post">
     	<center><h1>FORGOT PASSWORD</h1></center>
     	<br><br>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="Username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"><br>
          <?php }?>


     	
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

        
          <input type="password" 
                 name="re_password" 
                 placeholder=" Confirm Password"><br><br>
<input type="submit" value="Update Password"><br><br>
<center><b><a href="index.php" class="ca" style="color: #9682BD;">Already have an account?</a></b></center><br><br>
     	
          
     </form>
</body>
</html>