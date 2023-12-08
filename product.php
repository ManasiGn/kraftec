<?php 
define('DIR','');
require_once DIR .'config.php';
$contol = new Controller();
$admin = new Admin();
if (!isset($_SESSION["uid"])) {
       header("location:login/userlogin.php");
}

$id=$_GET['cid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Products</title>
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
      <br><br>
      <input type="hidden" name="cid" value="<?php echo $id; ?>" id="cid">
      <input type="text"  style="margin-left: 400px; width: 600px;" name="search" class="form-control" placeholder="Search" onkeyup="searchit(this.value,)">

      <div class="container" >

        <br>
        <div class="row" id="result">

         


                      <?php
    $i=1;
    // $s="Accept";
     $stmt = $admin->ret("SELECT * FROM `product` WHERE `catg`='$id'");
   while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
          <div class="col-lg-6" >
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
           <div class="pic"><img src="Controller/<?php echo $row['pimage'];?>" class="img-fluid" alt=""></div>
              <div class="member-info">
              <form action="Controller/cart.php" method="POST" enctype="multipart/form-data">
                
                <h8>Name: <?php echo $row['pname'];?></h8><br>
                <span>MRP: ₹<?php echo $row['cost'];?></span>
                <p>Description: <?php echo $row['description'];?></p><br>
                <input type="hidden" name="cost" value="<?php echo $row['cost'];?>">
                <input type="hidden" name="prid" value="<?php echo $row['pid'];?>">
                <input type="hidden" name="vb" value="<?php echo $id;?>">

<?php
                      if($row['stock'] == 0){ ?>

               <button class="btn btn-primary">Out Of Stock</button>

                    <?php  }else{ ?>
    <p>Quantity:<input type="number" step="1" min="1" max="<?php echo $row['qty'];?>" name="qty" value="1" title="Qty" class="input-text qty text" size="2"/></p><br>
               <input type="submit" name="add" class="btn btn-primary" value="Add to Cart">
                    <?php  }

                  ?>
              </form>
              </div>
            </div>
        
         
            </div>
            
          <?php } ?>

          </div>

          

          

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
  <?php include "footer.php" ?>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

   <script type="text/javascript">
        function searchit(alm)
        {
            
            var cidval = document.getElementById("cid").value;
            // alert("vv"+cidval);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("result").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "getproduct.php?q=" + alm +"&cid="+cidval, true);

            // xmlhttp.open("GET","getSort.php?s="+str+"&cat="+cat,true);

            // xmlhttp.open("GET","getuser.php?q=" + q + "&r=" + r, true);
            xmlhttp.send();
  
        }
   </script>      

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