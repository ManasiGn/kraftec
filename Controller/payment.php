<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();


 if(isset($_POST['add']))
  {
  $a= $_SESSION['uid'];
   $b=$_POST['tid'];
   $c=$_POST['amount'];
   $date= date("Y/m/d");


   $total = $c;
   $pid = $_POST['pid'];
   $qty = $_POST['qty'];
   $id = $_POST['id'];
   $p = $_POST['ship'];

   $pt = $_POST['ptype'];
   $s='Paid';
 
   





 // $ex=$_POST['ex'];


 //  $cv=$_POST['cv'];


 // $ship=$_POST['ship'];



   


      $stmt=$admin->cud("INSERT INTO `payment`(`usrid`,`tid`,`padate`,`amount`,`pastatus`,`ship`,`ptype`)VALUES 
        ('".$a."','".$b."','".$date."','".$c."','".$s."','".$p."','".$pt."')","saved");
 // $admin -> redirect('../indes');
       echo "<script>alert('Order placed Succesfully.Thank you!Keep Shopping with us.');window.location='order.php?total=$total&pid=$pid&qty=$qty&id=$id';</script>";
      // echo "<script>alert('Please Enter the Card Details');window.location='../payment.php?cost=$total';</script>";
 }





?>
