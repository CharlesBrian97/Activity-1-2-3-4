
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
	.header {
  		width: 420px;
  		height: 350px;
  		background: rgba(255, 255, 255, 0.3);
  		color: #fff;
  		top: 70%;
  		left: 75%;
  		position: absolute;
  		transform: translate(-50%, -50%);
  		box-sizing: border-box;
  		padding: 70px 30px;
		}
    h1{
  		margin: 0;
  		padding: 0 020px;
  		text-align: center;
  		font-size: 33px;
		}
        [type="submit"]{
			border: none;
			outline: none;
			background: none;
		}
	form, .content {
  		width: 287px;
  		height: 125px;
  		margin: 0px auto;
  		padding: 20px;
  		border: 1px solid #B0C4DE;
  		background: white;
  		border-radius: 0px 0px 10px 10px;
  		top: 65%;
  		left: 66.5%;
  		position: absolute;
		}

        
.act {
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
  border-radius: 5px; 
}		
		</style>
</head>
<body>
	<div class="header">
     <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    </div>

    <div class="content">
   	
   	<div class="act">
	<h1><center><button type="submit">  <a href="display.php"  style="color: #3c763d;"><h2>View Activity</h2></a> </button></center></h1>
	</div>
	<h1><center><a href="logout.php" style="color: red; font-size: 20px;">Logout</a></center><br/></h1>
	</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>                            		                            