<?php

define('DIR','');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

    if(isset($_SESSION['aid'])){
        session_destroy();
        unset($_SESSION['aid']);
         $admin -> redirect('login/adminlogin');
    }  

?>