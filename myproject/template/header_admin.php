<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin_book.php">IMAN PUBLICATION</a>
            </div>

            <!--/.navbar-collapse -->
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- link to books.php -->
                    <li><a href="admin_book.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Book</a></li>
                    <!-- link to contacts.php -->
                    <li><a href="admin_user.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; User</a></li>

                    <li><?php
if ($_SESSION['admin'] == true) {?>
                        <a href="admin_signout.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Logout</a>
                        <?php } else {?>
                        <a href="admin.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Login</a>
                        <?php }?>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
    <?php
if (isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to online IT bookstore</h1>
            <p class="lead">This site has been made using PHP with MYSQL (procedure functions)!</p>
            <p>The layout use Bootstrap to make it more responsive. It's just a simple web!</p>
        </div>
    </div>
    <?php }?>

    <div class="container" id="main">