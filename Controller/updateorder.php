<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();

{
 echo $id = $_GET['id'];
$stmt=$admin -> cud("UPDATE `order` SET `ostatus`='Accept' WHERE orid='$id'","updated");
 $admin -> redirect('../manager/vieworder');
 }
if(isset($_GET['reject']))
{
 $id = $_GET['id'];
 $stmt=$admin -> cud("UPDATE `order` SET `ostatus`='Reject' WHERE orid='$id'","updated");
 $admin -> redirect('../manager/vieworder');
 }

?>