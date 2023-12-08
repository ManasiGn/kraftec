<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

if (isset($_POST['login'])) 
{
  $name = $_POST['maid'];  
  $password = $_POST['password']; 
  

  $stmt=$admin->ret("SELECT * FROM `manager`where email='$name'and password='$password' ");
 $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['mid'];
            $_SESSION['mid']=$id;
             $admin->redirect('../manager/index');
      }else{
          echo"<script>
            alert('you have entered wrong email or password');
            window.location.href='../login/managerlogin.php';
          </script>";
        }
   

  }

?>