<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();


 if(isset($_POST['add']))
  {
  $a= $_POST['a'];
$id = $_POST['id'];
$stmt=$admin -> cud("UPDATE `product` SET `stock`='$a' WHERE `pid`='$id'","updated");
$admin -> redirect('../manager/viewpresstock');
 }


?>