<?php
$user_id = $_GET['user_id'];

require_once "./functions/database_functions.php";
$conn = db_connect();

$query = "DELETE FROM users WHERE user_id='$user_id'";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "delete data unsuccessfully " . mysqli_error($conn);
    exit;
}
header("Location: admin_user.php");