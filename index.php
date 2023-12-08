<?php
define('DIR', '');
require_once DIR . 'config.php';

$control = new Controller(); 
 $admin = new Admin();

if (!isset($_SESSION["uid"])) {
       header("location:login/userlogin.php");
}


$id=$_SESSION['uid'];
    $stmts = $admin -> ret("SELECT * FROM `user` WHERE `uid`='$id'");
    $rows = $stmts -> fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KRAFTEC</title>
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

  <!-- Template Main CSS File 
  <link href="assets/css/style.css" rel="stylesheet">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/allproduct/swiper-bundle.min.css"/>

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<center>
  <!-- ======= Header ======= -->
  <?php include "header.php" ?>

  <!-- ======= Hero Section ======= -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://images.pexels.com/photos/1045541/pexels-photo-1045541.jpeg?auto=compress&cs=tinysrgb&" height="1000px" width="1500px">
        <div class="carousel-caption">
        
          
        </div>
      </div>

      <div class="item">
        <img src="https://images.pexels.com/photos/1045541/pexels-photo-1045541.jpeg?auto=compress&cs=tinysrgb&" height="1000px" width="1500px" >
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
       <img src="https://images.pexels.com/photos/1045541/pexels-photo-1045541.jpeg?auto=compress&cs=tinysrgb&" height="1000px" width="1500px" >
        <div class="carousel-caption">
    
        </div>
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span></center>
    </a>
  </div>


<!-- header slider end -->
<!-- categories start -->
<div class="categories">
    <h1 class="categories__head">
        categories
    </h1>
    <div class="categories__parent">
    <div class="categories__parent__img">
    <a href="product.php?cid=wedding product">
        <img src="Controller/uploads/ring4.jpg" alt="" srcset="">
    
        </a>
        <h3>Wedding </h3>
    </div>
    <div class="categories__parent__img">
    <a href="product.php?cid=cake topper">
        <img src="Controller/uploads/engaged4.png" alt="" srcset="">
    
        </a>
        <h3>Cake Topper </h3>
    </div>
    <div class="categories__parent__img">
    <a href="product.php?cid=home decor">
        <img src="Controller/uploads/walldecor3.jpg" alt="" srcset="">
    </a>
            
    <h3>Home Decor</h3></a>
    </div>
    <div class="categories__parent__img">
    <a href="product.php?cid=personalised gift">
        <img src="Controller/uploads/bookmark1.jpg" alt="" srcset="">
    
        </a>
        <h3>Personalised Gifting</h3>
    </div>
    <div class="categories__parent__img">
    <a href="product.php?cid=corporate product">
        <img src="Controller/uploads/card1.jpg" alt="" srcset="">
    
        </a>
        <h3>Corporate Products</h3>
    </div>
    <div class="categories__parent__img">
    <a href="product.php?cid=festive collection">
        <img src="Controller/uploads/festive4.jpg" alt="" srcset="">
    
        </a>
        <h3>Festive Collection</h3>
    </div>
    </div>
</div>


<!-- categories end  -->

<!-- trending products  -->
 <div class="trending">
    <section class="product-slider">
    
        <!--==heading====================-->
        <h4 class="product-slider-heading">Trending</h4>
        <!--btns=========================-->
        <div class="slider-btns">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="slider-container">
        <!-- Swiper -->
        <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!--1================================-->
            <div class="swiper-slide">
            <!--box----------------------->
            <div class="product-box">
                <!--==offer==-->
                <span class="product-box-offer">-20%</span>
                <!--img-container****************-->
                <div class="product-img-container">
      
                <!--img=============-->
                <div class="product-img">
                <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14">
                    <img alt="" class="product-img-front" src="Controller/uploads/babyshower1.png"/>
                    <img alt="" class="product-img-back" src="Controller/uploads/babyshower3.png"/>
                </a>
                </div>
                </div>
                <!--text***************************-->
                <div class="product-box-text">
                     <!--category-->
                     <div class="product-category">
                        <span>CAKE TOPPER</span>
                    </div>
                    <!--tile--->
                    <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14" class="product-title">
                        BIRTHDAY CAKE
                    </a>
                    <!--Price--->
                    <div class="price-buy">
                        <span class="p-price">Rs. 500</span>
                        <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14" class="p-buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            </div>
            <!--2================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-40%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/ring5.jpg"/>
                        <img alt="" class="product-img-back" src="Controller/uploads/ring3.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>WEDDING RING</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            CLASSICAL WEDDING RINGS
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs.300</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--3================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-60%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/housenameplate1.jpg"/>
                        <img alt="" class="product-img-back" src="Controller/uploads/housenameplate1.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>HOUSE DECOR</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            CLASSIC HOME NAME PLATES
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs. 300</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--6================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-70%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/bookmark2.jpg"/>
                        <img alt="" class="product-img-back" src="Controller/uploads/keychains2.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>PERSONALISED GIFT</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            GIFT YOUR DEAR ONES WITH SOME LOVELY GIFTS
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs. 1500</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--4================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-20%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/deskname2.jpg"/>
                        <img alt="" class="product-img-back" src="Controller/uploads/deskname3.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>CORPORATE PRODUCT</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            HAVE SOME COOL LOOKING NAME PLATES IN FRONT OF YOUR DESK
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs. 890</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--5================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-60%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/keychains1.jpg">
                        <img alt="" class="product-img-back" src="Controller/uploads/bookmark3.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>PERSONALISED GIFT</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            ALL THE BOOK LOVERS WOULD PREFER TO HAVE SOME COOL BOOK MARK
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs. 690</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                
        </div>
        </div>
        </div>
        </section>
