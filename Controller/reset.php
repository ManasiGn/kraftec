<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();







 if(isset($_POST['update']))
  {
  
  $f=$_POST['upassword'];
  $g=$_POST['u_c_password'];

  $id=$_POST['upid'];
 



if ($f!=$g) 
{

  echo '<script type="text/javascript">alert("BOTH PASSWORS SHOULD MATCH");
        window.location.href="../login/resetpassword.php?upid='.$id.' "</script>';
  }
  else
  {
$date= date("Y/m/d");



// $g=$_POST['flatname'];


    
$stmt=$admin -> cud("UPDATE `user` SET `upassword`='$f',`udate`='$date' WHERE `uid`='$id'","updated");

echo '<script type="text/javascript">alert("PASSWORD RESET SUSSEFULLY");
        window.location.href="../login/userlogin.php"</script>';



 }
}









?>