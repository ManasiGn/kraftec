<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

if (isset($_POST['login'])) 
{
  $name = $_POST['username'];  
  $password = $_POST['password']; 
  

  $stmt=$admin->ret("SELECT * FROM `admin`where
   username='$name'and password='$password' ");
 $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['aid'];
            $_SESSION['aid']=$id;
             $admin->redirect('../admin/index');
      }else{
          echo"<script>
            alert('you have entered wrong email or password');
            window.location.href='../login/adminlogin.php';
          </script>";
        }
   

  }

?>