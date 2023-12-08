
 <?php 
define('DIR', '');
require_once DIR .'../config.php';
$admin= new Admin();
$control = new Controller();  

$searchq = $_GET['q'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Product</title>
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
<?php

//$result="SELECT * FROM `register` where rname like '".$searchq."%' or city like '".$searchq."%'" ;
// SELECT * FROM `product` ORDER BY `pdate` DESC
$stmt=$admin->ret("SELECT * FROM `user` where uname like '".$searchq."%' or uid like '".$searchq."%'"); 
// $stmt=$admin->Search2("user","uname","address",$search);
//$data=mysqli_query($conn,$result);
$i=1;
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
