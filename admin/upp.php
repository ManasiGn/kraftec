<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();


$uid=$_GET['uid'];
$rid=$_GET['rid'];


$ue=$_GET['ue'];
$un=$_GET['un'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Medicine</title>
  <!-- plugins:css -->
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

<body>
  <div class="container-scroller">
  <?php include "header.php" ?>
 
    <!-- partial:../../partials/_navbar.html -->
   
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
 
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
       <?php include "sidebar.php" ?>
        <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Send Precription Medicine bill</h4>
                 
                  <p class="card-description">
                    <!-- Basic form layout -->
                  </p>
                  <form class="forms-sample" action="../phpmailer/up.php" method="POST" enctype="multipart/form-data">
                    

                 <input type="hidden" name="uid" value="<?php echo $uid;?>">
                 <input type="hidden" name="rid" value="<?php echo $rid;?>">



                 <input type="hidden" name="ue" value="<?php echo $ue;?>">
                 <input type="hidden" name="un" value="<?php echo $un;?>">
                     

                       <div class="form-group">
                      <label for="exampleInputUsername1">Product image</label>
                      <input type="file" name="pimage" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>


                  
                 
                    <input type="submit" name="add" class="btn btn-primary mr-2">
                    <!-- <button class="btn btn-light">Cancel</button> -->
                  </form>
                </div>
              </div>
            </div>
     
      <!-- partial -->
    
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Medical Store website created on 2021<a href="https://www.bootstrapdash.com/" target="_blank"></span>
            <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span> -->
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
