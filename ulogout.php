<?php

define('DIR','');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

    if(isset($_SESSION['uid'])){
        session_destroy();
        unset($_SESSION['uid']);
         $admin -> redirect('login/userlogin');
    }  

?>
