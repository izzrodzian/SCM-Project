<?php
session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("location: admin_login.php");
    exit;
}

require_once "../config/database.php";

$statement = "SELECT id, name, email, phone FROM user";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Homepage</title>
</head>

<body>

    <div>
        <a href="admin_user_list.php">User</a>
        <a href="admin_book_list.php">Book</a>
        <a href="admin_logout.php">SIGN OUT</a>
    </div>

    <div>
        <div>
            <div>
                <h2>User List</h2>
                <a href="admin_book_add.php">CREATE NEW</a>
            </div>
        </div>
        <hr />
        <table class='table table-bordered table-striped' id="table" data-toggle="table" data-height="500"
            data-pagination="true" data-show-extended-pagination="true" data-page-number="2" data-page-size="10">
            <thead>
                <tr>
                    <th class="text-center col-1" data-sortable="true">ID</th>
                    <th class="text-center col-3" data-sortable="true">Name</th>
                    <th class="text-center col-3" data-sortable="true">Email</th>
                    <th class="text-center col-3" data-sortable="true">Phone</th>
                    <th class="text-center col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result = mysqli_query($connection, $statement)) {if (mysqli_num_rows($result) > 0) {while ($row = mysqli_fetch_assoc($result)) {?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td>
                        <div class='btn-group' role='group' aria-label='Third group'>
                            <a class="btn" href="user_read.php?userid=<?php echo $row['userid']; ?>" title="View Record"
                                data-toggle="tooltip"><i class='
                fas fa-eye text-primary'></i></a></div>
                        <div class='btn-group' role='group' aria-label='Third group'>
                            <a class='btn' href="user_update.php?userid=<?php echo $row['userid']; ?>"
                                title='Update Record' data-toggle='tooltip'><i class='fas fa-edit text-success'></i></a>
                        </div>
                        <div class='btn-group' role='group' aria-label='Third group'>
                            <a class='btn' href="user_delete_direct.php?userid=<?php echo $row['userid']; ?>"
                                title='Delete Record' data-toggle='tooltip'><i
                                    class='fas fa-trash-alt text-danger'></i></a></div>
                    </td>
                </tr>

                <?php
}
    echo "</tbody>";
    echo "</table>";
// Free result set
    mysqli_free_result($result);
} else {
    echo "<p class='lead'><em>No records were found.</em></p>";
}
} else {
    echo "ERROR: Could not able to execute $statement. " . mysqli_error($connection);
}
// Close connection
mysqli_close($connection);
?>

    </div>

</body>

</html>