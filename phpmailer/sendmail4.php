<?php
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings Signed out


   
 
   $e= $_GET['email'];
   $n=$_GET['name'];

$id=$_GET['id'];
 $u='rejected';
$stmt=$admin -> cud("UPDATE `request` SET `rstatus`='$u' WHERE `rid`='$id'","updated"); 




// echo $e;
// echo $n;
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'kraftec@gmail.com';                     // SMTP username
    $mail->Password   = 'cfsgjfpchmlkxjfd';                               // SMTP password
    $mail->SMTPSecure = 'ssl';;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('kraftec@gmail.com', 'KRAFTEC');
    $mail->addAddress($e, $n);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'HELLO '.$n.'!';
    $mail->Body    = nl2br("Your Prescription has been rejected.\n Your prescription is unclear or incorrect.");
    $mail->AltBody = 'THANKYOU!!';

    $mail->send();

 $admin->redirect1('../admin/viewpres.php');
     //what you should do after sending mail

    exit();
} catch (Exception $e) {
    
    //error if somthing went wrong

    echo '<script>alert("Message could not be sent.")</script>';
}
?>