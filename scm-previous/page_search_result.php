<?php

session_start();

// if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
//     header("location: ../index.php");
//     exit;
// }

require_once "config/database.php";

if (isset($_GET['search'])) {

    $search_query = $_GET['search'];

    $statement = "SELECT * FROM book WHERE title LIKE '%$search_query%'";

    $query = mysqli_query($connection, $statement);

    while ($row = mysqli_fetch_array($query)) {

        echo "<div class='col-lg-4 col-md-6'>
                            <div class='card'>
                                <img class='card-img' height='200px' width='100px' src='assets/images/" . $row['cover'] . "'>
                                <span class='content-card'>
                                    <h6>" . $row['title'] . "</h6>
                                    <h7>" . $row['author'] . "</h7>
                                </span>
                                <a href='index.php?add_cart=" . $row['id'] . "'><button class='buybtn btn btn-warning btn-round btn-sm'>
	 								Add <i class='material-icons'>add_shopping_cart</i>
								</button></a>
                                <button class='knowbtn btn btn-warning btn-round btn-sm' data-toggle='modal' data-target='#" . $row['id'] . "'>
	 								Know More
								</button>";

        //code for modal
        echo "<div class='modal fade' id='" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                  <div class='modal-dialog'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                        <h4 class='modal-title' id='myModalLabel'>" . $row['title'] . "</h4>
                      </div>
                      <div class='modal-body'>
                      <h4><p align='right'>&#8377;" . $row['price'] . "</p></h4>" .
            $row['description']
            . "</div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-default btn-simple' data-dismiss='modal'>Close</button>

                      </div>
                    </div>
                  </div>
                </div>

							</div>
                        </div>"; //the last two </div> are from previous echo.
    }
}