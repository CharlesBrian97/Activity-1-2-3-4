<html>
	<head>
		<title>Authentication</title>
		<style>
		body{
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
		.boxer input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
		}
</style>
			
		</head>
	<body>
		<form action="otpx.php" method="post">
			<div class="boxer">
		<center><h1>AUTHENTICATION</h1></center>
			<br>
    		<br>
    		<p>Code Number:</p>
    		<br>
			
		
          <?php if (isset($_GET['num1'])) { ?>
               <input type="text" 
                      name="num1" 
                      placeholder="Username"
                      value="<?php echo $_GET['num1']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="num1" 
                      placeholder="Enter Code Number"><br>
          <?php }?>
			<input type="submit" value="Send">
		</form>
	<?php 
?> </div>
		</body>
	</html>