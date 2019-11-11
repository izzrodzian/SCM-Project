<?php

$title = "Contact";

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//     header("location: auth/signin.php");
//     exit;
// }

require_once "config/database.php";

$name = $email = $summary = "";
$name_err = $email_err = $summary_err = "";

// Processing submitted form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter name.";
    } else {
        $name = $input_name;
    }

    // Validate email
    $input_email = trim($_POST["email"]);
    if (empty($input_email)) {
        $email_err = "Please enter a email.";
    } elseif (!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email.";
    } else {
        $email = $input_email;
    }

    // Validate summary
    $input_summary = trim($_POST["summary"]);
    if (empty($input_summary)) {
        $summary_err = "Please enter a email.";
    } else {
        $summary = $input_summary;
    }

    // Check input errors before inserting in database
    if (empty($name_err) && empty($email_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO feedback (name, email, summary) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($connection, $sql)) {

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_email, $param_summary);

            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_summary = $summary;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }

    }

    // Close connection
    mysqli_close($connection);
}
?>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 text-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <fieldset>
                <legend>Contact</legend>
                <p class="lead">I’d love to hear from you! Any suggestions of complaints can be made by completing the
                    form below.</p>
                <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                    <span class="help-block"><?php echo $name_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                    <span class="help-block"><?php echo $email_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($summary_err)) ? 'has-error' : ''; ?>">
                    <label>Summary</label>
                    <textarea type="text" name="summary" class="form-control"
                        value="<?php echo $summary; ?>"></textarea>
                    <span class="help-block"><?php echo $summary_err; ?></span>
                </div>


                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>

<?php
require_once "./template/footer.php";
?>