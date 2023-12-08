<?php

define('DIR','');
require_once DIR .'../config.php';

$control = new Controller();

$admin = new Admin();


 if(isset($_POST['add']))
  {
  $a= $_POST['uname'];
   $b=$_POST['uaddress'];
    $c=$_POST['uphone'];
    $d=$_POST['uemail'];
  
  // $e=$_POST['gender'];
  $f=$_POST['upassword'];
  $g=$_POST['u_c_password'];


// Validate password strength
$uppercase = preg_match('@[A-Z]@', $f);
$lowercase = preg_match('@[a-z]@', $f);
$number    = preg_match('@[0-9]@', $f);
$specialChars = preg_match('@[^\w]@', $f);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($f) < 8) 
{
    echo '<script>alert("Password should be atleast 8 characters in length and should include at least one upper case letter, one number, and one special character.PLEASE RE-ENTER YOUR PASSWORD");
    window.location.href="../login/userregister.php";</script>';
  }

elseif ($f!=$g) 
{

  echo '<script>alert("BOTH PASSWORS SHOULD MATCH");
    window.location.href="../login/userregister.php";</script>';
  }

else{
   
    $date= date("Y/m/d");

// $g=$_POST['flatname'];


   
/*$pos = 4;
      $begin = substr($f, 0, $pos+1);
      $end = substr($f, $pos+1);

      $f = "$".$begin.'m@l!s@'.$end."$";
      $f = hash('ripemd160', $f);*/

      
      $stmt=$admin->cud("INSERT INTO `user`(`uname`,`uphone`,`uemail`,`upassword`,`udate`,`uaddress`)VALUES 
        ('".$a."','".$c."','".$d."','".$f."','".$date."','".$b."')","saved");
 
      // $admin -> redirect('../indes');
       echo '<script>alert("Account Created Successfully");
    window.location.href="../login/userlogin.php";</script>';
}



}





 if(isset($_POST['update']))
  {
  $a= $_POST['uname'];
   $b=$_POST['uaddress'];
    $c=$_POST['uphone'];
    $d=$_POST['uemail'];
  
  // $e=$_POST['gender'];
  $o=$_POST['opassword'];
  $f=$_POST['upassword'];
  $g=$_POST['u_c_password'];

  $id=$_POST['upid'];
  $uppercase = preg_match('@[A-Z]@', $f);
$lowercase = preg_match('@[a-z]@', $f);
$number    = preg_match('@[0-9]@', $f);
$specialChars = preg_match('@[^\w]@', $f);
$stmt=$admin->ret("SELECT * FROM `user`where
   uemail='$d'and upassword='$o' ");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();

if($num>0){

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($f) < 8) 
{
    echo '<script>
    alert("Password should be atleast 8 characters in length and should include at least one upper case letter, one number, and one special character.PLEASE RE-ENTER YOUR PASSWORD");
    window.location.href="../login/updateprofile.php?upid='.$id.' "</script>';
  }

elseif ($f!=$g) 
{

  echo '<script type="text/javascript">alert("BOTH PASSWORS SHOULD MATCH");
        window.location.href="../login/updateprofile.php?upid='.$id.' "</script>';
  }
  else
  {
$date= date("Y/m/d");



// $g=$_POST['flatname'];


    
$stmt=$admin -> cud("UPDATE `user` SET `uname`='$a',`uaddress`='$b',`uphone`='$c',`uemail`='$d',`upassword`='$f',`udate`='$date' WHERE `uid`='$id'","updated");

echo '<script type="text/javascript">alert("UPDATED SUSSEFULLY");
        window.location.href="../userprofile.php?prof='.$id.' "</script>';



 }
}
else
{
echo '<script type="text/javascript">alert("Mismatch");
        window.location.href="../login/updateprofile.php?upid='.$id.' "</script>';
}
}








?>