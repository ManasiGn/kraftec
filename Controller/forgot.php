<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

if (isset($_POST['login'])) 
{
  $name = $_POST['uemail'];  
  // // $password = $_POST['upassword']; 
  
  // if(($name=="@/=ashirvad")&&($password=="m@l!s@"))
  // {
  //     $admin->redirect('../login/managerlogin');
  // }
  // elseif(($name=="@/=ashirvad")&&($password=="s@l!m@"))
  // {
  //     $admin->redirect('../login/adminlogin');
  // }
  // else
  // {
  $stmt=$admin->ret("SELECT * FROM `user`where
   uemail='$name'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0)
        {
            $id=$row['uid'];
            $_SESSION['uid']=$id;
             // $admin->redirect('../resetpassword');

echo "<script>alert('You can Reset Your Password');window.location='../login/resetpassword.php?id=$id';</script>";
      }
      else
      {
          echo"<script>
            alert('you have entered wrong email');
            window.location.href='../login/forgotpassword.php';
          </script>";
        }
   
}
  

?>
