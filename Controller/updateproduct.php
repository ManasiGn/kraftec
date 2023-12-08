<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();

{
 echo $id = $_GET['id'];
$stmt=$admin -> cud("UPDATE `product` SET `pstatus`='Accept' WHERE pid='$id'","updated");
$admin -> redirect('../admin/viewproduct');
 }
if(isset($_GET['reject']))
{
 $id = $_GET['id'];
 $stmt=$admin -> cud("UPDATE `product` SET `pstatus`='Reject' WHERE pid='$id'","updated");
 $admin -> redirect('../admin/viewproduct');
 }
