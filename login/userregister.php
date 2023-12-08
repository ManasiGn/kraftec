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
	<title>KRAFTEC</title>
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
			<form class="form-detail" action="../Controller/userregister.php" method="post">
				<h2>User register form</h2>
				<div class="form-row">
					<label for="full-name">Full Name</label>
					<input type="text" maxlength="30" pattern="[A-Z a-z]{1,30}" title="Name should contain only alphabets" name="uname" id="full-name" class="input-text" placeholder="Your Name" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="text" name="uemail" id="your-email" class="input-text" placeholder="Your Email" required="" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" title="Your email should match the required format">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Your Contact number</label>
					<input type="text" pattern="[6-9]{1}[0-9]{9}" title="Phone number should start with 6 or 9 and must contain 10 digits"
					 name="uphone" id="your-email" class="input-text" placeholder="Your Contact Number" >
					<i class="fas fa-phone"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Address</label>
					<input type="text" name="uaddress" id="your-email" class="input-text" placeholder="Address" >
					<i class="fas fa-address-card"></i>

				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="upassword"  pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)" id="password" class="input-text" placeholder="Your Password" required>
					<!-- <i class="fas fa-lock"></i> -->
				</div>

					<div class="form-row">
<label for="password">CONFIRM PASSWORD</label>
<input type="password" name="u_c_password" id="password"  pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)"class="input-text" placeholder="Your Password" required>
<!-- <i class="fas fa-lock"></i> -->
</div>
					<input type="submit" name="add" class="register" value="Register"><br>
					<a href="userlogin.php">Already a user???</a>
				</div>

			</form>

		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>