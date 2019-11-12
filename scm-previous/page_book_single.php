<?php
session_start();
$bookid = $_GET['bookid'];

require_once "./function/database_functions.php";
$connection = databaseConnect();

$query = "SELECT * FROM book WHERE id = '$bookid'";

$result = mysqli_query($connection, $query);
if (!$result) {
    echo "Can't retrieve data " . mysqli_error($connection);
    exit;
}

$row = mysqli_fetch_assoc($result);
if (!$row) {
    echo "Empty book";
    exit;
}

$title = $row['title'];
//require "./template/header.php";
?>
<!-- Example row of columns -->
<p class="lead" style="margin: 25px 0"><a href="books.php">Books</a> > <?php echo $row['title']; ?></p>
<div class="row">
    <div class="col-md-3 text-center">
        <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $row['cover']; ?>">
    </div>
    <div class="col-md-6">
        <h4>Book Description</h4>
        <p><?php echo $row['description']; ?></p>
        <h4>Book Details</h4>
        <table class="table">
            <?php foreach ($row as $key => $value) {
    if ($key == "description" || $key == "cover" || $key == "publisherid" || $key == "title") {
        continue;
    }
    switch ($key) {
        case "id":
            $key = "Book ID";
            break;
        case "title":
            $key = "Title";
            break;
        case "author":
            $key = "Author";
            break;
        case "price":
            $key = "Price";
            break;
    }
    ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
            <?php
}
if (isset($connection)) {mysqli_close($connection);}
?>
        </table>
        <form method="post" action="page_cart.php">
            <input type="hidden" name="bookid" value="<?php echo $bookid; ?>">
            <input type="submit" value="Purchase / Add to cart" name="cart" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
require "./template/footer.php";
?>