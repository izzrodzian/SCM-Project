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
                </button>
                <a class="navbar-brand" href="index.php">IMAN PUBLICATION</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
                    <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp;
                            Publisher</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li>
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a>
                    </li>
                    <li><a href="user_login.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Login</a></li>
                    <li><a href="user_register.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Register</a>
                    </li>
                    <li>
                        <form class="form-inline" action="search.php" method="GET">
                            <input class="form-control" type="text" name="search_query" placeholder="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
if (isset($title) && $title == "Index") {
    ?>
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to online IT bookstore</h1>
            <p class="lead">This site has been made using PHP with MYSQL (procedure functions)!</p>
            <p>The layout use Bootstrap to make it more responsive. It's just a simple web!</p>
        </div>
    </div>
    <?php }?>

    <div class="container" id="main">