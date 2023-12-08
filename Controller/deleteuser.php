<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin(); 





$id=$_GET['id'];

$stmt = $admin->cud("DELETE FROM `user` where `uid`='$id'","Deleted");


  
   echo "<script>alert('data deletes successfully');window.location='../admin/viewuser.php';</script>";

 // $admin->redirect('../display');	

// 
	

?>