</div>

<!-- trending products end  -->

<!-- Most Popular  -->

<div class="most_popular">
   
    <section class="product-slider">
    
        <!--==heading====================-->
        <h4 class="product-slider-heading">Most Popular</h4>
        <!--btns=========================-->
        <div class="slider-btns">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="slider-container">
        <!-- Swiper -->
        <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!--1================================-->
            <div class="swiper-slide">
            <!--box----------------------->
            <div class="product-box">
                <!--==offer==-->
                <span class="product-box-offer">-20%</span>
                <!--img-container****************-->
                <div class="product-img-container">
      
                <!--img=============-->
                <div class="product-img">
                <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14">
                    <img alt="" class="product-img-front" src="Controller/uploads/anniversary1.png"/>
                    <img alt="" class="product-img-back" src="Controller/uploads/anniversary3.png"/>
                </a>
                </div>
                </div>
                <!--text***************************-->
                <div class="product-box-text">
                     <!--category-->
                     <div class="product-category">
                        <span>CAKE TOPPER</span>
                    </div>
                    <!--tile--->
                    <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14" class="product-title">
                         ANNIVERSARY CAKE
                    </a>
                    <!--Price--->
                    <div class="price-buy">
                        <span class="p-price">Rs. 550</span>
                        <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14" class="p-buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            </div>
            <!--2================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-40%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/whiteboard1.jpg"/>
                        <img alt="" class="product-img-back" src="Controller/uploads/whiteboard4.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>WEDDING PRODUCTS</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            HAVE SOME FANCY NAME BOARDS IN THE ENTRANCE OF YOUR WEDDING HALL
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs.1100</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--3================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-60%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/photo1.webp"/>
                        <img alt="" class="product-img-back" src="Controller/uploads/photo3.png"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>PERSONALISED GIFT</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            WOODEN PHOTO FRAMES 
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs.1090</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--6================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-70%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/birthday2.png"/>
                        <img alt="" class="product-img-back" src="Controller/uploads/birthday4.png"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>CAKE TOPPER</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            CAKES ARE ALWAYS A WEAKNESS FOR KIDS WHEN ITS THERE BIRTHDAY
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs.1000</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--4================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-20%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/housenameplate4.jpg"/>
                        <img alt="" class="product-img-back" src="Controller/uploads/tissuebox5.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>HOME DECOR</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            WE ALL USE TISSUE PAPER, WHY DONT WE MAKE IT LOOK CLASSY
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs.1300</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--5================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-60%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/walldecor1.jpg"/>
                        <img alt="" class="product-img-back" src="Controller/uploads/walldecor3.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>HOME DECOR</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            LETS DECORATE OUR HOUSE WITH SOME COOL WALL HANGINS
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">1200$</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                
        </div>
        </div>
        </div>
        </section>
<!-- slider end  -->
</div>


<!-- Most popular end  -->

<!-- festive collection  -->

