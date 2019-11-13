<?php
$title = "User | Login";
require_once "./template/header.php";
?>

<form class="form-horizontal" method="post" action="user_verify.php">
    <h1>User Login</h1>
    <div class="form-group">
        <label for="name" class="control-label col-md-4">Email</label>
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
    <input type="submit" name="submit" class="btn btn-primary">
</form>

<?php
require_once "./template/footer.php";
?>