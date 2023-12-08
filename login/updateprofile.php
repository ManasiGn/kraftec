<?php

define('DIR','../');
require_once DIR .'config.php';
$control = new Controller();
$admin = new Admin();


$id=$_GET['upid'];
    $stmts = $admin -> ret("SELECT * FROM `user` WHERE `uid`='$id'");
    $rows = $stmts -> fetch(PDO::FETCH_ASSOC);

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
          <input type="text" name="uname" id="full-name" class="input-text" value="<?php echo $rows['uname']; ?>" placeholder="Your Name" required>
          <i class="fas fa-user"></i>
        </div>
        <div class="form-row">
          <label for="your-email">Your Email</label>
          <input type="text" name="uemail" id="your-email" value="<?php echo $rows['uemail']; ?>"class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
          <i class="fas fa-envelope"></i>
        </div>
        <div class="form-row">
          <label for="your-email">Your Contact number</label>
          <input type="text" name="uphone" id="your-email" value="<?php echo $rows['uphone']; ?>" class="input-text" placeholder="YourContact number" >
          <i class="fas fa-phone"></i>
        </div>
        <div class="form-row">
          <label for="your-email">Your Address</label>
          <input type="text" name="uaddress" id="your-email" value="<?php echo $rows['uaddress']; ?>"class="input-text" placeholder="Your Address" >
          <i class="fas fa-address-card"></i>
        </div>

<div class="form-row">
         <label for="oldpassword"> Old Password</label>
          <input type="text" name="opassword" id="opassword" value="<?php echo $rows['upassword']; ?>" class="input-text" placeholder="Old Password" required readonly="">
          <!-- <i class="fas fa-lock"></i> -->
        </div>
        <div class="form-row">

<div class="form-row">
         <label for="password"> New Password</label>
          <input type="password" name="upassword" id="password"  class="input-text" placeholder="Your Password" required>
          <!-- <i class="fas fa-lock"></i> -->
        </div>
       
        <div class="form-row">
          
<label for="password">CONFIRM PASSWORD</label>
<input type="password" name="u_c_password" id="cpassword" class="input-text" placeholder="Your Password" required>
<!-- <i class="fas fa-lock"></i> -->
</div>
         
        </div>
        <input type="hidden" name="upid" value="<?php echo $id; ?>">
        <div class="form-row-last">
          <input type="submit" name="update" class="register" value="update profile"><br>
          
        </div>

      </form>

    </div>
  </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>