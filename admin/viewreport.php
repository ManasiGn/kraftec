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
  <title>Products</title>
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
   <div class="col-lg-10 grid-margin stretch-card">
              <div class="col-md-12">
       
           <br><br> 
          <div class="row">
            <div class="col-md-12">
              <form name="" method="post" action="">
                <div class="col-md-4">
                  <div class="form-group">
                    <label> Day Wise Report: </label>
                    <input type="date" class="form-control input-sm" name="date" ><br><br>
                    <input type="submit" name="search_by_date" class="btn btn-primary btn-block" value="Submit" >
                  </div>
                </div>
                    
                
              </form>
                  
                  
              
                    
             
                    
                    
              
            </div>
            </div>
            
        <?php
          if(isset($_POST['search_by_date']))
          {
            $date = $_POST['date'];
        ?>
        <div id='DivIdToPrint'>
        <table class="table table-hover table-bordered table-striped" id="example">
        <thead>
          <tr>
            <th>SL no</th>
            <th>Customer Name</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <!-- <th>OrderedQuantity</th> -->
            <!-- <th>Total</th> -->
            
            
          </tr>
        </thead>
        
        <tbody>
          <?php
            // include "con_db.php";
          $con=mysqli_connect("localhost","root","","medi1");
            $query = mysqli_query($con,"SELECT * FROM product INNER JOIN orderdetails on product.pid=orderdetails.prid INNER JOIN user on user.uid=orderdetails.usid where orderdetails.odate='".$date."'");
            $i=1;
            while($row = mysqli_fetch_array($query)){
          ?>

          <tr>
            <td> <?php echo $i++; ?> </td>
            <td> <?php echo $row['uname']; ?> </td>
            <td> <?php  echo $row['pname'];
               ?></td>
            <td> <?php echo $row['cost']; ?> </td>
            <td> <?php echo $row['qty']; ?> </td>
            <!-- <td> <?php echo $row['quantity']; ?> </td> -->

            
            
          </tr>
          
          <?php } ?>
        </tbody>  
      </table>
      
      <div class="well">
      <?php 
      $rr = mysqli_query($con,"SELECT SUM(total) FROM `orderdetails` WHERE odate = '".$date."'");
      $sum = mysqli_fetch_array($rr);
      $count = mysqli_num_rows($query); ?>
      
        <p> Total Sales : <?php echo $count; ?></p>
        <p>Sum of all total Sales: <?php echo $sum[0]; ?></p>
      </div>
    </div>
    <!-- <input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();'> -->
      <!-- /.row -->
      <?php 
          }
         
     
          // }
      ?>    
                  </div>
                 <!-- partial -->
    
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a href="https://www.bootstrapdash.com/" target="_blank"></span>
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
