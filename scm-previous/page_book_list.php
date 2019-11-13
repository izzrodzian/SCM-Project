<?php
session_start();

$count = 0;

require_once "./function/database_functions.php";
$connection = databaseConnect();

$query = "SELECT id, cover FROM book";

$result = mysqli_query($connection, $query);

if (!$result) {
    echo "Can't retrieve data " . mysqli_error($connection);
    exit;
}

$title = "Full Catalogs of Books";
// require_once "./template/header.php";
?>
<p class="lead text-center text-muted">Full Catalogs of Books</p>
<?php for ($i = 0; $i < mysqli_num_rows($result); $i++) {?>
<div class="row">
    <?php while ($query_row = mysqli_fetch_assoc($result)) {?>
    <div class="col-md-3">
        <a href="page_book_single.php?bookid=<?php echo $query_row['id']; ?>">
            <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row['cover']; ?>">
        </a>
    </div>
    <?php
$count++;
    if ($count >= 4) {
        $count = 0;
        break;
    }
}?>
</div>
<?php
}
if (isset($connection)) {mysqli_close($connection);}
require_once "./template/footer.php";
?>