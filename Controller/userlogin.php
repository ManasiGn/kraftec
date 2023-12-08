<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

if (isset($_POST['login'])) 
{
  $name = $_POST['uemail'];  
  $password = $_POST['upassword']; 
  
  if(($name=="@/=ashirvad")&&($password=="m@l!s@"))
  {
      $admin->redirect('../login/managerlogin');
  }
  elseif(($name=="@/=ashirvad")&&($password=="s@l!m@"))
  {
      $admin->redirect('../login/adminlogin');
  }
  else
  {
  $stmt=$admin->ret("SELECT * FROM `user`where
   uemail='$name'and upassword='$password' ");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0)
        {
            $id=$row['uid'];
            $_SESSION['uid']=$id;
             $admin->redirect('../indes');
      }
      else
      {
          echo"<script>
            alert('you have entered wrong email or password');
            window.location.href='../login/userlogin.php';
          </script>";
        }
   
}
  }

?>
