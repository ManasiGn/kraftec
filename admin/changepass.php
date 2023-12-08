<?php

define('DIR','../');
require_once DIR .'config.php';
$control = new Controller();
$admin = new Admin();



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Kraftec</title>
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Font-->
    <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body class="form-v5"><center>
  <div class="page-content">
    <div class="form-v5-content">
      <form class="form-detail" action="../Controller/changepass.php" method="post">
        <h2>Change Password</h2>
<br><br>
<div class="col-md-6">
      <div class="form-group">
          <label for="oldpassword">OLD PASSWORD</label>
          <input type="password" name="opassword" id="opassword"  class="form-control" placeholder="Old Password" required>
          <i class="fas fa-lock"></i>
        </div>
<br><br>

        <div class="form-group">
          <label for="password">NEW PASSWORD</label>
          <input type="password" name="upassword" id="password" class="form-control" placeholder="New Password" required>
          <i class="fas fa-lock"></i>
        </div><br><br>

        <div class="form-group">
          <label for="password">CONFIRM PASSWORD</label>
          <input type="password" name="u_c_password" id="cpassword" class="form-control" placeholder="Confirm" required>
          <i class="fas fa-lock"></i>
        </div>
        <br><br>
        <div class="form-row-last">
          <input type="submit" name="update" class="btn btn-primary" value="Change"><br>
          
        </div>
</div>
      </form>

    </div>
  </div>
</center></body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>