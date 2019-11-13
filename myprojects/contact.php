<?php
$title = "User | Contact Us";
require_once "./template/header.php";
require_once "./functions/database_functions.php";
$conn = db_connect();

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

    // Check input errors before inserting in database.
    if (empty($name_err) && empty($email_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO feedback (name, email, summary) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_email, $param_summary);

            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_summary = $summary;

            // Attempt to execute the prepared statements
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
    mysqli_close($conn);
}
?>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 text-center">
        <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <fieldset>
                <legend>Contact</legend>
                <p class="lead">I’d love to hear from you! Complete the form to send me an email.</p>
                <div class="form-group  <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Summary</label>
                    <div class="col-lg-10">
                        <textarea name="summary" class="form-control" rows="3" id="textArea"></textarea>
                        <span class="help-block">A longer block of help text that breaks onto a new line and may extend
                            beyond one line.</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
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