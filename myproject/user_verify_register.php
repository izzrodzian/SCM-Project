<?php
session_start();
if (!isset($_POST['submit'])) {
    echo "Something wrong! Check again!";
    exit;
}
require_once "./functions/database_functions.php";
$conn = db_connect();

$name = trim($_POST['name']);
$password = trim($_POST['pass']);
$phone = trim($_POST['phone']);

if ($name == "" || $password == "" || $phone == "") {
    echo "Name or Pass or Phone is empty!";
    exit;
}

$name = mysqli_real_escape_string($conn, $name);
$password = mysqli_real_escape_string($conn, $password);
//$confpass = sha1($password);
$phone = mysqli_real_escape_string($conn, $phone);

// post from db
$query = "INSERT INTO users VALUES ('', '" . $name . "', '" . $password . "', '" . $phone . "')";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Empty data " . mysqli_error($conn);
    exit;
}

if (isset($conn)) {mysqli_close($conn);}
$_SESSION['user'] = true;
header("Location: index.php");