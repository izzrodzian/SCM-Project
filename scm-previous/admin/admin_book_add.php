<?php
session_start();
require_once "../function/admin.php";
$title = "Add new book";
//require "./template/header.php";
require "../function/database_functions.php";
$connection = databaseConnect();

if (isset($_POST['add'])) {
    $id = trim($_POST['id']);
    $id = mysqli_real_escape_string($connection, $id);

    $title = trim($_POST['title']);
    $title = mysqli_real_escape_string($connection, $title);

    $author = trim($_POST['author']);
    $author = mysqli_real_escape_string($connection, $author);

    $description = trim($_POST['description']);
    $description = mysqli_real_escape_string($connection, $description);

    $price = floatval(trim($_POST['price']));
    $price = mysqli_real_escape_string($connection, $price);

    $publisher = trim($_POST['publisher']);
    $publisher = mysqli_real_escape_string($connection, $publisher);

    $category = trim($_POST['category']);
    $category = mysqli_real_escape_string($connection, $category);

    // add cover
    if (isset($_FILES['cover']) && $_FILES['cover']['name'] != "") {
        $cover = $_FILES['cover']['name'];
        $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
        $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
        $uploadDirectory .= $cover;
        move_uploaded_file($_FILES['cover']['tmp_name'], $uploadDirectory);
    }

    // find publisher and return pubid
    // if publisher is not in db, create new
    $findPub = "SELECT * FROM publisher WHERE name = '$publisher'";
    $findResult = mysqli_query($connection, $findPub);
    if (!$findResult) {
        // insert into publisher table and return id
        $insertPub = "INSERT INTO publisher (name) VALUES ('$publisher')";
        $insertResult = mysqli_query($connection, $insertPub);
        if (!$insertResult) {
            echo "Can't add new publisher " . mysqli_error($connection);
            exit;
        }
        $publisherid = mysql_insert_id($connection);
    } else {
        $row = mysqli_fetch_assoc($findResult);
        $publisherid = $row['publisherid'];
    }

    $query = "INSERT INTO book VALUES ('" . $id . "', '" . $cover . "', '" . $title . "', '" . $author . "', '" . $description . "', '" . $price . "', '" . $publisherid . "', '" . $categoryid . "')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        echo "Can't add new data " . mysqli_error($connection);
        exit;
    } else {
        header("Location: admin_book_add.php");
    }
}
?>
<form method="post" action="admin_book_add.php" enctype="multipart/form-data">
    <table class="table">
        <tr>
            <th>ID</th>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><input type="text" name="title" required></td>
        </tr>
        <tr>
            <th>Author</th>
            <td><input type="text" name="author" required></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="cover"></td>
        </tr>
        <tr>
            <th>Description</th>
            <td><textarea name="description" cols="40" rows="5"></textarea></td>
        </tr>
        <tr>
            <th>Price</th>
            <td><input type="text" name="price" required></td>
        </tr>
        <tr>
            <th>Publisher</th>
            <td><input type="text" name="publisher" required></td>
        </tr>
        <tr>
            <th>Category</th>
            <td><input type="text" name="category" required></td>
        </tr>
    </table>
    <input type="submit" name="add" value="Add new book" class="btn btn-primary">
    <input type="reset" value="cancel" class="btn btn-default">
</form>
<br />
<?php
if (isset($connection)) {mysqli_close($connection);}
require_once "./template/footer.php";
?>