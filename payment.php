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
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Payment</title>
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

<body style="background: linear-gradient(#A7D9F0,#E6F0ED);
    background-size: cover;
    height: 100%;">

  <!-- ======= Header ======= -->
  <?php include "header.php" ?>

  <!-- ======= Hero Section ======= -->
  

  <main id="main">

    <!-- ======= Cliens Section ======= -->
   

    <!-- ======= Cta Section ======= -->
  

    <!-- ======= Portfolio Section ======= -->
   

    <!-- ======= Team Section ======= -->
    
 
    <!-- ======= Pricing Section ======= -->
    
    <!-- ======= Frequently Asked Questions Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Payment</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <!-- <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div> -->

              <!-- <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div> -->

              <!-- <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div> -->
<p><h2><center>EASY PAYMENT</center></h2></p>
<h4>Fast, Easy and Secure!</h4><br>
              <iframe src="Controller/uploads/download.png" frameborder="0" style="border:0; width: 120%; height: 600px;" allowfullscreen></iframe>
              <p></p>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="Controller/payment.php" method="POST" >
              <div class="form-row">

                <input type="hidden" name="qty" value="<?= $_GET['qty']?>">
                <input type="hidden" name="pid" value="<?= $_GET['pid']?>">
                <input type="hidden" name="id" value="<?= $_GET['id']?>">

                <div class="form-group">
                <label for="name">PAYMENT AMOUNT</label>
                <?php $cost=$_GET['cost'];?>
                <input type="text" class="form-control"  name="amount"value="<?php echo $cost;?>" readonly name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" /><br>
                <div class="validate"></div><br>
     

              <div class="form-group">
                <label for="name">Transaction ID</label>
                <input type="tel" pattern="[0-9]{7}" title="Transaction ID should contain 7 digits" placeholder="Transaction ID" class="form-control" name="tid" id="name"/><br>
                <div class="validate"></div>
              </div>
        
              <div class="form-group">
                <label for="name">Payment</label><br>
                <input type="radio" name=ptype value="QR Scan" for="q" required/><label id="q"> QR Scan </label></<br>
                <input type="radio" name=ptype value="COD" for="c" required/><label id="c"> COD </label></<br>
                <div class="validate"></div>
              </div> 

                <input type="hidden" name="z" value="paid" id="subject"  />
          
             
        
<div class="form-group">
                <label for="name">SHIPPING ADDRESS</label>
                <input type="text" class="form-control" name="ship" id="subject" maxlength="30" pattern="[A-Z a-z 0-9]{1,30}" title="Name should only contain alphabets and number" placeholder="Enter shipping address" required=""><br>
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label for="name">Pin Code</label>
                <input type="number" class="form-control" id="subject" placeholder="Enter Pincode" required=""><br>
                <div class="validate"></div>
              </div>
              
                           <div class="text-center">
              <input type="submit" name="add" class="btn btn-primary" value="Pay">
              </div>
            </form>
          </div>

        </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

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