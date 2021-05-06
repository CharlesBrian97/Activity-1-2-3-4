<?php
if (isset($_POST['btn'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if ($user == "admin" && $pass == "admin123") {
		echo "Login Success!";
	}
	else{
		echo "Login Failed!";
	}
}
?>