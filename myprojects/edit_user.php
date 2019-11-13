<?php
// if save change happen
if (!isset($_POST['save_change'])) {
    echo "Something wrong!";
    exit;
}

$user_id = trim($_POST['user_id']);
$user_name = trim($_POST['user_name']);
$user_pass = trim($_POST['user_pass']);
$user_phone = trim($_POST['user_phone']);

require_once "./functions/database_functions.php";
$conn = db_connect();

$query = "UPDATE users SET
	user_id = '$user_id',
	user_name = '$user_name',
	user_pass = '$user_pass',
    user_phone = '$user_phone'
    WHERE user_id = '$user_id'";

// two cases for fie , if file submit is on => change a lot
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Can't update data " . mysqli_error($conn);
    exit;
} else {
    header("Location: admin_edit_user.php?user_id=$user_id");
}