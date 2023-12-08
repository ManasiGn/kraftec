<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();


 if(isset($_POST['add']))
  {
  $a= $_POST['pname'];
   $b=$_POST['description'];
    $c=$_POST['cost'];
    $d=$_POST['qty'];
  
  // $e=$_POST['gender'];
  //$e=$_POST['expdate'];
  //$f=$_POST['a_id'];

  $s=$_POST['stock'];

$date= date("Y/m/d");

 $target_dir="uploads/";
  


   if(strpos($_FILES["pimage"]["name"], ".png") != false ||strpos($_FILES["pimage"]["name"], ".jpeg") != false||strpos($_FILES["pimage"]["name"], ".jpg") != false)

{

  $image = $target_dir.basename($_FILES["pimage"]["name"]);
   move_uploaded_file($_FILES["pimage"]["tmp_name"],$image);

    $catg=$_POST['catg'];
    $p='Accept';


// $g=$_POST['flatname'];

$stmt=$admin->cud("INSERT INTO `product`(`pname`,`description`,`cost`,`qty`,`pimage`,`stock`,`catg`)VALUES 
        ('".$a."','".$b."','".$c."','".$d."',,'".$image."','".$s."','".$catg."')","saved");
      $admin -> redirect('../admin/viewproduct');
 }
else{
    echo "<script>alert('PLEASE ADD AN IMAGE(\".png\", \".jpeg\" or \".jpg\")');
    window.location.href='../admin/addmedicine.php';
    </script>";

}
}

 if(isset($_POST['update']))
  {
  $a= $_POST['pname'];
   $b=$_POST['description'];
    $c=$_POST['cost'];
    $d=$_POST['qty'];
  
  // $e=$_POST['gender'];
  //$e=$_POST['expdate'];
  //$f=$_POST['ma_id'];

  $s=$_POST['stock'];


 $target_dir="uploads/";
  $image = $target_dir.basename($_FILES["pimage"]["name"]);
   move_uploaded_file($_FILES["pimage"]["tmp_name"],$image);
   $id=$_POST['pid'];

  $catg=$_POST['catg'];


// $g=$_POST['flatname'];


   $date= date("Y/m/d");
if($_FILES["pimage"]["name"]=="")
{
  $stmt=$admin -> cud("UPDATE `product` SET `pname`='$a',`description`='$b',`cost`='$c',`qty`='$d',`stock`='$s',`catg`='$catg' WHERE `pid`='$id'","updated");
  $admin -> redirect('../admin/viewproduct');
}
else
{
  $target_dir="uploads/";
  $image = $target_dir.basename($_FILES["pimage"]["name"]);
   move_uploaded_file($_FILES["pimage"]["tmp_name"],$image);
   $id=$_POST['pid'];

  $catg=$_POST['catg']; 
$stmt=$admin -> cud("UPDATE `product` SET `pname`='$a',`description`='$b',`cost`='$c',`qty`='$d',`pimage`='$image',`stock`='$s',`catg`='$catg' WHERE `pid`='$id'","updated");
  $admin -> redirect('../admin/viewproduct');
}

 }





?>