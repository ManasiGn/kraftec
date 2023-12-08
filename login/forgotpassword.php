<?php

define('DIR','');
require_once DIR .'../config.php';
$control = new Controller();
$admin = new Admin();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Login</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="../Controller/forgot.php" method="post">
				<h2>Forgot Password form</h2>
				
				<div class="form-row">
					<label for="your-email">Enter Your Email</label>
					<input type="text" name="uemail" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}|@/=ashirvad">
					<i class="fas fa-envelope"></i>
				</div>
				
				<div class="form-row-last">
					<input type="submit" name="login" class="register" value="Change"><br>
					<!-- <a href="userregister.php">New user???</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
					<!-- <a href="forgotpassword.php">ForgotPassword???</a> -->
				</div>
			</form>

		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>