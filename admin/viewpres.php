<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>KALPATARU MEDICALS ARSIKERE</title>
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
                  <h4 class="card-title">VIEW PRESCRIPTION</h4>
                  <p class="card-description">
                  
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th>PRESCRIPTION ID</th>
                        <th>USER ID</th>
                          <th>USER NAME</th>
                          <th>EMAIL ID</th>
                          <th>PRESCRIPTION</th>
                          
                          <th>DATE</th>

                          <th>STATUS</th>
                          <th></th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>

                      <?php
 
     $stmt = $admin->ret("SELECT * FROM `request` ORDER BY `rdate` DESC ");
   while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
                      <tbody>
                        <tr>
                        <td><?php echo $idd=$row['rid'];?></td>
                          <td><?php echo $row['u_id'];?></td>
                           <td><?php echo $row['uname'];?></td>
                            <td><?php echo $row['uemail'];?></td>
                        <td><a href="../Controller/<?php echo $row['presimage'];?>" style="color:red;height:100px;width:100px;" download>DOWNLOAD</a></td>

                        <td><?php echo $row['rdate'];?></td>
                        <td style="color:red;"><?php echo $row['rstatus'];?></td>

                       







   <?php
            
   $stg=$admin-> ret("SELECT * FROM `prescription` WHERE `rid`='$idd'");

           
            $nummm= $stg->rowCount();
            if($nummm>0){

              ?>


<td>Bill Sent</td>

             <?php
                  }else{
              ?>


                           <td>  <a href="upp.php?uid=<?php echo $row['u_id'];?> & rid=<?php echo $row['rid'];?> & ue=<?php echo $row['uemail'];?> & un=<?php echo $row['uname'];?>" class="btn btn-primary"
                       onclick="return confirm('Are your sure want to send notificaton?')"><b><i>upload bill</i></b></a></td>



<?php } ?>





                          

                 <?php
            
   $st=$admin -> ret("SELECT * FROM `request` WHERE `rid`='$idd' AND (`rstatus`='completed' OR `rstatus`='rejected' OR `rid`='1')");

           
            $numm = $st->rowCount();
            if($numm>0){

              ?>


             <?php
                  }else{
              ?>

                           <td>  <a href="../phpmailer/sendMail3.php?name=<?php echo $row['uname'];?> & email=<?php echo $row['uemail'];?> & id=<?php echo $row['rid']?>;" class="btn btn-primary"
                       onclick="return confirm('Are your sure want to send notificaton?')"><b><i>NOTIFY</i></b></a></td>

                         


                         <td>  <a href="../phpmailer/sendMail4.php?name=<?php echo $row['uname'];?> &email=<?php echo $row['uemail'];?> & id=<?php echo $row['rid']?>;" class="btn btn-primary"
                       onclick="return confirm('Are your sure want to send notificaton?')"><b><i>REJECT</i></b></a></td>
<?php } ?>

                        </tr>
                      </tbody>
                      <?php } ?>
                    </table>
                  </div>
                 <!-- partial -->
    
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       <!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between" style="background-color:powderblue";>
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"></span>-->
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