<div class="festive">
     <section class="product-slider">
    
        <!--==heading====================-->
        <h4 class="product-slider-heading">Festive Collection</h4>
        <!--btns=========================-->
        <div class="slider-btns">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="slider-container">
        <!-- Swiper -->
        <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!--1================================-->
            <div class="swiper-slide">
            <!--box----------------------->
            <div class="product-box">
                <!--==offer==-->
                <span class="product-box-offer">-20%</span>
                <!--img-container****************-->
                <div class="product-img-container">
      
                <!--img=============-->
                <div class="product-img">
                <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14">
                    <img alt="" class="product-img-front" src="Controller/uploads/festive13.jpg"/>
                    <img alt="" class="product-img-back" src="Controller/uploads/festive3.jpg"/>
                </a>
                </div>
                </div>
                <!--text***************************-->
                <div class="product-box-text">
                     <!--category-->
                     <div class="product-category">
                        <span>CHRISTMAS</span>
                    </div>
                    <!--tile--->
                    <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14" class="product-title">
                        A SEASON OF HAPPINESS
                    </a>
                    <!--Price--->
                    <div class="price-buy">
                        <span class="p-price">Rs.1200</span>
                        <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14" class="p-buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            </div>
            <!--2================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-40%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/festive9.jpg"/>
                    <img alt="" class="product-img-back" src="Controller/uploads/festive11.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>CHRISTMAS</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            SEASON OF GIFTS
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs.1100</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--3================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-60%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads//festive5.jpg"/>
                    <img alt="" class="product-img-back" src="Controller/uploads/festive16.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>CHRISTMAS</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            DECORATIVE ITEMS FOR CHRISTMAS TREE
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs.1050</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--6================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-70%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/festive10.jpg"/>
                    <img alt="" class="product-img-back" src="Controller/uploads//festive5.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>CHRISTMAS</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                             SEASON OF HAPPINESS
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">Rs.1000</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--4================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-20%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/festive6.jpg"/>
                    <img alt="" class="product-img-back" src="Controller/uploads/festive7.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>CHRISTMAS</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            SEASON OF LOVE
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">RS.1300</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                <!--5================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-60%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="Controller/uploads/festive8.jpg"/>
                    <img alt="" class="product-img-back" src="Controller/uploads/festive9.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>CHRISTMAS</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            SHARING OF HAPPINESS AND CARING
                        </a>
                        <!--Price-->
                        <div class="price-buy">
                            <span class="p-price">RS.1200</span>
                            <a href="#" class="p-buy-btn">Buy Now</a>
                        </div>
                    </div>
        
                </div>
                </div>
                
        </div>
        </div>
        </div>
        </section>
<!-- slider end  -->
    </div>
</div>
</div>


<!-- festive collection end -->

<!-- join-features-aboutus start  -->

<div class="join-features-aboutus"></div>
<!-- join-features-aboutus end  -->

