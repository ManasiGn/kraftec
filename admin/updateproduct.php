<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();


  $id = $_GET['pid'];
   $stmts = $admin -> ret("SELECT * FROM `product` WHERE `pid` = '".$id."'");
   $rows = $stmts -> fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit</title>
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
                  <h4 class="card-title">Add Medicine</h4>
                  <a href="viewproduct.php" class="btn btn-primary">View product</a>
                  <p class="card-description">
                    <!-- Basic form layout -->
                  </p>
                  <form class="forms-sample" action="../Controller/addproduct.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Product Name</label>
                      <input type="text" name="pname" class="form-control" id="exampleInputUsername1" placeholder="name" value="<?php echo $rows['pname'] ?>">
                    </div>

                          <div class="form-group">
                      <label for="exampleInputUsername1">Choose product catagory</label>
                      <select name="catg" class="form-control" id="exampleInputUsername1">

                         <option value="<?php echo $rows['catg'] ?>"><?php echo $rows['catg'] ?></option>
                         <option value="cake topper">Cake topper</option>
                        <option value="wedding product">Wedding Product</option>
                        <option value="home decor">Home decor</option>
                        <option value="personalised gift">Personalised gift</option>
                        <option value="corporate product">corporate Products</option>
                        <option value="festive collection">Festive collection</option>
                        </select>

                    </div>


                    <input type="hidden" name="ma_id" value="<?php echo $_SESSION['aid'];?>">

                    <div class="form-group">
                      <label for="exampleInputUsername1">Cost</label>
                      <input type="text" name="cost" class="form-control" id="exampleInputUsername1" value="<?php echo $rows['cost'] ?>" placeholder=" cost">
                    </div>

                     <div class="form-group">
                      <label for="exampleInputUsername1">Quantity</label>
                      <input type="text" name="qty" value="<?php echo $rows['qty'] ?>" class="form-control" id="exampleInputUsername1" placeholder="qty">
                    </div>


                     <div class="form-group">
                      <label for="exampleInputUsername1">Stock</label>
                      <input type="text" name="stock" value="<?php echo $rows['stock'] ?>" class="form-control" id="exampleInputUsername1" placeholder="enter stock">
                    </div>


      
                       <div class="form-group">
                      <label for="exampleInputUsername1">Description</label>
                      <textarea name="description" class="form-control" id="exampleInputUsername1" placeholder="address"><?php echo $rows['description'] ?></textarea>
                    </div>

                    <input type="hidden" name="pid" value="<?php echo $id ?>">

                       <div class="form-group">
                      <label for="exampleInputUsername1">Product image</label>
                      <input type="file" name="pimage" value="" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>


                  
                 
                    <input   type="submit" name="update" class="btn btn-primary mr-2">
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">@copywrite rights under Kraftec<a href="https://www.bootstrapdash.com/" target="_blank"></span>
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
