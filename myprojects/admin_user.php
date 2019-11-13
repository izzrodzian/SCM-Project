<?php
session_start();
require_once "./functions/admin.php";
$title = "Admin | Manage User";
require_once "./template/header_admin.php";
require_once "./functions/database_functions.php";
$conn = db_connect();
$result = getAllUser($conn);
?>

<p class="lead"><a href="admin_add_user.php">Add New User</a></p>
<table class="table" style="margin-top: 20px">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) {?>
    <tr>
        <td><?php echo $row['user_id']; ?></td>
        <td><?php echo $row['user_name']; ?></td>
        <td><?php echo $row['user_phone']; ?></td>
        <td><a href="admin_edit_user.php?user_id=<?php echo $row['user_id']; ?>">Edit</a></td>
        <td><a href="admin_delete_user.php?user_id=<?php echo $row['user_id']; ?>">Delete</a></td>
    </tr>
    <?php }?>
</table>


<?php
if (isset($conn)) {mysqli_close($conn);}
require_once "./template/footer.php";
?>