<!-- testimonial start  -->
<div class="testimonial">
    <h1 class="categories__head">testimonial</h1>
    <div class="trending__bg">
        <div class="trending__img">
            <button class="trending__img__button">View All +</button>

            <div class="image-container">
                <div class="testimonials">
                    <div class="testimonial__main">
                        <div class="testimonial__main__content">            
                            <img src=
                                "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                                <div class="testimonial__main__content__text">
                                    <h3>Ishana P</h3>
                                    <p>Our wedding ring box was absolutely beautiful. The engraving turned out clean and nice. It was a pleasure working with Lohatec. Clyde and the team were very helpful with informative tips throughout the process and ensured we achieved what we wanted. We were extremely happy with the finished product and will most certainly be returning in the future. Highly recommended. Thanks guys!
                                        </p>
                                    
                                </div>
                            </div> 
                    <div class="testimonial__main__content">            
                    <img src=
                        "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                        <div class="testimonial__main__content__text">
                            <h3>Janice R</h3>
                            <p>Brilliant work! Gave me a completely customised order of a complete range of items (wooden, painted, etc) I wanted for my wedding. Highly recommend these creative guys. Very committed and delivered in time. Made themselves available at all times. Already planning a bunch of custom orders from them for my new home.
                                </p>
                            
                        </div>
                    </div>
                    <div class="testimonial__main__content">            
                        <img src=
                            "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                            <div class="testimonial__main__content__text">
                                <h3>Suneera M</h3>
                                <p>The best products that I have personally got done when it comes to mdf and yes you get creative they can get it executed! Quality super and give them exact details of what you want and you surely will be one happy customer.. Going back to then for more! Great going team!
                                    </p>
                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials">
                    <div class="testimonial__main">
                        <div class="testimonial__main__content">            
                            <img src=
                                "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                                <div class="testimonial__main__content__text">
                                    <h3>Ishana P</h3>
                                    <p>Our wedding ring box was absolutely beautiful. The engraving turned out clean and nice. It was a pleasure working with Lohatec. Clyde and the team were very helpful with informative tips throughout the process and ensured we achieved what we wanted. We were extremely happy with the finished product and will most certainly be returning in the future. Highly recommended. Thanks guys!
                                        </p>
                                    
                                </div>
                            </div>
                    <div class="testimonial__main__content">            
                    <img src=
                        "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                        <div class="testimonial__main__content__text">
                            <h3>Janice R</h3>
                            <p>Brilliant work! Gave me a completely customised order of a complete range of items (wooden, painted, etc) I wanted for my wedding. Highly recommend these creative guys. Very committed and delivered in time. Made themselves available at all times. Already planning a bunch of custom orders from them for my new home.
                                </p>
                            
                        </div>
                    </div>
                    <div class="testimonial__main__content">            
                        <img src=
                            "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                            <div class="testimonial__main__content__text">
                                <h3>Suneera M</h3>
                                <p>The best products that I have personally got done when it comes to mdf and yes you get creative they can get it executed! Quality super and give them exact details of what you want and you surely will be one happy customer.. Going back to then for more! Great going team!
                                </p>
                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials">
                    <div class="testimonial__main">
                        <div class="testimonial__main__content">            
                            <img src=
                                "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                                <div class="testimonial__main__content__text">
                                    <h3>Ishana P</h3>
                                    <p>Our wedding ring box was absolutely beautiful. The engraving turned out clean and nice. It was a pleasure working with Lohatec. Clyde and the team were very helpful with informative tips throughout the process and ensured we achieved what we wanted. We were extremely happy with the finished product and will most certainly be returning in the future. Highly recommended. Thanks guys!
                                        </p>
                                    
                                </div>
                            </div>
                    <div class="testimonial__main__content">            
                    <img src=
                        "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                        <div class="testimonial__main__content__text">
                            <h3>Janice R</h3>
                            <p>Brilliant work! Gave me a completely customised order of a complete range of items (wooden, painted, etc) I wanted for my wedding. Highly recommend these creative guys. Very committed and delivered in time. Made themselves available at all times. Already planning a bunch of custom orders from them for my new home.
                                </p>
                            
                        </div>
                    </div>
                    <div class="testimonial__main__content">            
                        <img src=
                            "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                            <div class="testimonial__main__content__text">
                                <h3>Suneera M</h3>
                                <p>The best products that I have personally got done when it comes to mdf and yes you get creative they can get it executed! Quality super and give them exact details of what you want and you surely will be one happy customer.. Going back to then for more! Great going team!
                                </p>
                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials">
                    <div class="testimonial__main">
                        <div class="testimonial__main__content">            
                            <img src=
                                "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                                <div class="testimonial__main__content__text">
                                    <h3>Ishana P</h3>
                                    <p>Our wedding ring box was absolutely beautiful. The engraving turned out clean and nice. It was a pleasure working with Lohatec. Clyde and the team were very helpful with informative tips throughout the process and ensured we achieved what we wanted. We were extremely happy with the finished product and will most certainly be returning in the future. Highly recommended. Thanks guys!
                                        </p>
                                    
                                </div>
                            </div>
                    <div class="testimonial__main__content">            
                    <img src=
                        "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                        <div class="testimonial__main__content__text">
                            <h3>Janice R</h3>
                            <p>Brilliant work! Gave me a completely customised order of a complete range of items (wooden, painted, etc) I wanted for my wedding. Highly recommend these creative guys. Very committed and delivered in time. Made themselves available at all times. Already planning a bunch of custom orders from them for my new home.
                                </p>
                        </div>
                    </div>
                    <div class="testimonial__main__content">            
                        <img src=
                            "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                            <div class="testimonial__main__content__text">
                                <h3>Suneera M</h3>
                                <p>The best products that I have personally got done when it comes to mdf and yes you get creative they can get it executed! Quality super and give them exact details of what you want and you surely will be one happy customer.. Going back to then for more! Great going team!
                                </p>
                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials">
                    <div class="testimonial__main">
                        <div class="testimonial__main__content">            
                            <img src=
                                "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&">
                                <div class="testimonial__main__content__text">
                                    <h3>Ishana P</h3>
                                    <p>Our wedding ring box was absolutely beautiful. The engraving turned out clean and nice. It was a pleasure working with Lohatec. Clyde and the team were very helpful with informative tips throughout the process and ensured we achieved what we wanted. We were extremely happy with the finished product and will most certainly be returning in the future. Highly recommended. Thanks guys!
                                        </p>
                                    
                                </div>
                            </div>
                    <div class="testimonial__main__content">            
                    <img src=
                        "/img/ring-img.png">
                        <div class="testimonial__main__content__text">
                            <h3>Janice R</h3>
                            <p>Brilliant work! Gave me a completely customised order of a complete range of items (wooden, painted, etc) I wanted for my wedding. Highly recommend these creative guys. Very committed and delivered in time. Made themselves available at all times. Already planning a bunch of custom orders from them for my new home.
                                </p>
                        </div>
                    </div>
                    <div class="testimonial__main__content">            
                        <img src=
                            "/img/ring-img.png">
                            <div class="testimonial__main__content__text">
                                <h3>Suneera M</h3>
                                <p>The best products that I have personally got done when it comes to mdf and yes you get creative they can get it executed! Quality super and give them exact details of what you want and you surely will be one happy customer.. Going back to then for more! Great going team!
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Next and Previous icon to change images -->
                <a class="prev" onclick="moveSlides3(-1)">
                    <i class="fa fa-chevron-circle-left"></i>
                </a>
                <a class="next1" onclick="moveSlides3(1)">
                    <i class="fa fa-chevron-circle-right"></i>
                </a>
            </div>
    
            <br>
    
            <div style="text-align:center">
                <span class="footerdot3"
                    onclick="activeSlide3(1)">
                </span>
                <span class="footerdot3"
                    onclick="activeSlide3(2)">
                </span>
                <span class="footerdot3"
                    onclick="activeSlide3(3)">
                </span>
                <span class="footerdot3"
                    onclick="activeSlide3(4)">
                </span>
                <span class="footerdot3"
                    onclick="activeSlide3(5)">
                </span>
            
            </div>
        </div>

       
    </div>
    
