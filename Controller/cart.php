<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();


 if(isset($_POST['add']))
  {
 
    $c=$_POST['cost'];
    $d=$_POST['qty'];
  $vb=$_POST['vb'];
  // $e=$_POST['gender'];

$a=$c*$d;

$b=$_POST['prid'];
  

$date= date("Y/m/d");
$i=$_SESSION['uid'];

 $os='pending';
 // $pi=$_GET['pi'];

// $g=$_POST['flatname'];

//  $stmt2 = $admin->ret("SELECT * FROM `order` ");
//    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
//      $p = $row['prid'];

//      if($p==$b){

//      	echo "product added already";

//      }
// else{
   
$stmt=$admin->cud("INSERT INTO `cart`(`cust_id`, `p_id`, `quantity`,`total`, `date`) VALUES ('".$i."','".$b."','".$d."','".$a."','".$date."')","saved");

      // $stmt=$admin->cud("INSERT INTO `order`(`total`,`prid`,`cost`,`qty`,`odate`,`usid`,`ostatus`)VALUES 
      //   ('".$a."','".$b."','".$c."','".$d."','".$date."','".$i."','".$os."')","saved");

   //    $stmt1 = $admin->ret("SELECT * FROM `product` where pid='".$b."' ");
   // $row = $stmt1->fetch(PDO::FETCH_ASSOC);
   // $q = $row['qty'];

   // $r=$q-$d;
   // echo $r;




           // $xstmt = $admin -> ret("SELECT * FROM `order` WHERE prid='$b'");
           // $sum=0;
           // while($xrow = $xstmt -> fetch(PDO::FETCH_ASSOC)){
           // $qty=$xrow['qty'];
           // $sum=$sum+$qty;
           //  $orid=$xrow['orid'];
           // $r=$count-$d;
           

        // }

   //      $stmt=$admin->cud("INSERT INTO `orderdetails`(`orid`,`total`,`prid`,`cost`,`qty`,`odate`,`usid`,`ostatus`)VALUES 
   //      ('".$orid."','".$a."','".$b."','".$c."','".$d."','".$date."','".$i."','".$os."')","saved");
         
   //  $xst = $admin -> ret("SELECT * FROM `product` WHERE pid='$b'");
   //  $xro = $xst -> fetch(PDO::FETCH_ASSOC);
   //  $qt=$xro['qty'];
       

   //      echo $sum;

   // $r=$qt-$sum;
   // echo $r;

 // $stmt4=$admin -> cud("UPDATE `product` SET `stock`='".$r."' WHERE `pid`='$pi'","updated");
    


// $stmtn=$admin -> cud("UPDATE `product` SET `stock`='$r' WHERE `pid`='$b'","updated");


// }


// echo "<script>
// window.location.href='../product.php?cid=$vb';
// </script>";

echo "<script>alert('Product added successfully');window.location='../viewcart.php';</script>";

 }









?>