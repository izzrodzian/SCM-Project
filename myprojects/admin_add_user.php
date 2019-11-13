<?php
session_start();
require_once "./functions/admin.php";
$title = "Admin | Add User";
require_once "./template/header_admin.php";
require_once "./functions/database_functions.php";
$conn = db_connect();

if (isset($_POST['add'])) {
    $name = trim($_POST['name']);
    $name = mysqli_real_escape_string($conn, $name);

    $password = trim($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    $phone = floatval(trim($_POST['phone']));
    $phone = mysqli_real_escape_string($conn, $phone);

    $query = "INSERT INTO users VALUES ('', '" . $name . "', '" . $password . "', '" . $phone . "')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Can't add new data " . mysqli_error($conn);
        exit;
    } else {
        header("Location: admin_user.php");
    }
}
?>
<form method="post" action="admin_add_user.php" enctype="multipart/form-data">
    <table class="table">
        <tr>
            <th>ID</th>
            <td><input type="hidden"></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="text" name="password" required></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><input type="text" name="phone" required></td>
        </tr>
    </table>
    <input type="submit" name="add" value="Add new user" class="btn btn-primary">
    <input type="reset" value="Reset" class="btn btn-default">
</form>
<br />
<?php
if (isset($conn)) {mysqli_close($conn);}
require_once "./template/footer.php";
?>