/* eslint-disable */

function parseHiddenPackages(csv)
{
    const packages = csv.split(",");
    return packages.filter(function (packageName) {
      // !! Evalutes truthiness and remove empty stragglers
        return !!packageName;
    });
}

function flattenDict(dictToFlatten)
{
    function flatten(dict, parent)
    {
        var keys = [],
        values = [];

        for (var key in dict) {
            if (typeof dict[key] === "object") {
                var result = flatten(dict[key], parent ? parent + "_" + key : key);
                keys = keys.concat(result.keys);
                values = values.concat(result.values);
            } else {
                keys.push(parent ? parent + "_" + key : key);
                values.push(dict[key]);
            }
        }
        return {
            keys: keys,
            values: values,
        };
    }

    var result = flatten(dictToFlatten),
    flatDict = {};

    for (var i = 0, end = result.keys.length; i < end; i++) {
        flatDict[result.keys[i]] = result.values[i];
    }
    return flatDict;
}

const api_config = {
    host: "",
    hostEnv: "https://api.sendgrid.com",
    twilio_api_host: "",
    environment: "production",
    heap_id: "1541905715",
  // This flag makes network requests use browser credentials and attach a CSRF token to payloads so
  // It works with Stargate
    includeTwilioHeaders:
    "" === "true" ? true : false,

    sendgrid_com: "https://sendgrid.com",
    nlvx_host: "https://sendgrid.com/marketing_campaigns",
    root: "/",
    cookie_default_domain: "",
    recaptcha_site_key: "6LfBHAgTAAAAALK1seY_-4F2GfK0jnWlTcMOaMJZ",
    mako_host: "https://app.sendgrid.com",
    signup_host: "https://signup.sendgrid.com",
    labs_host: "https://labs.sendgrid.com",
    mc_host: "https://mc.sendgrid.com",
    tiara: {
        cdn_css: "https://d1tjxxwiv1dd3b.cloudfront.net/tiara.css",
        cdn_js: "https://d1tjxxwiv1dd3b.cloudfront.net/tiara.js",
    },
    packages: {
        trial40k: "71713987-9f01-4dea-b3d4-8d0bcd9d53ed",
        free100: "02a5084c-94d7-458d-9a88-1d2cfd37b262",
        free12k: "8b9ae93b-ce8a-11e4-b4e5-5fcde71ee009",
        hidden40k: "8b9ce1c9-ce8a-11e4-b4e5-5fcde71ee009",
        hidden100k: "8b9cf53b-ce8a-11e4-b4e5-5fcde71ee009",
        current40k: "441b7834-59bc-4d25-8b54-7ff1f6c0e3c7",
        current100k: "a99239c9-1e90-4d83-9686-617feff18a05",
    },
    hidden_package_ids: {
        normalEnv: "02a5084c-94d7-458d-9a88-1d2cfd37b262,71713987-9f01-4dea-b3d4-8d0bcd9d53ed,441b7834-59bc-4d25-8b54-7ff1f6c0e3c7,a99239c9-1e90-4d83-9686-617feff18a05",
        for_normal_signup: [],
        s2sEnv: "02a5084c-94d7-458d-9a88-1d2cfd37b262,8b9ae93b-ce8a-11e4-b4e5-5fcde71ee009,fddb569d-5745-48cd-af8c-e78ba8e3b478,b545e102-055d-4c7e-9b3e-fe09e538f384,441b7834-59bc-4d25-8b54-7ff1f6c0e3c7,a99239c9-1e90-4d83-9686-617feff18a05",
        for_s2s_signup: [],
    },
    mako_auth_token: "mako_auth_token",
    mako_message: "mako_message",
    zuora_url: "https://static.zuora.com/Resources/libs/hosted/1.3.0/zuora-min.js",
    sift_science_key: "a2a7255561",
    aws_marketplace_url: "https://aws.amazon.com/marketplace/pp/B074CQY6KB",
    new_relic: {
        license_key: "8e08e0fe9d",
        application_id: "112545888",
    },
    thirdPartyScripts: "" !== "false" ? true : false,
    showEmailValidationKeys: "true" === "true",
    showIPAddressesBeta: "false" === "true",
    showAntiSpoof: "true" === "true",
    showEmailInsights: "false" === "true",
    show2FABeta: "false" === "true",
    showSSO: "false" === "true",
};

api_config.host =
  "https://api.sendgrid.com" +
  ("" ? ":" + "" : "") +
  "/v3/";

api_config.for_normal_signup = parseHiddenPackages(
    api_config.hidden_package_ids.normalEnv
);
api_config.for_s2s_signup = parseHiddenPackages(
    api_config.hidden_package_ids.s2sEnv
);

var result = flattenDict(api_config);
var warnings = [];
for (var key in result) {
    if (!result[key] && result[key] !== false) {
        console.error(key + " is not defined something might be misconfigured");
        warnings.push(key);
    }
}

window.api_config = api_config;
