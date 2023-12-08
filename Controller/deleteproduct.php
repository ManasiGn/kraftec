<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin(); 





$id=$_GET['id'];

$stmt = $admin->cud("DELETE FROM `product` where pid=".$id,"Deleted");


  
   echo "<script>alert('product removed successfully');window.location='../manager/viewproduct.php';</script>";


 // $admin->redirect('../display');	

// 
	

?>