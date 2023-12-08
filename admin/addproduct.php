<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if (!isset($_SESSION["aid"])) {
       header("location:../login/adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>KRAFTEC </title>
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
                  <h4 class="card-title">Add Product</h4>
                  <a href="viewproduct.php" class="btn btn-info">View Products</a>
                  <p class="card-description">
                    <!-- Basic form layout -->
                  </p>
                  <form class="forms-sample" action="../Controller/addproduct.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Product Name</label>
                      <input type="text" name="pname" class="form-control" id="exampleInputUsername1" placeholder="Enter Product Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Choose product catagory</label>
                      <select name="catg" class="form-control" id="exampleInputUsername1">

                        <option value="cake topper">Cake topper</option>
                        <option value="wedding product">Wedding Product</option>
                        <option value="home decor">Home decor</option>
                        <option value="personalised gift">Personalised gift</option>
                        <option value="corporate product">corporate Products</option>
                        <option value="festive collection">Festive collection</option>
                        <!-- <option value="OTC">OTC</option> -->
                        <!-- <option value="PRESCRIPTION">PRESCRIPTION</option> -->
                         </select>

                    </div>


                    <input type="hidden" name="a_id" value="<?php echo $_SESSION['aid'];?>">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Price</label>
                      <input type="text" name="cost" class="form-control" id="exampleInputUsername1" placeholder="Enter Price">
                    </div>

                     


                     <div class="form-group">
                      <label for="exampleInputUsername1">Stock</label>
                      <input type="text" name="stock" class="form-control" id="exampleInputUsername1" placeholder="Enter Stock">
                    </div> 

                    <div class="form-group">
                      <label for="exampleInputUsername1">Quantity</label>
                      <input type="text" name="qty" class="form-control" id="exampleInputUsername1" placeholder="Enter Quantity">
                    </div>

                       <div class="form-group">
                      <label for="exampleInputUsername1">Description</label>
                      <textarea name="description" class="form-control" id="exampleInputUsername1" placeholder="Enter Product Description"></textarea>
                    </div>

                       <div class="form-group">
                      <label for="exampleInputUsername1">Product image</label>
                      <input type="file" name="pimage" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>


                  
                 
                    <input   type="submit" name="add" class="btn btn-primary mr-2">
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">©copywrite rights under Kraftec<br> designed by team32<a href="https://www.bootstrapdash.com/" target="_blank"></span>
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
