<?php 
define('DIR','');
require_once DIR .'config.php';
$contol = new Controller();
$admin = new Admin();
if (!isset($_SESSION["uid"])) {
       header("location:login/userlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" >

  <title>My cart</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
 
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

     <?php include "header.php" ?>

    <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <main id="main">

   
    <!-- ======= About Us Section ======= -->
    

   

    <!-- ======= Skills Section ======= -->
   

    <!-- ======= Services Section ======= -->
  

    <!-- ======= Cta Section ======= -->
  

    <!-- ======= Portfolio Section ======= -->
   

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" >

        <div class="section-title" style="color:blue;">
          <h2>Team</h2>
          <p>A few clicks is all it takes. Discover the difference and enrich your shopping list.
          </p>
        </div>

        <div class="row">


 
           <table class="table table-hover" style="color:blue;">
                      <thead>
                        <tr>
                        <th>Sl.no</th>
                        <th>Product</th>
                          <th>Name</th>
                       
                          <th>Price</th>
                          <th>Qty</th>
                          <th>Total</th>
                         
                        </tr>
                      </thead>
                                            <?php
    $i=1;
    $num=0;
    $s=$_SESSION['uid'];
     $stmt = $admin->ret("SELECT * FROM `product` inner join `cart` on `product`.pid=`cart`.p_id where cart.cust_id='".$s."' ");
   while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){

     $num=$num+$row['total'];
    ?>
                        
                        <tr>
 <td><?php echo $i++;?></td>
                          <td><img src="Controller/<?php echo $row['pimage'];?>" style="width:100px;heigth:100px;" ></td>
                          <td><?php echo $row['pname'];?></td>
                           <td><?php echo $row['cost'];?></td>
                            <td><?php echo $row['quantity'];?></td>
                             <td><?php echo $row['total'];?></td>
<!-- <td><a href="Controller/orderdelete.php?id=<?=$row['orid'];?>&qty=<?php echo $row['qty'];?>&pid=<?php echo $row['pid'];?>"><b><i style="color:red;">Remove from cart</i></b></a></td> -->
<td><a href="Controller/cartdelete.php?id=<?=$row['c_id'];?>"><b><i style="color:red;">Remove from cart</i></b></a></td>


                        </tr>
                          <?php } ?>


                      
        
         
          </table>

             <a href="indes.php" class="btn btn-warning">Continue shopping</a>


                  <!-- <a href="payment.php?cost=<?php echo $num; ?>" class="btn btn-success">Proceed</a> -->


<?php
 // }
 ?>

<?php

$sd=$_SESSION['uid'];
       $stmt=$admin->ret("SELECT * FROM `cart` WHERE
   cust_id='$sd'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $numm = $stmt->rowCount();
        if($numm==0)
        {
            

            ?>

          <h1></h1>

  <?php } else { ?>


                  <a href="payment.php?cost=<?php echo $num; ?>&qty=<?php echo $row['quantity'];?>&pid=<?php echo $row['p_id'];?>&id=<?php echo $row['c_id'];?>" class="btn btn-success">Proceed To Payment</a>


<?php } ?>

           <h1>
          

          

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <?php include "footer.php" ?>

    
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
      <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>