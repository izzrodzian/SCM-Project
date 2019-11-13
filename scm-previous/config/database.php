<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "scm_database";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo "Connected successfully";

    date_default_timezone_set("Asia/Kuala_Lumpur");
    //echo date('d F Y h:i A');
}