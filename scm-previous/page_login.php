<?php

session_start();

// if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
//     header("location: ../index.php");
//     exit;
// }

require_once "config/database.php";

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if email is empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    $sql = "SELECT email, password FROM user WHERE email = ?";

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT email, password FROM user WHERE email = ?";

        if ($stmt = mysqli_prepare($connection, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = $email;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if email exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {

                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email);
                    if (mysqli_stmt_fetch($stmt)) {
                        if ($password == $password) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["user"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;

                            // Redirect user to welcome page
                            header("location: index.php");
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    // Display an error message if email doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($connection);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>

    <div>
        <a href="index.php">Home</a>
        <a href="page_category_list.php">Category</a>
        <a href="page_publisher_list.php">Publisher</a>
        <a href="page_login.php">Login</a>
    </div>

    <div class="container-fluid h-100 mycolour">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-sm-1"></div>

            <div class="col-sm-1"></div>
            <div class="col-sm-4 align-self-center">
                <h1 class="text-light">Hello Admin!</h1>
                <h5 class="text-light">Sign-in to access your Vestapay Admin Dashboard</h5>
                <br />
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                        <label class="text-light">Email Address</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                        <span class="help-block text-danger"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label class="text-light">Password</label>
                        <input type="password" name="password" class="form-control">
                        <span class="help-block text-danger"><?php echo $password_err; ?></span>
                    </div>
                    <br />
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary w-50" value="SIGN IN">
                    </div>
                    <!-- <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p> -->
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</body>

</html>