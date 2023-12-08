<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();


 if(isset($_POST['update']))
  {
  $o=$_POST['opassword'];
  $f=$_POST['upassword'];
  $g=$_POST['u_c_password'];

$stmt=$admin->ret("SELECT * FROM `admin`where
   aid=1 and password='$o' ");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();

if($num>0)


{


  if($f==$g)
  {

  $stmt=$admin -> cud("UPDATE `admin` SET `password`='$f' WHERE `aid`= 1","updated");
    echo '<script type="text/javascript">alert("UPDATED SUSSEFULLY");
        window.location.href="../admin/index.php"</script>';
  }

else
{

  echo '<script type="text/javascript">alert("BOTH PASSWORS SHOULD MATCH");
        window.location.href="../admin/changepass.php "</script>';
  }
}

else
{
echo '<script type="text/javascript">alert("Mismatch");
        window.location.href="../admin/changepass.php "</script>';
}

}