<!-- slider  -->

<!-- slider end  -->
</div>


<!-- testimonial end  -->
<div class="footer"></div>
<?php include "footer.php" ?>

</body>
<script src="js/headerslider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="js/popular.js"></script>
<script src="js/trendingslider.js"></script>
<script src="js/festive.js"></script>
<script>
    // bottom category start 
    var elems = document.getElementsByClassName('bottom_category__wedding');
    var el= document.getElementsByClassName("bottom_category__birthday");
    var el2= document.getElementsByClassName("bottom_category__head");
for (var i=0;i<elems.length;i+=1){
  elems[i].style.display = 'block';
  el[i].style.display = 'none';
}
    
    function category(n){
        if(n===2){
            for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'none';
            el[i].style.display = 'block';
            el2[i].classList.add('active3');   
        } 
       
        }
    }
    // bottom category end
</script>
<script>
    $(document).ready(function(){
       
       $('.navbar1').load("nav.html");
       $('.join-features-aboutus').load("join_features_aboutus.html");
       $('.footer').load("footer.html");
    
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.4/swiper-bundle.min.js" integrity="sha512-Hvn3pvXhhG39kmZ8ue3K8hw8obT4rfLXHE5n+IWNCMkR6oV3cfkQNUQqVvX3fNJO/JtFeo/MfLmqp5bqAT+8qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <!--==script=======================================-->
    <script>
        /*Initialize Swiper*/
       var swiper = new Swiper(".mySwiper", {
         slidesPerView: 1,
         spaceBetween: 10,
         pagination: {
           el: ".swiper-pagination",
           clickable: true,
         },
         autoplay: {
         delay: 6000,
         disableOnInteraction: false,
       },
         navigation: {
         nextEl: ".swiper-button-next",
         prevEl: ".swiper-button-prev",
       },
         breakpoints: {
           360: {
             slidesPerView: 1.5,
             spaceBetween: 20,
           },
           540: {
             slidesPerView: 2,
             spaceBetween: 20,
           },
           1200: {
             slidesPerView: 4,
             spaceBetween: 40,
           },
           1024: {
             slidesPerView: 3,
             spaceBetween: 20,
           },
         },
       })
    </script>
<script src="js/testimonial.js"></script>
</html>


