<?php

define('DIR','');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

    if(isset($_SESSION['mid'])){
        session_destroy();
        unset($_SESSION['mid']);
         $admin->redirect('login/managerlogin');
    }  

?>