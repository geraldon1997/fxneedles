(function(self, ns){
    var GENERIC_BUNDLE_URL = "https://fast.appcues.com/generic/main/4.19.4/appcues.main.26013ccb977c385da82e216d1d448f4bbf39435b.js";
    var ACCOUNT_DETAILS = {"GENERIC_BUNDLE_DOMAIN":"https://fast.appcues.com","GENERIC_BUNDLE_PATH":"/generic/main/4.19.4/appcues.main.26013ccb977c385da82e216d1d448f4bbf39435b.js","RELEASE_ID":"26013ccb977c385da82e216d1d448f4bbf39435b","VERSION":"4.19.4","account":{"isTrial":false,"isTrialExpired":false,"stripePlanId":"unicorn1M"},"accountId":"38325","integrations":{"segment":{"id":"segment","integrationId":"38325:segment","isEnabled":true}},"styling":{"globalBeaconColor":"#7c4dff","globalBeaconStyle":"","globalHotspotAnimation":"hotspot-animation-pulse","globalHotspotStyling":"","globalStyling":"\n.appcues-actions-right > .appcues-button.appcues-button-success, .appcues-progress-bar-success {\n    background-color: #1a82e2;\n}\n.appcues-actions-right > .appcues-button.appcues-button-success:hover {\n    background-color: #3893e8;\n}\n\n\n.appcues-actions-right .appcues-button {\n    color: #ffffff;\n}\n\n\n.appcues-actions-right .appcues-button:hover {\n    color: #ffffff !important;\n}\n\n\n.appcues-actions-left >  .appcues-button {\n    background-color: #ffffff;\n}\n.appcues-actions-left > .appcues-button:hover {\n    background-color: #ffffff;\n}\n\n\n.appcues-actions-right .appcues-button, .appcues-actions-left .appcues-button {\n    border-radius: 3px;\n}\n\n\nbody, appcues cue, .tooltip .content {\n    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;\n}\n\n\nbody h1, body h2, body h3, body h4, body h5,\nappcues cue h1, appcues cue h2, appcues cue h3, appcues cue h4, appcues cue h5,\n.tooltip .content h1, .tooltip .content h2, .tooltip .content h3, .tooltip .content h4, .tooltip .content h5 {\n    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;\n}\n\n\n  body, appcues cue, .tooltip .content {\n      color: #546b81;\n  }\n  \n\n.tooltip .content .panel {\n  background-color: #294661;\n  border-color: #294661;\n}\n\n.tooltip .content .panel:before, .tooltip .content .panel:after {\n  height: 13px;\n  width: 13px;\n  background-color: #294661;\n  border-radius: 2px;\n  border: none;\n  transform: rotate(45deg);\n}\n\n.tooltip .content .panel:after {\n  position: absolute;\n  content: \"\";\n  z-index: -1;\n}\n\n.tooltip .content.content-top .panel:before, .tooltip .content.content-top .panel:after {\n  margin-left: -7px;\n}\n\n.tooltip .content.content-top .panel:before,\n.tooltip .content.content-top .panel:after,\n.tooltip .content.content-top-left .panel:before,\n.tooltip .content.content-top-left .panel:after,\n.tooltip .content.content-top-right .panel:before,\n.tooltip .content.content-top-right .panel:after {\n  margin-top: -6px;\n}\n\n.tooltip .content.content-bottom .panel:before, .tooltip .content.content-bottom .panel:after {\n  margin-left: -7px;\n}\n\n.tooltip .content.content-bottom .panel:before,\n.tooltip .content.content-bottom .panel:after,\n.tooltip .content.content-bottom-left .panel:before,\n.tooltip .content.content-bottom-left .panel:after,\n.tooltip .content.content-bottom-right .panel:before,\n.tooltip .content.content-bottom-right .panel:after {\n  margin-bottom: -6px;\n}\n\n.tooltip .content.content-right .panel:before, .tooltip .content.content-right .panel:after {\n  margin-top: -7px;\n}\n\n.tooltip .content.content-right .panel:before,\n.tooltip .content.content-right .panel:after,\n.tooltip .content.content-right-top .panel:before,\n.tooltip .content.content-right-top .panel:after,\n.tooltip .content.content-right-bottom .panel:before,\n.tooltip .content.content-right-bottom .panel:after {\n  margin-right: -6px;\n}\n\n.tooltip .content.content-left .panel:before, .tooltip .content.content-left .panel:after {\n  margin-top: -7px;\n}\n\n.tooltip .content.content-left .panel:before,\n.tooltip .content.content-left .panel:after,\n.tooltip .content.content-left-top .panel:before,\n.tooltip .content.content-left-top .panel:after,\n.tooltip .content.content-left-bottom .panel:before,\n.tooltip .content.content-left-bottom .panel:after {\n  margin-left: -6px;\n}\n\n.tooltip .content.content-top-left .panel:before,\n.tooltip .content.content-top-left .panel:after,\n.tooltip .content.content-bottom-left .panel:before,\n.tooltip .content.content-bottom-left .panel:after {\n  right: 10px;\n}\n\n.tooltip .content.content-top-right.panel:before,\n.tooltip .content.content-top-right .panel:after,\n.tooltip .content.content-bottom-right .panel:before,\n.tooltip .content.content-bottom-right .panel:after {\n  left: 10px;\n}\n\n.tooltip .content.content-right-bottom .panel:before,\n.tooltip .content.content-right-bottom .panel:after,\n.tooltip .content.content-left-bottom .panel:before,\n.tooltip .content.content-left-bottom .panel:after {\n  top: 10px;\n}\n\n.tooltip .content.content-right-top.panel:before,\n.tooltip .content.content-right-top .panel:after,\n.tooltip .content.content-left-top .panel:before,\n.tooltip .content.content-left-top .panel:after {\n  bottom: 10px;\n}\n\n.tooltip .content.content-top .panel:after {\n  left: 50%;\n}\n\n.tooltip .content.content-top .panel:after,\n.tooltip .content.content-top-left .panel:after,\n.tooltip .content.content-top-right .panel:after {\n  top: 100%;\n}\n\n.tooltip .content.content-bottom .panel:after {\n  left: 50%;\n}\n\n.tooltip .content.content-bottom .panel:after,\n.tooltip .content.content-bottom-left .panel:after,\n.tooltip .content.content-bottom-right .panel:after {\n  bottom: 100%;\n}\n\n.tooltip .content.content-right .panel:after {\n  top: 50%;\n}\n\n.tooltip .content.content-right .panel:after,\n.tooltip .content.content-right-top .panel:after,\n.tooltip .content.content-right-bottom .panel:after {\n  right: 100%;\n}\n\n.tooltip .content.content-left .panel:after {\n  top: 50%;\n}\n\n.tooltip .content.content-left .panel:after,\n.tooltip .content.content-left-top .panel:after,\n.tooltip .content.content-left-bottom .panel:after {\n  left: 100%;\n}\n\n\n.tooltip .content .panel {\n  color: #ffffff;\n}\n\n.tooltip h1, .tooltip h2, .tooltip h3, .tooltip h4, .tooltip h5 {\ncolor: #ffffff;\n}\n\n  .panel.panel-default {\n    margin-right: 3px;\n    margin-bottom: 2px;\n    border-radius: 1.5px;\n  }\n  \n\n  .panel.panel-default, .content .panel:after {\n    box-shadow: 1px 1px 2px hsla(0,0%,13%,.6);\n  }\n  \n\n      .appcues-backdrop[data-pattern-type=left], .appcues-backdrop[data-pattern-type=shorty], .appcues-backdrop[data-pattern-type=modal] {\n        background-color: #000000;\n      }\n      \n\n      .appcues-backdrop[data-pattern-type=left], .appcues-backdrop[data-pattern-type=shorty], .appcues-backdrop[data-pattern-type=modal] {\n        opacity: 0.5;\n      }\n      \n\nappcues cue {\n    background: #ffffff\n}\n\n\nappcues cue * {\n    color: #546b81\n}\n\n/************************************/\n/* Appcues Base Presets */\n\n/*** Colfax import ***/\n@font-face {\n  font-family: \"Colfax\";\n  font-style: normal;\n  font-weight: 400;\n  src: url(\"https://uiux.s3.amazonaws.com/style-guide/fonts/colfax/colfax-regular.woff2\") format(\"woff2\"),\n    url(\"https://uiux.s3.amazonaws.com/style-guide/fonts/colfax/colfax-regular.woff\") format(\"woff\");\n}\n\n@font-face {\n  font-family: \"Colfax\";\n  font-style: normal;\n  font-weight: 600;\n  src: url(\"https://uiux.s3.amazonaws.com/style-guide/fonts/colfax/colfax-medium.woff2\") format(\"woff2\"),\n    url(\"https://uiux.s3.amazonaws.com/style-guide/fonts/colfax/colfax-medium.woff\") format(\"woff\");\n}\n\n* {\n    font-family: Colfax, Helvetica, Arial, sans-serif;\n    font-style: normal;\n}\n\n/*** Remove next/previous arrows */\nappcues .appcues-actions-right .appcues-button {\n    padding-right: 18px;\n}\n\nappcues .appcues-actions-right .appcues-button:after {\n    content: none;\n}\n\nappcues .appcues-actions-left .appcues-button {\n    padding-left: 18px;\n}\n\nappcues .appcues-actions-left .appcues-button:before {\n    content: none;\n}\n\n/*** Adjust style of progress bar */\nappcues .appcues-progress {\n    background-color: #F4F6F7;\n    height: 4px;\n    border: 0;\n}\n\nappcues .appcues-progress .appcues-progress-bar {\n    transition: width 0.5s ease 0.07s;\n}\n\nappcues .appcues-progress .appcues-progress-bar:not([aria-valuenow='100']) {\n    border-top-right-radius: 0;\n    border-bottom-right-radius: 0;\n}\n\n/*** Adjust margins & padding */\nappcues cue {\n    min-height: 100px !important;\n    padding: 45px 45px 113px;\n}\n\nappcues cue .apc-hero {\n    margin: -45px -45px 30px;\n}\n\n/* Fix up Hero typography */\nappcues cue .apc-hero h2 {\n    font-family: Colfax, Helvetica, Arial, sans-serif;\n    font-weight: 600;\n    font-size: 18px;\n}\n\nappcues[data-pattern-type=modal] cue {\n    box-shadow: 0 0 18px rgba(0,0,0,0.25);\n}\n\n.tooltip .panel {\n    padding: 9px 12px 10px;\n}\n\n/*** Adjust typography */\nappcues cue h1,\n.tooltip h1 {\n    font-family: Colfax, Helvetica, Arial, sans-serif;\n    font-weight: 600;\n    font-size: 30px;\n    line-height: 40px;\n    letter-spacing: -1px;\n    color: #294661;\n    margin-top: 0px;\n    margin-bottom: 27px;\n    -webkit-font-smoothing: antialiased;\n}\n\nappcues cue h2,\n.tooltip h2 {\n    font-family: Colfax, Helvetica, Arial, sans-serif;\n    font-weight: 600;\n    font-size: 20px;\n    line-height: 30px;\n    letter-spacing: -1px;\n    color: #294661;\n    margin-top: 0px;\n    margin-bottom: 18px;\n    -webkit-font-smoothing: antialiased;\n}\n\nappcues cue h3,\n.tooltip h3 {\n    font-family: Colfax, Helvetica, Arial, sans-serif;\n    font-weight: 600;\n    font-size: 13px;\n    line-height: 15px;\n    color: #294661;\n    margin-top: 0px;\n    margin-bottom: 12px;\n    -webkit-font-smoothing: antialiased;\n}\n\nappcues cue h4,\n.tooltip h4,\nappcues cue h5,\n.tooltip h5 {\n    font-family: Colfax, Helvetica, Arial, sans-serif;\n    font-weight: 600;\n    font-size: 12px;\n    line-height: 15px;\n    letter-spacing: 1px;\n    text-transform: uppercase;\n    color: #546B81;\n    margin-top: 0px;\n    margin-bottom: 9px;\n    -webkit-font-smoothing: antialiased;\n}\n\n.tooltip .rich-text a {\n    color: #FFF !important;\n    text-decoration: underline;\n}\n\np, li {\n    font-size: 13px;\n    line-height: 20px;\n    color: #546B81;\n    margin-top: 0px;\n    margin-bottom: 9px;\n    font-weight: 400;\n}\n\nstrong,\nb {\n    color: #546B81 !important;\n    font-weight: 600;\n}\n\nem {\n    font-style: italic;\n}\n\n/*** Adjust links in content */\nappcues cue section a[data-step], appcues cue section a[href], .tooltip p a[data-step], .tooltip p a[href] {\n    color: #489BE8;\n    transition: color 0.3s;\n}\n\nappcues cue section a[data-step]:hover, appcues cue section a[href]:hover, .tooltip p a[data-step]:hover, .tooltip p a[href]:hover {\n    color: #1A82E2;\n}\n\n/*** Adjust skip X */\nappcues .appcues-skip a {\n    background: #FFFFFF;\n    border-radius: 100px;\n    top: 12px;\n    right: 12px;\n    font-size: 30px;\n    height: 30px;\n    width: 30px;\n    padding: 2px;\n}\n\n.appcues-skip>a {\n    color: #294661;\n    opacity: 0.6;\n}\n\n.appcues-skip>a:hover {\n    color: #294661;\n    opacity: 0.8;\n}\n\n.tooltip .panel .appcues-skip {\n    color: #FFFFFF;\n    opacity: 0.8;\n}\n\n/* End Appcues Base */\n/************************************/\n\n/*___Buttons and Links___*/\n.appcues-actions-right {\n\t/*[The section of the button row which hold the 'Next' or righthand side button.]*/\n}\n\nappcues cue.appcues-actions-hidden {\n    padding-bottom: 45px !important;\n}\n\n.tooltip .content .panel .panel-content-actions .appcues-actions-right {\n\t/*[Full selector to edit .appcues-actions-right in hotspots/tooltips]*/\n}\n\nappcues cue .appcues-actions-right {\n\t/*[Full selector to edit .appcues-actions-right in modals/slideouts]*/\n\tflex-grow: 1;\n\ttext-align: left;\n\twidth: auto;\n\tdisplay: block;\n}\n\n\n.appcues-actions-left {\n\t/*[The section of the button row which hold the 'Prev' or lefthand side button.]*/\n}\n\n.tooltip .content .panel .panel-content-actions .appcues-actions-left {\n\t/*[Full selector to edit .appcues-actions-left in hotspots/tooltips]*/\n}\n\nappcues cue .appcues-actions-left {\n\t/*[Full selector to edit .appcues-actions-left in modals/slideouts]*/\n\tflex-grow: 1;\n\twidth: auto;\n\ttext-align: right;\n\tmargin-right: 12px;\n\tdisplay: block;\n}\n\n\n.appcues-button {\n\t/*[Generic selector for any button.]*/\n\tfont-weight: 400;\n\tfont-size: 13px;\n\tline-height: 20px;\n\tcolor: #FFFFFF;\n\tpadding: 6px 18px;\n\tborder: 1px solid #1A82E2;\n\tborder-radius: 2px !important;\n\tbackground: #489BE8 !important;\n\ttransition: background 0.3s;\n}\n\n.appcues-button:hover {\n    background: #1A82E2 !important;\n    color: #FFFFFF !important;\n}\n\n.panel .panel-content-actions .appcues-actions-left > .appcues-button.appcues-button-success {\n\t/*[Full selector to edit .appcues-button-success in hotspots/tooltips]*/\n}\n\nappcues cue .appcues-actions-left > .appcues-button {\n/*[Full selector to edit the secondcary or back button inmodals and slideouts]*/\n        background: #FFFFFF !important;\n\tcolor: #1A82E2 !important;\n}\n\nappcues cue .appcues-actions-left > .appcues-button:hover {\n    background: #E8F2FC !important;\n    color: #1A82E2 !important;\n}\n\n.panel .panel-content-actions .appcues-skip {\n\t/*[Full selector to edit .appcues-skip in tooltips/hotspots] (Hide these tips)*/\n}\n\nappcues .appcues-skip {\n\t/*[Full selector to edit .appcues-skip in modals/slideouts] (X button to close)*/\n}\n\nappcues[data-pattern-type=shorty] cue {\n\t/*[Selector for slideouts specifically]*/\n\tpadding: 45px 45px 98px;\n}\n\nappcues[data-pattern-type=shorty] cue .appcues-actions {\n    padding: 30px 45px;\n}\n\nappcues[data-pattern-type=modal] cue {\n\t/*[Selector for modals specifically]*/\n}\n\n\n/*___Modals and Slideouts___*/\n\nappcues {\t\n\t/*[This element wraps the entire modal or slideout.]*/\n}\n\nappcues cue {\n\t/*[This is where the main content for modals and slideouts lives.]*/\n    box-shadow: 0 2px 6px 0 rgba(41,70,97,0.09);\n}\n\nappcues .appcues-backdrop[data-pattern-type=modal] {\n\t/*[The backdrop (darkened background) for modals.]*/\n}\n\nappcues .appcues-progress {\n\t/*[The progress bar which indicates how far a user is in the flow]*/\n}\n\nappcues cue .apc-hero {\n\t/*[This is the selector for a hero image.]*/\n}\n\n\nappcues cue .appcues-actions {\n\t/*[The row where all the buttons are placed.]*/\n\tpadding: 30px 60px 45px;\n\tdisplay: flex;\n}\n\nappcues cue>section .form-field label.field-option {\n    /*[Field styles.]*/\n    margin: 6px 0;\n    padding: 0;\n    cursor: pointer;\n}\n\nappcues cue>section .form-field label.label-display, appcues cue>section .step-action-form label.label-display {\n    /*[Field label styles.]*/\n    padding: 0;\n}\n\nappcues cue>section .form-field label.field-option input[type=radio]+span:before {\n    /*[Radio button.]*/\n    height: 0.5em;\n    width: 0.5em;\n    box-shadow: 0 0 0 0.15em #A9B5C0;\n}\n\nappcues cue>section .form-field label.field-option input[type=radio]:checked+span:before {\n    /*[Checked radio button.]*/\n    background: #1A82E2;\n    box-shadow: 0 0 0 0.15em #A9B5C0;\n}\n\n\n\n/*___Hotspots and Tooltips___*/\n.tooltip .content .panel {\n\t/*[This is selector for the tooltip panel itself. The styles to the arrow can be accessed using the ::before selector (see below)]*/\n\tpadding: 12px;\n    box-shadow: 0 2px 6px 0 rgba(41,70,97,0.09) !important;\n}\n\n.tooltip .content .panel .panel-content {\n\t/*[This is the selector for any content within the tooltip. This applies to both body text and the actions row.]*/\n}\n\n.tooltip .content .panel .panel-content h1,\n.tooltip .content .panel .panel-content h2,\n.tooltip .content .panel .panel-content h3,\n.tooltip .content .panel .panel-content h4,\n.tooltip .content .panel .panel-content h5,\n.tooltip .content .panel .panel-content p,\n.tooltip .content .panel .panel-content li,\n.tooltip .content .panel .panel-content strong {\n    color: #ffffff !important;\n}\n\n.tooltip .content .panel .panel-content p,\n.tooltip .content .panel .panel-content li {\n    font-size: 13px;\n}\n\n.tooltip .content .panel .panel-content-actions {\n\t/*[The specific container selection for the row with buttons/actions.]*/\n}\n\n.exit-tooltip-container {\n    top: 2px;\n    right: 4px;\n}\n\n.exit-tooltip-container .exit-tooltip {\n    color: #FFFFFF;\n    font-size: 18px;\n}\n\n/*___Custom Classes___*/\n\n/* Must be positioned as custom HTML immediately above \"Next\" button */\n.tooltip-counter {\n    position: absolute;\n    bottom: 22px;\n    font-size: 11px !important;\n    opacity: 0.6 !important;\n}\n.small {\n    font-size: 11px !important;\n}\n\n.subtle {\n    opacity: 0.6 !important;\n}\n\n.badge {\n    background: #1A82E2;\n    border-radius: 2px;\n    padding: 3px 5px;\n    color: #FFF !important;\n    font-size: 11px !important;\n    line-height: 11px !important;\n    letter-spacing: 0.5px;\n    text-transform: uppercase;\n    display: inline-block;\n}\n\n.badge.warning {\n    background: #FF9900;\n}\n\n.badge.coming-soon {\n    background: #FF4081;\n}\n\n.badge.new {\n    background: #18C96E;\n}\n\n.large-text {\n    font-size: 15px;\n    line-height: 27px;\n}\n\n.align-center {\n    text-align: center;\n}\n\n.align-right {\n    text-align: right;\n}\n\n.link-block {\n  display: block;\n  align-items: center;\n  border-radius: 8px;\n  padding: 20px;\n  color: #294661;\n  text-decoration: none;\n  background-color: #E8F2FC;\n  border: 2px solid transparent;\n  transition: border 0.3s;\n}\n\n.link-block--content *:first-child {\n  margin-top: 0;\n}\n\n.link-block--content *:last-child {\n  display: inline;\n  margin-bottom: 0;\n}\n\n.link-block--content *:last-child:after {\n  display: inline;\n  color: #1A82E2;\n  margin-left: 6px;\n  content: \"→\";\n}\n\n.link-block:hover {\n  border: 2px solid #A3CDF3;\n}\n\n    appcues .appcues-actions-right .appcues-button { padding-right: 18px; }\n    appcues .appcues-actions-right .appcues-button:after { content: none; }\n    appcues .appcues-actions-left .appcues-button { padding-left: 18px; }\n    appcues .appcues-actions-left .appcues-button:before { content: none; }","id":"-LM3WAuP3o9ySqYcvRqp","typekitId":""}};
    var VERSION = ACCOUNT_DETAILS.VERSION;
    var RELEASE_ID = ACCOUNT_DETAILS.RELEASE_ID;
    var GENERIC_BUNDLE_DOMAIN = ACCOUNT_DETAILS.GENERIC_BUNDLE_DOMAIN;
    var accountId = ACCOUNT_DETAILS.accountId;
    var isBootstrapped = false;

    self.AppcuesBundleSettings = {
      accountId: accountId,
      VERSION: VERSION,
      RELEASE_ID: RELEASE_ID,
      GENERIC_BUNDLE_DOMAIN: GENERIC_BUNDLE_DOMAIN,
      GENERIC_BUNDLE_PATH: ACCOUNT_DETAILS.GENERIC_BUNDLE_PATH,
      styling:  ACCOUNT_DETAILS.styling,
      integrations: ACCOUNT_DETAILS.integrations,
      account: ACCOUNT_DETAILS.account
    };

    var skipAMD = false;
    var windowGlobals = window["AppcuesSettings"];
    if (
      windowGlobals &&
      typeof windowGlobals === "object" &&
      windowGlobals.skipAMD === true
    ) {
      skipAMD = true;
    }

    var doc = self.document;
    self[ns] = self[ns] || [];
    var Appcues = self[ns];
    if (Appcues.invoked) {
        if (self.console && console.error) {
            console.error('Appcues snippet included twice.');
        }
        return;
    }

    if (Appcues.identify) return;
    Appcues.invoked = true;

    var methods = [
        "identify",
        "track",
        "page",
        "anonymous",
        "start",
        "show",
        "clearShow",
        "on",
        "off",
        "once",
        "reset",
        "debug",
        "user",
        "call",
        "settings",
        "content",
        "initMixpanel",
        "initHeap",
        "initIntercom",
        "initCIO",
        "initWoopra",
        "initAmplitude",
        "initKlaviyo",
        "initTD",
        "initLl",
        "initCalq",
        "initKM",
        "initGA",
        "initGTM",
        "initSegment",
        "injectContent",
        "injectStyles"
    ];

    var promises = [
        "user"
    ];

    function factory(method){
        return function(){
            var args = Array.prototype.slice.call(arguments);
            if (isBootstrapped) {
              self.Appcues[method].apply(self.Appcues, args);
            } else {
              args.unshift(method);
              Appcues.push(args);
            }
            return self.Appcues;
        };
    }

    // For each of our methods, generate a queueing stub.
    for (var i = 0; i < methods.length; i++) {
        var key = methods[i];
        Appcues[key] = factory(key);
    }

    for (var i = 0; i < promises.length; i++) {
        var key = promises[i];
        Appcues[key] = function() {
          var args = Array.prototype.slice.call(arguments);
          if (isBootstrapped) {
            return self.Appcues[key].apply(self.Appcues, args);
          } else {
            return new Promise(function(resolve, _reject) {
              args.unshift(resolve);
              args.unshift(key);
              Appcues.push(args);
            });
          }
        };
    }

    if (
      !skipAMD &&
      typeof window.define === "function" &&
      window.define.amd &&
      (window.define.amd.vendor == null ||
        window.define.amd.vendor !== "dojotoolkit.org")
    ) {
      window.define(function() { return Appcues; });
    }

    function load(){
        var bundleScript = doc.createElement("script");
        bundleScript.crossOrigin = "anonymous";
        bundleScript.integrity = "sha256-B+0pljwuNjNZpxv9xx4rgSfxEYNum/Uje2oZ5KvRlXc=";
        bundleScript.type = "text/javascript";
        bundleScript.src = GENERIC_BUNDLE_URL;
        bundleScript.async = true;
        bundleScript.onload = function () {
            isBootstrapped = true;
            Appcues.forEach(function(call) {
                var fnName = call[0];
                var args = call.slice(1);
                if (promises.indexOf(fnName) === -1) {
                  self[ns] && self[ns][fnName] &&
                      self[ns][fnName].apply(self[ns], args);
                } else {
                  var resolve = args[0];
                  var promiseArgs = args.slice(1);
                  self[ns] && self[ns][fnName] &&
                    self[ns][fnName].apply(self[ns], promiseArgs).then(
                      function() { resolve(arguments[0]); }
                    );
                }
            });
        };

        var firstScript = doc.getElementsByTagName('script')[0];
        firstScript.parentNode.insertBefore(bundleScript, firstScript);
    }
    Appcues.SNIPPET_VERSION = VERSION;
    load();
})(window, 'Appcues');
