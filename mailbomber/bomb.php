<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions



function bomb($username, $password, $fromEmail, $fromName, $mails, $subject, $body)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.mail.yahoo.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $username;                     // SMTP username
        $mail->Password   = $password;                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom($fromEmail, $fromName);

        foreach ($mails as $bcc) {
            $mail->addBCC($bcc);
        }
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
    
        $mail->send();
        echo 'sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// $data = json_decode(file_get_contents("php://input"));

$username = $_POST['username'];
$password = $_POST['password'];
$fromEmail = $_POST['fromEmail'];
$fromName = $_POST['fromName'];
$mails = $_POST['mails'];
$subject = $_POST['subject'];
$body = $_POST['body'];

bomb($username, $password, $fromEmail, $fromName, $mails, $subject, $body);
