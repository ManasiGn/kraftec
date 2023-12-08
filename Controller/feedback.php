<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();


 if(isset($_POST['add']))
  {
  $a= $_SESSION['uid'];
   $b=$_POST['f'];
   $z=$_POST['z'];
  
   $date= date("Y/m/d");




   


      $stmt=$admin->cud("INSERT INTO `feedback`(`user_id`,`feedback`,`fdate`,`uname`)VALUES 
        ('".$a."','".$b."','".$date."','".$z."')","saved");
      echo '<script>alert("THANK YOU FOR YOUR FEEDBACK");
    window.location.href="../indes.php";</script>';
 #$admin -> redirect('../indes');
 }









?>