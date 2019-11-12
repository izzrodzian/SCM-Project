<?php
session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("location: admin_login.php");
    exit;
}

require_once "../config/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Homepage</title>
</head>

<body>
    <div>
        <a href="admin_user_list.php">User</a>
        <a href="admin_book_list.php">Book</a>
        <a href="admin_logout.php">SIGN OUT</a>
    </div>
</body>

</html>