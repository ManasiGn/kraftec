<?php 
define('DIR','');
require_once DIR .'config.php';
$contol = new Controller();
$admin = new Admin();
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


  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans");

html{
    background: #E6F0ED;
    background: -webkit-linear-gradient(#E6F0ED, #A7D9F0); /*Safari*/
    background: -o-linear-gradient(#E6F0ED, #A7D9F0); /*Opera*/
    background: -moz-linear-gradient(#E6F0ED, #A7D9F0); /*Firefox*/
    background: linear-gradient(#E6F0ED, #A7D9F0);
    background-size: cover;
    height:100%;
}

body{
  margin:0 0 0 0;
}

h1 {
  font-family: Open Sans, "Helvetica", sans-serif;
  text-align:center;
  color:#999;
  font-size:24px;
  font-weight:100;
  letter-spacing:1px;
  padding-top:10px;
}
.left-nav:hover{
  cursor:pointer;
  color:#298bbb;
}
.left-nav:hover polyline{
  stroke:#298bbb;
}
.nav-text:hover {
  color:#298bbb;
  cursor:pointer;
}
.back-arrow{
  display:inline;
  float:left;
  padding-left:20px;
  padding-top:17px;
}
.back-arrow:hover polyline{
}
.nav-text {
  display:inline;
  float:left;
  padding-top:19px;
  padding-left:12px;
  width:200px;
  font-family: Open Sans,"Helvetica", sans-serif;
  text-transform:uppercase;
  font-weight:700;
  text-align:left;
  color:#4CC4FF;
  font-size:12px;
  letter-spacing:2px;
}
.close-x {
  display:inline;
  padding-right:20px;
  padding-top:17px;
  float:right;
}
.close-x:hover{
  cursor:pointer;
}
.close-x:hover g{
  stroke:red;
}
.widget-container {
  position: absolute;
  top: 50%;
  left:50%;
  margin-top:-215px;
  margin-left:-175px;
  background:#fff;
  width: 350px;
  height:436px;
  box-shadow: 0px 0px 40px #A3BBC3;
}
.inputs{
  margin: 10px 20px 30px 20px;
  padding:3px 20px;
  display:inline-block;
  background:#fbfbfb
    ;
  border-radius: 4px;
  -moz-box-shadow:    inset 0px 1px 5px #dadada;
  -webkit-box-shadow: inset 0px 1px 5px #dadada;
  box-shadow:         inset 0px 1px 5px #dadada;
}
.top-nav{
  background:#fff;
  height:50px;
  width:100%;
  display:inline-block;
  border-bottom:1px solid #f1f1f1;
}

input {
  background:#fbfbfb;
  border:none;
  outline:none;
  height:60px;
  font-size:14px;
  letter-spacing:1px;
  color:#434343;
  width:227px;
  position:relative;
  float:left;
  border-bottom:1px solid #f1f1f1;
  font-family: Open Sans,"Helvetica", sans-serif;
}
.card-icon{
  display:relative;
  float:left;
  width:21px;
  padding-top:20px;
  margin-right:20px;
}
.left-input{
  width:150px;
  display:inline-block;
  float:left;
}
.right-input{
  width:100px;
  display:inline-block;
  float:left;
}
.right-input input{
  width:50px;
  display:inline-block;
  float:left;
}
.month{
  width:35px;
  display:inline-block;
  float:left;
}
.year{
  width:50px;
  display:inline-block;
  float:left;
}
.slash{
  display:inline-block;
  float:left;
  padding-top:22px;
  padding-right:10px;
}
.last {
  border-bottom:none;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  letter-spacing:2px;
  color:#d1d1d1; 
}
::-moz-placeholder { /* Firefox 19+ */
  letter-spacing:2px;
  color:#d1d1d1;
}
:-ms-input-placeholder { /* IE 10+ */
  letter-spacing:2px;
  color:#d1d1d1;
}
:-moz-placeholder { /* Firefox 18- */
  letter-spacing:2px;
  color:#d1d1d1;
}

.btn_style{
  background:#4CC4FF;
  color:#fff;
  text-align:center;
  border-bottom:none;
  height: 70px;
  font-size:20px;
  font-weight:900;
  text-transform:uppercase;
  letter-spacing:2px;
  -webkit-transition: all .2s;
  transition: all .2s;
  width:350px;
  margin-top:3px;
}
.btn_style:hover{
  background:#298bbb;
  -webkit-transition: all .2s;
  transition: all .2s;
  cursor:pointer;
}



  </style>
</head>

<body style="background-color:powderblue;">

  <!-- ======= Header ======= -->
  <?php include "header.php" ?>

  <!-- ======= Hero Section ======= -->
  

  <main id="main">

    <!-- ======= Cliens Section ======= -->
   <html>
  <head>
    <meta charset="UTF-8">
    <title>DailyUI - 002</title>
  </head>
  <body>
  <div class="background">
    <div class="widget-container">
       <div class="top-nav">
         <div class="left-nav">
           <div class="back-arrow">
             <svg width="10px" height="17px" viewBox="0 0 10 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
             <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
               <polyline id="Path-2" stroke="#2EC4FE" stroke-width="2" points="8.99665918 16 1.48001099 8.48335181 8.98002946 0.983333333"></polyline>
             </g>
             </svg>
           </div>
           <div class="nav-text">
             shipping
           </div>
         </div>
     <div class="close-x">
       <svg width="15px" height="15px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
        <g id="Group" transform="translate(1.000000, 1.000000)" stroke="#777" stroke-width="2">
            <path d="M0,12.7279221 L12.7279221,0" id="Path"></path>
            <path d="M0,12.7279221 L12.7279221,0" id="Path" transform="translate(6.363961, 6.363961) scale(1, -1) translate(-6.363961, -6.363961) "></path>
        </g>
    </g>
</svg>
     </div>
   </div>
   <h1> Credit Card Info</h1>     
   <form action="#">
     <div class="inputs">
       <div class="card-icon">
         <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE5cHgiIGhlaWdodD0iMjBweCIgdmlld0JveD0iMCAwIDE5IDIwIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCAzOS4xICgzMTcyMCkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+Q29tYmluZWQgU2hhcGU8L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPgogICAgICAgIDxwYXRoIGQ9Ik0xLDE4LjYyNjQ2NDggQzEsMTguNjI2NDY0OCAxLjU1MTkzNDUzLDEzLjA3MzM4ODQgNi4yMDg3NTAyOCwxMS4xMDcxOTQzIEM0LjcwNjUwODA2LDEwLjEyNTMzMjkgMy43MTM4NjcxOSw4LjQyODU4ODMxIDMuNzEzODY3MTksNi41IEMzLjcxMzg2NzE5LDMuNDYyNDMzODggNi4xNzYzMDEwNiwxIDkuMjEzODY3MTksMSBDMTIuMjUxNDMzMywxIDE0LjcxMzg2NzIsMy40NjI0MzM4OCAxNC43MTM4NjcyLDYuNSBDMTQuNzEzODY3Miw4LjI2MTMyMDQzIDEzLjg4NTk0NDQsOS44MjkyNjkxMyAxMi41OTgwNDA3LDEwLjgzNTkwNDIgQzE3LjgzODUwNTgsMTIuNTM1NzE4NiAxNy44ODM1MTA2LDE4Ljk1ODAwNzggMTcuODgzNTEwNiwxOC45NTgwMDc4IEw2LjY5MTQwNjI1LDE4Ljk1ODAwNzgiIGlkPSJDb21iaW5lZC1TaGFwZSIgc3Ryb2tlPSIjQUI5MkE1IiBzdHJva2Utd2lkdGg9IjIiPjwvcGF0aD4KICAgIDwvZz4KPC9zdmc+" />
       </div>
       <input type="text" name="name" placeholder="Name on Card">
       <div class="card-icon">
         <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjIxcHgiIGhlaWdodD0iMThweCIgdmlld0JveD0iMCAwIDIxIDE4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCAzOS4xICgzMTcyMCkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+Y2FyZDwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIGlkPSJjYXJkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxLjAwMDAwMCwgMS4wMDAwMDApIiBzdHJva2U9IiNBQTkxQTQiIHN0cm9rZS13aWR0aD0iMiI+CiAgICAgICAgICAgIDxwb2x5bGluZSBpZD0iUmVjdGFuZ2xlIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHBvaW50cz0iMCAxNiAwIDAgMTkgMCAxOSAxNCA2LjAxNjgyMTI5IDE0Ij48L3BvbHlsaW5lPgogICAgICAgICAgICA8cGF0aCBkPSJNMC4wMzI3MTQ4NDM4LDUuNTgyMjc1MzkgTDE4LjE5NTE3NTksNS41ODIyNzUzOSIgaWQ9IlBhdGgtMiI+PC9wYXRoPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+" />
       </div>
       <input type="text" onkeypress='validate(event)' name="number" placeholder="Card Number">
       <div class="left-input">
       <div class="card-icon">
         <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjIxcHgiIGhlaWdodD0iMjJweCIgdmlld0JveD0iMCAwIDIxIDIyIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCAzOS4xICgzMTcyMCkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+R3JvdXA8L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPgogICAgICAgIDxnIGlkPSJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS4wMDAwMDAsIDEuMDAwMDAwKSIgc3Ryb2tlPSIjQUE5MUE2IiBzdHJva2Utd2lkdGg9IjIiPgogICAgICAgICAgICA8cG9seWxpbmUgaWQ9IlJlY3RhbmdsZS0yIiBwb2ludHM9IjE1LjE5MTQwNjIgMiAxOSAyIDE5IDIwIDAgMjAgMCAyIDAgMiA0LjE2MzMzMDA4IDIiPjwvcG9seWxpbmU+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0xMiwwIEwxMiw1LjkwMjczMzk2IiBpZD0iUGF0aC0zIj48L3BhdGg+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik03LDAgTDcsNS45MDI3MzM5NiIgaWQ9IlBhdGgtMy1Db3B5Ij48L3BhdGg+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" />
       </div>
         <input class="last month" type="text" onkeypress='validate(event)' maxlength="2" name="month-exp" placeholder="MM">
         <span class="slash">/</span>
         <input class="last year" type="text" onkeypress='validate(event)' maxlength="2" name="year-exp" placeholder="YY">
       </div>
       
       <div class="right-input">
         <div class="card-icon">
         <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjIxcHgiIGhlaWdodD0iMjNweCIgdmlld0JveD0iMCAwIDIxIDIzIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCAzOS4xICgzMTcyMCkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+R3JvdXAgMjwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIGlkPSJHcm91cC0yIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxLjAwMDAwMCwgMS4wMDAwMDApIiBzdHJva2U9IiNBQTkyQTIiIHN0cm9rZS13aWR0aD0iMiI+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNSw2IEMxNSwyLjY4NjI5MTUgMTIuMzEzNzA4NSwwIDksMCBDNS42ODYyOTE1LDAgMywyLjY4NjI5MTUgMyw2IiBpZD0iT3ZhbC0yIj48L3BhdGg+CiAgICAgICAgICAgIDxwb2x5bGluZSBpZD0iUmVjdGFuZ2xlLTMiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgcG9pbnRzPSIwIDIxIDAgNyAwIDcgMTkgNyAxOSAyMSA2LjA0MzIxMjg5IDIxIj48L3BvbHlsaW5lPgogICAgICAgICAgICA8Y2lyY2xlIGlkPSJPdmFsIiBjeD0iMTAiIGN5PSIxNCIgcj0iMiI+PC9jaXJjbGU+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" />
       </div>
         <input class="last" onkeypress='validate(event)' type="text" maxlength="3" name="cvc" placeholder="CVV">
       </div>
       
     </div>
     
     <input class="btn_style" type="submit" value="Purchase">
    </form>
  </div>
</div>
</body>
</html>

    <!-- ======= Cta Section ======= -->
  

    <!-- ======= Portfolio Section ======= -->
   

    <!-- ======= Team Section ======= -->
    
 
    <!-- ======= Pricing Section ======= -->
    <script>
      function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}



    </script>
    <!-- ======= Frequently Asked Questions Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        <strong><span>.</span></strong>
      </div>
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