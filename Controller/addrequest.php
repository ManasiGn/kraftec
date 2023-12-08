<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();


 if(isset($_POST['add']))
  {
  $a= $_SESSION['uid'];
  $n=$_POST['n'];
  $e=$_POST['e'];
  
   $date= date("Y/m/d");
   $target_dir="uploads/";

   if(strpos($_FILES["presimage"]["name"], ".png") != false ||strpos($_FILES["presimage"]["name"], ".jpeg") != false||strpos($_FILES["presimage"]["name"], ".jpg") != false)
   {
    $image = $target_dir.basename($_FILES["presimage"]["name"]);
       move_uploaded_file($_FILES["presimage"]["tmp_name"],$image);

          $stmt=$admin->cud("INSERT INTO `request`(`u_id`,`presimage`,`rdate`,`uname`,`uemail`)VALUES 
            ('".$a."','".$image."','".$date."','".$n."','".$e."')","saved");
           $admin -> redirect('../indes');
   }
   else{
    echo "<script>alert('PLEASE ADD AN IMAGE(\".png\", \".jpeg\" or \".jpg\")');
    window.location.href='../indes.php';
    </script>";
   }
 }

?>