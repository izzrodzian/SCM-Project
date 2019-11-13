<?php
$title = "User | Register";
require_once "./template/header.php";

// if (isset($_POST['submit'])) {
//     $name = trim($_POST['name']);
//     $name = mysqli_real_escape_string($conn, $name);

//     $password = trim($_POST['password']);
//     $password = mysqli_real_escape_string($conn, $password);

//     $phone = floatval(trim($_POST['phone']));
//     $phone = mysqli_real_escape_string($conn, $phone);

//     $query = "INSERT INTO users VALUES ('', '" . $name . "', '" . $password . "', '" . $phone . "')";
//     $result = mysqli_query($conn, $query);
//     if (!$result) {
//         echo "Can't add new data " . mysqli_error($conn);
//         exit;
//     } else {
//         header("Location: index.php");
//     }
// }

?>

<form class="form-horizontal" method="post" action="user_verify_register.php">
    <h1>User Register</h1>
    <div class="form-group">
        <label for="name" class="control-label col-md-4">Name</label>
        <div class="col-md-4">
            <input type="text" name="name" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="pass" class="control-label col-md-4">Password</label>
        <div class="col-md-4">
            <input type="password" name="pass" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="pass" class="control-label col-md-4">Confirm Password</label>
        <div class="col-md-4">
            <input type="password" name="confpass" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="pass" class="control-label col-md-4">Phone</label>
        <div class="col-md-4">
            <input type="text" name="phone" class="form-control">
        </div>
    </div>
    <input type="submit" name="submit" class="btn btn-primary">
</form>

<?php
require_once "./template/footer.php";
?>