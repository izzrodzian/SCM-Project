<?php
session_start();
require_once "./functions/admin.php";
$title = "Admin | Manage Book";
require_once "./template/header_admin.php";
require_once "./functions/database_functions.php";
$conn = db_connect();
$result = getAll($conn);
?>
<p class="lead"><a href="admin_add.php">Add New Book</a></p>
<table class="table" style="margin-top: 20px">
    <tr>
        <th>ISBN</th>
        <th>Title</th>
        <th>Author</th>
        <th>Image</th>
        <th>Description</th>
        <th>Price</th>
        <th>Publisher</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) {?>
    <tr>
        <td><?php echo $row['book_isbn']; ?></td>
        <td><?php echo $row['book_title']; ?></td>
        <td><?php echo $row['book_author']; ?></td>
        <td><?php echo $row['book_image']; ?></td>
        <td><?php echo $row['book_descr']; ?></td>
        <td><?php echo $row['book_price']; ?></td>
        <td><?php echo getPubName($conn, $row['publisherid']); ?></td>
        <td><a href="admin_edit.php?bookisbn=<?php echo $row['book_isbn']; ?>">Edit</a></td>
        <td><a href="admin_delete.php?bookisbn=<?php echo $row['book_isbn']; ?>">Delete</a></td>
    </tr>
    <?php }?>
</table>

<?php
if (isset($conn)) {mysqli_close($conn);}
require_once "./template/footer.php";
?>