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
			<form class="form-detail" action="../Controller/reset.php" method="post">
				<h2>Password Reset form</h2>
				
				 <div class="form-row">

<div class="form-row">
         <label for="password"> New Password</label>
          <input type="password" name="upassword" id="password"  class="input-text" placeholder="Your Password" required>
          <!-- <i class="fas fa-lock"></i> -->
        </div>
       
        <div class="form-row">
          
<label for="password">Confirm Password</label>
<input type="password" name="u_c_password" id="cpassword" class="input-text" placeholder="Your Password" required>
<!-- <i class="fas fa-lock"></i> -->
</div>
         
        </div>
        <input type="hidden" name="upid" value="<?php echo $_GET['id']; ?>">
        <div class="form-row-last">
          <input type="submit" name="update" class="register" value="Reset"><br>
          
        </div>
			</form>

		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>