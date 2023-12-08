<?php
define('DIR', '../');
	require_once DIR .'config.php';

	$control = new Controller();
	$admin= new Admin();








if(isset($_GET['id']))
{
	$id=$_GET['id'];
	// $qty=$_GET['qty'];
	// $pid=$_GET['pid'];

	// $xst = $admin -> ret("SELECT * FROM `product` WHERE pid='$pid'");
 //    $xro = $xst -> fetch(PDO::FETCH_ASSOC);
 //    $qt=$xro['stock'];
 //    $ust=$qty+$qt;

    // $stmtn=$admin -> cud("UPDATE `product` SET `stock`='$ust' WHERE `pid`='$pid'","updated");


	$stmt=$admin -> cud("DELETE FROM `cart` WHERE `c_id`='$id'","deleted");
	$admin -> redirect('../viewcart');
}






?>

