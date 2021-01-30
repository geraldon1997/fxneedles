<?php
@session_start();
@ob_start();
$chase = "./";
session_destroy();
header("Location: $chase");
ob_end_flush();
