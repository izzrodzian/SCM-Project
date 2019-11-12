<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: page_login.php");

exit;