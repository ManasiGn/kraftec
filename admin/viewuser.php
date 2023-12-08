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
  <title>View Manger</title>
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
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View Users</h4>
                  <p class="card-description">
                  <input autocomplete="off" type="text" name="search" class="form-control" placeholder="Search by product name" style="width:450px" onkeyup="searchit(this.value)">
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover" id="example">
                      <thead>
                        <tr>
                        <th>#</th>
                          <th>User Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Date</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <?php
    $i=1;
     $stmt = $admin->ret("SELECT * FROM `user` ORDER BY `uid` DESC ");
   while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
                      <tbody>
                        <tr>
                       <td><?php echo $i++;?></td>
                      <!--   <td><img src="../Controller/<?php echo $row['image'];?>"></td> -->
                        <td><?php echo $row['uid'];?></td>
                        <td><?php echo $row['uname'];?></td>
                        <td><?php echo $row['uemail'];?></td>
                        <td><?php echo $row['uphone'];?></td>
                       
                        <td><?php echo $row['uaddress'];?></td>
                        <td><?php echo $row['udate'];?></td>


<!-- <td>  <a href="../admin/editmanager.php?id=<?php echo $row['mid']; ?>" class="btn btn-warning"
                       onclick="return confirm('Edit the data')"><b><i>Edit</i></b></a></td> -->


                          <td>  <a href="../Controller/deleteuser.php?id=<?php echo $row['uid']; ?>" class="btn btn-danger"
                       onclick="return confirm('Delete the data')"><b><i>Delete</i></b></a></td>

                        
                        </tr>
                      </tbody>
                      <?php } ?>
                    </table>
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

  <script type="text/javascript">
          $(document).ready(function() {
              $('#example').DataTable();
          } );
        </script>
<script type="text/javascript">         
function searchit(str) {
   // alert(str);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("example").innerHTML = this.responseText;
               // alert(this.responseText);
            }
        };
        xmlhttp.open("GET", "Searchuser.php?q=" + str, true);
        xmlhttp.send();
}
</script>
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
