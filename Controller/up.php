<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();


    $a=$_POST['uid'];
    $b=$_POST['rid'];
   
  


 $target_dir="uploads/";
  $image = $target_dir.basename($_FILES["pimage"]["name"]);
   move_uploaded_file($_FILES["pimage"]["tmp_name"],$image);

 


   


      $stmt=$admin->cud("INSERT INTO `prescription`(`uid`,`rid`,`image`)VALUES 
        ('".$a."','".$b."','".$image."')","saved");
  $admin -> redirect('../manager/viewpres');











?>