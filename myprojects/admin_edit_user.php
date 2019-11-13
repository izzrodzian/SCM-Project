<?php
session_start();
require_once "./functions/admin.php";
$title = "Admin | Edit User";
require_once "./template/header_admin.php";
require_once "./functions/database_functions.php";
$conn = db_connect();

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
} else {
    echo "Empty query!";
    exit;
}

if (!isset($user_id)) {
    echo "Empty id! check again!";
    exit;
}

// get book data
$query = "SELECT * FROM users WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
}
$row = mysqli_fetch_assoc($result);
?>
<form method="post" action="edit_user.php" enctype="multipart/form-data">
    <table class="table">
        <tr>
            <th>ID</th>
            <td><input type="text" name="user_id" value="<?php echo $row['user_id']; ?>" readOnly="true"></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" required></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="text" name="user_pass" value="<?php echo $row['user_pass']; ?>" required></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><input type="text" name="user_phone" value="<?php echo $row['user_phone']; ?>" required></td>
        </tr>
    </table>
    <input type="submit" name="save_change" value="Change" class="btn btn-primary">
    <input type="reset" value="Reset" class="btn btn-default">
</form>
<br />
<a href="admin_user.php" class="btn btn-success">Confirm</a>
<?php
if (isset($conn)) {mysqli_close($conn);}
require "./template/footer.php"
?>